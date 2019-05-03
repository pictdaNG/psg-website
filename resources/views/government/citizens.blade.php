@extends('layouts.app')  

@section('title')
    Citizen Services | Plateau State Government Website
@endsection

@section('header')
    Citizen Services
@endsection

@section('subheader')
    About Citizen Services
@endsection

@section('content')
    <div class="content uk-width-1-2@m">

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img class="object-fit" src="{{ URL::asset('/assets/img/image_03.png') }}" alt="">
        </div>

        <h4>
            Featured Services
        </h4>
        
        <p>
            <ol class="uk-list uk-list-large uk-list-striped">
                <li>Pay Your Tax</li>
                <li>ePassport </li>
                <li>eCompany Registration</li>
                <li>ePassport (Apply Online)</li>
                <li>eDriving License( New Applications & Renewals)</li>                
            </ol>
        </p>        
    </div>
@endsection