@extends('layouts.app')

@section('title')
    Welcome! At a Glance| Plateau State Government Website
@endsection

@section('header')
    At a Glance
@endsection

@section('subheader')
    About Plateau State
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h2 class="bold">PLATEAU STATE</h2>
        <p>Plateau State is the twelfth largest state of Nigeria, and is roughly located in the center of the country. It is geographically unique in Nigeria because its boundaries totally surround the Jos Plateau, having the Jos Plateau totally in its central and northern part. Its capital is Jos. Plateau State is celebrated as "The Home of Peace and Tourism". Plateau State gets its name from the Jos Plateau. It has a population of around 3.5 million people.</p>
        <div class="uk-flex uk-flex-middle">
            <img class="uk-margin-right" src="{{ URL::asset('./assets/img/sign.png') }}" alt="">
            <h2 class="uk-margin-remove bold">Adjacent States</h2>
        </div>
        <ul class="uk-list">
            <li><span class="bold-green">Bauchi</span>: to the North-East</li>
            <li><span class="bold-green">Kaduna</span>: to the North-West</li>
            <li><span class="bold-green">Nasarawa</span>: to the South-West</li>
            <li><span class="bold-green">Taraba</span>: to the South-East</li>
        </ul>
        <div class="uk-flex uk-flex-middle">
            <img class="uk-margin-right" src="{{ URL::asset('./assets/img/route.png') }}" alt="">
            <h2 class="uk-margin-remove bold">Boundaries</h2>
        </div>
        <p>Plateau State is located in Nigeria’s middle belt. With an area of 26,899 square kilometres, the State has an estimated population of about three million people. It is located between latitude 80°24'N and longitude 80°32' and 100°38' east. The state is named after the picturesque Jos Plateau, a mountainous area in the north of the state with captivating rock formations. Bare rocks are scattered across the grasslands, which cover the plateau. The altitude ranges from around 1,200 meters (about 4000 feet) to a peak of 1,829 metres above sea level in the Shere Hills range near Jos. Years of tin mining have also left the area strewn with deep gorges and lakes. </p>
        <div class="uk-flex uk-flex-middle">
            <img class="uk-margin-right" src="{{ URL::asset('./assets/img/sun.png') }}" alt="">
            <h2 class="uk-margin-remove bold">Climate</h2>
        </div>
        <p>Though situated in the tropical zone, a higher altitude means that Plateau State has a near temperate climate with an average temperature of between 18 and 22°C. Harmattan winds cause the coldest weather between December and February. The warmest temperatures usually occur in the dry season months of March and April. The mean annual rainfall varies from 131.75 cm (52 in) in the southern part to 146 cm (57 in) on the Plateau. The highest rainfall is recorded during the wet season months of July and August. The average lower temperatures Plateau State has led to a reduced incidence of some tropical diseases such as malaria. The Jos Plateau, makes it the source of many rivers in northern Nigeria including the Kaduna, Gongola, Hadejia and Yobe rivers.</p>
    </div>
@endsection