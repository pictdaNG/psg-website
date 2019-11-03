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
    <div class="uk-child-width-1-1@m uk-grid-small" uk-grid >
      <img class="object-fit" src="{{$new->news_image}}" alt="{{ $new->title }}">
    </div>
    <div class="sharethis-inline-share-buttons" style="margin-top: 20px; margin-bottom: 20px;"></div>
    <div>
      {!! $new->body !!}
    </div>
    <div class="sharethis-inline-share-buttons" style="margin-top: 20px;"></div>
  </div>
@endsection