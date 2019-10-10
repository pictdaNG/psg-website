@extends('layouts.app')  

@section('title')
    Jos North LGA | Plateau State Government Website
@endsection

@section('header')
    Jos North Local Government Area
@endsection

@section('subheader')
    About Jos North
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h2 class="bold">Jos North</h2>
        <p>Jos North is a Local Government Area in Plateau State, Nigeria. Its headquarters are in the city center of Jos.</p>

        

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img src="{{ URL::asset('/assets/img/LGAS-josnorth.jpg') }}" alt="" style="height: 60%">
        </div>
        
        <p>
          It has an area of 291 km² and a population of 429,300 at the 2006 census.
        </p>
        <p>
            The postal code of the area is 930.
        </p>
        <p>
            Languages Spoken in Jos-North are Anaguta, Afizere & Berom.
        </p>
    </div>
@endsection