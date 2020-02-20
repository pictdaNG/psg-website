@extends('layouts.app')  

@section('title')
    Investment | Plateau State Government Website
@endsection

@section('header')
    Investment
@endsection

@section('subheader')
    About Investment
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h2 class="bold">INVESTMENT OPPORTUNITIES.</h2>
        <p>Lucrative Investment opportunities exist in the non-oil sector of the state's economy. Some of these areas include: </p>        

        <ul class="uk-list uk-list-striped">
            <li>Mineral Water Project</li>
            <li>The Integrated Industrial Mineral project (kaolin,gypsum,lime).</li>
            <li>Metallic Mineral Dressing and processing Plant</li>
            <li>The Dimension Stone projects</li>
            <li>The Gem City project (Jewellery and Gems).</li>
            <li>The Burnt (Clay) Bricks projects. </li>
            <li>Agriculture: Fish farming, palm-tea-cocoa and sugar cane plantation, animal husbandry, livestock production etc.</li>
            <li>Tourism: Art Gallery, Souvenir shops, amusement park, recreational</li>
        </ul>

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img class="object-fit" src="{{ URL::asset('/assets/img/investment.jpg') }}" alt="" />
        </div>
        
        <ul class="uk-list uk-list-striped">
            <li>
                <a href="{{ URL::asset('/assets/documents/2 (25).pdf') }}">2 (25)</a>
            </li>
            <li>
                <a href="https://plug-storage.s3.eu-west-3.amazonaws.com/2+(25).pdf">2 (25)</a>
            </li>
        </ul>
        
    </div>
@endsection