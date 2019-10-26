@extends('layouts.app')  

@section('title')
    The Secretary to the State Government | Plateau State Government Website
@endsection

@section('header')
    The Secretary to the State Government
@endsection

@section('subheader')
    About The Secretary to the State Government
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h2 class="bold">Hon. Rufus Bature</h2>
        <p>Hon. Rufus Bature was appointed Secretary to the State Government. Hon. Rufus Bature is a Berom from Barkin Ladi Local Government. He was the minority leader of the Plateau State house of assembly during Senator JC Dariye’s administration as Governor. Before his recent appointment, he was a businessman and a politician.</p>

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img class="object-fit" src="{{ URL::asset('/assets/img/secretary.jpg') }}" alt="">
        </div>
        
    </div>
@endsection