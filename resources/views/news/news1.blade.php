@extends('layouts.app')

@section('title')
    Plateau State establishes agency for ICT development | Plateau State Government Website
@endsection

@section('header')
    <!-- Plateau State establishes agency for ICT development -->
    {{ $new->title }}
@endsection

@section('subheader')
    <!-- Plateau State establishes agency for ICT development -->
    {{ $new->title }}
@endsection

@section('content')
<div class="content uk-width-1-2@m">
    <!-- <h2 class="bold">NATURAL ENDOWMENTS</h2> -->
    <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
        <img class="object-fit" src="../uploads/images/{{$new->news_image}}" alt="">
    </div>
    <p>
    {!!  $new->body !!}
    </p>
    <div class="sharethis-inline-share-buttons"></div>
                        
</div>
@endsection