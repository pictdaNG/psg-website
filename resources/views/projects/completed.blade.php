@extends('layouts.app')  

@section('title')
    Completed Projects | Plateau State Government Website
@endsection

@section('header')
    Completed Projects
@endsection

@section('subheader')
    About Completed Projects
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h2 class="bold">Completed Projects</h2>

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
        data: [{"id":"5","title":"Dualization of Polo Roundabout-Farin Gada Algadama-Rock Haven Alheri Road Network and Terminus-Bauchi Road","lga_id":"5","status_id":"3","contractor":"P.W. Nig. Ltd","description":"24.5, JOS\/NORTH, 100,","status":"Completed","lga":"Jos North","pid":"826"},{"id":"6","title":"Bukuru-Shen-angwan Doki-Zawan-Du Loop Phase II and Anguldi- Zawan Roads","lga_id":"6","status_id":"3","contractor":"P.W. Nig. Ltd.","description":"24.5, JOS SOUTH, 100,","status":"Completed","lga":"Jos South","pid":"827"},{"id":"1","title":"Construction of Gada Biyu-Foron Road","lga_id":"1","status_id":"3","contractor":"P.W. Nig. Ltd","description":"10, B\/LADI, 100, ","status":"Completed","lga":"Barkin Ladi","pid":"828"},{"id":"7","title":"Construction of Dengi- Wase Road","lga_id":"7","status_id":"3","contractor":"Foundation Solid Nig. Ltd","description":"35, KANAM & WASE, 100,","status":"Completed","lga":"Kanam","pid":"829"},{"id":"16","title":"Construction of Shendam-Kalong Shimankar Road Phase I","lga_id":"16","status_id":"3","contractor":"Rick Rock Construction Nig. Ltd.","description":"21, SHENDAM, 100,","status":"Completed","lga":"Shendam","pid":"830"},{"id":"9","title":"Construction of Zamko-Mabudi road with Supr to Mban","lga_id":"9","status_id":"3","contractor":"EEC. International Co. Ltd","description":"38, L\/NORTH & L\/SOUTH, 100,","status":"Completed","lga":"Langtang North","pid":"831"},{"id":"6","title":"Construction of Gut- Rayfield, Du-Shen Network and Du- Bisichi-Kuru with Spur to Madu","lga_id":"6","status_id":"3","contractor":"P.W. Nig.","description":"58, JOS SOUTH, 100,","status":"Completed","lga":"Jos South","pid":"832"},{"id":"5","title":"Erosion control and construction of a Box Culvert at Y-Cement Rikkos","lga_id":"5","status_id":"3","contractor":"Alsar Nig. Ltd","description":", JOS NORTH  , 100,","status":"Completed","lga":"Jos North","pid":"833"},{"id":"7","title":"The Construction of Washout Section on Gurishar Bridge Approaches Road Section Along Amper- Dengi Road in Kanam LGA","lga_id":"7","status_id":"3","contractor":"Sebatech Nig. Ent","description":", KANAM, 100,","status":"Completed","lga":"Kanam","pid":"834"},{"id":"9","title":"The Construction of Washout Sections on Bapkwai Bridge Approaches Along Langtang North LGA","lga_id":"9","status_id":"3","contractor":"Bilmore Co. Ltd.","description":", L\/NORTH, 100,","status":"Completed","lga":"Langtang North","pid":"835"},{"id":"9","title":"The Construction of Washout on Mban Bridge approaches","lga_id":"9","status_id":"3","contractor":"A.T.M. (Nig.) Ltd","description":", L\/NORTH, 100,","status":"Completed","lga":"Langtang North","pid":"836"},{"id":"11","title":"The Construction of washout Section area on Tonzong Bailey Bridge Gindiri in Mangu LGA","lga_id":"11","status_id":"3","contractor":"Rick rock Con. Nig. Ltd","description":", MANGU, 100,","status":"Completed","lga":"Mangu","pid":"837"},{"id":"13","title":"Construction of Bridge Over River Jibam and Access Road to Mhiship Palace and Jibam-Dokan Kasuwa Road","lga_id":"13","status_id":"3","contractor":"EEC International Co. Ltd.","description":"18, PANKSHIN & Q\/PAN, 100,","status":"Completed","lga":"Pankshin","pid":"838"},{"id":"5","title":"Dualization of Plateau Specialist Hospital Roundabout (D.B. Zang Road) - Hill Station, Rehabilitation of J.D. Gomwalk Way, Construction of St. Murumba-Busa Buji- Katako and Rusau Road","lga_id":"5","status_id":"3","contractor":"P.W. Nig.","description":"19.4, J\/NORTH, 100,","status":"Completed","lga":"Jos North","pid":"839"},{"id":"6","title":"Rayfield -Latya-Doi-Dyemburuk road Infrastructure","lga_id":"6","status_id":"3","contractor":"P.W. Nig. Ltd","description":", Jos-South, 100,","status":"Completed","lga":"Jos South","pid":"840"},{"id":"6","title":"Repairs\/Rehabilitation Jos\/Bukuru Metropolis Phase II","lga_id":"6","status_id":"3","contractor":"MOW&T, JMDB, PDLA & FMT","description":", J\/ SOUTH & J\/   of Roads within  JMDB, PDLA &  , 100,","status":"Completed","lga":"Jos South","pid":"844"},{"id":"5","title":"Construction of Road into ECWA Staff School Zaria Road","lga_id":"5","status_id":"3","contractor":"M.O.W. &T","description":"6.5, JOS-NORTH, 100,","status":"Completed","lga":"Jos North","pid":"846"},{"id":"5","title":"Erosion control and construction of culvert at Kabong","lga_id":"5","status_id":"3","contractor":"M.O.W. &T","description":", JOS-NORTH, 100,","status":"Completed","lga":"Jos North","pid":"847"},{"id":"5","title":"Erosion Control and Back filling of Bridge at Zoo view","lga_id":"5","status_id":"3","contractor":"M.O.W. &T","description":", JOS NORTH, 100,","status":"Completed","lga":"Jos North","pid":"848"},{"id":"5","title":"Asphalt of St. Pirans Road and Drainage Works, Justice Judges of Appeal Court Akambi Close and Residence of Opposite Wild Life Park","lga_id":"5","status_id":"3","contractor":"M.O.W","description":"2.1, JOS-NORTH, 100,","status":"Completed","lga":"Jos North","pid":"849"},{"id":"1","title":"Access to Kassa Mechanical Workshop ","lga_id":"1","status_id":"3","contractor":"M.O.W","description":"4, B\/LADI, 100, ","status":"Completed","lga":"Barkin Ladi","pid":"850"},{"id":"11","title":"The construction of washout sections on Area and Replacement of Siaba on Zandur Bridge Along Chanso- Jeneret Road in Mangu LGA","lga_id":"11","status_id":"3","contractor":"M.O.W","description":", MANGU, 100, ","status":"Completed","lga":"Mangu","pid":"851"},{"id":"11","title":"Access Road into Panyam Fish Farm","lga_id":"11","status_id":"3","contractor":"M.O;W","description":"6, MANGU, 100, ","status":"Completed","lga":"Mangu","pid":"852"},{"id":"4","title":"Zarazon-JUTH","lga_id":"4","status_id":"3","contractor":"M.O.W","description":"2.4, JOS-EAST, 80, ","status":"Completed","lga":"Jos East","pid":"853"},{"id":"5","title":"Rehabilitation of 3No box culverts along Wild  life park_Miango road","lga_id":"5","status_id":"3","contractor":"M.O.W","description":", JOS-NORTH, 90, ","status":"Completed","lga":"Jos North","pid":"854"},{"id":"1","title":"Plateau State Fadama II Project Company","lga_id":"1","status_id":"3","contractor":"","description":"AfDB, Plateau State Fadama II Project Company, , ","status":"Completed","lga":"Barkin Ladi","pid":"921"},{"id":"1","title":"Assisted by. Community and Social Development Project","lga_id":"1","status_id":"3","contractor":"","description":"World Bank, Assisted by. Community and Social Development Project, , ","status":"Completed","lga":"Barkin Ladi","pid":"922"},{"id":"1","title":"Plateau State Afforestation Project ","lga_id":"1","status_id":"3","contractor":"","description":"World Bank, Plateau State Afforestation Project , , ","status":"Completed","lga":"Barkin Ladi","pid":"924"},{"id":"1","title":"PROJECTS","lga_id":"1","status_id":"3","contractor":"","description":"ASSISTED BY, PROJECTS, ","status":"Completed","lga":"Barkin Ladi","pid":"925"},{"id":"1","title":"Assisted by. Community and Social Development Project","lga_id":"1","status_id":"3","contractor":"","description":"World Bank, Assisted by. Community and Social Development Project, ","status":"Completed","lga":"Barkin Ladi","pid":"927"},{"id":"1","title":"Plateau State Afforestation Project ","lga_id":"1","status_id":"3","contractor":"","description":"World Bank, Plateau State Afforestation Project , ","status":"Completed","lga":"Barkin Ladi","pid":"929"}], 
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