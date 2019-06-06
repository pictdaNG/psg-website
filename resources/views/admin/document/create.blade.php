@extends('layouts.admin')

@section('scripts')
  <script src="https://widget.cloudinary.com/v2.0/global/all.js" type="text/javascript"></script>
  <script type="text/javascript"></script>
@endsection

@section('content')
  <div class="element-wrapper">
    <h6 class="element-header">
      Upload Documents
    </h6>

    <div class="element-content">
      <div class="element-box">
        <h5 class="form-header">
          Budget File Upload
        </h5>
        <form action="{{ route('document.budget.store') }}" method="post" enctype="multipart/form-data">
          
          {{ method_field('POST') }}
          {{ csrf_field() }}
          
          <div class="form-desc">
            DropzoneJS is an open source library
          </div> 

          <div class="form-group">
            <label>Document Title</label>
            <input class="form-control" placeholder="Enter Document Title" type="text" name="title" >
          </div>
          
          <input type="hidden" name="type" value="budget">

          <div class="form-group">
            <label>Select File</label>
            <input class="form-control" type="file" name="name">
          </div>

          <div class="form-buttons-w">
            <button class="mr-2 mb-2 btn btn-primary btn-lg" type="submit"> Submit</button>
          </div>
          
        </form>
        
      </div>
    </div>
  </div>
@endsection