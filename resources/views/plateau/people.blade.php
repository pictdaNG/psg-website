@extends('layouts.app')

@section('title')
    Welcome! The People| Plateau State Government Website
@endsection

@section('header')
    The People
@endsection

@section('subheader')
    The Plateau People
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h2 class="bold">PEOPLE PROFILE</h2>
        <p>The state has over forty ethno-linguistic groups.
            Some of the indigenous tribes in the state are the Berom, Afizere, Amo, Anaguta, Aten, Bogghom, Buji, Challa, Chip, Fier, Gashish, Goemai, Irigwe, Jarawa, Jukun, Kofyar (comprising Doemak, Kwalla, and Mernyang), Montol, Mushere, Mupun, Mwaghavul, Ngas, Piapung, Pyem, Ron-Kulere, Bache, Talet, Taroh (Tarok), Youm and Fulani/Kanuri in Wase.
        </p>
        <div class="uk-child-width-1-2@m uk-grid-small" uk-grid>
            <img class="object-fit" src="{{ URL::asset('./assets/img/ppl-1.png') }}" alt="">
            <img class="object-fit" src="{{ URL::asset('./assets/img/ppl-2.png') }}" alt="">
            <img class="uk-width-1-1@m object-fit" src="{{ URL::asset('./assets/img/ppl-3.png') }}" alt="">
        </div>
        <p>These ethnic groups are predominantly farmers and have similar cultural and traditional ways of life. People from other parts of country have come to settle in Plateau State; these include the Igbo, Yoruba, Ibibio, Annang, Efik, Ijaw, and Bini.</p>
    </div>
@endsection