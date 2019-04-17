@extends('layouts.app')

@section('title')
    Welcome! History| Plateau State Government Website
@endsection

@section('header')
    Natural Endowments
@endsection

@section('subheader')
    Endowments of Plateau State
@endsection

@section('content')
<div class="content uk-width-1-2@m">
    <h2 class="bold">NATURAL ENDOWMENTS</h2>
    <p>Jos is the cradle of Tin mining operations on the Jos Plateau.  The State  has unique and beautiful climate that is conducive for the production  of  cotton, groundnuts, rice, Irish potatoes, maize, soyabean.
    </p>
    <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
        <img class="object-fit" src="{{ URL::asset('./assets/img/endowments-bg.jpg') }}" alt="">
    </div>
    <p>Plateau state has a very rich cultural heritage.  The Nok culture one of the earliest iron smelting cultures dating between 500 BC and AD 200 is associated with the area.
    </p>
    <p>The National Museum at Jos, the oldest in the country.  Museum of Traditional Nigerian Architecture, containing various architectural designs of major Nigerian ethnic groups.  Jos wildlife Safari Park, Zoological Gardens.  Asop Falls, Kura falls, Wase Rock & Kerang volcanic Mountain where the population Swan brand spring water is produced in Shere Hills.</p>
</div>
@endsection