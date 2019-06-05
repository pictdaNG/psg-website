<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Blog\BlogContract;
use App\Blog;
use Sentinel;

class BlogController extends Controller
{
    protected $repo;
    public function __construct(BlogContract $blogContract) {
        $this->repo = $blogContract;
    }
    
    public function index() {
        $posts = Blog::all();
        return view('admin.blog.index')->with('posts', $posts);
    }
    
    public function create() {
        if(!Sentinel::check()) {
            return redirect()->route('get_login');
        } else {
            return view('admin.blog.create');
        }
    }
    
    public function store(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);

        // dd($request->all());
        if (!Sentinel::check()) {
            return redirect()->route('get_login');
        } else {
            $post = $this->repo->create($request);

            //set notification
            $notification = array(
                'message' => 'Blog posted successfully',
                'alert-type' => 'success'
            );

            $errNotification = array(
                'message' => 'Error making Blog Post',
                'alert-type' => 'error'
            );

            if($post->id) {
                return redirect()->back()->with($notification)->with('success', 'Blog posted successfully');
            }else{
                return redirect()->back()->withInput()->with('error', 'Could not create your blog posted. Try again!')->with($errNotification);
            }
        }
    }
    
    public function show($slug) {
        $post = $this->repo->findBySlug($slug);
        return view('admin.blog.show')->with('post', $post);
    }
    
    public function edit($id)
    {
        //
    }
    
    public function update(Request $request, $id)
    {
        //
    }
    
    public function delete($id)
    {
        //
    }
}
