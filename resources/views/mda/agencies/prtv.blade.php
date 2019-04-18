@extends('layouts.app')  

@section('title')
  Plateau Radio and Television Corporation | Plateau State Government Website
@endsection

@section('header')
  Plateau Radio and Television Corporation
@endsection

@section('subheader')
  About Plateau Radio and Television Corporation
@endsection

@section('content')
  <div class="content uk-width-1-2@m">
    <h4>VISION</h4>
    <p>
      To be the most people centered and professionalized broadcast outfit in Nigeria.
    </p>

    <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
        <img class="object-fit" src="{{ URL::asset('/assets/img/image_03.png') }}" alt="">
    </div>

    <h4>MISSION STATEMENT</h4>
    <p>
      To be a formidable, innovative and creative broadcast outfit through we" motivated and  trained professionals. 
    </p>

    <h4>PROJECTS</h4>

    <p>
      Digitization; Installation of digital equipment in the Corporation's studio. 
    </p>
    <h4>FUTURE PLAN</h4>
    <ul>
      <li>To become fully digital.</li>
      <li>Corporation's website</li>
    </ul>
  </div>
@endsection