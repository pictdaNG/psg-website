<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Document\DocumentContract;
use App\Document;
use Sentinel;
class DocumentController extends Controller
{
    protected $repo;
    public function __construct(DocumentContract $documentContract) {
        $this->repo = $documentContract;
    }
    
    public function index()
    {
        if(!Sentinel::check()) {
          return redirect()->route('get_login');
        }
        else {
            $documents = Document::all();
            // dd($documents);
            return view('admin.document.index')->with('documents', $documents);
        }
    }
    
    public function create() {
        if(!Sentinel::check()) {
          return redirect()->route('get_login');
        }
        else {
            return view('admin.document.create');
        }
    }
    
    public function store(Request $request) {
        // dd($request->all());
        if(!Sentinel::check()) {
          return redirect()->route('get_login');
        }
        else {
            $doc = $this->repo->create($request);
            if ($doc->id) {
                return redirect()->back()->with('success', 'Created Successfully');
            } else {
                return redirect()->back()->with('error', 'Error Creating Record');
            }        
        }        
    }


    public function storeQuarterlyReport(Request $request) {
        // dd($request->all());
        if(!Sentinel::check()) {
          return redirect()->route('get_login');
        }
        else {

            $doc = $this->repo->create($request);
            if ($doc->id) {
                return redirect()->back()->with('success', 'Created Successfully');
            } else {
                return redirect()->back()->with('error', 'Error Creating Record');
            }        
        }
    }

    public function quarterlyReport()
    {
        if(!Sentinel::check()) {
          return redirect()->route('get_login');
        }
        else {
            return view('admin.document.quarterly');
        }
    }
    
    public function show($id)
    {
        //
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
