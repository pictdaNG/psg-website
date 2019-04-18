@extends('layouts.app')  

@section('title')
    Ministry of Housing and Urban Development | Plateau State Government Website
@endsection

@section('header')
    Ministry of Housing and Urban Development
@endsection

@section('subheader')
    About Ministry of Housing and Urban Development
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <p>
            The Ministry was created in 2007 first as the Ministry for Urban Development, and later merged in 2009 with the Housing Division to form the present Ministry of Housing and Urban Development. 
        </p>

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img class="object-fit" src="{{ URL::asset('/assets/img/image_03.png') }}" alt="">
        </div>

        <h4>FUNCTIONS OF THE MINISTRY</h4>
        <ol type="I">
            <li>Formulation of policies, supervision and co-ordination of matters concerning urban development and urbanization in Plateau state. </li>
            <li>Physical planning, design and construction of transportation infrastructure urban/township road networks.</li>
            <li>Formulation of the state urban and regional planning law (implementing the provisions), in line with the Nigeria Urban and Regional Planning Act 1992;</li>
            <li>Preparation of the plans, local structures, plans and incremental plans for urban centers in the state;</li>
            <li>Planning and development of new towns to address congestion in existing centers;</li>
            <li>Formulation of programmes and policies for the sector;</li>
            <li>Liaising with the Federal Ministry of Housing and Urban Development for housing and urban development matters affecting Plateau State;</li>
            <li>Being Custodian of all government structures and property;</li>
            <li>Preparation of bills of quantities for all construction works;</li>
            <li>Valuation of properties for purchase or sale, interim valuation and final accounts of ongoing projects for all government ministries, departments and parastatals;</li>
            <li>Preparation of contract conditions, trade preambles and preliminary items for all construction works;</li>
            <li>Provision of estimate for budgetary purposes for all items of capital works to be undertaken by government.</li>
        </ol>

        <h4>STRUCTURE OF THE MINISTRY</h4>
        <p>
            The Ministry of Housing and Urban Development has the following departments
            <ol type="I">
                <li>Urban Planning and Development.</li>
                <li>Engineering Services</li>
                <li>Planning, Research Statistics</li>
                <li>Administration</li>
                <li>Finance and Supply</li>
                <li>Quantity Survey and Estate Services</li>
                <li>Building</li>
            </ol>
        </p>

        <h4>Completed projects and programmes</h4>
        <ol type="a">
            <li>Greater Jos Master plan-final report submitted. Implementation to commence with the Accelerated Model Districts</li>
            <li>Satellites images for 26No. towns and baseline digital maps completed; data in software and hard copies (2007)</li>
            <li>Construction of 5km urban road; 100% completion in Barkin Ladi, Bassa, and Shendam.</li>
            <li>Land use Development Plans for LGC headquarters: Six (6) completed Ba’ap, Tunkus , Mabudi, Riyom, Kanke, and Angwari.</li>
            <li>Construction of Utonkon, Keana and Nunku Link roads in Jos South LGA-conpleted.</li>
            <li>Roads within 14 Unit Government Guest Houses-completed,</li>
            <li>Solar Street lights at Hwolshe main street, Government Lodge, Jishe-completed.</li>
        </ol>

        <h4>On-going project and programmes</h4>
        <ol type="a">
            <li>Formulation of state Urban Development Policy – Committee was constituted by SSG’s office.</li>
            <li>Enactment of state Urban and Regional Planning Law-draft law with the Ministry of Justice.</li>
            <li>PPP Mass Housing Scheme: Five sites in Jos –site acquisition ongoing.  MOUs vetted and ready for signing.</li>
            <li>Construction of 5km urban roads in Jos North, Riyom, Kanke, Mikang, Jos East, Langtang South, Bokkos</li>
            <li>Installation of traffic lights at 20 junctions in Jos Bukuru metropolis.</li>
            <li>Retreat for all Stakeholders on Greater Jos Master plan scheduled has been successfully conducted.</li>
        </ol>

        <h4>Project executed by direct labour</h4>

        <ol type="i">
            <li>Construction/Renovation of Governor’s Lodge, Jishe  </li>
            <li>Renovation and extension of House No. 1 Aliyu Makama Road, to serve as Operation Rainbow Headquarters. </li>
            <li>Renovation of House No.9 Mangu Road to serve as INEC Commissioner’s Residence</li>
            <li>Re-roofing and Rehabilitation of High Court Complex, Jos </li>
            <li>Building of sub-stations at Dankang and Mangu for PRTVC  </li>
        </ol>
    </div>
@endsection