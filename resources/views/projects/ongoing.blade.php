@extends('layouts.app')  

@section('title')
    Ongoing Projects | Plateau State Government Website
@endsection

@section('header')
    On Going Projects
@endsection

@section('subheader')
    About On Going Projects
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h2 class="bold">On Going Projects</h2>

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
            $('#projects').DataTable({
        data: [{"id":"6","title":"Construction of Bukuru Low Cost Road to Rantya","lga_id":"6","status_id":"2","contractor":"Jodalsam Nig. Ltd.","description":"16, Jos South , ,","status":"Ongoing","lga":"Jos South","pid":"864"},{"id":"6","title":"Gyel","lga_id":"6","status_id":"2","contractor":"","description":", , ,","status":"Ongoing","lga":"Jos South","pid":"865"},{"id":"6","title":"Construction of D.B. Zang Junction -Gyel,Gyero, Tanchol and Tahei ","lga_id":"6","status_id":"2","contractor":"Foundation Solid Nig Ltd ","description":"16, Jos South , , ","status":"Ongoing","lga":"Jos South","pid":"867"},{"id":"11","title":"Bisichi-Korot-Fan-Rite-Mangu Halle with Spur to ","lga_id":"11","status_id":"2","contractor":"EEC Int. Ltd. ","description":"70, B\/Ladi and , , ","status":"Ongoing","lga":"Mangu","pid":"869"},{"id":"1","title":"Heipang, Kwi, Nding-Kassa and Rawuru Phase I ","lga_id":"1","status_id":"2","contractor":"","description":", Mangu , , ","status":"Ongoing","lga":"Barkin Ladi","pid":"870"},{"id":"13","title":"Pankshin-Langkang-Dyis-Sihin with Spur to Asp and Akong ","lga_id":"13","status_id":"2","contractor":"Foundation Solid Nig. Ltd. ","description":"16, Pankshin , , ","status":"Ongoing","lga":"Pankshin","pid":"871"},{"id":"8","title":"Construction of Gunji-Shiwer-Dok-Pal with Spur to Tiplik ","lga_id":"8","status_id":"2","contractor":"Hajaig Nig. Ltd ","description":"33, Kanke , , ","status":"Ongoing","lga":"Kanke","pid":"873"},{"id":"11","title":"Construction of Mangu-Gindiri-Lere Road with Spur to Tonzong-Chanso and Gindiri School ","lga_id":"11","status_id":"2","contractor":"Tilley Gyado & Co Nig. Ltd ","description":"45.5, Mangu , , ","status":"Ongoing","lga":"Mangu","pid":"875"},{"id":"4","title":"Construction of Fobur-Federe-Angware Road ","lga_id":"4","status_id":"2","contractor":"Foundation Solid Nig. Ltd. ","description":"27, Jos East , , ","status":"Ongoing","lga":"Jos East","pid":"877"},{"id":"6","title":"Access Road to School of Nursing and Midwifery Vom ","lga_id":"6","status_id":"2","contractor":"Haga Concept Nig. Ltd ","description":"1.7, Jos South , , ","status":"Ongoing","lga":"Jos South","pid":"879"},{"id":"6","title":"Kukarin and Fwavwei road Network in Rayfield \nand Dualization of the Bukuru Little Rayfield road \nwith spurs \n","lga_id":"6","status_id":"2","contractor":"Ric Rock Const. Ltd ","description":", Jos South , , ","status":"Ongoing","lga":"Jos South","pid":"881"},{"id":"5","title":"Jos -Mazah ","lga_id":"5","status_id":"2","contractor":"EEC Int. Ltd ","description":"10, Jos North , , ","status":"Ongoing","lga":"Jos North","pid":"885"},{"id":"2","title":"Jebbu Bassa-Binchi-Zaqun-Buqu ","lga_id":"2","status_id":"2","contractor":"United Radak Nig. Ltd ","description":"18, Bassa , , ","status":"Ongoing","lga":"Bassa","pid":"886"},{"id":"2","title":"Rukuba-Nlanqo Farin Lamba with spurs Dochai and School of Accountancy ","lga_id":"2","status_id":"2","contractor":"Ric Rock Const. Ltd ","description":"50, Bassa , , ","status":"Ongoing","lga":"Bassa","pid":"889"},{"id":"15","title":"Tahoss-Rirn -Bachit-Shi nung- Jol-Gashish ","lga_id":"15","status_id":"2","contractor":"Ric Rock Const. Ltd ","description":"50, Riyom and , , ","status":"Ongoing","lga":"Riyom","pid":"891"},{"id":"6","title":"Duallzation of Old Airport-Rayfield-GH with spurs ","lga_id":"6","status_id":"2","contractor":"P.W. Nig. Ltd ","description":"16, Jos South , , ","status":"Ongoing","lga":"Jos South","pid":"894"},{"id":"6","title":"Flyover at Secretariat Junction with slip roads and underpasses ","lga_id":"6","status_id":"2","contractor":"P.W. Nig. Ltd ","description":"- , Jos South , , ","status":"Ongoing","lga":"Jos South","pid":"895"},{"id":"2","title":"Jenqre-Arno-Katako-Kararnbana ","lga_id":"2","status_id":"2","contractor":"United Radak Ltd ","description":"26, Bassa , , ","status":"Ongoing","lga":"Bassa","pid":"897"},{"id":"9","title":"Langtang-Garkawa-Yelwa-Shendam with spur to Lalin ","lga_id":"9","status_id":"2","contractor":"Retro N ig. Ltd ","description":"70, L\/North , , ","status":"Ongoing","lga":"Langtang North","pid":"899"},{"id":"11","title":"Mangu-Bwai-Mushu ","lga_id":"11","status_id":"2","contractor":"SALTA Nig. Ltd ","description":"16, Mangu , , ","status":"Ongoing","lga":"Mangu","pid":"904"},{"id":"11","title":"Korot - Bakin Kogi-Kadunug road ","lga_id":"11","status_id":"2","contractor":"Tilley Gyado & Co ","description":"44, B\/Ladi and , , ","status":"Ongoing","lga":"Mangu","pid":"905"},{"id":"6","title":"Construction of Europharm, Deye, Dahwol and Zarmaganda-Mazaram road Network and spur ","lga_id":"6","status_id":"2","contractor":"Jodalsam Global Ltd ","description":"lOA , Jos South , , ","status":"Ongoing","lga":"Jos South","pid":"907"},{"id":"11","title":"Mangu Sabon Layi ","lga_id":"11","status_id":"2","contractor":"Cosmos Nig. Ltd ","description":"6, Mangu , , ","status":"Ongoing","lga":"Mangu","pid":"909"},{"id":"6","title":"Dualization of Lamingo JUTH road ","lga_id":"6","status_id":"2","contractor":"P. W. Nig. Ltd ","description":"8, Jos South , , ","status":"Ongoing","lga":"Jos South","pid":"910"},{"id":"5","title":"Dualization of Gada Biyu - Rukuba Market road ","lga_id":"5","status_id":"2","contractor":"P.W. Nig. Ltd ","description":"6, Jos North , , ","status":"Ongoing","lga":"Jos North","pid":"911"},{"id":"6","title":"Rayfield -Latya-Doi-Dyemburuk road Infrastructure ","lga_id":"6","status_id":"2","contractor":"P.W. Nig. Ltd ","description":"30, Jos South , , ","status":"Ongoing","lga":"Jos South","pid":"913"},{"id":"6","title":"New Government House road Infrastructure ","lga_id":"6","status_id":"2","contractor":"P.W. Nig. Ltd ","description":"50, Jos South , , ","status":"Ongoing","lga":"Jos South","pid":"915"},{"id":"6","title":"Resurfacing and Rehabilitation of Mararaban Jama'a to Bristish American Junction ","lga_id":"6","status_id":"2","contractor":"P.W. Nig. Ltd ","description":"22, Jos South , , ","status":"Ongoing","lga":"Jos South","pid":"916"}], 
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