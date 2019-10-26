<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Repositories\Posts\PostContract;
use App\Repositories\NewsCategory\NewsCategoryContract;

class PostsController extends Controller
{
    protected $repo;
    public function __construct(PostContract $postContract, NewsCategoryContract $NewsCategoryContract) {
        $this->repo = $postContract;
        $this->repos = $NewsCategoryContract;
        $this->middleware('auth');
    }

    public function index() {

        $posts = $this->repo->findAll();
        $news_categories = $this->repos->findAll();
        return view('admin.posts.index')->with('posts', $posts)->with('news_categories', $news_categories);
    }

    public function create() {
        $news_categories = $this->repos->findAll();
        return view('admin.posts.create')->with('news_categories', $news_categories);
    }

    public function store(Request $request) {
        // dd($request->feature_image);
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'feature_image' => 'image|required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tags' => 'required',
          ]);
  
        $posts = $this->repo->create($request);		
    
        if($posts->id) {
            return redirect()->route('posts.index')->with('success',
            'New Post successfully Created.');
        } else {
            return back()->withInput()->with('error', 'Could not create news. Try again!');
        }
    }

    public function update(Request $request, $slug) {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            // 'news_image' => 'image|required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tags' => 'required',
          ]);

        $post = $this->repo->update($request, $slug);
        $notification = array(
          'message' => "News $post->name updated successfully",
          'alert-type' => 'success'
        );
    
        if($post->id) {
          return redirect()->route('posts.index')->with('success',
          "Post $post->name updated successfully");
        }
    }

    public function delete($slug) {
          
        if ($this->repo->remove($slug)) {
         
          return redirect()->back()->with('success',
          'Post successfully deleted.');
        }   
    }
}
