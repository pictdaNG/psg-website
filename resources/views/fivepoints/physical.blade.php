@extends('layouts.app')  

@section('title')
    PHYSICAL INFRASTRUCTURAL DEVELOPMENT | Plateau State Government Website
@endsection

@section('header')
    PHYSICAL INFRASTRUCTURAL DEVELOPMENT
@endsection

@section('subheader')
    About PHYSICAL INFRASTRUCTURAL DEVELOPMENT
@endsection

@section('content')
    <div class="content uk-width-1-2@m">        
        <p>
            In the area of infrastructural Development, we recognize that this sector forms the bedrock of economic activities as it is not only a catalyst but also a lubricant, the Government has within the last four years placed premium on this sector. 
        </p>

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img class="object-fit" src="{{ URL::asset('/assets/img/mutfwang1.jpeg') }}" alt="" />
        </div>
        
        <p>
            One of our achievements have been the completion of inherited projects from the previous administration and award of critical contracts at a total sum of thirty-eight billion, one hundred and sixty-eight million, four hundred and seventy thousand, six hundred and sixty-seven Naira (N38,168,470,667.00).
        </p>

        <p>
            In the next four years, Government hopes to accomplish the following:

            <ul>
                <li>
                    Focused attention and resources on the completion of all inherited infrastructure projects that cut across key sectors of the state.
                </li>

                <li>
                    Identify and prioritize new infrastructure projects that have significant multiplier potential. These projects are expected to not only enhance and lubricate the economy of the state, but upgrade the quality of human capital. They include, but not limited to Education, Health, Tourism, Commerce, Roads, Water, Agriculture and Food Security, etc.
                </li>

                <li>
                    Planned infrastructure development projects are categorized into Short, Medium and Long Terms  covering the next six months, two years and entire four years respectively.
                </li>
            </ul>
        </p>        
    </div>
@endsection