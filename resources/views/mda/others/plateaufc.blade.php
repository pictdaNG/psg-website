@extends('layouts.app')  

@section('title')
  Plateau United Football Club | Plateau State Government Website
@endsection

@section('header')
  Plateau United Football Club
@endsection

@section('subheader')
  About Plateau United Football Club
@endsection

@section('content')
  <div class="content uk-width-1-2@m">
    <p>
      Plateau United Football Club Jos, was established since 1975 and has so far gone through various stages and have ever relevant in Nigeria Football. The club has since inception remained the flag bearer for the state in both Nigeria Premier League and National League championship with players that had once played for the club are now playing in both International and Foreign club sides.
    </p>

    <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
        <img class="object-fit" src="{{ URL::asset('/assets/img/image_03.png') }}" alt="">
    </div>

    <h4>VISION</h4>
    <p>
      To maintain and sustain leadership position of Plateau State in Football talent discovery, development and exposure for Local, National, and International Sports development.
    </p>

    <h4>MISSION</h4>
    <p>
      To obtain and maximize football talent through grassroots Sports development and promoting youth empowerment on the Plateau.
    </p>

    <h4>OBJECTIVES/ CORE VALUES OF PLATEAU STATE SPECIALIST HOSPITAL</h4>
    <ul>
      <li>Sanctity of the human life</li>
      <li>Commitment to excellence</li>
      <li>Discipline </li>
      <li>Cleanliness and good hygiene in the work place </li>
      <li>Quality and motivated manpower </li>
      <li>Teamwork</li>
      <li>Value based/participatory leadership</li>
      <li>Prudent management of scare resources.</li>
    </ul>

    <h4>Management Structure</h4>
    <p>
      The club is headed by General Manager and Technical Director that heads both the administrative and technical departments. There are other officers like the club secretary, Accountant, Team Manager, Chief Coach and his assistant, then other axillaries staff.
    </p>

    <h4>Club Future Plan</h4>
    <ol type="i">
      <li>Increase in youth empowerment </li>
      <li>Help to provide gainful employment for the youth through football, thereby reducing youth restiveness and other social vices</li>
      <li>Promote peaceful co-existence to one-another irrespective of religion ethnicity on the Plateau</li>
      <li>To provide a very good image for our dear State (Plateau) by the continued participation in inter-state organized football competition.</li>      
    </ol>

    <h4>ACHIEVEMENT</h4>
    <p>
      It is on record to say categorically that the club has made tremendous achievement.
    </p>
    <p>
      The club won the State Federation/Challenge Cup since 2012 – 2014 consecutively and has performed well at the National challenge Cup.
    </p>
    
    <h4>SOURCES OF REVENUE</h4>
    <ol type="a">
      <li>
        <strong>Sales of players:-</strong> The club keyed into the resent government emphases on revenue generation. The club in collaboration with international clubs and agents have sold some of her players to these clubs and thereby served as a major source of generating fund for the government, for example in the year 2012/2013 a total sum of about twelve million naira (N12,000,000.00) was realized from selling of players to international clubs.
      </li>
      <li><strong>Gage-takings:-</strong> Plateau United remains the state darling team, the club generate revenue for the government through gate-taking during matches. </li>
      <li><strong>Transfer of player:-</strong> the club enjoyed a considerable fund through transfer of players to other club sides with the country.</li>
    </ol>
  </div>
@endsection