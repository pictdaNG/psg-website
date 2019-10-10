@extends('layouts.app')  

@section('title')
    Barkin Ladi LGA | Plateau State Government Website
@endsection

@section('header')
    Barkin Ladi Local Government Area
@endsection

@section('subheader')
    About Barkin Ladi
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h2 class="bold">Barkin Ladi</h2>
        <p>Barkin Ladi (or Barakin Ladi) is a Local Government Area in Plateau State, Nigeria. Its headquarters are in the town of Barkin Ladi at 9°32′00″N 8°54′00″E.</p>

        

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img src="{{ URL::asset('/assets/img/LGAS-barkin-ladi.jpg') }}" alt="" style="height: 60%">
        </div>
        
        <p>
          It has an area of 1,032 km² and a population of 175,267 at the 2006 census. Plateau state Polytechnic is Located in this town. The postal code of the area is 932.
        </p>
        <p>
          Languages spoken in Barkin Ladi are Berom,Foron & Gashish.
        </p>
    </div>
@endsection