@extends('layouts.app')  

@section('title')
    Mangu LGA | Plateau State Government Website
@endsection

@section('header')
    Mangu Local Government Area
@endsection

@section('subheader')
    About Mangu
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h2 class="bold">Mangu</h2>
        <p>Mangu (or Mongu) is a Local Government Area in Plateau State, Nigeria. Its headquarters are in the town of Mangu at 9°31′00″N 9°06′00″E.</p>        

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img src="{{ URL::asset('/assets/img/LGAS-mangu.jpg') }}" alt="" style="height: 60%">
        </div>
        
        <p>
          It has an area of 1,653 km² and a population of 294,931 at the 2006 census.
        </p>
        <p>The postal code of the area is 932.</p>

        <p>
            Languages spoken in Mangu are Mwaghavul and Pyem.
        </p>
    </div>
@endsection