@extends('layouts.app')  

@section('title')
    Langtang North LGA | Plateau State Government Website
@endsection

@section('header')
    Langtang North Local Government Area
@endsection

@section('subheader')
    About Langtang North
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h2 class="bold">Langtang North</h2>
        <p>Langtang North is a Local Government Area in Plateau State, Nigeria. Its headquarters are in the town of Langtang at 9°08′00″N 9°47′00″E.</p>        

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img src="{{ URL::asset('/assets/img/LGAS-langtannorth.jpg') }}" alt="" style="height: 60%">
        </div>
        
        <p>
          It has an area of 1,188 km² and a population of 140,643 at the 2006 census.
        </p>
        <p>The postal code of the area is 941. </p>

        <p>
            Language spoken in Langtang North is Taroh.
        </p>
    </div>
@endsection