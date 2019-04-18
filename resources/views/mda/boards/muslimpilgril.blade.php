@extends('layouts.app')  

@section('title')
  Muslim Pilgrim Welfare Board | Plateau State Government Website
@endsection

@section('header')
  Muslim Pilgrim Welfare Board
@endsection

@section('subheader')
  About Muslim Pilgrim Welfare Board
@endsection

@section('content')
  <div class="content uk-width-1-2@m">
    <h4>Vision and Mission Statements</h4>
    <p>
      Our Vision and Mission is to organize and accompany the intending pilgrims of Plateau State to the Holy Land (Saudi Arabia) for the Hajj exercise.  
    </p>

    <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
        <img class="object-fit" src="{{ URL::asset('/assets/img/image_03.png') }}" alt="">
    </div>

    <h4>Ministry/Principal Staff Profiles</h4>
    <p>
      The Muslim Pilgrims Welfare Board has the following Principal Officers
      <ol type="a">
        <li>The Chairman and Eight (8) Board Members (on part time basis)</li>
        <li>The Executive Secretary. He is the Accounting Officer of the Board </li>
        <li>Director Operations </li>
        <li>Director of Administration </li>
        <li>Director of Finance and Supply </li>
      </ol>
    </p>

    <h4>Future Plan</h4>
    <ol>
      <li>The Muslim Pilgrims Welfare Board intends to secure a permanent office accommodation.</li>
      <li>We intend to install a database for the Board to safeguard our records. </li>
    </ol>
    
    <h4>Capital Project</h4>
    <p>
      Provision was made for the construction of Pilgrims Transit Camp establishment of ICT Centre, Procurement of Toyota Hilux Vehicle, building of borehole etc. These Projects were not executed because there was no cash backing in 2014. 
    </p>
    
  </div>
@endsection