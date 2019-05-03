@extends('layouts.app')  

@section('title')
    Langtang South LGA | Plateau State Government Website
@endsection

@section('header')
    Langtang South Local Government Area
@endsection

@section('subheader')
    About Langtang South
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h2 class="bold">Langtang South</h2>
        <p>Langtang South is a Local Government Area in Plateau State, Nigeria. Its headquarters are in the town of Mabudi.</p>        

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img src="{{ URL::asset('/assets/img/LGAS-langtansouth.jpg') }}" alt="" style="height: 60%">
        </div>
        
        <p>
          It has an area of 838 km² and a population of 106,305 at the 2006 census.
        </p>
        <p>The postal code of the area is 941. </p>

        <p>
            Language spoken in Langtang North is Taroh.
        </p>
    </div>
@endsection