@extends('layouts.app')  

@section('title')
    Pankshin LGA | Plateau State Government Website
@endsection

@section('header')
    Pankshin Local Government Area
@endsection

@section('subheader')
    About Pankshin
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h2 class="bold">Pankshin</h2>
        <p>Pankshin is a Local Government Area in Plateau State, Nigeria. Its headquarters are in the town of Pankshin.</p>        

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img src="{{ URL::asset('/assets/img/LGAS-pankshinArtboard.jpg') }}" alt="" style="height: 60%">
        </div>
        
        <p>
          It has an area of 1,524 km² and a population of 191,685 at the 2006 census.
        </p>
        <p>The postal code of the area is 933.</p>

        <p>
            Languages spoken in Pankshin are Ngas, Mupun, Miship, Fier, Tal, Kadung, Pal & Bijim.
        </p>
    </div>
@endsection