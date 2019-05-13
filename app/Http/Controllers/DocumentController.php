<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Document\DocumentContract;
use App\Document;
class DocumentController extends Controller
{
    protected $repo;
    public function __construct(DocumentContract $documentContract) {
        $this->repo = $documentContract;
    }
    
    public function index()
    {
        $documents = Document::all();
        // dd($documents);
        return view('admin.document.index')->with('documents', $documents);
    }
    
    public function create()
    {
        return view('admin.document.create');
    }
    
    public function store(Request $request) {
        // dd($request->all());
        $doc = $this->repo->create($request);
        if ($doc->id) {
            return redirect()->back()->with('success', 'Created Successfully');
        } else {
            return redirect()->back()->with('error', 'Error Creating Record');
        }        
        
    }


    public function storeQuarterlyReport(Request $request) {
        // dd($request->all());
        $doc = $this->repo->create($request);
        if ($doc->id) {
            return redirect()->back()->with('success', 'Created Successfully');
        } else {
            return redirect()->back()->with('error', 'Error Creating Record');
        }        
    }

    public function quarterlyReport()
    {
        return view('admin.document.quarterly');
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
