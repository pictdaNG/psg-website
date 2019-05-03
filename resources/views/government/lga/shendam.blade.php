@extends('layouts.app')  

@section('title')
    Shendam LGA | Plateau State Government Website
@endsection

@section('header')
    Shendam Local Government Area
@endsection

@section('subheader')
    About Shendam
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h2 class="bold">Shendam</h2>
        <p>Shendam is a Local Government Area in Plateau State, Nigeria. Its headquarters are in the town of Shendam at 8°53′00″N 9°32′00″E.</p>        

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img src="{{ URL::asset('/assets/img/LGAS-shendamArtboard.jpg') }}" alt="" style="height: 60%">
        </div>
        
        <p>
          It has an area of 2,477 km² and a population of 208,017 at the 2006 census.
        </p>
        
        <p>
            The postal code of the area is 940.
        </p>

        <p>
            Language spoken in Shendam is Geomai.
        </p>
    </div>
@endsection