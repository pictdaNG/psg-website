<?php
namespace App\Repositories\Blog;
use App\Repositories\Blog\BlogContract;
use App\Blog;

class EloquentBlogRepository implements BlogContract {
  //create a Blog Post.
  public function create($request) {
    $post = new Blog;
    $post->title = $request->title;
    $post->body = $request->body;
    $str = strtolower($request->title);
    $post->slug = preg_replace('/\s+/', '-', $str);
    if($request->file('feature_image')){  
      $file = $request->file('feature_image');
      $filename = $file->getClientOriginalName();
      $name = $request->file('feature_image')->getClientOriginalName();
      $image_name = $request->file('feature_image')->getRealPath();
      \Cloudder::upload($image_name, null);
      $profile_image = \Cloudder::getResult();  
      $post->feature_image = $profile_image['secure_url'];
    }
    // $post->user_id = Sentinel::getUser()->id;
    $post->save();    
    return $post;
  }

  // return all Blog Posts
  public function findAll() {
    $posts = Blog::all();
    return $posts;
  }

  // return a Blog Post by ID
  public function findById($id) {
    return Blog::where('id', $id)->first();
  }

  public function findBySlug($slug){
    return Blog::where('slug', $slug)->first();
  }

  // Update a Blog
  public function update($request, $id) {
    $post = $this->findById($id);
    $post->title = $request->title;
    $post->body = $request->body;
    $post->save();
    return $post;
  }

  // Remove a Blog
  public function remove($id) {
    $post= $this->findById($id);
    return $post->delete();
  }
}
