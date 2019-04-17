@extends('layouts.app')  

@section('title')
    Donor Projects | Plateau State Government Website
@endsection

@section('header')
    Donor Projects
@endsection

@section('subheader')
    About Donor Projects
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h2 class="bold">Donor Projects</h2>

        <table id="donorTable" class="uk-table uk-table-hover uk-table-middle uk-table-divider" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Project</th>
                <th>Description</th>
                <th>Contractor</th>
                <th>Local Govenment Area</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>930</td>
                <td>Implementation of a FMIS</td>
                <td>A world bank initiative aimed implementing a Financial Management Information System</td>
                <td>Mr Anthony Oche, Mr Alhassan Bangura</td>
                <td>Jos South</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Project</th>
                <th>Description</th>
                <th>Contractor</th>
                <th>Local Govenment Area</th>
            </tr>
        </tfoot>
    </table>      
        
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#donorTable').DataTable();
        } );
    </script>
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection