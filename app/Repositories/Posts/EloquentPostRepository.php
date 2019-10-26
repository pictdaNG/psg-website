<?php
namespace App\Repositories\Posts;
use App\Repositories\Posts\PostContract;
use App\Post;
use Image;

class EloquentPostRepository implements PostContract {
  //create a news category.
  
  public function create($request) {
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

    $posts = new Post;
    $posts->title = $request->title;  
    $posts->body = $detail;   
 
    if ($request->has('feature_image')) {
      $originalImage = $request->file('feature_image');
      $thumbnailImage = Image::make($originalImage);
      $thumbnailPath = public_path('uploads/thumbnail/');
      $originalPath = public_path('uploads/images/');
      $watermark = public_path('uploads/watermark/logo.png');

      $filename = time().$originalImage->getClientOriginalName();
      $thumbnailImage->insert($watermark, 'bottom-right', 1, 1);
      $thumbnailImage->save($originalPath.$filename);
      $thumbnailImage->resize(150,150);

      $thumbnailImage->save($thumbnailPath.$filename); 

      $posts->feature_image = $filename;
    }
    $posts->category = $request->category;
    $str = strtolower($request->title);
    $posts->slug = preg_replace('/\s+/', '-', $str);
    $posts->tags = $request->tags;
    $posts->save();
    return $posts;
  }

  // return all news category
  public function findAll() {
    return Post::latest()->get();
  }

  public function getAll() {
    return Post::latest()->paginate(3);
  }

  // return a news category by ID
  public function findById($id) {
    return Post::where('id', $id)->first();
  }

  // return a news category by slug
  public function findBySlug($slug){
    return Post::where('slug', $slug)->first();
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

    $posts = $this->findBySlug($slug);
    $posts->title = $request->title;  
    $posts->body = $detail;   
 
    if ($request->has('feature_image')) {
      $originalImage = $request->file('feature_image');
      $thumbnailImage = Image::make($originalImage);
      $thumbnailPath = public_path('uploads/thumbnail/');
      $originalPath = public_path('uploads/images/');
      $watermark = public_path('uploads/watermark/logo.png');

      $filename = time().$originalImage->getClientOriginalName();
      $thumbnailImage->insert($watermark, 'bottom-right', 1, 1);
      $thumbnailImage->save($originalPath.$filename);
      $thumbnailImage->resize(150,150);

      $thumbnailImage->save($thumbnailPath.$filename); 

      $posts->feature_image = $filename;
    }
    $posts->category = $request->category;
    $str = strtolower($request->title);
    $posts->slug = preg_replace('/\s+/', '-', $str);
    $posts->tags = $request->tags;
    $posts->save();
    return $posts;
  }

  // Remove news
  public function remove($slug) {
    $posts = $this->findBySlug($slug);
    return $posts->delete();
  }

}
