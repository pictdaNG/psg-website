@extends('layouts.app')  

@section('title')
    Ministry of Health | Plateau State Government Website
@endsection

@section('header')
    Ministry of Health
@endsection

@section('subheader')
    About Ministry of Health
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h4>VISION</h>
        <p>To provide quality accessible and affordable health care services to all people living within plateau state.</p>

        <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
            <img class="object-fit" src="{{ URL::asset('/assets/img/image_03.png') }}" alt="">
        </div>

        <h4>Mission</h4>
        <p>
            To pursue and enhance health care services will cater for all individual, families and communities within the state.
        </p>

        <h4>CORE VALUES</h4>
        <p>The ministry ensures that team work, commitment to excellence, integrity, competence, promptness, dignity, confidentiality are its guiding values for benefit of  client and the society as a whole.</p>
        <h4>STATUTORY FUNCTION</h4>
        <p>
            The ministry of health is vested mainly with the following statutory responsibility:
            <ol type="-">
                <li>Policy formulation and implementation as it relate to health care delivery services I the state.</li>
                <li>Monitoring and evaluation of all planned activities in the health sector in the state </li>
                <li>Advises government and all other private organization on health related matters.</li>
                <li>Liaises with the federal ministry of health and international agencies on health issues for the benefit of the state.</li>
            </ol>
        </p>
        <h4>STRUCTURE</h4>
        <p>
            There are seven (7) department in the ministry
            <ol type="a">
                <li>Administration</li>
                <li>Planning ,Research and statistics</li>
                <li>Primary Health care and disease control </li>
                <li>Medical services </li>
                <li>Nursing services</li>
                <li>Pharmaceutical services</li>
                <li>Finance and supply</li>
            </ol>
        </p>
        <h4>PARASTALSALS</h4>
        <p>
            The parastatals under the ministry are:
            <ol type="a">
                <li>
                    Hospital services management board (HSMB)- headed by a chief medical director(CMD)
                </li>
                <li>Plateau state specialist hospital(PLSSH) –headed by chief medical director</li>
                <li>Colleges of health technology Zawan and pankshin each headed  by a provost</li>
                <li>PLASVIREC –it should be noted that PLASVIREC was upgraded to the status of a parastatal under the ministry of health.</li>
            </ol>
        </p>
        
        <h4>ACHIEVEMENTS</h4>
        <ol>
            <li>Renovation of the school of nursing and midwifery Jos and Vom.</li>
            <li>Training of staff.</li>
            <li>Update courses /Training for nursing /midwives</li>
            <li>The Schools of nursing and midwifery, Jos and Vom have since been given accreditation as a result of total renovation of the institution by the Jang administration.</li>
            <li>Heath care blue print: The ministry of health (MOH) has developed a health care blue print for Plateau state. This was recognized during the Nigerian Governors     forum as the best in the whole country. Other states were urged to come and learn from the plateau state experience. Subsequently, a Ph.D student from the         university of Ibadan came to understudy the Plateau state health care blueprint.</li>
            <li>Counterpart Funding: During this period, Government paid counterpart funding for: Leprosy/TB control programme and   Health system development project (HSDP)</li>
            <li>State and National Council on Health: The MOH organized the 7th and 8th plateau state council on Health in July 2010 and may 2012 respectively. The state         also participated in the 53rd National Council on Health in Delta State in 2010, and the 54th National Council on Health held in Abuja in May 2011.</li>
            <li>Midwives services schemes (MSS) The MSS introduced nation-wide, has started in earnest in the state, and all the staff are in their respective areas of posting     across the state.</li>
            <li>Reproductive Health: The ministry has carried out supervision and monitoring of reproductive health activities in the LGAs to ensure effective coverage and optimal utilization of the facilities at their disposal.</li>
            <li>The life saving skills (LSS) center at the Plateau specialist Hospital has been.</li>
            <li>Renovation of the health organization’s office at no.4 Apollo crescent Jos was completed through and has since been put to use.</li>
            <li>Accreditation of courses in the College of Health Technology Zawan by the National Board Technical Education.</li>
            <li>Construction of a standard laboratory for medical laboratory sciences in College of Health Technology, Pankshin</li>
            <li>Establishment of a snake bite treatment centre in Shendam by the Hospital Management Board.</li>
        </ol>

        <h4>MALARIA ACTIVITIES</h4>
        <ol type="A">
            <li>
                Integrated vector control activities
                <ol type="i">
                    <li>
                        Indoor residual spray
                        <ol type="a">
                            <li>In 2010 about 300 household were sprayed in Barkin Ladi LGA</li>
                            <li>In 2012 about 600 household were sprayed in shendam LGA</li>
                        </ol>
                    </li>
                </ol>
            </li>
            <li>Long lasting insecticide treated net (LLIN)</li>
        </ol>
        <p>
            From 2004-2009 the carter center distributed about 900, 000 ITN. In 2009 the center for Gospel health and Development distributed 485,301 LLIN and in 2010, Plateau State Government and partners distributed 1.4 million LLIN. 
        </p>
        <h4>MALARIA DRUGS DISTRIBUTED </h4>
        <p>324,420 (Three hundred and twenty four thousand, four hundred and twenty) doses of anti-malaria drugs (ACT) were distributed free in 170 health facilities. 45,000 (forty-five thousand) dosses of sulphadoxine bremethamine were given to pregnant women free of charge.</p>
        <p>Bagos Musa Dachung Foundation procured 2,844 doses of ACTs for distribution to Vwang community free while the Emir of wase procured 15,000 tablets of sulphadoxine-pyremethamine for distribution in Wase LGA.</p>

        <h4>IMMUNIZATION PLUS DAY</h4>
        <p>Nine hundred and thirty-two thousand, two hundred and fifty two (932,252) children were immunized against poliomalities.</p>

        <h4>FAMILY PLANNING ACTIVITIES</h4>
        <p>
            Distribution of family commodities
            <ol type="a">
                <li>Nonsterat 20,320 ampoules</li>
                <li>Microrynon- 9416 cycles</li>
                <li>Lofemenal -6380 cycles</li>
                <li>Lucd -711 pieces </li>
                <li>Overette – 200 cycles</li>
                <li>Implanon -473 pieces</li>
                <li>Condom male 2, 624, 222 pieces</li>
                <li>Depoprovera – 28, 106</li>
            </ol>
        </p>
        <h4>E.U. PRIME</h4>
        <p>
            The Ministry in conjunction with E.U. Prime had identified a piece of land within the State Secretariat complex for the construction of a cold Room/Cold Chain System for the state. Work has since been completed and handed-over to the ministry. The facility has been put to use.
        </p>
        <p>
            A total of eighteen thousand, five hundred and twenty-eight (18,528) doses of anti-malaria drugs (Act & SP) were received from the Federal Ministry of Health in 2008 and distributed to all service points in the state for dispensing.
        </p>
        <p>
            Registration of Pharmaceutical Premises and Patent Medicine Shops
            <ol>
                <li>A total of 156 registered pharmaceutical shops operate in the state under regulation of the State Ministry of Health using 25 accredited Pharmaceutical inspectors.</li>
                <li>503 patent medicine vendors have also been licensed to operate in the state. Plans are now on to close down all other illegal drugs shops operating without license.</li>
            </ol>
        </p>
        <h4>HIV/AIDS</h4>
        <p>
            Twenty-seven thousand, two hundred and twenty-one (27, 221) doses of anti-retroviral drugs were received into the government Central Medical Stores after signing a memorandum of the Understanding (MOU) with GHAIN (Global HIV/AIDS Initiative in Nigeria). These were distributed to four service centers namely: Cottage Hospital Bassa, General Hospital Langtang, General Hospital Bokkos and Plateau State Specialist Hospital, Jos.
        </p>
        <h4>Drugs Abuse Campaign Activities</h4>
        <p>The International Day Against Drug Abuse and Illicit Trafficking has yearly been celebrated in conjunction with the National Drug Law Enforcement Agency (NDLEA).</p>

        <h4>Establishment of Plateau State Specialist Hospital</h4>
        <p>
            In order to boost health care delivery and promote medical tourism in the state and in line with the health agenda of the Jang Administration, government has proposed the establishment of a specialist hospital for the state. Modalities for the construction of the facility have been initiated.
        </p>
        <h4>Staff welfare</h4>
        <p>In order to forestall brain-drain and boost health care delivery, the present administration has agreed and implemented Harmonized Health Salaries Scheme for its health workers in the Ministry of Health (MOH) and its parastatals. On-going Projects</p>

        <p>There are 4 No. ongoing projects viz:</p>
        <ol type="-">
            <li>General Hospital, Ryom.</li>
            <li>General Hospital, Mabudi.</li>
            <li>General Hospital, Kanke.</li>
            <li>Cottage Hospital, Bokkos</li>
        </ol>

        <h4>OTHER ACTIVITIES</h4>
        <p>
            The 3 No. Referral Hospital in Pankshin, Langtang and the PLSSH earmarked to be the upgraded to zonal Referral Hospital.
        </p>
        <h4>Progress</h4>
        <ol type="a">
            <li>
                Assessments of all the works to be carried out have been done.
                <ul>
                    <li>Drawings and Bills of Quantities have been produced.</li>
                </ul>
            </li>
            <li>Construction of an Accident and Emergency Department at Ryom General Hospital – Drawings and Bills of Quantities are being vetted for further action.</li>
        </ol>

        <h4>PUBLIC, PRIVATE PARTNERSHIP (PPP)</h4>
        <p>In the spirit of PPP, maternity section in Panskin General Hospital has been renovated by an organization known as Family Care Association. Free health services were also offered to communities in Vom and Pankshin hospitals. Equipment was donated to the hospitals after the exercise.</p>

        <h4>Inspection of Private Health Establishment</h4>
        <p>A high powered technical committee was set up to ensure standard in private establishments. Some mushroom private health establishments were closed committee.</p>
    </div>
@endsection