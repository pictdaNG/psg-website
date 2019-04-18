@extends('layouts.app')  

@section('title')
    Plateau State Printing Press | Plateau State Government Website
@endsection

@section('header')
    Plateau State Printing Press
@endsection

@section('subheader')
    About Plateau State Printing Press
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h4>VISION and MISSION </h4>
        <p>
            The primary mission of the plateau printing press is to take a leading position in providing quality printing services that are unique and relevant to the varied of our customers, and to attain high performance through the use of appropriate technology and a skilled and dedication workforce, thereby booting our revenue base. 
        </p>

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img class="object-fit" src="{{ URL::asset('/assets/img/image_03.png') }}" alt="">
        </div>

        <h4>Objectives</h4>
        <p>
            To intensify efforts towards greater revenue generation in order to make the press viable, self- sustaining and a major revenue earner for the Government
        </p>

        <ul>
            <li>To build a good name for the press through the provision of quality printing service in order to meet customer needs at relatively low costs while maximizing profit. </li>
            <li>To maintain a first position in the provision of unique and specialized services using appropriate technology. </li>
            <li>To explore other revenue sources and expand production capacity to accommodate the needs of customers within and beyond the borders of Plateau state. </li>
            <li>To provide the staff with the opportunity and training required to develope their talent to reach their full potentials. </li>
            <li>To provide security and safety of machinery and operatives. </li>
            <li>To direct and manage the press resources through a strong, efficient and effective management team </li>
        </ul>

        <h4>Our services include</h4>

        <ul>
            <li>Printing of all information dissemination materials for the state Government. </li>
            <li>Printing of all documents such as Gazettes, White papers, Receipt, Vouchers, Calendars, Diaries, Programmes, Reports, etc. </li>
            <li>Mass production of posters, signboards/advert Materials, Banners, Stickers, T-shirts, Caps and other corporate branding items on commercial basis. </li>
            <li>Mass production of assorted Nigeria National Flags for sale to all public and private organizations e.g of Banks Schools, Hospitals, Government offices, etc. </li>
            <li>General commercial printing for revenue generation to Government.</li>
        </ul>

        <h4>Completed Projects</h4>

        <ol>
            <li>Refurbishing of printing machine</li>
            <li>Supply of new digital printing Machine (KBA Rapida 105 from Germmay)</li>
            <li>Renovation of Building complex</li>
        </ol>

        <h4>Future plans of ppp (initiatives)</h4>

        <ol type="i">
            <li>To resuscitate the apprenticeship school of printing which will eventually be affiliated to the Plateau State Polytechnic for the award of Diplomas in different fields of graphics and printing. </li>
            <li>To ensure that the bill in the House of Assembly to make it mandatory for all MDAs at both tiers of government route their printing needs to the press is achieved. </li>
            <li>The newly procured digital press will attract commercial and industrial printing from both within and outside the state thereby a honey pot for revenue generation to the state. </li>

            <li>To maintain a competitive edge in digital printing through the use of cutting edge technology thereby the highest quality in printing achieved through the use of highly skilled and motivated workforce.</li>
        </ol>
    </div>
@endsection