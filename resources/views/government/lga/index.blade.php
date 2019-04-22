@extends('layouts.app')  

@section('title')
    Local Government Areas | Plateau State Government Website
@endsection

@section('header')
    Local Government Areas
@endsection

@section('subheader')
    About Local Government Areas
@endsection

@section('content')
    <div class="content uk-width-1-2@m">

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img class="object-fit" src="{{ URL::asset('/assets/img/image_03.png') }}" alt="">
        </div>
        
        <p>
            <ol class="uk-list uk-list-bullet uk-list-striped">
                <li>Barkin Ladi</li>
                <li>Bassa </li>
                <li>Bokkos </li>
                <li>Jos-East </li>
                <li>Jos-North </li>
                <li>Jos-South </li>
                <li>Kanam </li>
                <li>Kanke </li>
                <li>Langtang North </li>
                <li>Langtang South </li>
                <li>Mangu </li>
                <li>Mikang </li>
                <li>Pankshin </li>
                <li>Qua'an Pan </li>
                <li>Riyom </li>
                <li>Shendam </li>
                <li>Wase</li>
            </ol>
        </p>        
    </div>
@endsection