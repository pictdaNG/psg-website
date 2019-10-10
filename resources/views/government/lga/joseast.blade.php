@extends('layouts.app')  

@section('title')
    Jos East LGA | Plateau State Government Website
@endsection

@section('header')
    Jos East Local Government Area
@endsection

@section('subheader')
    About Jos East
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h2 class="bold">Jos East</h2>
        <p>Jos East is a Local Government Area in Plateau State, Nigeria. Its headquarters are in the town of Angware.</p>

        

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img src="{{ URL::asset('/assets/img/LGAS-joseast.jpg') }}" alt="" style="height: 60%">
        </div>
        
        <p>
          It has an area of 1,020 km² and a population of 85,602 at the 2006 census.
        </p>
        <p>
            The postal code of the area is 930.
        </p>
        <p>
            Language spoken in Jos-East is Afizere.
        </p>
    </div>
@endsection