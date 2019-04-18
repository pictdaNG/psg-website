@extends('layouts.app')  

@section('title')
  Plateau State Independent Electoral Commission | Plateau State Government Website
@endsection

@section('header')
  Plateau State Independent Electoral Commission
@endsection

@section('subheader')
  About Plateau State Independent Electoral Commission
@endsection

@section('content')
  <div class="content uk-width-1-2@m">
    <h4>VISION STATEMENT</h4>
    <p>
      To contribute to the growth of democratic ideals in Plateau State and impact positively on democracy in Nigeria.
    </p>

    <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
        <img class="object-fit" src="{{ URL::asset('/assets/img/image_03.png') }}" alt="">
    </div>

    <h4>MISSION STATEMENT</h4>
    <p>
      To conduct credible Local Government Elections in Plateau State in accordance with set rules, guidelines and world best practices.
    </p>

    <h4>PROFILES</h4>
    <p>
      PLASIEC is a creation of law as contained in S. 197 of the constitution of the Federal Republic of Nigeria. It is a body corporate with perpetual succession, and may sue and be sued in its corporate name.
    </p>
    <p>
      The Commission is comprised of a Chairman and members who must not be less than five, but not more than seven in number who serve as commissioners.
    </p>
    
    <h4>THE PLANS OF PLASIEC</h4>
    
    <p>
      The Commission has an ultra modern office complex located at No 7 John Mark Samci Road, Jos. To enhance the functionality of the office, the Commission has plans to construct a Store House and a Library. There is also a proposal to landscape the premises to make for scenic beauty and enhance proper use of space.
    </p>

    <p>
      In accordance with our Vision and Mission, PLASIEC conducted Local Government elections in 15 out of the 17 Local Governments in Plateau State in February 2014. This election was largely acclaimed to be free, fair and credible for which the Commission received awards from the following groups:-

      <ol>
        <li>World Youth Peace Mission (WYPEM)</li>
        <li>Nigeria Progressive Youth Congress</li>
        <li>National Association of Nigerian Students (NANS)</li>
        <li>Peace and Unity Organization.</li>
      </ol>
    </p>

  </div>
@endsection