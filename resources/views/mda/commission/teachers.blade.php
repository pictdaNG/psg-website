@extends('layouts.app')  

@section('title')
  Plateau State Teachers Council | Plateau State Government Website
@endsection

@section('header')
  Plateau State Teachers Council
@endsection

@section('subheader')
  About Plateau State Teachers Council
@endsection

@section('content')
  <div class="content uk-width-1-2@m">
    <h4>ESTABLISHMENT</h4>
    <p>
      The Teachers' Service Commission evolved from Teachers' State Board. The Law  establishing the Plateau State Teachers Service Commission (Law NO.3 of 1980) commenced 1st  January, 1980.
    </p>

    <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
        <img class="object-fit" src="{{ URL::asset('/assets/img/image_03.png') }}" alt="">
    </div>

    <h4>VISION</h4>
    <p>
      Working towards having a fleet of patriotic, loyal and dedicated professional teachers  who are committed to the cause of teaching-Iearning tasks that inculcate knowledge, skills and  good character in learners for a progressive Plateau State and ultimately, a better society. 
    </p>

    <h4>MISSION</h4>
    <p>
      To produce a crop of teachers who are knowledgeable in Plateau State Service rules,  who are erudite and skillful in techniques, the result of which shall be a motivated proficient  teaching workforce and learners rooted in academic excellence. 
    </p>

    <h4>FUNCTIONS/POWERS OF THE COMMISSION </h4>
    <ul>
      <li>To recruit, register, confirm, promote, transfer and discipline teachers of Government  Secondary Schools and Government Grant-aided schools. </li>
      <li>To enforce the establishment of Boards of Governors in Voluntary Agency Schools and  Advisory Boards in Government-owned Secondary Schools. </li>
      <li> Keep records of Teachers movements into and out of the service by whatever exit  mode. </li>
      <li>Liaise with the Ministry of Education and Education Directorates of quasi-governments  on matters concerning teachers and their welfare. </li>
      <li> To supervise all Government Secondary School and Grant-aided schools. </li>
    </ul>

    <h4>COMMISSIONERS OF THE COMMISSION</h4>
    <p>
      The Commission consists of a Full-time Chairman and at least two full-time Members one of whom should be a superintendent of schools and not more than 5 part-time members. 
    </p>

    <h4>STRUCTURE OF THE COMMISSION</h4>
    <ol>
      <li>Chairman Teacher' Service Commission  Commissioner I </li>
      <li>Commissioner II </li>
      <li>Permanent Secretary </li>
      <li>Director of Administration </li>
      <li>Director of Finance & Supplies  </li>
      <li>Assistant Chief Admin. Officer </li>
      <li>Staff Officer </li>
    </ol>

    <h4>FUTURE PLANS OF THE COMMISSION (INITIATIVES)</h4>
    <ul>
      <li>Massive recruitment of Teachers to fill in the gap created by those that retired from  service. </li>
      <li>Training and re-training of Teachers for a better workforce in the teaching  profession. </li>
      <li>Inter-State transfer of Plateau State indigenes from crises prone areas (States). </li>
    </ul>

  </div>
@endsection