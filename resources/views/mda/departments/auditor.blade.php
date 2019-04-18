@extends('layouts.app')  

@section('title')
    Office of the Auditor General | Plateau State Government Website
@endsection

@section('header')
    Office of the Auditor General
@endsection

@section('subheader')
    About Office of the Auditor General
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h4>MISSION</h4>
        <p>
            To ensure total quality management of resources through effective and efficient auditing such that all MDAs are made accountable to their responsibilities. 
        </p>

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img class="object-fit" src="{{ URL::asset('/assets/img/image_03.png') }}" alt="">
        </div>

        <h4>VISION</h4>
        <p>
            To promote efficient and effective monitoring of State Resources. 
        </p>

        <h4>Profile</h4>
        <p>
            The Department is a Statutory arm charged with the responsibility of ensuring that Internal Control System established by Government are working efficiently and effectively to safeguard the scarce resources of Government as enshrined in section 125 of the 1999 Constitution of the Federal Republic of Nigeria as amended. 
        </p>

        <h4>Functions</h4>
        <p>
            The Functions of the Department as per the Organization is as follows: - 
            <ol>
                <li>Finance and Personnel Management: This Section functions by coordinating the financial activities of the Accountant-General’s Office and defraying the Department’s expenses with same. It also co-ordinates the general administration of all personnel matters and attending to correspondences affecting both Staff and Inter-Governmental operations; </li>
                <li>Government/XBI – This Section reviews operations of Government Ministries, Schools, Courts and Extra – Ministerial Departments. It also serves as the Inter Audit Unit of the Audit Department to ensure that Expenditures are properly classified. This Section also ensures that Loan received are adequately recovered from Staff; </li>
                <li>Parastatals/XBII – The surveillance of all operations relating to Boards and Parastatals are co-ordinated by this Section. This Section reviews the Audit Report of the Parastatals in compliance with S. 125(4) of the 1999 Constitution of the Federal Republic of Nigeria; </li>
                <li> Pension/Subsidiary – This Section verifies the correctness of Computation of retirement benefits sent to it from the Pension Board and certifies same for payment. All retirement/death benefits are certified by this Department; </li>
                <li>Planning Research and Statistics – This Section coordinates the preparation of the Audit Department Budget as well as verifies Contracts. All Letters of Intent of Contracts are sent to this Department for verification. Statistical records are prepared by this Section to allow for the prediction of trends through ratio analysis; </li>
                <li>Zonal Operations – To allow for the coverage of operations in all Local Government in the State. Five Zonal Offices have been created, namely: Jos North, Barkin-Ladi, Pankshin, Langtang and Shendam. They report their Audit findings to the Director Government who in turns forward them to the accounting officer       of the agency concern for their prompt action. </li>
            </ol>
        </p>
    </div>
@endsection