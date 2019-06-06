@extends('layouts.admin')

@section('scripts')
  <script type="text/javascript">
    Dropzone.options.dropzone =
     {
        maxFilesize: 1024,
        renameFile: function(file) {
          var dt = new Date();
          var time = dt.getTime();
          return time+file.name;
        },
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        addRemoveLinks: true,
        timeout: 5000,
        success: function(file, response) {
          console.log(response);
        },
        error: function(file, response) {
          return false;
        }
    };
  </script>
@endsection

@section('content')
  <div class="element-wrapper">
    <h6 class="element-header">
      Upload Documents
    </h6>

    <div class="element-content">
      <div class="element-box">
        <h5 class="form-header">
          Quarterly Report File Upload
        </h5>
        <form action="{{ route('document.quarterly.store') }}" method="post" enctype="multipart/form-data">
          
          {{ method_field('POST') }}
          {{ csrf_field() }}
          
          <div class="form-desc">
            DropzoneJS is an open source library
          </div> 

          <div class="form-group">
            <label>Document Title</label>
            <input class="form-control" placeholder="Enter Document Title" type="text" name="title" >
          </div>
          <input type="hidden" name="type" value="quarterly">

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