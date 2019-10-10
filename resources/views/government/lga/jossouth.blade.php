@extends('layouts.app')  

@section('title')
    Jos South LGA | Plateau State Government Website
@endsection

@section('header')
    Jos South Local Government Area
@endsection

@section('subheader')
    About Jos South
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h2 class="bold">Jos South</h2>
        <p>Jos South is a Local Government Area in Plateau State, Nigeria. It houses the Governors office in Rayfield and can thus be described as the de facto capital of plateau state. Its headquarters are in the town of Bukuru at 9°48′00″N 8°52′00″E.</p>

        

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img src="{{ URL::asset('/assets/img/LGAS-jossouth.jpg') }}" alt="" style="height: 60%">
        </div>
        
        <p>
          It has an area of 510 km² and a population of 306,716 at the 2006 census.
        </p>
        <p>
            The postal code of the area is 930.
        </p>
        <p>
            Language spoken in Jos South is Berom. 
        </p>
    </div>
@endsection