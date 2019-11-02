<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Repositories\NewsCategory\NewsCategoryContract;
use App\Repositories\News\NewsContract;

class NewsController extends Controller
{
    protected $repo;
      public function __construct(NewsContract $NewsContract, NewsCategoryContract $NewsCategoryContract) {
      $this->repo = $NewsCategoryContract;
      $this->repos = $NewsContract;
      $this->middleware('auth');
    }

    

    public function index() {
      $news_categories = $this->repo->findAll();
      return view('admin.news_category.index')->with('news_categories', $news_categories);
    }

    public function store(Request $request) {
      $this->validate($request, [
        'name' => 'required',
        'description' => 'required',
      ]);

      $news_category = $this->repo->create($request);

      if($news_category->id) {
        return redirect()->back()->with('success', 'News Category successfully Created.');
      } else {
        return back()->withInput()->with('error', 'Could not create news category. Try again!');
      }
    }

    public function update(Request $request, $slug) {       
      $news_category = $this->repo->update($request, $slug);    
      if($news_category->id) {
        return redirect()->route('newsCategory.index')->with('success', 'News Category successfully updated.');
      }        
    }

    public function delete($slug) {       
      if ($this->repo->remove($slug)) {     
        return redirect()->back()->with('success','News Category successfully deleted.');
      }        
    }

    // news
    public function newsIndex() {        
        $news = $this->repos->findAll();
        $news_categories = $this->repo->findAll();
        return view('admin.news.index')->with('news', $news)->with('news_categories', $news_categories);
    }

    public function create() {
        $news_categories = $this->repo->findAll();
        return view('admin.news.create')->with('news_categories', $news_categories);
    }

    public function newsStore(Request $request) {
        $this->validate($request, [
          'title' => 'required',
          'body' => 'required',
          'news_image' => 'image|required|mimes:jpeg,png,jpg,gif,svg|max:2048',
          'tags' => 'required',
        ]);
          $news = $this->repos->create($request);		
    
          if($news->id) {
            return redirect()->route('news.index')->with('success',
            'News successfully Created.');
          } else {
            return back()->withInput()->with('error', 'Could not create news. Try again!');
          }
    }

    public function newsUpdate(Request $request, $slug) {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            // 'news_image' => 'image|required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tags' => 'required',
          ]);

        $news = $this->repos->update($request, $slug);
        $notification = array(
          'message' => "News $news->name updated successfully",
          'alert-type' => 'success'
        );
    
        if($news->id) {
          return redirect()->route('news.index')->with('success',
          'News successfully Updated.');
        }
    }

    public function newsDelete($slug) {
          
        if ($this->repos->remove($slug)) {
         
          return redirect()->back()->with('success',
          'News successfully deleted.');
        }   
    }
}
