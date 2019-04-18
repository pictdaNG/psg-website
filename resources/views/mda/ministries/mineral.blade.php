@extends('layouts.app')  

@section('title')
    Ministry of Mineral Development | Plateau State Government Website
@endsection

@section('header')
    Ministry of Mineral Development
@endsection

@section('subheader')
    About Ministry of Mineral Development
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <p>
            By 1989 it was a Directorate in the Ministry of Industry. Ten years later, it was named Ministry of Environment and Mineral Development. In 2007 it became Ministry of Mineral Special Duties, and in 2009 it was renamed Ministry of Mineral Development.
        </p>

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img class="object-fit" src="{{ URL::asset('/assets/img/image_03.png') }}" alt="">
        </div>

        <h4>VISION</h4>
        <p>To create the enabling environment that can attract both local and foreign investors in the Mineral sector on the Plateau and return the State to its rightful position as the cradle of Mining activities in Nigeria.</p>

        

        <h4>Mission</h4>
        <p>
            To reclaim and develop the over 4000 Mining Disturbances that are scattered all over the state for economic use.
        </p>

        <h4>ACHIEVEMENT OF THE MINISTRY</h4>
        <p>
            The ministry has undertaken the following:
            <ol>
               <li>Formation of the Plateau Mineral Development Company as an Investment arm of the Ministry.</li> 
               <li>Construction of a Mineral Museum and Tin Mining Library including Lapidary Workshop.</li>
               <li>Categorization of Mine disturbances for various applications e.g. Resorts, Water, Reservoirs etc.</li>
               <li>Mineral survey of the whole state.</li>
               <li>Feasibility studies on the viability of some Mineral projects.</li>
               <li>Training of 45 Plateau Youths in the art of gem cutting and polishing.</li>
               <li>Mineral survey of the whole state.</li>
               <li>Acquired the abandoned Dragline at Barkin-Ladi Local Government Area aimed at developing the site into an Outdoor-field Museum in collaboration with the Ministry of Tourism</li>
            </ol>
        </p>

        <h4>THE MINISTRY’S FUTURE PLAN</h4>
        <ol>
            <li>Acquisition of lease in favourable geologic environment for different minerals.</li>
            <li>Detailed exploration of some identified Minerals on the Plateau to ascertain their viability.</li>
            <li>Continuous sensitization workshops to attract investors.</li>
            <li>Actualization of some of the projects already proposed through different investment options (PPP, Direct Investment on Risk Bearing)</li>
            <li>Offer of mineral analysis, gemstone cutting/polishing and gemological services etc.</li>
            <li>Implementation of the mine disturbances categorization report.</li>
            <li>Detailed radiation and geochemical studies of mined-out areas.</li>
            <li>Control/reduction of illegal mining activities through the formation of cooperatives.</li>
            <li>Job creation for youths in the mining sector and enhanced revenue generation.</li>
        </ol>
        
        <h4>POSSIBLE INVESTMENT OPPORTUNITIES</h4>
        <ol>
            <li>Mineral water project</li>
            <li>The integrated industrial mineral project (Kaolin, Gypsum, Line)</li>
            <li>Metallic Mineral Dressing and Processing plant</li>
            <li>The Derivation stone project</li>
            <li>The Gem City Project (Jewelry and Gems)</li>
            <li>The Burnt (Clay) Bricks projects</li>
        </ol>

        <h4>REPORTS</h4>
        <p>
            The Ministry has received the interim report on the categorization of mine ponds for various applications. It has also requested for a special intervention fund from the Revenue Mobilization Allocation and fiscal Commission to ameliorate the impact of pass mining activities.
            <ol type="i">
                <li>A feasibility study for establishment of Granite Cutting and Polishing plant in Plateau State. It was only of recent that entrepreneurs began to show interest in the development of this natural resource. However Nigeria is still a net importer of finished stone tiles for floor and wall cladding. A Geological survey already completed, has been carried out by the Plateau State Government, which led to the discovery of a wide range of coloured granite in the state. They are of the variety that commands high demand both locally and internationally. </li>
                <li>A feasibility report on Kaolin, Gypsum, and Hydrated lime industrial Complex. The intention of the state administration is to stimulate the private sector of the economy to invest in primary production.</li>
                <li>Market study for Clay-Brick products in Jos. The brick and Clay products can be classified into building bricks, decorative products and special products. But this is proposed to increase the supply of building materials in Jos thereby creating employment opportunities.</li>
            </ol>
        </p>
    </div>
@endsection