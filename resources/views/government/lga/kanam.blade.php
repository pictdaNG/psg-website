@extends('layouts.app')  

@section('title')
    Kanam LGA | Plateau State Government Website
@endsection

@section('header')
    Kanam Local Government Area
@endsection

@section('subheader')
    About Kanam
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h2 class="bold">Kanam</h2>
        <p>Kanam is a Local Government Area in Plateau State, Nigeria. Its headquarters is located in Dengi.</p>

        

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img src="{{ URL::asset('/assets/img/LGAS-kanam.jpg') }}" alt="" style="height: 60%">
        </div>
        
        <p>
          It has an area of 2,600 km² and a population of 165,898 at the 2006 census. The postal code of the area is 940.
        </p>

        <p>
            Languages Spoken in Kanam are Boghom, Jahr & Basharawa.
        </p>
    </div>
@endsection