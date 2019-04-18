@extends('layouts.app')  

@section('title')
  Plateau State Specialist Hospital | Plateau State Government Website
@endsection

@section('header')
  Plateau State Specialist Hospital
@endsection

@section('subheader')
  About Plateau State Specialist Hospital
@endsection

@section('content')
  <div class="content uk-width-1-2@m">
    <h4>PROFILE</h4>
    <p>
      Plateau State Specialist Hospital, Jos, Nigeria, is a tertiary Health institution that provides specialized medical services, trains Health professionals and serves as a research center. 
    </p>

    <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
        <img class="object-fit" src="{{ URL::asset('/assets/img/image_03.png') }}" alt="">
    </div>

    <h4>VISION</h4>
    <p>
      To be a centre of excellence that provides holistic health care services, training and research. 
    </p>

    <h4>MISSION</h4>
    <p>
      To improve and sustain the health status of the society through holistic healthcare services, training and research. 
    </p>

    <h4>OBJECTIVES/ CORE VALUES OF PLATEAU STATE SPECIALIST HOSPITAL</h4>
    <ul>
      <li>Sanctity of the human life</li>
      <li>Commitment to excellence</li>
      <li>Discipline </li>
      <li>Cleanliness and good hygiene in the work place </li>
      <li>Quality and motivated manpower </li>
      <li>Teamwork</li>
      <li>Value based/participatory leadership</li>
      <li>Prudent management of scare resources.</li>
    </ul>

    <h4>ORGANIZATIONAL STRUCTURE OF THE HOSPITAL</h4>
    <p>
      The Plateau State Specialist Hospital is presently structured into five (5) major departments and several minor functional units. The major departments include: ‐

      <ul>
        <li>Administrative Department </li>
        <li>Medical and Radiology Department</li>
        <li>Nursing Department </li>
        <li>Pharmacy Department</li>
        <li>Laboratory Department</li>
      </ul>
    </p>

    <h4>FUNCTIONS OF THE VARIOUS DEPARTMENTS</h4>
    <ol type="i">
      <li>
        <strong>Administration</strong> <br>
        This department serves as custodian of official documents in the Hospital and also handles all personnel related issues such as Recruitment, Promotion/Advancement, Disciplinary issues and also control and maintenance of vehicles, official correspondences. e.t.c.
      </li>
      <li>
        <strong>Medical and Radiology Department</strong> <br>
        Serves as clinical department, which is responsible for providing medical care in terms of diagnosis and treatment of all diseases. It is also responsible for the training of House Officers and Postgraduate training in Family medicine. It is involved in researches in all fields of medicine. Other sub department under the medical department includes:
        <ol type="a">
          <li>Family Medicine</li>
          <li>Obstetrics & Gynaecology</li>
          <li>Peadiatrics</li>
          <li>Surgery</li>
          <li>Medical</li>
          <li>Medical Records</li>
        </ol>
      </li>
      <li>
        <strong>Nursing Department</strong> <br>
        <ul>
          <li>Provides health care to all patients</li>
          <li>Handles all administrative needs of the Nursing department, e.g.</li>
          <li>Discipline</li>
          <li>Supervision</li>
          <li>Purchases and maintenance of cleaning materials and other ward consumable,</li>
          <li>Keeps management information about happenings in the department.</li>
          <li>Reports on damages to management for repairs</li>
          <li>Provides counseling services</li>
          <li>Handles supervision of ward orderlies</li>
          <li>Maintains a functional educational programme</li>
          <li>Keeps inventory of all units.</li>
        </ul>
      </li>

      <li>
        <strong>Pharmacy Department: ‐</strong> <br>
        <ul>
          <li>Serves as the custodian of drugs and medicines</li>
          <li>Train Intern Pharmacists /perform simple compounding of drugs and medicines</li>
          <li>Provides drugs information</li>
          <li>Dispenses drugs to patients on the use of same.</li>
          <li>
            Administration <br>
            <p>
              The Head of these departments and DFS constitute the Top <br><br>
              Management of the Hospital with the Chief Medical Director as

              <ol type="i">
                <li>Chairman </li>
                <li>Medical and Radiology </li>
                <li>Nursing </li>
                <li>Pharmacy </li>
                <li>Laboratory</li>
              </ol>
            </p>
          </li>
        </ul>
      </li>
      <li>
        <strong>Laboratory Department</strong> <br>
        This department serves as a diagnostic center for pathological samples and as a training center for Internship for Medical Laboratory Scientists and Industrial Attachment for students of Universities, Colleges of Medical Laboratory Science Technology and colleges of Health Technology.
      </li>
    </ol>

    <h4>ONGOING PROJECTS</h4>
    <ol type="a">
      <li>Laboratory Complex </li>
      <li>Administrative Block and Emergency Peadiatric Department </li>
      <li>Maternity Block, Dialysis Centre </li>
      <li>Female patient Relations shade and male Patient Relation Shade</li>
      <li>CT Scan with SM walk way</li>
      <li>Mortuary Complex</li>
      <li>Gynecology ward</li>
      <li>Ante-Natal Block</li>
      <li>Upgrade Epit Unit.</li>
    </ol>
    
    <h4>ACHIEVEMENT</h4>
    <p>Extension to Hospital theatre</p>
  </div>
@endsection