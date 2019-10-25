@extends('layouts.app')  

@section('title')
    The Chief of Staff, Government House | Plateau State Government Website
@endsection

@section('header')
    The Chief of Staff, Government House
@endsection

@section('subheader')
    About The Chief of Staff, Government House
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h2 class="bold">John Dafa’an</h2>
        <p>John Dafa’an, Chief of Staff Government House. John Dafa’an hails from Quanpa’an local government and until his appointment was a politician and a businessman. He was once the former director of protocol Government house during Senator JC Dariye’s administration as governor and recently the deputy Governorship aspirant to Arch. PD Gyang.</p>

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img class="object-fit" src="{{ URL::asset('/assets/img/chiefofstaff.jpg') }}" alt="">
        </div>
        
    </div>
@endsection