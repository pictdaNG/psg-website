@extends('layouts.app')  

@section('title')
    The Judiciary | Plateau State Government Website
@endsection

@section('header')
    The Judiciary
@endsection

@section('subheader')
    About The Judiciary
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h2 class="bold">The Judiciary</h2>
        <p>The Judiciary of the State is a very key component of the Government. It is made up of the following:</p>

        <ul class="uk-list uk-list-striped">
            <li>Judges</li>
            <li>Non-Judge</li>
            <li>Members of staff of the State judicial service</li>
            <li>Courts/tribunals and other judicial facilities, records and subsisting judgments obtained within the jurisdiction of the State court system which its courts are obligated to defend and enforce.</li>
        </ul>

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img class="object-fit" src="{{ URL::asset('/assets/img/judiciary.jpg') }}" alt="">
        </div>
        
        <p>
            The Judiciary exists, chiefly to, interpret, apply and direct the enforcement of the laws, customs, and conventions that make up the State' legal system. It's sphere also extends to the protection or preservation of contracts, rights and freedoms that define the socio-political and economic space of the State.
        </p>

        <p>
            It also helps to preserve and protect the rights and freedoms of individuals and corporate bodies in the State from the over-bearing reach of State officialdom or from other non-state entities – including multinational and local organizations that operate in the State. Its reach even extends to the review of decisions of disciplinary panels of various professional and corporate organizations in the State. Where the Executive and Legislative branches are elected by the people, members of the Judicial Branch are appointed by the Governor and confirmed by the State House of Assembly.
        </p>

        <p>
            The State Judiciary is usually led by the Chief Justice of who presides over other Justices of the state High court. Court structures and judicial appointments are at the discretion of the Governor subject to the recommendation for appointment by National Judicial Council and confirmation by the State House of Assembly.
        </p>

        <p>
            The Court structure in Plateau State conforms generally with the provisions of the 1999 Constitution which in addition to the Federal Courts provides in sections 270,275 and 280, for the establishment of State High Court, Sharia Court of Appeal and Customary Court of Appeal respectively. Hon. Justice Lazarus Dakyen, is the Chief Judge of Plateau State and oversees the judges at the High Court which is empowered by the Constitution to hear and determine any civil proceedings in which the existence or extent of a legal right, power, duty, liability, privilege, interest, obligation or claim is in issue or to hear and determine any criminal proceedings involving or relating to any penalty, forfeiture, punishment or other liability in respect of an offence committed by any person.
        </p>
        <p>
            The Grand Kadi of the Plateau State Sharia Court of Appeal is Hon. Justice Abdullahi Musa Kanam OFR while the President of the Customary Court of Appeal is Hon. Justice Julie Kyentu.
        </p>

        <p>
            Other Courts established by the State include Magistrate Courts, Upper Area Courts and Area Courts.
        </p>
    </div>
@endsection