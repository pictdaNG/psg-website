@extends('layouts.app')  

@section('title')
    Ministry of Tourism, Culture and Hospitality | Plateau State Government Website
@endsection

@section('header')
    Ministry of Tourism, Culture and Hospitality
@endsection

@section('subheader')
    About Ministry of Tourism, Culture and Hospitality
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h4>VISION</h4>
        <p>
            To reposition Plateau State as the foremost Tourist destination in Nigeria. It is expected that by 2015, the level of investment in the sector would have risen significantly and revenue receipt from Tourism would begin to playa dominant role in livelihood of the citizenry and the state's economy to reduce our over dependence on Federal allocations. 
        </p>

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img class="object-fit" src="{{ URL::asset('/assets/img/image_03.png') }}" alt="">
        </div>

        <h4>MISSION STATEMENT</h4>
        <p>
            Government is determined to develop Tourism to the fullest as a strong and sustainable economic activity in Plateau state.
        </p>

        <h4>RESPONSIBILITY</h4>
        <p>
            The Ministry is saddled with the responsibility of identification, development, preservation, documentation and promotion of the state’s tourism resources, arts and cultural heritage.
        </p>

        <h4>DEPARTMENTS</h4>
        <p>
            The Ministry has four (4) main departments:
            <ol>
                <li>Administration</li>
                <li>Finance and Supplies</li>
                <li>Tourism</li>
                <li>Arts and Culture</li>
            </ol>
        </p>

        <h4>ACHIEVEMENTS</h4>
        <ol type="i">
            <li>Inauguration of a Tourism Master Plan (TMP) steering committee</li>
            <li>Hosting of the 2007 national celebration of World Tourism Day in the state</li>
            <li>The hosting of a stake-holders meeting on the development of a Film City project in the state to be sited at Kwal, Miango, in Bassa Local Government Area</li>
            <li>The tourism corporation acquired a digital video camera for coverage of tourism events within and outside the state for the purpose of documentation and publicity and information. </li>
            <li>
                The tourism corporation acquired the following animals for the Wildlife Park.
                <ol type="a">
                    <li>A pair of porcupine</li>
                    <li>A stripped hyena </li>
                    <li>A male Grimm (grey) Duiker</li>
                </ol>
            </li>
            <li>Attended the Abuja Carnival Stakeholders meeting held in 2008</li>
            <li>Won a silver medal in competitive event in the area of ceremonial costumes and 4th position in food fair competition at the 22nd National Festival of Arts and Culture held in Enugu, Enugu State in 2008</li>
            <li>The tourism corporation cultural troupe took part in RATTA-FEST as Plateau came 1st position in indigenous music, 2nd position in music and 3rh position in drama presentation</li>
        </ol>

        <h4>Ongoing Projects </h4>
        <ol>
            <li>Prof. Luka Bentur Indoor Theatre - Government has approved the remodeling of this theatre within the city centre, which is a deliberate effort of this administration to boost cultural tourism and an avenue for other forms of entertainment with modern facilities. </li>
            <li>Arts and Crafts centre - It is considered in the2006 budget for the establishment of 3 craft centers. The three (3) craft centers are as follows: - 
                <ol type="-">
                    <li>Naraguta Leather Works in Jos Local Government Areas</li>
                    <li>Mat wearing in Mangu Local Government Areas, </li>
                    <li>Zwalcip (a traditional Ngas bag) weaving in Kanke Local Government Areas (These are yet to take-off).</li>
                </ol>
            </li>
        </ol>

        <h4>Ministry's future (initiatives) </h4>
        <ol type="a">
            <li>Further acquisition of material culture to enrich our present collections</li>
            <li>Construction of more show cases and Exhibition stands</li>
            <li>Establishment of workshops for ceramics, crafts, batik, tie and dye etc.</li>
            <li>Video Recording Equipment </li>
            <li>Audio Recording Equipment</li>
            <li>Film projection Equipment</li>
            <li>Photographic Equipment</li>
            <li>Replacement of our modem Band instruments most of which are obsolete. </li>
            <li>Acquisition of new costumes for the Band & Troupe </li>
            <li>Construction of mobile performing stafe/set design </li>
            <li>Acquisition of state lightening equipments among others. </li>
        </ol>
        
    </div>
@endsection