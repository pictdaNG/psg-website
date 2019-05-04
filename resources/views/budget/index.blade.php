@extends('layouts.app')

@section('title')
    2019 Budget | Plateau State Government Website
@endsection

@section('header')
    2019 Budget
@endsection

@section('subheader')
    2019 Budget
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h4>2019 Budget</h4>
        
        <ul class="uk-list uk-list-striped">
            <li>
                <a href="{{ URL::asset('assets/documents/2019/2019-PLATEAU-STATE-APPROVED-BUDGET-1.pdf') }}">2019 PLATEAU STATE APPROVED BUDGET</a>
            </li>
            <li>
                <a href="{{ URL::asset('assets/documents/2019/CITIZENS-PARTICIPATION-IN-BUDGET-PROCESS-2019-PLATEAU-CENTRAL.pdf') }}">CITIZENS PARTICIPATION IN BUDGET PROCESS 2019 PLATEAU CENTRAL</a>
            </li>
            <li>
                <a href="{{ URL::asset('assets/documents/2019/CITIZENS-PARTICIPATION-IN-BUDGET-PROCESS 2019-PLATEAU-SOUTH.pdf') }}">CITIZENS PARTICIPATION IN BUDGET PROCESS 2019 PLATEAU SOUTH</a>
            </li>
            <li>
                <a href="{{ URL::asset('assets/documents/2019/CITIZENS- PARTICIPATION IN-BUDGET-PROCESS-2019-PLATEAU-NORTH.pdf') }}">CITIZENS PARTICIPATION IN BUDGET PROCESS 2019 PLATEAU NORTH</a>
            </li>

            
            
            <li>
                PLATEAU STATE 2019 CITIZENS ENGAGEMENT IN THE STATE BUDGETING PROCESS RADIO ADVERTISEMENT <br />
                <audio controls>
                  <source src="{{ URL::asset('assets/documents/2019/Advertisement-for-Citizens-Budget.mpeg') }}" type="audio/mpeg">
                  <p>Your browser doesn't support audio. Here is
                     a <a href="{{ URL::asset('assets/documents/2019/Advertisement-for-Citizens-Budget.mpeg') }}" download>link to the audio</a> instead.</p>
                </audio>
            </li>

            <li>
                <a href="{{ URL::asset('assets/documents/2019/2019-PLATEAU-STATE-BUDGET-BREAKDOWN.pdf') }}">
                    PLATEAU STATE 2019 BUDGET BREAKDOWN
                </a>
            </li>
            <li>
                <a href="{{ URL::asset('assets/documents/2019/PLATEAU-STATE-APPROPRIATION-BILL-2019.pdf') }}">
                    PLATEAU STATE APPROPRIATION BILL
                </a>
            </li>
        </ul>

        <ul class="uk-list uk-list-striped">
            <li>
                <a href="">Advertisement for Citizens Budget</a>
            </li>
            <li>
                <a href="{{ route('2019approved') }}">2019 Approved Budget</a>
            </li>
            <li>
                <a href="{{ route('citizens2019approved') }}">PLATEAU STATE CITIZENS’BUDGET 2019</a>
            </li>
        </ul>

        <p>
        </p>

    </div>
@endsection