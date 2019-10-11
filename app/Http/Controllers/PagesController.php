<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Repositories\News\NewsContract;
use App\Repositories\Posts\PostContract;
use App\Repositories\Slider\SliderContract;

class PagesController extends Controller
{
    protected $repo;
        public function __construct(NewsContract $NewsContract, PostContract $postContract, SliderContract $sliderContract) {
        $this->repo = $NewsContract;
        $this->repos = $postContract;
        $this->reposi = $sliderContract;
    }

    public function index() {
        $news = $this->repo->getAll();
        $posts = $this->repos->getAll();
        $sliders = $this->reposi->getAll();
        return view('welcome')->with('news', $news)->with(compact('posts'))->with(compact('sliders'));
    }

    public function show($slug) {
        $new = $this->repo->findBySlug($slug);
        return view('news.news1')->with('new', $new);
    }

    public function showPosts($slug) {
        $post = $this->repos->findBySlug($slug);
        return view('fivepoints.humancapital')->with('post', $post);
    }
}
