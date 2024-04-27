<?php

namespace App\Http\Controllers;
use App\Repositories\News\NewsContract;
use App\Repositories\Posts\PostContract;
use App\Repositories\Slider\SliderContract;
use App\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $repo;
    public function __construct(NewsContract $NewsContract, PostContract $postContract, SliderContract $sliderContract) {
        $this->repo = $NewsContract;
        $this->repos = $postContract;
        $this->reposi = $sliderContract;
        // $this->middleware('auth');
    }
    public function index(){
        //dd("We are fixing some technical challenges. We would be back shortly");
        $news = $this->repo->getAllFour();

        $posts = $this->repos->getAll();
        $sliders = $this->reposi->getAll();
        $users = User::all();
        return view('welcome')->with('news', $news)->with(compact('posts'))
        ->with(compact('sliders'))->with(compact('users'));
    }
}
