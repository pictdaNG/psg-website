@extends('layouts.admin')

@section('content')
  <div class="element-wrapper">
    <h6 class="element-header">
      All Documents
    </h6>

    <div class="element-content">
      <table id="dataTable1" width="100%" class="table table-striped">
        <thead>
          <tr>
            <th>Description</th>
            <th>Action</th>
            
          </tr>
        </thead>
        <tfoot>
          <tr >
            <th width="80%">Description</th>
            <th>View</th>            
          </tr>
        </tfoot>
        <tbody>
          @foreach($documents as $doc)
            <tr>
              <td width="80%"><a href="{{ $doc->name }}">{{ $doc->title}}</a></td>              
              <td>Download</td>              
            </tr>
          @endforeach            
         </tbody>
      </table>
    </div>
  </div>
@endsection