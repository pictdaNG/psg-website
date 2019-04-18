@extends('layouts.app')  

@section('title')
    Plateau Agricultural Mechanization Services Corporation | Plateau State Government Website
@endsection

@section('header')
    Plateau Agricultural Mechanization Services Corporation
@endsection

@section('subheader')
    About Plateau Agricultural Mechanization Services Corporation
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        
        <p>
            Plateau agricultural mechanization services corporation (PAMSCO) was established on the 2nd March 2000 when the pronouncement of merging Kassa workshop to PAMS was made. The organization has existed in the past as task force on agricultural mechanization (TFAM) between 1989 – 1992, when it was later changed to plateau agricultural mechanization which has its headquarters in Jos, with three (3) Zonal offices at the three (3) senatorial zone and divisional operation centres in each of the seventeen (17) local government councils (L.G.Cs), of the state.
        </p>

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img class="object-fit" src="{{ URL::asset('/assets/img/image_03.png') }}" alt="">
        </div>

        <h4>OBJECTIVES</h4>
        <p>
            Is to enhance increased agricultural production of the state and raise the living standard of the rural farmers through applied technology.
        </p>

        <h4>FUNCTIONS</h4>
        <p>
            The main functions of the corporation are:
            <ol>
                <li>
                    Apply and disseminate technology in order to improve agricultural production through:
                    <ol type="a">
                        <li>Tractor and other farm machinery and equipment.</li>
                        <li>Processing, storage facilities and other methods.</li>
                        <li>Animal traction and equipment.</li>
                        <li>Land clearing operations and machinery.</li>
                        <li>Production of pre-fabricated parts for machineries and equipment for sale to farmers.</li>
                        <li>Service and repairs of all the corporation’s tractors equipment and others government organization and private farmers.</li>
                        <li>Collaborating with other agricultural development agencies.</li>
                        <li>Carrying out other activities relating to agricultural mechanization.</li>

                    </ol>
                </li>
                <li>Shall have power to charge fees for services as determined by the board.</li>
            </ol>
        </p>
        <h4>FUTURE PLANS</h4>

        <p>Our future plan is to go into full agricultural mechanization, instead of the tractorization that we are embarking upon. </p>
        <p>Secondly we would like to go into the processing and storage of farm produce. This is to add value to the farm produce, thereby improving the standard of living our peasant farmers. </p>
        
    </div>
@endsection