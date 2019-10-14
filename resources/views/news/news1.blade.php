@extends('layouts.app')

@section('title')
  {{ $new->title }} | Plateau State Government Website
@endsection

@section('header')
  {{ $new->title }}
@endsection

@section('subheader')
  {{ $new->title }}
@endsection

@section('content')
  <div class="content uk-width-1-2@m">

    <div class="sharethis-inline-share-buttons"></div>

    <div class="uk-child-width-1-1@m uk-grid-small" uk-grid style="margin-top: 20px;">
      <img class="object-fit" src="../uploads/images/{{$new->news_image}}" alt="{{ $new->title }}">
    </div>
    <p>
      {!! $new->body !!}
    </p>
    <div class="sharethis-inline-share-buttons"></div>
  </div>
@endsection