<?php
namespace App\Repositories\NewsCategory;
use App\Repositories\NewsCategory\NewsCategoryContract;
use App\NewsCategory;

class EloquentNewsCategoryRepository implements NewsCategoryContract {
  //create a news category.
  
  public function create($request) {
    $newsCategory = new NewsCategory;
    $newsCategory->name = $request->name;  
    $newsCategory->description = $request->description;   
    $str = strtolower($request->name);
    $newsCategory->slug = preg_replace('/\s+/', '-', $str);
    $newsCategory->save()      ;
    return $newsCategory;
  }

  // return all news category
  public function findAll() {
    return NewsCategory::latest()->paginate(10);
  }

  // return a news category by ID
  public function findById($id) {
    return NewsCategory::where('id', $id)->first();
  }

  // return a news category by slug
  public function findBySlug($slug){
    return NewsCategory::where('slug', $slug)->first();
  }

  // Update a news category
  public function update($request, $slug) {
    $newsCategory = $this->findBySlug($slug);
    $newsCategory->name = $request->name;  
    $newsCategory->description = $request->description;    
    $str = strtolower($request->name);

    $newsCategory->slug = preg_replace('/\s+/', '-', $str);
    $newsCategory->save();
    return $newsCategory;
  }

  // Remove a Menu Item
  public function remove($slug) {
    $newsCategory = $this->findBySlug($slug);
    return $newsCategory->delete();
  }

//   public function trash() {
//     return Menu::onlyTrashed()->get();
//   }

//   public function findInTrash($slug) {
//     return Menu::onlyTrashed()->find($slug);
//   }

//   public function parmanentDelete($slug) {
//     $menu = $this->findInTrash($slug);
//     return $menu->forceDelete();
//   }
}
