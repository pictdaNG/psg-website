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
                                    <h5>Posts page</h5>
                                    <span>Creating Post</span>
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
                                        <a href="#!">Post</a>
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
                                                <h5>Posts card</h5>
                                                <div class="card-header-right">
                                                    <a href="{{ route('posts.add')}}">
                                                    <button class="btn btn-primary btn-sm">Add Posts</button>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-block">
                                                <div class="dt-responsive table-responsive">
                                                <table id="order-table" class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                    <tr>
                                                    <th>Posts Title</th>
                                                    <!-- <th>News Body</th> -->
                                                    <th>Image</th>
                                                    <th>tags</th>
                                                    <!-- <th>News Slug</th> -->
                                                    <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    @if(count($posts) > 0)
                                                        @foreach($posts as $new)
                                                        <td>{{implode(' ', array_slice(explode(' ', $new->title), 0, 7))}}</td>  
                                                        <!-- <td>{{implode(' ', array_slice(explode(' ', $new->body), 0, 10))}}</td>   -->
                                                        <td><img src="../uploads/thumbnail/{{$new->feature_image}}" width="50px" heigth="50x" alt="heloo"></td>              
                                                        <td>{{ $new->tags }}</td>             
                                                        <!-- <td>{{ $new->slug }}</td>   -->
                                                        <td className="text-right">
                                                            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#editModal{{ $new->slug }}">
                                                                <span class="glyphicon glyphicon-edit"></span> Edit
                                                            </button>
                                                            <a href="{{ route('posts.delete', $new->slug)}}">
                                                            <button class="btn btn-danger btn-sm">
                                                                    <span class="glyphicon glyphicon-trash"></span> Delete
                                                            </button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    @else
                                                    <tr>
                                                    <td colspan="8" class="text-center">
                                                        <h4 class="card-title">No Posts Created yet.</h4>
                                                    </td>
                                                    </tr>
                                                @endif
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                    <th>Posts Title</th>
                                                    <!-- <th>News Body</th> -->
                                                    <th>Image</th>
                                                    <th>tags</th>
                                                    <!-- <th>News Slug</th> -->
                                                    <th>Actions</th>
                                                    </tr>
                                                </tfoot>
                                                </table>
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

<!--Edit Modal -->
@foreach($posts as $modal)
<div class="modal fade" id="editModal{{ $modal->slug }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="{{ route('posts.update', $modal->slug) }}" enctype="multipart/form-data">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputPassword1">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $modal->title }}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Body</label>
                <textarea class="form-control" name="body" id="summernote" rows="8">{{ $modal->body }}</textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Category</label>
                <select class="custom-select" value="" name="category">
                        <option value="{{ $modal->category }}">{{ $modal->category }}</option>
                        @foreach($news_categories as $new)
                        <option value="{{ $new->name }}">{{ $new->name }}</option>
                        @endforeach
                    </select>
            </div>

            <div class="form-group">
                <label>Feature Image</label>
                <input type="file" class="form-control" name="feature_image">
            </div>

            <div class="form-group">
                <label>Tags</label>
                <input type="text" name="tags" class="form-control" value="{{ $modal->tags }}">
            </div>

            <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success btn-sm">Update</button>
            </div>
            <div class="clearfix"></div>
            </form>
      </div>
    </div>
  </div>
</div>
@endforeach

@endsection
@section('script')

<script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
</script>
@endsection