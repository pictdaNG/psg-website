@extends('admin.layouts.main')
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
                                    <h5>Slider page</h5>
                                    <span>Creating Sliders</span>
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
                                        <a href="#!">Sliders</a>
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
                                                <h5>Slider card</h5>
                                                <div class="card-header-right">
                                                   <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">Add Slider</button>
                                                </div>
                                            </div>
                                            <div class="card-block">
                                                <div class="dt-responsive table-responsive">
                                                <table id="order-table" class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                    <tr>
                                                    <th>Slider Title</th>
                                                    <th>Description</th>
                                                    <th>Image</th>
                                                    <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    @if(count($sliders) > 0)
                                                        @foreach($sliders as $slider)
                                                        <td>{{ $slider->title }}</td>  
                                                        <td>{{implode(' ', array_slice(explode(' ', $slider->description), 0, 10))}}</td>  
                                                        <td><img src="../uploads/thumbnail/{{$slider->slider_image}}" width="50px" heigth="50x" alt="heloo"></td>                         
                                                        <td className="text-right">
                                                            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#editModal{{  $slider->slug }}">
                                                                <span class="glyphicon glyphicon-edit"></span> Edit
                                                            </button>
                                                            <a href="{{ route('slider.delete',  $slider->slug)}}">
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
                                                        <h4 class="card-title">No Sliders Created yet.</h4>
                                                    </td>
                                                    </tr>
                                                @endif
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                    <th>Slider Title</th>
                                                    <th>Description</th>
                                                    <th>Image</th>
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


<!--add Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Slider</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="{{ route('slider.store')}}" enctype="multipart/form-data">

            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputPassword1">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Slider Title">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <textarea class="form-control" name="description" rows="5"></textarea>
            </div>

            <div class="form-group">
                <label>Slider Image</label>
                <input type="file" class="form-control" name="slider_image">
            </div>

            <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success btn-sm">Create</button>
            </div>
            <div class="clearfix"></div>
        </form>
      </div>

    </div>
  </div>
</div>

<!--Edit Modal -->
@foreach($sliders as $modal)
<div class="modal fade" id="editModal{{ $modal->slug }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Slider Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="{{ route('slider.update', $modal->slug) }}" enctype="multipart/form-data">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputPassword1">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $modal->title }}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <textarea class="form-control" name="description" rows="5">{{ $modal->description }}</textarea>
            </div>

             <div class="form-group">
                <label>Slider Image</label>
                <input type="file" class="form-control" name="slider_image">
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
