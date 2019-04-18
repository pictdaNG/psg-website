@extends('layouts.app')  

@section('title')
    Ministry of Works | Plateau State Government Website
@endsection

@section('header')
    Ministry of Works
@endsection

@section('subheader')
    About Ministry of Works
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <p>
            The Ministry of Works is a Professional Service Ministry charged with the responsibility of providing Technical Services such has Design, Construction and Maintenance of State Roads, and provision of Mechanical and Electrical Services. It also renders Professional advice to other arms of Government on Technical matters. 
        </p>

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img class="object-fit" src="{{ URL::asset('/assets/img/image_03.png') }}" alt="">
        </div>

        <h4>VISION</h4>
        <p>
            A Ministry where its staff are faithful in carrying out their professional duties in line with the physical policies of Government thereby giving value for money in the executive of infrastructural development in the state. 
        </p>

        <h4>MISSION</h4>
        <p>
            The Ministry of Works will remain committed in the implementation of projects in the areas of design, construction and supervision of projects to the state Government as it seeks to provide Engineering facilities for the economic progress of its people.  
        </p>
        <h4>FUNCTIONS OF THE MINISTRY</h4>    
        <p>
            As earlier stated, the Ministry is a professional Ministry and has the following functions: - 
            <ol type="a">
                <li>Design of highways</li>
                <li>Construction and Supervision of State Roads, Bridges and their Maintenance </li>
                <li>The repairs, Servicing, Maintenance of road construction plants, vehicles and generating sets. </li>
                <li>Maintenance of Electrical Installations, Equipment and appliances in Government Buildings. </li>
                <li>The Ministry also serves as the technical adviser and supervisor of other Ministries, and Government Departments in their areas of Civil Engineering, Electrical Engineering and Mechanical Engineering Projects.  Even though each department is charged with specific responsibilities and Functions, there is always a good deal of co-operation in ensuring effective utilization of available manpower for successful implementation of all Government Programmers. </li>
            </ol>
        </p>

        <h4>STRUCTURES OF THE MINISTRY</h4>
        <p>
            The Commissioner is the head and Chief Executive of the Ministry and is assisted by the Permanent Secretary who is the administrative head and, the accounting officer. The Commissioner is a member of the State executive council, Member of the State finance, General-purpose committee and ex-officio member of under listed Government Boards and parastatals.
        </p>
        <ol type="i">
            <li>Plateau State Road Maintenance Agency.</li>
            <li>Governing Council Plateau State Polytechnic B/Ladi. </li>
            <li>Governing Council College of Education Gindiri </li>
        </ol>

        <p>
            The Ministry of Works has for administrative convenience been divided into the following departments: 

            <ol>
               <li>Administrative Department </li>
               <li>Civil Engineering Department </li>
               <li>Electrical Engineering Department </li>
               <li>Mechanical Engineering Department </li>
               <li>Finance and Supplies Department </li>
               <li>Planning, Research and Statistics Department </li>
               <li>All Departments are headed by a Director.</li> 
            </ol>
        </p>

        <h4>ACHIEVEMENTS</h4>
        <p>
            MAINTENANCE AND CONSTRUCTION OF FEDERAL ROADS IN THE STATE <br />
            As part of its intervention efforts, the Plateau State Government in conjunction with the controller, Federal Ministry of Works and Federal Roads Maintenance Agency executed maintenance works on the following roads:

            <ol>
                <li>Mararaban Jama’a – British American Junction Road (22km)</li>
                <li>Bauchi Road (8km) </li>
                <li>Bukuru – k. Vom Road (7.5km)</li>
                <li>Gg</li>
            </ol>
        </p>

        <p>
            In addition to above, 2 No. federal roads in the state were awarded to P.W. Nig Ltd for dualization. Both roads have been completed and commissioned by the President and Commander in-Chief of the Federal Republic of Nigeria, Dr. Goodluck Ebele Jonathan- GCFR.

            <ol>
                <li>Dualization of Polo Roundabout – Farin Gada and construction of flyover at Rukuba Junction.</li>
                <li>Dualization of mararaban Jama’a – Heipang Road with spur to Inland Container Depot. </li>
                
            </ol>
        </p>

    </div>
@endsection