<?php

namespace App\Http\Controllers;
use App\Blog;
use DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index() {
    // $posts = DB::
    return view('welcome');
  }
}
