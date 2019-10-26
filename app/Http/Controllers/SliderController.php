<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Repositories\Slider\SliderContract;

class SliderController extends Controller
{
    protected $repo;
    public function __construct(SliderContract $sliderContract) {
        $this->repo = $sliderContract;
        $this->middleware('auth');
    }

    public function index() {

            $sliders = $this->repo->findAll();
            return view('admin.sliders.index')->with('sliders', $sliders);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'slider_image' => 'image|required|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
  
        $slider = $this->repo->create($request);		
    
        if($slider->id) {
            return redirect()->back()->with('success',
            'Slider successfully Created.');
        } else {
            return back()->withInput()->with('error', 'Could not create news. Try again!');
        }
    }

    public function update(Request $request, $slug) {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            // 'slider_image' => 'image|required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
       
        $slider = $this->repo->update($request, $slug);
    
        if($slider->id) {
        return redirect()->route('slider.index')->with('success',
        'Slider successfully updated.');
        }
        
    }

    public function delete($slug) {
          
        if ($this->repo->remove($slug)) {
         
          return redirect()->back()->with('success',
          'Slider successfully deleted.');
        }   
    }
}
