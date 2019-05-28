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

        <h4> 2019 Quarterly Reports </h4>
        <ul class="uk-list uk-list-striped">
            <li>
                <a href="{{ URL::asset('assets/documents/2019/QUARTERLY-REPORT-CAPITAL-EXPENDITURE-JANUARY-TO-MARCH-2019-1.pdf') }}">
                    QUARTERLY REPORT CAPITAL EXPENDITURE JANUARY TO MARCH 2019
                </a>
            </li>
            <li>
                <a href="{{ URL::asset('assets/documents/2019/QUARTERLY-REPORT-OVERHEAD-COST-JANUARY-TO-MARCH-2019-1.pdf') }}">
                    QUARTERLY REPORT OVERHEAD COST JANUARY TO MARCH 2019
                </a>
            </li>
            <li>
                <a href="{{ URL::asset('assets/documents/2019/QUARTERLY-REPORT-PERSONNEL-COST-JANUARY-TO-MARCH-2019-1.pdf') }}">
                    QUARTERLY REPORT PERSONNEL COST JANUARY TO MARCH 2019
                </a>
            </li>
            <li>
                <a href="{{ URL::asset('assets/documents/2019/QUARTERLY-REPORT-REVENUE-JANUARY-TO-MARCH-2019-1.pdf') }}">
                    QUARTERLY REPORT REVENUE JANUARY TO MARCH 2019
                </a>
            </li>
            <li>
                <a href="{{ URL::asset('assets/documents/2019/QUARTERLY-REPORT-JAN-TO-MAR-2019-Federal-Allocation-to-Plateau-State.pdf') }}">
                    QUARTERLY REPORT JANUARY TO MARCH 2019 FEDERAL ALLOCATION TO PLATEAU STATE
                </a>
            </li>
        </ul>

        <hr />

        <h4> 2017 Quarterly Reports </h4>

        <ul class="uk-list uk-list-striped">
            <li>
                <a href="{{ URL::asset('assets/documents/first_qtr_2017.pdf') }}">
                    First Quarter 2017
                </a>
            </li>
            <li>
                <a href="{{ URL::asset('assets/documents/second_qtr_2017.pdf') }}">
                    Second Quarter 2017
                </a>
            </li>
            <li>
                <a href="{{ URL::asset('assets/documents/2017_approved_budget.pdf') }}">
                    Budget 2017
                </a>
            </li>
            <li>
                <a href="{{ URL::asset('assets/documents/accountant_general_report_with_financial_statements_2017.pdf') }}">
                    Accountant General Report With Financial Statements 2017
                </a>
            </li>
        </ul>

        <hr />
        <h4> 2016 Quarterly Reports </h4>

        <ul class="uk-list uk-list-striped">
            <li>
                <a href="{{ URL::asset('assets/documents/first_qtr_2016.pdf') }}">
                    First Quarter 2016
                </a>
            </li>
            <li>
                <a href="{{ URL::asset('assets/documents/first_qtr_2016.pdf') }}">
                    First Quarter 2016
                </a>
            </li>
            <li>
                <a href="{{ URL::asset('assets/documents/second_qtr_2016.pdf') }}">
                    Second Quarter 2016
                </a>
            </li>
            <li>
                <a href="{{ URL::asset('assets/documents/third_qtr_2016.pdf') }}">
                    Third Quarter 2016
                </a>
            </li>
            <li>
                <a href="{{ URL::asset('assets/documents/fourth_qtr_2016.pdf') }}">
                    Fourth Quarter 2016
                </a>
            </li>
            <li>
                <a href="{{ URL::asset('assets/documents/accountant_general_report_2016.pdf') }}">
                    Accountant General Report 2016
                </a>
            </li>
            <li>
                <a href="{{ URL::asset('assets/documents/auditor_general_report_2016.pdf') }}">
                    Auditor General Report 2016
                </a>
            </li>
        </ul>

        <hr>
        <h4> 2015 Quarterly Reports </h4>
        <ul class="uk-list uk-list-striped">
            <li>
                <a href="{{ URL::asset('assets/documents/accountant_general_report_2015.pdf') }}">
                    Accountant General Report 2015
                </a>
            </li>
            <li>
                <a href="{{ URL::asset('assets/documents/auditor_general_report_2015.pdf') }}">
                    Auditor General Report 2015
                </a>
            </li>
        </ul>        
    </div>
@endsection