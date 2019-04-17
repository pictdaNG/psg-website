@extends('layouts.app')  

@section('title')
    Ministry of Science and Technology | Plateau State Government Website
@endsection

@section('header')
    Ministry of Science and Technology
@endsection

@section('subheader')
    About Ministry of Science and Technology
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h4>BACKGROUND/PREAMBLE.</h4>
        <p>
            The Ministry if Science and Technology was established in October 2003 and the functions and mandate of the ministry are as follows:
            <ol type="i">
                <li>Formulation, Monitoring and evaluation of the State policy on science and technology.</li>
                <li>Promotion and co-ordination of science and technology research and development activities in basic science and in the fields of industries, agriculture, electronics, communication, building, energy and medical sciences.</li>
                <li>Establishment, promotion and maintaining linkages with Federal and State Governments in science and technology among others.</li>
            </ol>
        </p>

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img class="object-fit" src="{{ URL::asset('/assets/img/image_03.png') }}" alt="">
        </div>

        <h4>MISSION</h>
        <ol type="i">
            <li>To make Plateau State a role model in the use of knowledge, principle, tools, tips and techniques of science and technology in converting poverty to wealth and raising the socio-economic status of state to enviable heights and to enhance government service delivery to the citizens.</li>
            <li>
                Employing science and technology in all socio-economic activities towards improving the quality of life of Plateau citizens and transforming utilization of available resources into a developed industrial and modern state of international status.
            </li>
        </ol>

        <h4>DEPARTMENTS OF THE MINISTRY</h4>
        <ol>
            <li>Administration</li>
            <li>Information Communication Department (ICT)</li>
            <li>Science Technology Promotion (STP)</li>
            <li>Agriculture, Health and Natural Medicine (AHNM)</li>
            <li>Industry, Energy and Energy (IEE)</li>
            <li>Finance and Supplies</li>
        </ol>

        <h4>GOVERNMENT SCIENCE EQUIPMENT PRODUCTION CENTRE.</h4>
        <p>
            This is a unit under the department of Industry, Energy and Engineering. It is situated at the premises of Government Secondary School, Laranto-Jos. It is charged with the responsibility of designing and manufacturing low cost science equipment using locally sourced materials.
        </p>

        <h4>PARASTATAL UNDER THE MINISTRY</h4>
        <p>
            The Ministry has only one parastatal i.e Relevant Technology Board. The Board was established in 1974 with six(6) training centres located in Jos, Kwall, Pankshin, Wase, Langtang North and Doemak.</p>
            <p>The primary objective of the Board is to train school leavers and youths to acquire skill for self-reliance.
        </p>

        <h4>ACHIEVEMENTS</h4>
        <ol type="i">
            <li>Contract for the deployment of Internet facilities in all State Government Ministries, House of Assembly Complex, State Library and Government House are in progress. Establishment of cyber café in the seventeen (17) local government areas of the state with Phase One in Bassa, Mangu, Langtang North local government areas.</li>
            <li>Design and development of an interactive and management content website for the state.</li>
            <li>The Ministry has participated in the National Inventors and Innovations Summit at Bauchi and represented the country at the International Exhibition for Young Inventors (IEYE) at Yogyakarka, Indonesia and won a silver medal.</li>
            <li>The Ministry led three schools that participated in the National Science and Technology (NASTECH) week and won a gold medal.</li>
            <li>The Ministry led Nakam Memorial Secondary School, Panyam to Thailand for an International completion on Young Inventors and won a silver medal for the country.</li>
            <li>A fuelless generator was constructed by Nakam Memorial Secondary School Panyam, which was to be presented at an International Competition of Young Investors at Thailand.</li>
            <li>
                The Ministry led two (2) schools to Abuja to participate in the NTA Science EXPERT where they emerged as overall winners in the senior and junior categories
            </li>
            <li>The Ministry successfully hosted the Nigerian Association of Inventors Annual Summit at the Plateau Hotel Rock Garden, Jos and also, the First Plateau Science and Technology Summit at the first phase of this administration</li>
            <li>Purchase of raw materials and refurbishment of all grounded machines at the Science Equipment Production Centre, Laranto Jos;</li>
            <li>Three cultivars of cassava; namely TMs 419, TMs 1 & TMs 5808 were obtained from International Institute for Tropical Agricultural (IITA) Ibadan, cultivated and tested for its adaptability on our soils at the Biotechnology Farm in Gangnim Langtang South Local Government Area at the cost of #10,000,000.00 </li>
            <li>The Ministry successfully hosted the first Plateau Traditional Medicines Day.</li>
            <li>There was a successful in-house workshop organized by the Ministry on Strategic Thinking and Work Ethics, while staff of the Ministry have attended several capacity building workshops and seminars.</li>
            <li>The renovation of the Technology Incubation Centre in Bukuru.</li>
        </ol>

        <h4>FUTURE PLANS</h4>
        <ol type="i">
            <li>Training of all state government civil servants on IT Literacy</li>
            <li>Youth empowerment scheme through IT training </li>
            <li>Establishment of an ICT Data Centre. </li>
            <li>Full automation of key sectors of the State. </li>
            <li>Establishment of Technology Incubation Centers in the three Senatorial zones of the state. </li>
            <li>Construction of a Quality Control Laboratory </li>
            <li>Construction of an e-Library at the Bukuru Technology Incubation Centre. </li>
            <li>Training and re-training of employed and unemployed youths in the state.</li>
            <li>Fencing of the TIC, Bukuru. </li>
            <li>Establishment of Science and Technology Park.</li>
            <li>Establishment of a Biotechnology Laboratory.</li>
            <li>Establishment of Traditional Medicine Development Centre.</li>
            <li>Housing of the Plastic Moulding Machine at Science Production Centre Laranto.</li>
        </ol>
        
    </div>
@endsection