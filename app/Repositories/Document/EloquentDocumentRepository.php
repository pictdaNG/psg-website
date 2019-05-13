<?php
namespace App\Repositories\Document;
use App\Repositories\Document\DocumentContract;
use App\Document;
use Cloudder;

class EloquentDocumentRepository implements DocumentContract {
  
  public function create($request) {

    $document = new Document;
    $document->title = $request->title;

    $str = strtolower($request->title);
    
    if($request->file('name')){  
      $file = $request->file('name');
      $filename = $file->getClientOriginalName();    

      $name = $request->file('name')->getClientOriginalName();

      $doc_to_upload = $request->file('name')->getRealPath();

      \Cloudder::upload($doc_to_upload, null);

      $uploaded = \Cloudder::getResult();  
      $document->name = $uploaded['secure_url'];
    }

    $document->slug = preg_replace('/\s+/', '-', $str);
    $document->save();
    return $document;
  }


  // return all Users
  public function findAll() {
    $documents = Document::all();
    return $documents;
  }

  // return a Document by ID
  public function findById($id) {
    return Document::where('id', $id)->first();
  }

  public function findBySlug($slug){
    return Document::where('slug', $slug)->first();
  }

  // Remove a Document
  public function remove($id) {
    $document= $this->findById($id);
    return $document->delete();
  }
}
