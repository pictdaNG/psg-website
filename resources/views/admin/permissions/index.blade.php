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
                                    <h5>User Permission page</h5>
                                    <span>Permission Table</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class=" breadcrumb breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="#"><i class="feather icon-home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#!">Permissions</a>
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
                                                <h5>Roles card</h5>
                                                <div class="card-header-right">
                                                   <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">Add Permission</button>
                                                </div>
                                            </div>
                                            <div class="card-block">
                                                <div class="dt-responsive table-responsive">
                                                <table id="order-table" class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                    <tr>
                                                    <th>No</th>
                                                    <th>Permissions</th>
                                                    <th>Action</th>
                                                    <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    @if(count($permissions) > 0)
                                                        @foreach($permissions as $permission)
                                                        <td>{{ ++$i }}</td>
                                                        <td>{{ $permission->name }}</td>
                                                        <td className="text-right">
                                                            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#editModal{{ $permission->id }}">
                                                                <span class="glyphicon glyphicon-edit"></span> Edit
                                                            </button>
                                                            <a href="{{route('permissions.delete', $permission->id)}}">
                                                            <button class="btn btn-danger btn-sm">
                                                                    <span class="glyphicon glyphicon-trash"></span> Delete
                                                            </button>
                                                            </a>
                                                        </td>
                                                        <td></td>
                                                    </tr>
                                                    @endforeach
                                                    @else
                                                        <tr>
                                                        <td colspan="8" class="text-center">
                                                            <h4 class="card-title">No User Created yet.</h4>
                                                        </td>
                                                        </tr>
                                                    @endif
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                    <th>No</th>
                                                    <th>Permissions</th>
                                                    <th>Action</th>
                                                    <th></th>
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
        <h5 class="modal-title" id="exampleModalLabel">Add Permission Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" class="form-horizontal" action="{{ route('permissions.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}              
            <div class="row">
                <div class="col-sm-12">   
                <div class="form-group">
                        <label for="exampleInputPassword1">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Permission name">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
             
                        <label for="exampleFormControlSelect1">Assign Permission to Roles</label>
                        <select class="form-control" name="roles[]" multiple>
                        @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                        </select>
                    </div>
                   
                </div>
            </div>
            <button type="button" class="btn btn-secondary btn-sm pull-right" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-sm pull-right">Submit</button>
            <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>
</div>

<!--Edit Modal -->
@foreach($permissions as $modal)
<div class="modal fade" id="editModal{{ $modal->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Permission Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" class="form-horizontal" action="{{ route('permissions.update', $modal->id) }}" enctype="multipart/form-data">
      {{ method_field('PUT') }}
        {{ csrf_field() }}              
            <div class="row">
                <div class="col-sm-12">   
                <div class="form-group">
                        <label for="exampleInputPassword1">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $modal->name }}">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
             
                        <label for="exampleFormControlSelect1">Assign Permission to Roles</label>
                        <select class="form-control" name="roles[]" multiple>
                        @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                        </select>
                    </div>
                   
                </div>
            </div>
            <button type="button" class="btn btn-secondary btn-sm pull-right" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-sm pull-right">Submit</button>
            <div class="clearfix"></div>
        </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div> -->
    </div>
  </div>
</div>
@endforeach

@endsection
