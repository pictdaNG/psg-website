@extends('layouts.app')  

@section('title')
    Ongoing Projects | Plateau State Government Website
@endsection

@section('header')
    Planned Projects
@endsection

@section('subheader')
    About Planned Projects
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h2 class="bold">Planned Projects</h2>

        <table id="projects" class="uk-table uk-table-hover uk-table-middle uk-table-divider" style="width:100%">
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
            $('#projects').DataTable({
                data: [], 
                columns: [
                    {data: "pid"},
                    {data: "title"},
                    {data: "description"},
                    {data: "contractor"},
                    {data: "lga"}
                ]
            });
        } );
    </script>
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection