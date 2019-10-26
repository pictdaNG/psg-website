@extends('layouts.app')  

@section('title')
    HUMAN CAPITAL DEVELOPMENT AND SOCIAL WELFARE | Plateau State Government Website
@endsection

@section('header')
    <!-- HUMAN CAPITAL DEVELOPMENT AND SOCIAL WELFARE -->
    {{ $post->title }}
@endsection

@section('subheader')
    <!-- About HUMAN CAPITAL DEVELOPMENT AND SOCIAL WELFARE -->
    {{ $post->title }}
@endsection

@section('content')
    <div class="content uk-width-1-2@m">        
     

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img class="object-fit" src="../uploads/images/{{$post->feature_image}}" alt="" />
        </div>
        
        <p>
        {!! $post->body !!}
        </p>
        
    </div>
@endsection