@extends('layouts.app')  

@section('title')
    PEACE, SECURITY AND GOOD GOVERNANCE | Plateau State Government Website
@endsection

@section('header')
    PEACE, SECURITY AND GOOD GOVERNANCE
@endsection

@section('subheader')
    About PEACE, SECURITY AND GOOD GOVERNANCE
@endsection

@section('content')
    <div class="content uk-width-1-2@m">        

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img class="object-fit" src="{{ URL::asset('/assets/img/mutfwang1.jpeg') }}" alt="" />
        </div>
        
        <p>
            In the next four years, Government hopes to accomplish the following:
            <ol>
                <li>
                    Consolidate on the gains of security and peace building, by focusing on sustainable peaceful co-existence, equitable development; inclusive governance process that takes into consideration the needs of the most marginalized, including women, young people, minorities and people with disabilities as well as protecting human rights through appropriate Institutional and Legal framework.  These strategies are designed to continuously build confidence and  uplift the quality of life of the Plateau citizenry, which represent representing a dynamic force in the national arena.
                </li>

                <li>
                   Pursue the upscaling of the efforts of the Plateau Peace Building Agency to enable the implementation of the Strategic Road Map for Peace and the Community Security Architecture Dialogue (CSAD) as prerequisite for breaking the cycle of violence; enhancing resilience; promoting social cohesion, reconciliation and healing through forgiveness.  
                </li>
                <li>
                    Sustain and enhance necessary support to the security agencies and boosting the Operation Rainbow early warning/crises detection mechanisms. 
                </li>
                <li>
                    Ensure the full take off of the Mobile Police Force Barracks in Gashish, Barikin Ladi LGA and in Longvel, Shendam LGA.
                </li>
                <li>
                    Ensure the total return of all internally displaced persons to their original places of abode before the end of the first year of the administration.
                </li>
                <li>
                    Strengthen and upscale the role of Traditional institutions in the peace building efforts, community governance and development. 
                </li>
                <li>
                    Pursue a deliberate process of public service reforms and restructuring of our Ministries, Departments and Agencies (MDAs) in terms of re-orientation, training and capacity building in line with current realities; to perform their role as the engine room for effective delivery of policies, programs and projects effectively.
                </li>
                <li>
                    Entrench transparency and integrity in the public service and the affairs of government, in line with our zero tolerance for corruption
                </li>

                <li>
                    Sustainable excellent working relationship between the three arms namely- the Executive, Legislature and Judiciary beneficial to the people. 
                </li>
                <li>
                    Ensure completion of all on-going projects, cutting across the different social services sectors. 
                </li>
                <li>
                    Ensure good working relationship with the Presidency and its agencies with a view to attracting more development Programmes in to the State.
                </li>
                <li>
                    Sustain and increase the partnership with development partners, multilateral agencies and NGOs operating in and outside the state in areas like peace building, access to health, water supply, agriculture, education etc
                </li>
            </ol>
        </p>
        
    </div>
@endsection