@extends('layouts.app')  

@section('title')
    Natural Resources | Plateau State Government Website
@endsection

@section('header')
    Natural Resources
@endsection

@section('subheader')
    About Natural Resources
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h2 class="bold">Natural Resources</h2>
        

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img class="object-fit" src="{{ URL::asset('/assets/img/image_03.png') }}" alt="" />
        </div>
        
    </div>
@endsection