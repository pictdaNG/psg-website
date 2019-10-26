@extends('admin.layouts.main')

@section('style')
<!-- include libraries(jQuery, bootstrap) -->
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
 
<!-- include summernote css/js-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>    
@endsection
@section('content')

  @include('admin.partials.loader')

  <div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

      @include('admin.partials.navbar')
     
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">

            @include('admin.partials.sidebar')

            <div class="pcoded-content">

                <div class="page-header card">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <i class="feather icon-watch bg-c-blue"></i>
                                <div class="d-inline">
                                    <h5>News page</h5>
                                    <span>Creating News</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class=" breadcrumb breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="/dashboard"><i class="feather icon-home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#!">News</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <div class="page-body">
                            @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                <p>{{ $error }}</p>
                                @endforeach
                            </div>
                            @endif 
                            @if(session()->get('success'))
                            <div class="alert alert-success text-center">
                                {{ session()->get('success') }}  
                            </div>
                            @endif
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>News Form</h5>
                                                <!-- <div class="card-header-right">
                                                   <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">Add Posts</button>
                                                </div> -->
                                            </div>
                                            <div class="card-block">
                                            <form method="post" action="{{ route('news.store')}}" enctype="multipart/form-data">

                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Title</label>
                                                    <input type="text" name="title" class="form-control" placeholder="News Title">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Body</label>
                                                    <textarea class="form-control" id="summernote" name="body" rows="8"></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">News Category</label>
                                                    <select class="custom-select" id="inputGroupSelect01" name="news_category">
                                                            <option value="">Select News Category</option>
                                                            @foreach($news_categories as $new)
                                                            <option value="{{ $new->name }}">{{ $new->name }}</option>
                                                            @endforeach
                                                        </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Feature Image</label>
                                                    <input type="file" class="form-control" name="news_image">
                                                </div>

                                                <div class="form-group">
                                                    <label>Tags</label>
                                                    <input type="text" name="tags" class="form-control" placeholder="News Tags">
                                                </div>

                                                <div class="modal-footer">
                                                <a href="{{ route('news.index')}}">
                                                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                                </a>
                                                <button type="submit" class="btn btn-success btn-sm">Create</button>
                                                </div>
                                                <div class="clearfix"></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="styleSelector">
            </div>

        </div>
    </div>

@endsection
@section('script')

<script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
</script>
@endsection