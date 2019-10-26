<?php
namespace App\Repositories\Slider;
use App\Repositories\Slider\SliderContract;
use App\Slider;
use Image;
class EloquentSliderRepository implements SliderContract {
    //
  public function create($request){
    $slider = new Slider;
    $slider->title= $request->title;  
    $slider->description = $request->description;  
    if ($request->has('slider_image')) {
      $originalImage = $request->file('slider_image');
      $thumbnailImage = Image::make($originalImage);
      $thumbnailPath = public_path('uploads/thumbnail/');
      $originalPath = public_path('uploads/images/');
      $watermark = public_path('uploads/watermark/logo.png');

      $filename = time().$originalImage->getClientOriginalName();
      $thumbnailImage->insert($watermark, 'bottom-right', 1, 1);
      $thumbnailImage->save($originalPath.$filename);
      $thumbnailImage->resize(150,150);

      $thumbnailImage->save($thumbnailPath.$filename); 

      $slider->slider_image = $filename;
    } 
    $str = strtolower($request->title);
    $slider->slug = preg_replace('/\s+/', '-', $str);
    $slider->save();
    return $slider;
  }

  public function findAll() {
    $sliders = Slider::latest()->paginate(10);
    return $sliders;
  }

  public function getAll() {
    $sliders = Slider::latest()->paginate(2);
    return $sliders;
  }

  public function findById($id) {
    $slider = Slider::whereId($id)->first();
    return $slider;
  }

 
  public function findBySlug($slug){
    $slider = Slider::where('slug', $slug)->first();
    return $slider;
  }

  
  public function update($request, $slug) {
    $slider = $this->findBySlug($slug);
    // dd($slider);
    $slider->title = $request->title;  
    $slider->description = $request->description;  
    if ($request->has('slider_image')) {
      $originalImage = $request->file('slider_image');
      $thumbnailImage = Image::make($originalImage);
      $thumbnailPath = public_path('uploads/thumbnail/');
      $originalPath = public_path('uploads/images/');
      $watermark = public_path('uploads/watermark/logo.png');

      $filename = time().$originalImage->getClientOriginalName();
      $thumbnailImage->insert($watermark, 'bottom-right', 1, 1);
      $thumbnailImage->save($originalPath.$filename);
      $thumbnailImage->resize(150,150);

      $thumbnailImage->save($thumbnailPath.$filename); 

      $slider->slider_image = $filename;
    }   
    $str = strtolower($request->title);

    $slider->slug = preg_replace('/\s+/', '-', $str);
    $slider->save();
    return $slider;
  }

  public function remove($slug) {
    $slider = $this->findBySlug($slug);
    return $slider->delete();
  }

}
