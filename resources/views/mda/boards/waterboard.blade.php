@extends('layouts.app')  

@section('title')
  Plateau State Water Board | Plateau State Government Website
@endsection

@section('header')
  Plateau State Water Board
@endsection

@section('subheader')
  About Plateau State Water Board
@endsection

@section('content')
  <div class="content uk-width-1-2@m">
    <h4>MISSION</h4>
    <p>
      To Establish, Control, Manage, Extend and Develop such new water works, to extend and develop such existing ones as the Board may consider necessary for the purpose of providing sustainable potable water in order to meet the requirements of the general public at reasonable charges.
    </p>

    <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
        <img class="object-fit" src="{{ URL::asset('/assets/img/image_03.png') }}" alt="">
    </div>

    <h4>VISION</h4>
    <p>
      To be one of the leading Water Supply Agencies in Nigeria. 
    </p>

    <h4>Introduction and Background</h4>

    <p>
      The Plateau State Edict No.4 of 1991 established Plateau State Water Board. The Board is saddled with the responsibility to supply potable water to the teaming populace of Plateau State.
    </p>
    <p>
      The Board is also responsible for the control, management and extension of water works in the State as contained in the Edict.
    </p>
    
    <h4>ACHIEVEMENT</h4>
    <h5>EXPANSION OF PIPELINE NETWORK</h5>
    <p>
      Project Components completed under Expansion of Pipelines Network
      <ol>
        <li>Distance covered in pipe laying and jointing and replacement of aged pipes in the various locations and areas is about 100km. </li>\
        <li>Construction of 1,000m3 Steel Ground Tank at Wildlife Park </li>
        <li>Construction of 5,0003 Concrete Clear Water Reservoir, Flocculation tank, Filters, Backwash tank and Sedimentation tank all at Old Filter House Treatment Plant. </li>
        <li>
          Project Components On-Going
          <ol>
            <li>Installation of Mimic Panel at Yakubu Gowon Dam Water T/Plant </li>
            <li>Pipe laying and jointing in the various locations and areas </li>
            <li>Construction of 5,OOOm3Concrete Reservoir at Dwei-Du (Lion Hill) </li>
            <li>Construction of Chemical Building and offices at the Old Filter House T/Plant </li>
          </ol>
        </li>
      </ol>
    </p>

    <h5>DREDGING OF YELWA, RABIN•DU WATER PONDS</h5>
    <p>
      
      <ol>
        <li>The Dredging and Expansion of Yelwa Pond has been completed awaiting stone pitching. The pond now contains large volume of raw water to supply 8ukuru and environs. </li>
        <li>The Dredging and Expansion of Rabin-Du is on-going though the rains affected the progress of work. </li>
        <li>Percentage of work completion is about 50%.</li>
      </ol>
    </p>
    
  </div>
@endsection