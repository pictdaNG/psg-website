@extends('layouts.app')  

@section('title')
    The Governor| Plateau State Government Website
@endsection

@section('header')
    The Governor
@endsection

@section('subheader')
    About The Governor
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h2 class="bold">HON. SIMON BAKO LALONG</h2>
        <p>Rt. Hon. Simon Lalong (born May 5, 1963) was elected Governor of Plateau State, Nigeria in April 2015. He has held various offices and can be described as a veteran in Plateau politics.</p>

        <div class="uk-child-width-1-1@m govImg uk-grid-small" uk-grid>
            <img class="object-fit" src="{{ URL::asset('/assets/img/lalong-banner.jpg') }}" alt="">
        </div>

        <p>Educated at the <strong>Ahmadu Bello University (LLB)</strong> and the <strong>University of Jos</strong>- Nigeria (LLM),  thereafter began his political career and journey to destiny and has served  as Legal Luminary and Community Developer, then <strong>Speaker Plateau State House of Assembly</strong> (2000-2006),  also, Chairman conference of Speakers of Nigeria (2005-2006), and Member Representing Shendam Constituency at the Plateau State House of Assembly (1999-2006). </p>        
    </div>
@endsection