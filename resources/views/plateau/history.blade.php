@extends('layouts.app')

@section('title')
    Welcome! History| Plateau State Government Website
@endsection

@section('header')
    History
@endsection

@section('subheader')
    History of Plateau State
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h2 class="bold">OUR HISTORY</h2>
        <p>Plateau state has been adjusted to its present borders many times. Colonial manipulation was from a desire to protect the railway construction and guarantee a safe passage of mined tin to the coast. The British began to exert colonial control of Nigeria in the early 20th century.
        </p>
        <p>In 1926, Plateau Province, made up of Jos and Pankshin Divisions. The border changed several times in subsequent years as the government sought not to split ethnic groups. In May 1967, Benue and Plateau Provinces were merged to form the large Benue-Plateau State.he railway construction and guarantee a safe passage of mined tin to the coast. The British began to exert colonial control of Nigeria in the early 20th century.
        </p>
        <div class="uk-child-width-1-2@m uk-grid-small" uk-grid>
            <img class="object-fit" src="{{ URL::asset('./assets/img/hist-1.jpg') }}" alt="">
            <img class="object-fit" src="{{ URL::asset('./assets/img/hist-2.jpg') }}" alt="">
        </div>
        <p>At this time Nigeria had twelve states. Following the civil war, Benue-Plateau State was one of several large states which were further split up following pressure on the Federal Government. Under the military administration of General Yakubu Gowon, the country was further divided into nineteen states in 1976 and Plateau State was created from Benue-Plateau covering the area of the original Plateau Province. In 1996, Plateau State was further subdivided to create Nasarawa State which was carved out of the western half of Plateau State by Sani Abacha's military regime.</p>

        <p>Tin mining activities began in 1902 under the British and continue to the present day.</p>
    </div>
@endsection