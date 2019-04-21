@extends('layouts.app')  

@section('title')
    Download Quarterly Reports | Plateau State Government Website
@endsection

@section('header')
    Download Quarterly Reports
@endsection

@section('subheader')
    Download Quarterly Reports
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h2 class="bold">Download Quarterly Reports</h2>
        <p>
            Download Reports 
            Accountant General Report 2015
            Auditor General Report 2015

            First Quarter 2016
            Second Quarter 2016
            Third Quarter 2016
            Fourth Quarter 2016
            Accountant General Report 2016
            Auditor General Report 2016

            First Quarter 2017
            Second Quarter 2017
            Budget 2017

            Accountant General Report With Financial Statements 2017

        </p>

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img class="object-fit" src="{{ URL::asset('/assets/img/chiefofstaff.jpg') }}" alt="">
        </div>
        
    </div>
@endsection