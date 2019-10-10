@extends('layouts.admin')

@section('content')
  <div class="element-wrapper">
    <h6 class="element-header">
      All Blog Posts
    </h6>

    <div class="element-content">
      <table id="dataTable1" width="100%" class="table table-striped">
        <thead>
          <tr>
            <th>Description</th>
            <!-- <th>Description</th> -->
            <th>Action</th>
            
          </tr>
        </thead>
        <tfoot>
          <tr >
            <th width="80%">Description</th>
            <!-- <th width="80%">Description</th> -->
            <th>View</th>            
          </tr>
        </tfoot>
        <tbody>
          @foreach($posts as $post)
            <tr>
              <!-- <td width="80%"><a href="{{ $post->name }}">{{ $post->title}}</a></td>               -->
              <td width="80%"><a href="{{ $post->name }}">{!! $post->body !!}</a></td>              
              <td>Download</td>              
            </tr>
          @endforeach            
         </tbody>
      </table>
    </div>
  </div>
@endsection