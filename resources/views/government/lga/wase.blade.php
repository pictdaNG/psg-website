@extends('layouts.app')  

@section('title')
    Wase LGA | Plateau State Government Website
@endsection

@section('header')
    Wase Local Government Area
@endsection

@section('subheader')
    About Wase
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h2 class="bold">Wase</h2>
        <p>Wase is a town and Local Government Area (LGA) of Plateau State, Nigeria. Situated some 216 km south east of Jos, the Plateau State capital, Wase State is a traditional state founded in the area in 1820; this became part of the British Royal Niger Company protectorate (later Northern Nigeria) in 1898.</p>        

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img src="{{ URL::asset('/assets/img/LGAS-waseArtboard.jpg') }}" alt="" style="height: 60%">
        </div>
        
        <p>
          The population of the LGA was 125,000 people as of 2003, and the area is 1750 km².
        </p>
        
        <p>
            Languages spoken in Wase are Jukun, Taroh & Hausa/Fulani.
        </p>
    </div>
@endsection