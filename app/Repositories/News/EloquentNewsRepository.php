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
    $news->title = $request->title;  
    $news->body =  $detail;  
    // $news->body = $request->body; 
 
    //if ($request->file('news_image')) {
    //  $imageName = time().'.'.$request->news_image->getClientOriginalExtension();
    //  $image = $request->file('news_image');
    //  $t = Storage::disk('s3')->put($imageName, file_get_contents($image), //'public');
   //   $news->news_image = Storage::disk('s3')->url($imageName); 
   // }
    
    if($request->file('news_image')){  
      $file = $request->file('news_image');
      $filename = $file->getClientOriginalName();    

      $name = $request->file('news_image')->getClientOriginalName();

      $doc_to_upload = $request->file('news_image')->getRealPath();

      \Cloudder::upload($doc_to_upload, null);
      // \Cloudder::upload_large($doc_to_upload, null);

      $uploaded = \Cloudder::getResult();  
      $news->news_image = $uploaded['secure_url'];
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
    return News::with('user')->latest()->get();
  }

  public function getAll() {
    return News::latest()->paginate(3);
  }
  
   public function getAllFour() {
    return News::orderBy('created_at','DESC')->take(4)->get();
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
    $news = $this->findBySlug($slug);
    
    $detail=$request->body;
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
    // $str = strtolower($request->title);
    // $news->slug = preg_replace('/\s+/', '-', $str);
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
