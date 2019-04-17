@extends('layouts.app')  

@section('title')
    Taxes and Taxation | Plateau State Government Website
@endsection

@section('header')
    Taxes and Taxation
@endsection

@section('subheader')
    About Taxes and Taxation
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h2 class="bold">Taxes and Taxation</h2>

        <h4>Taxes/Levies Collectible by State Governments</h4>

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img class="object-fit" src="{{ URL::asset('/assets/img/business.jpg') }}" alt="" />
        </div>

        <ol>
            <li>
                Personal income tax:
                <ul type="-">
                    <li>Pay-As-You-Earn (PAYE);</li>
                    <li>Direct (self and government) assessment; </li>
                    <li>Withholding tax (individuals only); </li>
                </ul>
            </li> 
            <li>Capital gains tax;</li>
            <li>Stamp duties (instruments executed by individuals);  Pools betting, lotteries, gaming and casino taxes;</li>
            <li>Road taxes; </li>
            <li>
                Business premises registration and renewal levy;
                <ul>
                    <li>
                        urban areas (as defined by each state): maximum of N 10,000 for registration and N5 ,000 for the renewal per annum
                    </li>
                    <li>rural areas </li>
                    <li>registration N2,000 per annum </li>
                    <li>renewal N 1,000 per annum</li>
                </ul>
            </li>
            <li>Development levy (individuals only) not more than N100 per annum on all taxable individuals;</li>
            <li>Naming of street registration fee in state capitals </li>
            <li>Right of occupancy fees in state capitals;</li>
            <li>Rates in markets where state finances are involved. </li>
        </ol>       
        
    </div>
@endsection