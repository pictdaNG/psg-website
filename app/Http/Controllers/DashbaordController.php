<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Repositories\News\NewsContract;
use App\Repositories\Posts\PostContract;
use App\Repositories\Slider\SliderContract;
use App\User;

class DashbaordController extends Controller
{
    protected $repo;
        public function __construct(NewsContract $NewsContract, PostContract $postContract, SliderContract $sliderContract) {
        $this->repo = $NewsContract;
        $this->repos = $postContract;
        $this->reposi = $sliderContract;
        $this->middleware('auth');
    }
    public function index(){
        $news = $this->repo->findAll();
        $posts = $this->repos->findAll();
        $sliders = $this->reposi->getAll();
        $users = User::all();
        return view('admin.dashboard')->with('news', $news)->with(compact('posts'))
        ->with(compact('sliders'))->with(compact('users'));
    }
}
