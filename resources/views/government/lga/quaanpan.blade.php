@extends('layouts.app')  

@section('title')
    Qua'an Pan LGA | Plateau State Government Website
@endsection

@section('header')
    Qua'an Pan Local Government Area
@endsection

@section('subheader')
    About Qua'an Pan
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h2 class="bold">Qua'an Pan</h2>
        <p>Qua'an Pan is a Local Government Area in Plateau State, Nigeria. Its headquarters are in the town of Baap (or Ba'ap).</p>        

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img src="{{ URL::asset('/assets/img/LGAS-quaanpan.jpg') }}" alt="" style="height: 60%">
        </div>
        
        <p>
          It has an area of 2,478 km² and a population of 196,929 at the 2006 census.
        </p>
        <p>The postal code of the area is 934.</p>

        <p>
            Languages spoken in Qua'an Pan are Kwalla,Pan, Doemak & Gwall.
        </p>
    </div>
@endsection