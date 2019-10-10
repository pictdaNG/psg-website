@extends('layouts.app')  

@section('title')
    Mikang LGA | Plateau State Government Website
@endsection

@section('header')
    Mikang Local Government Area
@endsection

@section('subheader')
    About Mikang
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h2 class="bold">Mikang</h2>
        <p>Mikang is a Local Government Area in Plateau State, Nigeria. Its headquarters are in the town of Tunkus.</p>        

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img src="{{ URL::asset('/assets/img/LGAS-mikang.jpg') }}" alt="" style="height: 60%">
        </div>
        
        <p>
          It has an area of 739 km² and a population of 97,411 at the 2006 census.
        </p>
        <p>The postal code of the area is 940.</p>

        <p>
            Languages Spoken in Mikang are Koenoem, Yuom, Tehl, Miryam & Piapung.
        </p>
    </div>
@endsection