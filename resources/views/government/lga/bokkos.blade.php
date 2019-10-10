@extends('layouts.app')  

@section('title')
    Bokkos LGA | Plateau State Government Website
@endsection

@section('header')
    Bokkos Local Government Area
@endsection

@section('subheader')
    About Bokkos
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h2 class="bold">Bokkos</h2>
        <p>Bokkos is a Local Government Area in Plateau State, Nigeria. Its headquarters are in the town of Bokkos at 9°18′00″N 9°00′00″E.</p>

        

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img src="{{ URL::asset('/assets/img/LGAS-bokkos.jpg') }}" alt="" style="height: 60%">
        </div>
        
        <p>
          It has an area of 1,682 km² and a population of 178,454 at the 2006 census. 
        </p>
        <p>
            The postal code of the area is 932.
        </p>
        <p>
            Languages spoken in Bokkos are Ron, Mushere & Kulere
        </p>
    </div>
@endsection