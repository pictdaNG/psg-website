@extends('layouts.app')  

@section('title')
    Kanke LGA | Plateau State Government Website
@endsection

@section('header')
    Kanke Local Government Area
@endsection

@section('subheader')
    About Kanke
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h2 class="bold">Kanke</h2>
        <p>Kanke is a Local Government Area in Plateau State, Nigeria. Its headquarters are in the town of Kwal.</p>        

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img src="{{ URL::asset('/assets/img/LGAS-kanke.jpg') }}" alt="" style="height: 60%">
        </div>
        
        <p>
          It has an area of 926 km² and a population of 121,424 at the 2006 census.
        </p>
        <p>The postal code of the area is 933.</p>

        <p>
            Languages spoken in Kanke are Ngas, Myet, Boghom, Taroh & Badawa.
        </p>
    </div>
@endsection