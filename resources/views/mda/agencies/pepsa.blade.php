@extends('layouts.app')  

@section('title')
  Plateau Environmental Protection and Sanitation Agency (PEPSA) | Plateau State Government Website
@endsection

@section('header')
  Plateau Environmental Protection and Sanitation Agency (PEPSA)
@endsection

@section('subheader')
  About Plateau Environmental Protection and Sanitation Agency (PEPSA)
@endsection

@section('content')
  <div class="content uk-width-1-2@m">
    <h4>VISION</h4>
    <p>
      To ensure a safe, clean and an orderly environment with our eco-system at state of equilibrium for healthy human habitation.
    </p>

    <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
        <img class="object-fit" src="{{ URL::asset('/assets/img/image_03.png') }}" alt="">
    </div>

    <h4>MISSION STATEMENT</h4>
    <p>
      To enhance public participation, sensitize the people to imbibe the habit of keeping their environments clean, thereby promoting good health for the citizenry and reducing cost to government.
    </p>

    <h4>FUTURE PLAN (INITIATIVES)</h4>
    <ol>
      <li>Development of final disposal sites(fencing, provision of weigh bridges, laboratories, offices and stores).</li>
      <li>Procurement of plants and vehicles for waste management(refuse trucks, bull-dozers, pail-loader, low-bed trucks, cess-pool vans, etc).</li>
      <li>Establishment of economic recovery Centre for recyclable waste materials (metals, bottles, plastics, polythenes, paper, etc).</li>
      <li>Privatization and commercialization of solid waste management in the sub-urban and urban cities of Plateau state</li>
    </ol>
  </div>
@endsection