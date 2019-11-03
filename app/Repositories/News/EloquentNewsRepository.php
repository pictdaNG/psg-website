<?php
namespace App\Repositories\News;
use App\Repositories\News\NewsContract;
use Illuminate\Support\Facades\Storage;

use App\News;
use Image;

class EloquentNewsRepository implements NewsContract {
  //create a news category.
  
  public function create($request) {
    $news = new News;
    $detail=$request->body;
    
    $dom = new \domdocument();
    $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    $images = $dom->getelementsbytagname('img');

    foreach($images as $k => $img){
      $data = $img->getattribute('src');

      list($type, $data) = explode(';', $data);
      list(, $data)      = explode(',', $data);

      $data = base64_decode($data);
      $image_name= time().$k.'.png';
      $path = public_path() .'/'. $image_name;

      file_put_contents($path, $data);

      $img->removeattribute('src');
      $img->setattribute('src', $image_name);
    }

    $detail = $dom->savehtml();

    $news->title = $request->title;  
    $news->body =  $detail;  
    // $news->body = $request->body; 
 
    if ($request->has('news_image')) {
      $imageName = time().'.'.$request->news_image->getClientOriginalExtension();
      $image = $request->file('news_image');
      $t = Storage::disk('s3')->put($imageName, file_get_contents($image), 'public');
      $news->news_image = Storage::disk('s3')->url($imageName); 
    }

    $news->news_category = $request->news_category;
    $str = strtolower($request->title);
    $news->slug = preg_replace('/\s+/', '-', $str);
    $news->tags = $request->tags;
    $news->save();
    return $news;
  }

  // return all news category
  public function findAll() {
    return News::latest()->get();
  }

  public function getAll() {
    return News::latest()->paginate(3);
  }

  // return a news category by ID
  public function findById($id) {
    return News::where('id', $id)->first();
  }

  // return a news category by slug
  public function findBySlug($slug){
    return News::where('slug', $slug)->first();
  }

  // Update a news
  public function update($request, $slug) {
    $detail=$request->body;
    
    $dom = new \domdocument();
    $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    $images = $dom->getelementsbytagname('img');

    foreach($images as $k => $img){
        $data = $img->getattribute('src');

        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);

        $data = base64_decode($data);
        $image_name= time().$k.'.png';
        $path = public_path() .'/'. $image_name;

        file_put_contents($path, $data);

        $img->removeattribute('src');
        $img->setattribute('src', $image_name);
    }

    $detail = $dom->savehtml();

    $news = $this->findBySlug($slug);
    $news->title = $request->title;  
    $news->body = $detail;   

    if ($request->has('news_image')) {
      $originalImage = $request->file('news_image');
      $thumbnailImage = Image::make($originalImage);
      $thumbnailPath = public_path('uploads/thumbnail/');
      $originalPath = public_path('uploads/images/');
      $watermark = public_path('uploads/watermark/logo.png');
      // dd($originalPath);

      $filename = time().$originalImage->getClientOriginalName();
      $thumbnailImage->insert($watermark, 'bottom-right', 1, 1);
      $thumbnailImage->save($originalPath.$filename);
      $thumbnailImage->resize(100,100);

      // $thumbnail = time().$originalImage->getClientOriginalName();
      $thumbnailImage->save($thumbnailPath.$filename); 

      $news->news_image = $filename;
    }
    $news->news_category = $request->news_category;
    $news->tags = $request->tags;
    $news->save();
    return $news;
  }

  // Remove news
  public function remove($slug) {
    $news = $this->findBySlug($slug);
    return $news->delete();
  }

}
