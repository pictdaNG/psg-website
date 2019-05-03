@extends('layouts.app')  

@section('title')
    Bassa LGA | Plateau State Government Website
@endsection

@section('header')
    Bassa Local Government Area
@endsection

@section('subheader')
    About Bassa
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h2 class="bold">Bassa</h2>
        <p>Bassa is a Local Government Area in the north of Plateau State, Nigeria, bordering Kaduna and Bauchi States. Its headquarters are in the town of Bassa at 9°56′00″N 8°44′00″E.</p>

        

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img src="{{ URL::asset('/assets/img/LGAS-Bassa.jpg') }}" alt="" style="height: 60%">
        </div>
        
        <p>
            It has an area of 1,743 km² and a population of 186,859 at the 2006 census.
        </p>
        <p>
          The postal code of the area is 930.
        </p>
        <p>
          Languages spoken in Bassa are Irigwe, Amo, Rukuba, Buji, Chawe, Jere, Gusu, Kurama, Limoro, Tariya, Sanga, Janji, Duguza & Chokobo.
        </p>        
    </div>
@endsection