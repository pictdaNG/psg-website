@extends('layouts.app')  

@section('title')
    Riyom LGA | Plateau State Government Website
@endsection

@section('header')
    Riyom Local Government Area
@endsection

@section('subheader')
    About Riyom
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h2 class="bold">Riyom</h2>
        <p>Riyom is a Local Government Area in Plateau State, Nigeria. Its headquarters are in the town of Riyom to the north of the Area at 9°38′00″N 8°46′00″E.</p>        

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img src="{{ URL::asset('/assets/img/LGAS-riyom.jpg') }}" alt="" style="height: 60%">
        </div>
        
        <p>
          It has an area of 807 km² and a population of 131,557 at the 2006 census, which is predominantly Berom. The LGA has boundaries with Kaduna and Nasarawa State.
        </p>
        
        <p>It is the gateway to the State when coming from the East and from Abuja.</p>
        <p>
            The postal code of the area is 931.
        </p>

        <p>
            Languages spoken in Riyom are Berom, Aten & Atakar.
        </p>
    </div>
@endsection