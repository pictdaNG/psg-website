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
            <ol class="uk-list uk-list-striped">
                <li><a href="{{ route('barkinladi') }}">Barkin Ladi</a></li>
                <li><a href="{{ route('bassa') }}">Bassa </a></li>
                <li><a href="{{ route('bokkos') }}">Bokkos </a></li>
                <li><a href="{{ route('joseast') }}">Jos-East </a></li>
                <li><a href="{{ route('josnorth') }}">Jos-North </a></li>
                <li><a href="{{ route('jossouth') }}">Jos-South </a></li>
                <li><a href="{{ route('kanam') }}">Kanam </a></li>
                <li><a href="{{ route('kanke') }}">Kanke </a></li>
                <li><a href="{{ route('langtangnorth') }}">Langtang North </a></li>
                <li><a href="{{ route('langtangsouth') }}">Langtang South </a></li>
                <li><a href="{{ route('mangu') }}">Mangu </a></li>
                <li><a href="{{ route('mikang') }}">Mikang </a></li>
                <li><a href="{{ route('pankshin') }}">Pankshin </a></li>
                <li><a href="{{ route('quaanpan') }}">Qua'an Pan </a></li>
                <li><a href="{{ route('riyom') }}">Riyom </a></li>
                <li><a href="{{ route('shendam') }}">Shendam </a></li>
                <li><a href="{{ route('wase') }}">Wase</a></li>
            </ol>
        </p>        
    </div>
@endsection