@extends('layouts.app')

@section('title')
	Approved Yearly Budget | Plateau State Government Website
@endsection

@section('header')
	Approved Yearly Budget
@endsection

@section('subheader')
	Plateau State Govenrment Approved Yearly Budget
@endsection

@section('content')
	<div class="content uk-width-1-2@m">
		<h4>All Downloads<!-- Budgets (Most recent is 2023) --></h4>
		<table class="uk-table uk-table-hover uk-table-divider">
		  <th>
			<tr>
				<td>You have feedback on our budgets?</td>
			  <td><a href="{{ route('feedback') }}">Submit Feedback</a></td>
			</tr>
		  </th>
		  <tbody>

		  	<tr class="row1">
            <td class="column0 style0 s"><a href="{{url::to('uploads/PLATEAU_STATE_2024_APPROVED_BUDGET.pdf')}}" target="_blank">PLATEAU STATE 2024 APPROVED BUDGET.</a>
          </tr>
		      
		      <tr class="row1">
            <td class="column0 style0 s"><a href="{{url::to('uploads/PLATEAU_STATE_BUDGET_PERFORMANCE_REPORT_(BPR)_QUARTER_4_2023.pdf')}}" target="_blank">PLATEAU STATE BUDGET PERFORMANCE REPORT (BPR) QUARTER 4 2023.</a>
          </tr>
		      
		      <tr class="row1">
            <td class="column0 style0 s"><a href="{{url::to('uploads/2024-Appropriation-Bill-015843.pdf')}}" target="_blank">PLATEAU STATE 2024 APPROPRIATION BILL.</a>
          </tr>

        <tr class="row1">
            <td class="column0 style0 s"><a href="{{url::to('uploads/plateau-state-revenue-consolidation-law-2020.pdf')}}" target="_blank">PLATEAU STATE REVENUE CONSOLIDATION LAW 2020.</a>
          </tr>
          
          <tr class="row1">
            <td class="column0 style0 s"><a href="{{url::to('uploads/Plateau-State-Export-Strategies-and-Guidelines-2023-2027.pdf')}}" target="_blank">PLATEAU STATE EXPORT STRATEGIES AND GUIDELINES 2023 - 2024.</a>
          </tr>
          
           <tr class="row1">
            <td class="column0 style0 s"><a href="{{url::to('uploads/PLATEAU-STATE-COMMITTEE-ON-EXPORP-PROMOTION-BUDGET-LINE-Ministry-of-Commerce-and-industries.pdf')}}" target="_blank">PLATEAU STATE COMMITTEE ON EXPORT PROMOTION BUDGET LINE-Ministry-of-Commerce-and-industries.pdf</a>
          </tr>
   

        <tr class="row1">
            <td class="column0 style0 s"><a href="{{url::to('uploads/20190828_Plateau_State_Strategy-Plateau_State_Strategic_Plan_2017-2023.pdf')}}" target="_blank">PLATEAU STATE STRATEGIC PLAN 2017 - 2023.</a> 
          </tr>

		  	<tr class="row1">
            <td class="column0 style0 s"><a href="{{url::to('uploads/Plateau_State_2024-2026_Medium_Term_Expenditure_Framework.docx')}}" target="_blank">PLATEAU STATE 2024-2026 MEDIUM TERM EXPENDITURE FRAMEWORK(MTEF).</a> 
          </tr>

        <tr class="row1">
            <td class="column0 style0 s"><a href="{{url::to('uploads/plateau-state-2023-q3-budget-performance-report.pdf')}}" target="_blank">PLATEAU STATE 2023 Q3 BUDGET PERFORMANCE REPORT (BPR).</a>
          </tr>

		  <tr class="row1">
            <td class="column0 style0 s"><a href="{{url::to('uploads/plateau-state-2023-Q2-budget-performance.pdf')}}" target="_blank">PLATEAU STATE 2023 Q2 BUDGET PERFORMANCE REPORT (BPR).</a>
          </tr>

          <tr class="row1">
            <td class="column0 style0 s"><a href="{{url::to('uploads/plateau-state-2023-approved-budget.pdf')}}" target="_blank">PLATEAU STATE 2023 APPROVED BUDGET.</a>
          </tr>

          <tr class="row1">
            <td class="column0 style0 s"><a href="{{url::to('uploads/Haulage.pdf')}}" target="_blank">HAULAGE.</a>
          </tr>

          <tr class="row1">
            <td class="column0 style0 s"><a href="{{url::to('uploads/Plateau_State_Information_on Access_to_Credit.pdf')}}" target="_blank">PLATEAU STATE INFORMATION ON ACCESS TO CREDIT.</a>
          </tr>

          <tr class="row1">
            <td class="column0 style0 s"><a href="{{url::to('uploads/Plateau_State_Information_on_Infrastructure.pdf')}}" target="_blank">PLATEAU STATE INFORMATION ON INFRASTRUCTURE.</a>
          </tr>

          <tr class="row1">
            <td class="column0 style0 s"><a href="{{url::to('uploads/Plateau_State_Information_on_Investment_Incentives.pdf')}}" target="_blank">PLATEAU STATE INFORMATION ON INVESTMENT INCENTIVES.</a>
          </tr>

          <tr class="row1">
            <td class="column0 style0 s"><a href="{{url::to('uploads/Plateau_State_Labour_Information.pdf')}}" target="_blank">PLATEAU STATE LABOUR INFORMATION.</a>
          </tr>


          <tr class="row1">
            <td class="column0 style0 s"><a href="{{url::to('uploads/Plateau_State_One_Stop_Investment_Centre_Executive_Order.pdf')}}" target="_blank">PLATEAU STATE ONE STOP INVESTMENT CENTRE EXECUTIVE ORDER.</a>
          </tr>





        <tr class="row1">
            <td class="column0 style0 s"><a href="{{url::to('uploads/Inventory_of_Investment_and_Business_Incentives.docx')}}" target="_blank">STATE BUSINESS INCENTIVES.</a>
          </tr>

        <tr class="row1">
            <td class="column0 style0 s"><a href="{{url::to('uploads/SCHEDULE_OF_FEES_AND_CHARGES_PLAN_PROCESSING_FEES.pdf')}}" target="_blank">BUSINESS REGULATORY PROCESS.</a>
          </tr>

<tr class="row1">
<tr class="row1">
            <td class="column0 style0 s"><a href="{{asset('assets/documents/2022-plsg-financial-statement.pdf')}}" target="_blank">FY2022 PLSG FINANCAL STATEMENT.</a>
          </tr>

<tr class="row1">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU%20STATE%20Y2021%20AUDIT%20REPORT.pdf">PLATEAU STATE FY2021 AUDIT REPORT.</a></td>
          </tr>
		      <tr class="row1">
            <td class="column0 style0 s"><a href="https://www.dropbox.com/s/b91bs906d7iyscg/REPORT%20OF%20THE%20AUDITOR%20GENERAL%20FOR%20Q3%20ENDED%2030TH%20SEPT%202021.pdf?dl=0">SUMISSION OF Q3 AUDITOR GENERAL REPORT TO THE HOUSE OF ASSEMBLY</a></td>
          </tr>
		        <tr class="row1">
            <td class="column0 style0 s"><a href="https://www.dropbox.com/s/q8ndb12rq6ola99/SABER%20-%20AUDITOR%20LETTER%20TO%20PLHA.jpeg?dl=0">SUBMISSION OF THE AUDITOR-GENERAL'S REPORT ON THE ACCOUNTS OF PLATEAU STATE GOVERNMENT FOR THE YEAR 2021</a></td>
          </tr>
		       <tr class="row1">
            <td class="column0 style0 s"><a href="https://www.dropbox.com/s/hz3hgfa35awel84/SABER%20-%20AUDITOR%20LETTER%20TO%20HE.jpeg?dl=0">Submission for the Auditor General's report on the account of Plateau State Government for the year 2021</a></td>
          </tr>
           <tr class="row1">
            <td class="column0 style0 s"><a href="https://www.dropbox.com/s/yhpo6r4y8l98k0w/SUMISSION%20OF%20Q3%20AUDITOR%20GENERAL%20REPORT%20TO%20THE%20HOUSE%20OF%20ASSEMBLY%20%281%29.pdf?dl=0">REPORT OF THE AUDITOR GENERAL FOR Q3 ENDED 30TH SEPT 2021</a></td>
          </tr>
		      <tr class="row1">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Plateau State Citizens Accountability Report v6.pdf">CITIZENS ACCOUNTABILITY REPORT 2021</a></td>
          </tr>
          <tr class="row2">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/ADDENDUM PLATEAU STATE 2021 CITIZENS BUDGET.pdf">CITIZENS BASE BUDGET 2021</a></td>
          </tr>
          <tr class="row3">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/WASE REPORT.pdf">REPORT OF THE AUDITOR GENERAL WASE LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row4">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/SHENDAM REPORT.pdf">REPORT OF THE AUDITOR GENERAL SHENDAM LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row5">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/RIYOM REPORT.pdf">REPORT OF THE AUDITOR GENERAL RIYOM LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row6">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/QUAANPAN REPORT.pdf">REPORT OF THE AUDITOR GENERAL QUAAN PAN LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row7">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PANKSHIN REPORT.pdf">REPORT OF THE AUDITOR GENERAL PANKSHIN LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row8">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/MIKANG REPORT.pdf">REPORT OF THE AUDITOR GENERAL MIKANG LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row9">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/MANGU REPORT.pdf">REPORT OF THE AUDITOR GENERAL MANGU LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row10">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/LANGTANG SOUTH REPORT.pdf">REPORT OF THE AUDITOR GENERAL LANGTANG SOUTH LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row11">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/LANGTANG NORTH REPORT.pdf">REPORT OF THE AUDITOR GENERAL LANGTANG NORTH LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row12">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/JOS EAST REPORT.pdf">REPORT OF THE AUDITOR GENERAL JOS EAST LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row13">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/KANKE REPORT.pdf">REPORT OF THE AUDITOR GENERAL KANKE LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row14">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/KANAM REPORT.pdf">REPORT OF THE AUDITOR GENERAL KANAM LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row15">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/JOS SOUTH REPORT.pdf">REPORT OF THE AUDITOR GENERAL JOS SOUTH LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row16">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/JOS NORTH REPORT.pdf">REPORT OF THE AUDITOR GENERAL JOS NORTH LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row17">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/BOKKOS REPORT.pdf">REPORT OF THE AUDITOR GENERAL BAOKKOS LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row18">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/BASSA REPORT.pdf">REPORT OF THE AUDITOR GENERAL BASSA LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row19">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/BARKIN LADI REPORT.pdf">REPORT OF THE AUDITOR GENERAL BARKIN LADI LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row20">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PANKSHIN LGA FS.pdf">FINANCIAL STATEMENT PANKSHIN LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row21">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/SHENDAM LGA FS 2021.pdf">FINANCIAL STATEMENT SHENDAM LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row22">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/WASE LGA FS 2021.pdf">FINANCIAL STATEMENT WASE LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row23">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/QUAAN PAN LGA FS.pdf">FINANCIAL STATEMENT QUAAN PAN LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row24">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/RIYOM LGA FS 2021.pdf">FINANCIAL STATEMENT RIYOM LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row25">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/MIKANG LGA FS.pdf">FINANCIAL STATEMENT MIKANG LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row26">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/MANGU LGA FS.pdf">FINANCIAL STATEMENT MANGU LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row27">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/LANGTANG SOUTH LGA FS 2021.pdf">FINANCIAL STATEMENT LANGTANG SOUTH LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row28">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/LANGTANG NORTH LGA FS.pdf">FINANCIAL STATEMENT LANGTANG NORTH LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row29">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/KANKE LGA FS.pdf">FINANCIAL STATEMENT KANKE LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row30">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/KANAM LGA FS 2021.pdf">FINANCIAL STATEMENT KANAM LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row31">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/JOS SOUTH FS.pdf">FINANCIAL STATEMENT JOS SOUTH LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row32">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/JOS NORTH LGA FS 2021.pdf">FINANCIAL STATEMENT  JOS NORTH LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row33">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/JOS EAST LGA FS 2021.pdf">FINANCIAL STATEMENT JOS EAST LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row34">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/BOKKOS LGA FS 2021.pdf">FINANCIAL STATEMENT BOKKOS LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row35">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/BASSA LGA FS 2021.pdf">FINANCIAL STATEMENT BASSA LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row36">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/BARKIN LADI LGA FS.pdf">FINANCIAL STATEMENT BARKIN LADI LOCAL GOVERNMENT COUNCIL Y2021</a></td>
          </tr>
          <tr class="row37">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE GOVERNMENT Y2021 FS.pdf">2021 PLSG FINANCIAL STATEMENT</a></td>
          </tr>
          <tr class="row38">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE 2022 MINUTES OF  TOWNHALL MEETING ON CITIZENS ENGAGEMENT.pdf">PLATEAU STATE 2022-BUDGET MINUTES OF TOWNHALL MEEETING.</a></td>
          </tr>
          <tr class="row39">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE GOVERNMENT Y2021 FS.pdf">FINANCIAL STATEMENTS PLATEAU STATE GOVERNMENT Y2021</a></td>
          </tr>
          <tr class="row40">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE Y2021 AUDIT REPORT.pdf">Y2021 AUDITED FINANCIAL ACCOUNTS PLSG</a></td>
          </tr>
          <tr class="row41">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/GENERAL REPORT BPP 2.pdf">LIST OF CONTRACTS AWARDED FOR THE FOUR PILOT MDAS 2022</a></td>
          </tr>
          <tr class="row42">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Plateua State BPR3-C BPR Publication Finale CR - 2022 Q1 CR.pdf">2022 FIRST BPR QUARTER REPORT</a></td>
          </tr>
          <tr class="row43">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Report of the Auditor General FS 2021.pdf">AUDITED FINANCIAL STATEMENT 2019</a></td>
          </tr>
          <tr class="row44">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/plateau_state_approved_budget_2019.pdf">2019 BUDGET</a></td>
          </tr>
          <tr class="row45">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE CASHFLOW FORECAST FOR THE YEAR 2020.pdf">PLATEAU STATE CASHFLOW FORECAST FOR THE YEAR 2020</a></td>
          </tr>
          <tr class="row46">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE 2020 CITIZENS REVISED BUDGET DISEMINATION AND BUDGET TOWN-HALL CONSULTATIVE FORUM HELD IN MAY AND SEPTEMBER 2020 IN PREPARATION OF 2021 BUDGET.pdf">PLATEAU STATE 2020 CITIZENS REVISED BUDGET DISEMINATION AND BUDGET TOWN-HALL CONSULTATIVE FORUM HELD IN MAY AND SEPTEMBER 2020 IN PREPARATION OF 2021 BUDGET</a></td>
          </tr>
          <tr class="row47">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE 2020 CITIZENS REVISED BUDGET DISEMINATION AND BUDGET TOWN-HALL CONSULTATIVE FORUM REPORTS.pdf">PLATEAU STATE 2020 CITIZENS REVISED BUDGET DISEMINATION AND BUDGET TOWN-HALL CONSULTATIVE FORUM REPORTS</a></td>
          </tr>
          <tr class="row48">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE 2021 CITIZENS DISEMINATION AND MINUTES OF CITIZENS CONSULTATIVE FORUM REPORTS.pdf">PLATEAU STATE 2021 CITIZENS DISEMINATION AND MINUTES OF CITIZENS CONSULTATIVE FORUM REPORTS</a></td>
          </tr>
          <tr class="row49">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE 2020 REVISED CITIZENS BUDGET.pdf">PLATEAU STATE 2020 REVISED CITIZENS BUDGET</td>
          </tr>
          <tr class="row50">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE 2020 REVISED CITIZENS BUDGET DISEMINATION AND TOWN HALL ENGAGEMENT REPORTS.pdf">PLATEAU STATE 2020 REVISED CITIZENS BUDGET DISEMINATION AND TOWN HALL ENGAGEMENT REPORTS</a></td>
          </tr>
          <tr class="row51">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLSG CASH MANAGEMENT STRATEGY ADDENDUM.pdf">PLSG CASH MANAGEMENT STRATEGY ADDENDUM</a></td>
          </tr>
          <tr class="row52">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Plateau State Citizens Accountability Report v6.pdf">Plateau State Citizens Accountability Report v6</a></td>
          </tr>
          <tr class="row53">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE BUDGET PERFORMANCE DEVIATION REPORT 2020.xlsx">PLATEAU STATE BUDGET PERFORMANCE DEVIATION REPORT 2020</td>
          </tr>
          <tr class="row54">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE CITIZENS BUDGET AND TOWN HALL MEETING 2020 COVID 19 RESPONSIVE BUDGET.pdf">PLATEAU STATE CITIZENS BUDGET AND TOWN HALL MEETING 2020 COVID 19 RESPONSIVE BUDGET</a></td>
          </tr>
          <tr class="row55">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE 2022 APPROVED BUDGET.pdf">PLATEAU STATE 2022 APPROVED BUDGET BREAKDOWN</td>
          </tr>
          <tr class="row56">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Plateua State BPR3-C BPR Publication Finale CR - 2021 q4 CR (2).pdf">PLATEAU STATE BPR3-C BPR PUBLICATION FINALE CR - 2021 Q4 CR</a></td>
          </tr>
          <tr class="row57">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE 2021 DSA-DMS REPORT.pdf">PLATEAU STATE 2021 DSA-DMS REPORT</a></td>
          </tr>
          <tr class="row58">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE 2022 APROPRIATION BILL.pdf">PLATEAU STATE 2022 APROPRIATION ACT</a></td>
          </tr>
          <tr class="row59">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/2019 AUDITED MANAGMENT OPINION PLATEAU STATE LGC.pdf">2019 AUDITED MANANGMENT OPINION PLATEAU STATE 17 LGC</a></td>
          </tr>
          <tr class="row60">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/AUDIT MANAGMENT OPINION 17 LGC YEAR 2020.pdf">AUDIT MANAGMENT OPINION 2018 LGC</a></td>
          </tr>
          <tr class="row61">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE COVID 19 RESPONSIVE BUDGET IMPLEMENTATION REPORT DECEMBER 2020.pdf">ADDENDUM TO COVID19 DECEMBER 2020 REPORT</a></td>
          </tr>
          <tr class="row62">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Plateau State BPR THIRD QUARTER Q3 2021.pdf">PLATEAU STATE BPR THIRD QUARTER Q3 2021</a></td>
          </tr>
          <tr class="row63">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Mikang AFS 2020 Report-compressed.pdf">MIKANG LGC 2020 AFS UPDATED</a></td>
          </tr>
          <tr class="row64">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Plateau State FY 2022 Draft Budget - NCoA Compliant Publication Version 1.xlsx">PLATEAU STATE 2022 DRAFT BUDGET EXCEL</a></td>
          </tr>
          <tr class="row65">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Plateau State FY 2022 Draft Budget - NCoA Compliant Publication Version 1.pdf">PLATEAU STATE 2022 DRAFT BUDGET</a></td>
          </tr>
          <tr class="row66">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/WASE REPORT.pdf">WASE LGC 2020 AFS</a></td>
          </tr>
          <tr class="row67">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Shendam Report.pdf">SHENDAM LGC 2020 AFS</a></td>
          </tr>
          <tr class="row68">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Riyom Report.pdf">RIYOM LGC 2020 AFS</a></td>
          </tr>
          <tr class="row69">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Quan-Pan Report.pdf">QUAN PAN LGC 2020 AFS</a></td>
          </tr>
          <tr class="row70">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Pankshin Report.pdf">PANKSHIN LGC 2020 AFS</a></td>
          </tr>
          <tr class="row71">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Mangu Report.pdf">MANGU LGC 2020 AFS</a></td>
          </tr>
          <tr class="row72">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Langtang South Report.pdf">LANGTANG SOUTH LGC 2020 AFS</a></td>
          </tr>
          <tr class="row73">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Langtang Report.pdf">LANGTANG NORTH LGC 2020 AFS</a></td>
          </tr>
          <tr class="row74">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Kanke Report.pdf">KANKE LGC 2020 AFS</a></td>
          </tr>
          <tr class="row75">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Kanam Report.pdf">KANAM LGC 2020 AFS</a></td>
          </tr>
          <tr class="row76">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Jos South Report.pdf">JOS SOUTH LGC 2020 AFS</a></td>
          </tr>
          <tr class="row77">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Jos North Report.pdf">JOS NORTH LGC 2020 AFS</a></td>
          </tr>
          <tr class="row78">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Jos East Report.pdf">JOS EAST LGC 2020 AFS</a></td>
          </tr>
          <tr class="row79">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Bokkos Report.pdf">BOKKOS LGC 2020 AFS</a></td>
          </tr>
          <tr class="row80">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Bassa LG Report.pdf">BASSA LGC 2020 AFS</a></td>
          </tr>
          <tr class="row81">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Barkin Ladi Report.pdf">BARKIN LADI LGC 2020 AFS</a></td>
          </tr>
          <tr class="row82">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Consolidated Book.pdf">CONSOLIDATED 17 LGC AFS 2020</a></td>
          </tr>
          <tr class="row83">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/pdf_files/PLATEAU_STATE_AUGUST_2021_COVID_19_RESPONSIVE_STATEMENTS.pdf">AUGUST 2021 BUDGET STATEMENTS REPORT COVID -19</a></td>
          </tr>
          <tr class="row84">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_AUGUST_2021_COVID_19_RESPONSIVE_BUDGET_IMPLIMENTATION_REPORT.pdf">AUGUST 2021 BUDGET IMPLIMENTATION REPORT COVID -19</a></td>
          </tr>
          <tr class="row85">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/MANAGMENT OPINION 2018 LGC AUDIT.pdf">AUDITORS NOTE ON 2018 LGC AUDITED FINANCIAL STATEMENTS </a></td>
          </tr>
          <tr class="row86">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/2019 AUDIT OPINION LGC.pdf">AUDIT STATEMENT ON 2019 LGC AUDITED FS</a></td>
          </tr>
          <tr class="row87">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/B LADI COMPRESSED.pdf">BARKIN LADI 2018 </a></td>
          </tr>
          <tr class="row88">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Shendam.pdf">FS SHENDAM 2019</a></td>
          </tr>
          <tr class="row89">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/COVID-19 REPORT DECEMBER 2020.pdf">COVID-19 REPORT DECEMBER 2020</a></td>
          </tr>
          <tr class="row90">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE FS 2020 REPORT (1).pdf">AUDITED FINANCIAL STATEMENT Y2020</a></td>
          </tr>
          <tr class="row91">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/QUAN PAN.pdf">FINANCIAL STATEMENT 2019 QUAN-PAN</a></td>
          </tr>
          <tr class="row92">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Wase.pdf">FINANCIAL STATEMENT 2019 WASE</a></td>
          </tr>
          <tr class="row93">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Riyom.pdf">FINANCIAL STATEMENT 2019 RIYOM</a></td>
          </tr>
          <tr class="row94">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Pankshin.pdf">FINANCIAL STATEMENT 2019 PANKSHIN</a></td>
          </tr>
          <tr class="row95">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Mikang.pdf">FINANCIAL STATEMENT 2019 MIKANG</a></td>
          </tr>
          <tr class="row96">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Mangu.pdf">FINANCIAL STATEMENT 2019 MANGU</a></td>
          </tr>
          <tr class="row97">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Langtang South.pdf">FINANCIAL STATEMENT 2019 LANGTANG SOUTH</a></td>
          </tr>
          <tr class="row98">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Langtang North.pdf">FINANCIAL STATEMENT 2019 LANGTANG NORTH</a></td>
          </tr>
          <tr class="row99">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Kanke.pdf">FINANCIAL STATEMENT 2019 KANKE</a></td>
          </tr>
          <tr class="row100">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Kanam.pdf">FINANCIAL STATEMENT 2019 KANAM</a></td>
          </tr>
          <tr class="row101">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Jos South.pdf">FINANCIAL STATEMENT 2019 JOS SOUTH</a></td>
          </tr>
          <tr class="row102">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Jos North.pdf">FINANCIAL STATEMENT 2019 JOS NORTH</a></td>
          </tr>
          <tr class="row103">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Jos East.pdf">FINANCIAL STATEMENT 2019 JOS EAST</a></td>
          </tr>
          <tr class="row104">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Bokkos.pdf">FINANCIAL STATEMENT 2019 BOKKOS</a></td>
          </tr>
          <tr class="row105">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Bassa.pdf">FINANCIAL STATEMENT 2019 BASSA</a></td>
          </tr>
          <tr class="row106">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/B Ladi.pdf">FINANCIAL STATEMENT 2019 BARKIN LADI</a></td>
          </tr>
          <tr class="row107">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/FS SHENDAM 2018.pdf">FINANCIAL STATEMENT 2018 SHENDAM </a></td>
          </tr>
          <tr class="row108">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/FS WASE.pdf">FINANCIAL STATEMENT 2018 WASE</a></td>
          </tr>
          <tr class="row109">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/FS RIYOM.pdf">FINANCIAL STATEMENT 2018 RIYOM</a> </td>
          </tr>
          <tr class="row110">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/FS QP.pdf">FINANCIAL STATEMENT 2018 QUAN-PAN</a></td>
          </tr>
          <tr class="row111">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/FS PANKSHIN.pdf">FINANCIAL STATEMENT 2018 PANKSHIN </a></td>
          </tr>
          <tr class="row112">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/FS MIKANG.pdf">FINANCIAL STATEMENT 2018 MIKANG </a></td>
          </tr>
          <tr class="row113">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/FS MANGU.pdf">FINANCIAL STATEMENT 2018 MANGU</a></td>
          </tr>
          <tr class="row114">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/FS LANGTANG SOUTH.pdf">FINANCIAL STATEMENT 2018 LANGTANG SOUTH</a></td>
          </tr>
          <tr class="row115">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/FS LANGTANG NORTH.pdf">FINANCIAL STATEMENT 2018 LANGTANG NORTH </a></td>
          </tr>
          <tr class="row116">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/FS KANKE.pdf">FINANCIAL STATEMENT 2018 KANKE</a></td>
          </tr>
          <tr class="row117">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/FS KANAM.pdf">FINANCIAL STATEMENT 2018 KANAM</a></td>
          </tr>
          <tr class="row118">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/FS JOS SOUTH.pdf">FINANCIAL STATEMENT 2018 JOS SOUTH</a></td>
          </tr>
          <tr class="row119">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/FS JOS NORTH.pdf">FINANCIAL STATEMENT 2018 JOS NORTH</a></td>
          </tr>
          <tr class="row120">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/FS JOS EAST.pdf">FINANCIAL STATEMENT 2018 JOS EAST</a></td>
          </tr>
          <tr class="row121">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/FS BOKKOS.pdf">FINANCIAL STATEMENT 2018 BOKKOS</a></td>
          </tr>
          <tr class="row122">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/FS BASSA.pdf">FINANCIAL STATEMENT 2018 BASSA LGA</a></td>
          </tr>
          <tr class="row123">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/GOVERNORS APPROVAL FOR RELEASE OF FUNDS FOR LOCAL GOVERNMENT AUDITOR GENERAL.pdf">GOVERNEORS APPROVAL FOR RELEASE OF FUNDS FOR OFFICE OF THE AUDITOR GENERAL LGA</a></td>
          </tr>
          <tr class="row124">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/GOVERNEORS APPROVAL FOR RELEASE OF FUNDS FOR OFFICE OF THE AUDITOR GENERAL PLATEAU STATE.pdf">GOVERNEORS APPROVAL FOR RELEASE OF FUNDS FOR OFFICE OF THE AUDITOR GENERAL PLATEAU STATE</a></td>
          </tr>
          <tr class="row125">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE SECOND QUARTER Q2 2021  COVID 19 RESPONSIVE STATEMENTS.xls">PLATEAU STATE SECOND QUARTER Q2 2021  COVID 19 RESPONSIVE STATEMENTS</a></td>
          </tr>
          <tr class="row126">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE SECOND QUARTER Q2 2021  COVID 19 RESPONSIVE STATEMENTS.pdf">PLATEAU STATE SECOND QUARTER Q2 2021  COVID 19 RESPONSIVE STATEMENTS</a></td>
          </tr>
          <tr class="row127">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE JUNE 2021 COVID 19 RESPONSIVE STATEMENTS.xls">PLATEAU STATE JUNE 2021 COVID 19 RESPONSIVE STATEMENTS</a></td>
          </tr>
          <tr class="row128">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE JUNE 2021 COVID 19 RESPONSIVE STATEMENTS.pdf">PLATEAU STATE JUNE 2021 COVID 19 RESPONSIVE STATEMENTS</a></td>
          </tr>
          <tr class="row129">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE JUNE 2021 COVID 19 RESPONSIVE BUDGET EXPENDITURE REPORT.pdf">PLATEAU STATE JUNE 2021 COVID 19 RESPONSIVE BUDGET EXPENDITURE REPORT</a></td>
            <td class="column1 style0 s"></td>
          </tr>
          <tr class="row130">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE JUNE 2021 COVID 19 RESPONSIVE BUDGET EXPENDITURE REPORT.xlsx">PLATEAU STATE JUNE 2021 COVID 19 RESPONSIVE BUDGET EXPENDITURE REPORT</a></td>
          </tr>
          <tr class="row131">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/2019-2020-annual-nominal-igr-growth-rate-report.pdf">PLSG ANNUAL IGR GROWTH RATE 2019 - 2020</a></td>
          </tr>
          <tr class="row132">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/IGR 2019 TO 2020 FOR SFITAS MALAN.pdf">PLSG IGR REPORT 2019 - 2020 </td>
          </tr>
          <tr class="row133">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Plateua State Second Quarter Budget Implementation Report April-June 2021.pdf">Plateua State Second Quarter Budget Implementation Report April-June 2021</a></td>
          </tr>
          <tr class="row134">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/4TH QUARTER, 2020.pdf">DMO 4TH QUARTER, 2020 REPORT</a></td>
          </tr>
          <tr class="row135">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/3RD QUATER, 2020.pdf">DMO 3RD QUARTER, 2020 REPORT</a></td>
          </tr>
          <tr class="row136">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/2ND QUATER, 2020.pdf">DMO 2ND QUARTER, 2020 REPORT</a></td>
          </tr>
          <tr class="row137">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/1ST QUARTER, 2021.pdf">DMO 1ST QUARTER, 2021 REPORT</a></td>
          </tr>
          <tr class="row138">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/1ST QUARTER, 2020.pdf">DMO 1ST QUARTER, 2020 REPORT</a></td>
          </tr>
          <tr class="row139">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/SUBMISSION OF Y2020 AUDIT REPORT.pdf">SUBMISSION OF Y2020 AUDIT REPORT TO HOUSE OF ASSEMBLY</a></td>
          </tr>
          <tr class="row140">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/AUDITOR GENERALS REPORT - PAGES 353 TO 465.pdf">AUDITOR GENERALS REPORT - PAGE TO 353 - 465</a></td>
          </tr>
          <tr class="row141">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/AUDITOR GENERALS REPORT - PAGES 197 TO 352.pdf">AUDITOR GENERALS REPORT - PAGE TO 197 - 352</a></td>
          </tr>
          <tr class="row142">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/AUDITOR GENERALS REPORT - COVER PAGE TO 196.pdf">AUDITOR GENERALS REPORT - COVER PAGE TO 196 </a></td>
          </tr>
          <tr class="row143">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/FINAL_COVID_19_FIN_FINAL.pdf">PLSG COVID-19 FINANCIAL STATEMENTS 2020 PDF</a></td>
          </tr>
          <tr class="row144">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/2021-financial-autonomy-circular.pdf">2021-financial-autonomy-circular</a></td>
          </tr>
          <tr class="row145">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLSG_AUDIT_LAW_2021.pdf">PLSG AUDIT LAW 2021</a></td>
          </tr>
          <tr class="row146">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/COVID_19_PROCUREMENT_2021.xlsx">PLSG COVID-19 PROCUMENTS 2021</a></td>
          </tr>
          <tr class="row147">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLSG_PSIRS_PROHIBITIONS_CONSULTANTS.pdf">PLSG PSIRS PROHIBITION OF CONSULTANTS</a></td>
          </tr>
          <tr class="row148">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_MAY_2021_FINANCIAL_STATEMENTS_FOR_COVID_19_RESPONSIVE.pdf">PLATEAU_STAT_MAY_2021_COVID_19 RESPONSIVE_FINANCIAL STATEMENTS REPORT PDF<</a></td>
          </tr>
          <tr class="row149">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_MAY_2021_FINANCIAL STATEMENTS_FOR_COVID_19_RESPONSIVE.xls">PLATEAU_STAT_MAY_2021_COVID_19 RESPONSIVE_FINANCIAL STATEMENTS REPORT XLS</a></td>
          </tr>
          <tr class="row150">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_MAY_2021_COVID_19_RESPONSIVE_BUDGET_EXPENDITURE_REPORT.pdf">PLATEAU_STAT_MAY_2021_COVID_19 RESPONSIVE_BUDGET_EXPENDITURE_REPORT pdf</a></td>
          </tr>
          <tr class="row151">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STAT_MAY_2021_COVID_19 RESPONSIVE_BUDGET_EXPENDITURE_REPORT.xls">PLATEAU_STAT_MAY_2021_COVID_19 RESPONSIVE_BUDGET_EXPENDITURE_REPORT XLS</a></td>
          </tr>
          <tr class="row152">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLSG_Domesticated_Debt_Data_Mar31_2021.jpg">PLSG DOMESTIC DEBT DATA </a></td>
          </tr>
          <tr class="row153">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Plateau_State_Q1_2021_Template_from_DMO.xlsx">PLSG FIRST QUARTER TEMPLATE DMO</a></td>
          </tr>
          <tr class="row154">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Plateau_State_Q1_2021_CoverLetter_DMO.jpg">PLSG FIRST QUARTER COVER LETTER DMO</a></td>
          </tr>
          <tr class="row155">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_APRIL_2021_COVID19_RESPONSIVE_BUDGET_EXPENDITURE_REPORT.xlsx">PLATEAU_STATE_APRIL_2021_COVID_19_BUDGET EXPENDITURE PDF</a></td>
          </tr>
          <tr class="row156">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_APRIL_2021_COVID19_RESPONSIVE_BUDGET_EXPENDITURE_REPORT.pdf">PLATEAU_STATE_APRIL_2021_COVID_19_BUDGET EXPENDITURE PDF</a></td>
          </tr>
          <tr class="row157">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_APRIL_2021_COVID19_RESPONSIVE_STATEMENTS.pdf">PLATEAU_STATE_APRIL_2021_COVID_19_RESPONSIVE_STATEMENTS pdf</a></td>
          </tr>
          <tr class="row158">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_APRIL_2021_COVID_19_RESPONSIVE_STATEMENTS.xls">PLATEAU_STATE_APRIL_2021_COVID_19_RESPONSIVE_STATEMENTS xls</a></td>
          </tr>
          <tr class="row159">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Auditor_Gen_1st_qtr_covid19_2021.pdf">Auditor_Gen_1st_qtr_covid19_2021_report</a></td>
          </tr>
          <tr class="row160">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Auditor_Gen_1st_qtr_covid19_2021_submission_letter.pdf">Auditor_Gen_1st_qtr_covid19_2021_submission_letter</a></td>
          </tr>
          <tr class="row161">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE MINUTES AND REPORT OF CITIZENS ENGAGEMENT IN THE BUDGET PROCESS.pdf">PLATEAU STATE MINUTES AND REPORT OF CITIZENS ENGAGEMENT IN THE BUDGET PROCESS</a></td>
          </tr>
          <tr class="row162">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Plateua_State_First_Quarter_Budget_Implementation_Report_January_to_March_2021.pdf">PLSG 1ST QUARTER BUDGET  IMPLIMENATION REPORT 2021</a></td>
          </tr>
          <tr class="row163">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE FINANCIAL STATEMENTS FOR COVID 19 RESPOSIVE MARCH 2021.pdf">PLATEAU_STATE_COVID_19_RESPONSIVE_STATEMENT_MARCH_2021 PDF</a></td>
          </tr>
          <tr class="row164">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_FINANCIAL_STATEMENTS_FOR_COVID_19_RESPOSIVE_MARCH_2021.pdf">PLATEAU_STATE_COVID_19_RESPONSIVE_STATEMENT_MARCH_2021 XLS</a></td>
          </tr>
          <tr class="row165">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_COVID_19_RESPONSIVE_BUDGET_IMPLEMENTATION_REPORT_MARCH_2021.pdf">PLATEAU_STATE_COVID_19_RESPONSIVE_BUDGE_IMPLIMENTATION_REPORT_MARCH_2021 PDF</a></td>
          </tr>
          <tr class="row166">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_COVID_19_RESPONSIVE_BUDGE_IMPLIMENTATION_REPORT_MARCH_2021.xlsx">PLATEAU_STATE_COVID_19_RESPONSIVE_BUDGE_IMPLIMENTATION_REPORT_MARCH_2021 XLS</a></td>
          </tr>
          <tr class="row167">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Contract-Award-QCBS-Solina-Health-Plateau-2021.pdf">Contract-Award-QCBS-Solina-Health-Plateau-2021 pdf</a></td>
          </tr>
          <tr class="row168">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_FEBRUARY_2021_COVID_19_RESPONSIVE_STATEMENTS.xls">PLATEAU_STATE_FEBRUARY_2021_COVID_19_STATEMENTS xls</a></td>
          </tr>
          <tr class="row169">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_FEBRUARY_2021_COVID_19_RESPONSIVE_STATEMENTS.pdf">PLATEAU_STATE_FEBRUARY_2021_COVID_19_STATEMENTS PDF</a></td>
          </tr>
          <tr class="row170">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_FEBRUARY_2021_COVID_19_RESPONSIVE_BUDGET_EXPENDITURE_REPORT.xlsx">PLATEAU_STATE_FEBRUARY_2021_COVID_19_RESPONSIVE_BUDGET_EXPENDITURE_REPORT xls</a></td>
          </tr>
          <tr class="row171">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_FEBRUARY_2021_COVID_19_RESPONSIVE_BUDGET_EXPENDITURE_REPORT.pdf">PLATEAU_STATE_FEBRUARY_2021_COVID_19_RESPONSIVE_BUDGET_EXPENDITURE_REPORT pdf</a></td>
          </tr>
          <tr class="row172">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE JANUARY 2021 COVID 19 RESPONSIVE STATEMENTS.xls">PLATEAU STATE JANUARY 2021 COVID 19 RESPONSIVE STATEMENTS xls</a></td>
          </tr>
          <tr class="row173">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE JANUARY 2021 COVID 19 RESPONSIVE STATEMENTS.pdf">PLATEAU STATE JANUARY 2021 COVID 19 RESPONSIVE STATEMENTS  pdf</a></td>
          </tr>
          <tr class="row174">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE JANUARY 2021 COVID 19 RESPONSIVE BUDGET EXPENDITURE REPORT.xlsx">PLATEAU STATE JANUARY 2021 COVID 19 RESPONSIVE BUDGET EXPENDITURE REPORT XLS</a></td>
          </tr>
          <tr class="row175">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE JANUARY 2021 COVID 19 RESPONSIVE BUDGET EXPENDITURE REPORT.pdf">PLATEAU STATE JANUARY 2021 COVID 19 RESPONSIVE BUDGET EXPENDITURE REPORT PDF</a></td>
          </tr>
          <tr class="row176">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/SUBMISSION_OF_THE_AUDITOR_GENERAL_REPORT_TO_THE_HOUSE_OF_ASSEMBLY_FOR_THE_4TH_QUARTER_ENDED_31ST_DECEMBER_2020_COVID_19_REPONSIVE.JPG">SUBMISSION OF THE AUDITOR GENERAL TO HOUSE OF ASSEMBLY  4TH QUARTER COVID-19 RESPONSIVE REPORT 2020</a></td>
          </tr>
          <tr class="row177">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/THE AUDITOR-GENERALS REPORT FOR THE 4TH QUARTER ENDED 31ST DECEMBER 2020- COVID-19 RESPONSIVE 2.pdf">AUDITOR GENERAL  4TH QUARTER COVID-19 RESPONSIVE REPORT 2020</a></td>
          </tr>
          <tr class="row178">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_THIRD_QUARTER_DEVIATION_REPORT_JULY_TO_SEPT_2020.pdf">PLSG  3rd QUARTER DEVIATION REPORT 2020</a></td>
          </tr>
          <tr class="row179">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_SECOND_QUARTER_DEVIATION_REPORT_APRIL_TO_JUNE_2020.pdf">PLSG  2nd QUARTER DEVIATION REPORT 2020</a></td>
          </tr>
          <tr class="row180">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_FOURTH_QUARTER_DEVIATION_REPORT_OCT_TO_DEC_2020.pdf">PLSG  4TH QUARTER DEVIATION REPORT 2020 pdf</a></td>
          </tr>
          <tr class="row181">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_4TH_QUARTER_BUDGET_MPLEMENTATION_REPORT_OCTOBER_TO_DECEMBER_2020.xlsx">PLSG 4TH QUARTER BUDGET IMPLIMENTATION REPORT 2020 XLS</a></td>
          </tr>
          <tr class="row182">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_4TH_QUARTER_BUDGET_IMPLEMENTATION_REPORT_OCTOBER_TO_DECEMBER_2020.pdf">PLSG 4TH QUARTER BUDGET IMPLIMENTATION REPORT 2020 PDF</a></td>
          </tr>
          <tr class="row183">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STAT_ FIRST_SECOND_THIRD_AND_FOURTH_QUARTER_DEVIATION_EXCEL_REPORTS_JANUARY_TO_DECEMBER_2020.xlsx">PLSG 1ST_2ND_3RD &amp; 4TH QUARTER DEVIATION REPORT 2020</a></td>
          </tr>
          <tr class="row184">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/EXECUTIVE_SUMMARY_FOURTH_QUARTER_OCTOMBER_TO_DECEMBER_2020.docx">PLSG FOURTH QUARTER 2020 EXECUTIVE SUMMARY</a></td>
          </tr>
          <tr class="row185">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_CITIZENS_BUDGET_2020_AND_BUDGET_TOWN_HALL_MEETING_FREPORT_2020.pdf">PLSG CITIZENS BUDGET AND TOWN HALL MEETING 2020 REPORT PDF</a></td>
          </tr>
          <tr class="row186">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_DECEMBER_2020_STATEMENT_FOR_COVID_19_RESPONSIVE.pdf">PLSG DECEMBER 2020 STATEMENT PDF</a></td>
          </tr>
          <tr class="row187">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_DECEMBER_2020_STATEMENTS_FOR_COVID19_RESPONSIVE.xls">PLSG DECEMBER 2020 STATEMENT XLS</a></td>
          </tr>
          <tr class="row188">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_COVID_19_RESPONSIVE_BUDGET_EXPENDITURE_REPORT_DECEMBER_2020.pdf">PLATEAU_STATE_COVID_19_RESPONSIVE_BUDGET_EXPENDITURE_REPORT_DECEMBER_2020 PDF</a></td>
          </tr>
          <tr class="row189">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_COVID_19_RESPONSIVE_BUDGET_EXPENDITURE_REPORT_DECEMBER_2020.xlsx">PLATEAU_STATE_COVID_19_RESPONSIVE_BUDGET_EXPENDITURE_REPORT_DECEMBER_2020 XLS</a></td>
          </tr>
          <tr class="row190">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE BALANCED SHEET 17 LGAS 2019.pdf">2019 BALANCE SHEETS 17 LGA OF PLATEAU STATE PDF</a></td>
          </tr>
          <tr class="row191">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE BALANCED SHEET 17 LGAS 2018.pdf">2018 BALANCE SHEETS 17 LGA OF PLATEAU STATE PDF</a></td>
          </tr>
          <tr class="row192">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_DSA_REPORT_NOV_DEC_2020.pdf">PLSG DSA REPORT NOV-DEC 2020 PDF</a></td>
          </tr>
          <tr class="row193">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE REVISED 2020 CITIZENS BUDGET BOOK (COVID-19 RESPONSIVE BUDGET).pdf">PLATEAU STATE REVISED 2020 CITIZENS BUDGET BOOK COVID-19 RESPONSIVE BUDGET</a></td>
          </tr>
          <tr class="row194">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_PROPOSED_2021_DRAFT_BUDGET.pdf">PLATEAU STATE PROPOSED 2021 BUDGET pdf</a></td>
          </tr>
          <tr class="row195">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_PROPOSED_2021_DRAFT_BUDGET.xlsx">PLATEAU STATE PROPOSED 2021 BUDGET</a></td>
          </tr>
          <tr class="row196">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_APPROPRIATION_BILL_2021.pdf">PLATEAU STATE APPROPRIATION BILL 2021</a></td>
          </tr>
          <tr class="row197">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_BUDGET_EXECUTION_REPORT_FOR_COVID_19_RESPONSE_NOVEMBER 2020.pdf">PLATEAU STATE BUDGET EXECUTION REPORT FOR COVID-19 RESPONSE NOVEMBER 2020 PDF</a></td>
          </tr>
          <tr class="row198">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_FINANCIAL_STATEMENTS_FOR_COVID_19_RESPONSIVE_NOVEMBER_2020.pdf">FINANCIAL STATEMENT FOR COVID-19 RESPONSE NOVEMBER 2020 pdf</a></td>
          </tr>
          <tr class="row199">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_FINANCIAL_STATEMENTS_FOR_COVID_19_RESPONSIVE_NOVEMBER_2020.xls">FINANCIAL STATEMENT  FOR COVID-19 RESPONSE NOVEMBER 2020</a></td>
          </tr>
          <tr class="row200">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_BUDGET_EXECUTION_REPORT_FOR_COVID_19_RESPONSE_NOVEMBER 2020.xlsx">PLATEAU STATE BUDGET EXECUTION REPORT FOR COVID-19 RESPONSE NOVEMBER 2020</a></td>
          </tr>
          <tr class="row201">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/SUBMISSION OF THE AUDITOR GENERALS REPORT TO THE STATE HOUSE OF ASSEMBLY IN RESPECT OF 3RD QUARTER 2020.pdf">SUBMISSION OF THE AUDITOR GENERALS REPORT TO THE STATE HOUSE OF ASSEMBLY IN RESPECT OF 3RD QUARTER 2020</a></td>
          </tr>
          <tr class="row202">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE GOVERNMENT OF NIGERIA REPORT OF THE AUDITOR GENERAL FOR THE 3RD QUARTER ENDED  30RH SEPTEMBER, 2020 ON COVID  19 RESPONSIVE.pdf">PLSG REPORT OF THE AUDITOR GENERAL FOR THE 3RD QUARTER ENDED  30RH SEPTEMBER, 2020 ON COVID  19 RESPONSIVE</a></td>
          </tr>
          <tr class="row203">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE  FINANCIAL STATEMENTS FOR COVID 19 RESPONSIVE OCTOBER 2020.xls">FS STATEMENT FOR COVID-19 REPORT OCT 2020 XLS</a></td>
          </tr>
          <tr class="row204">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE  FINANCIAL STATEMENTS FOR COVID 19 RESPONSIVE OCTOBER 2020 (1).pdf">FS STATEMENT FOR COVID-19 REPORT OCT 2020 PDF</a></td>
          </tr>
          <tr class="row205">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE  FINANCIAL STATEMENTS FOR COVID 19 RESPONSIVE OCTOBER 2020 (1).pdf">COVID-19 BUDGET RESPONSIVE REPORT OCT 2020 PDF</a></td>
          </tr>
          <tr class="row206">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE  FINANCIAL STATEMENTS FOR COVID 19 RESPONSIVE OCTOBER 2020.xls">COVID-19 BUDGET RESPONSIVE REPORT OCT 2020 XLS</a></td>
          </tr>
          <tr class="row207">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE  FINANCIAL STATEMENTS FOR COVID 19 RESPONSIVE OCTOBER 2020.xls">FS FOR COVID-19 RESPONSIVE OCT - 2020 EXCEL</a></td>
          </tr>
          <tr class="row208">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE  FINANCIAL STATEMENTS FOR COVID 19 RESPONSIVE OCTOBER 2020 (1).pdf">FS FOR COVID-19 RESPONSE NOV-2020 PDF</a></td>
          </tr>
          <tr class="row209">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_THIRD_QUARTER_REPORT_JULY_TO_SEPTEMBER_2020.pdf">PLSG THIRD QUARTER REPORT JULY - SEPT  2020 PDF</a></td>
          </tr>
          <tr class="row210">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/EXECUTIVE SUMMARY THIRD QUARTER JULY TO SEPTEMBER 2020.docx">EXECUTIVE SUMMARY THIRD QUARTER JULY -SEPT 2020 WORD DOC</a></td>
          </tr>
          <tr class="row211">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE THIRD QUARTER REPORT JULY TO SEPTEMBER 2020.xlsx">THIRD QUARTER JULY - SEPT 2020 REPORTS</a></td>
          </tr>
          <tr class="row212">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE COVID 19 RESPONSIVE BUDGET IMPLIMENTATION REPORT SEPTEMBER 2020.pdf">COVID-19 BUDGET IMPLIMENTATION SEPT 2020 PDF</a></td>
          </tr>
          <tr class="row213">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE COVID 19 RESPONSIVE BUDGET IMPLIMENTATION REPORT SEPTEMBER 2020.xlsx">COVID-19 BUDGET IMPLIMENTATION REPORT FOR SEPT 2020</a></td>
          </tr>
          <tr class="row214">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE FINANCIAL STATEMENTS FOR COVID 19 SEPTEMBER 2020.pdf">FS COVID-19 SEPT 2020 PDF</a></td>
          </tr>
          <tr class="row215">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE FINANCIAL STATEMENTS FOR COVID 19 SEPTEMBER 2020.xls">FS FOR COVID-19 SEPT 2020</a></td>
          </tr>
          <tr class="row216">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Plateau_State_Revised_2020_Citizens_Budget_charts_graphs_(COVID 19 RESPONSIVE).xlsx">REVISED CITIZENS BUDGET CHARTS AND GRAPH 2020</a></td>
          </tr>
          <tr class="row217">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_REVISED_2020_CITIZENS_BUDGET_BOOK_(COVID-19 RESPONSIVE).pdf">PLSG CITIZENS REVISED BUDGET BOOK COVID-19 2020</a></td>
          </tr>
          <tr class="row218">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_FINANCIAL_STATEMENTS_FOR_COVID19_AUGUST_2020_2.xls">FS COVID-19 AUGUST 2020 EXCEL</a></td>
          </tr>
          <tr class="row219">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_FINANCIAL_STATEMENTS_FOR_COVID19_AUGUST_2020_2.xls">FS FOR COVID-19 AUGUST 2020</a></td>
          </tr>
          <tr class="row220">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE COVID-19 RESPONSIVE BUDGET IMPLEMENTATION REPORT AUGUST 2020.pdf">COVID-19 BUDGET IMPLIMENTATION REPORT AUGUST 2020 PDF</a></td>
          </tr>
          <tr class="row221">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_COVID19_RESPONSIVE_BUDGET_IMPLEMENTATION_REPORT AUGUST_2020.xlsx">COVID-19 BUDGET IMPLIMENTATION REPORT AUGUST </a></td>
          </tr>
          <tr class="row222">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/GUIDELINE_TO_INCREASE_SMES_PARTICIPATION_CONTRACT_AWARDED_BY_PLSG.pdf">GUIDELINES ON SMS PARTICIPATION ON AWARD</a></td>
          </tr>
          <tr class="row223">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/GUIDELINES_ON_THE_CONDUCT_PUBLIC_PROCUREMENT_ACTIVITIES_MDA_AS_COVID-19.pdf">GUIDELINES ON CONDUCT OF PUBLIC PROCURMENT COVID-19</a></td>
          </tr>
          <tr class="row224">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Business_and_individuals_that_have_not_filed_annual_tax_return.pdf">BUSINESS AND INDIVIDUAL THAT HAVE NOT FILLED ANNUAL TAX RETURN</a></td>
          </tr>
          <tr class="row225">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Business_and_individual_that_have_not_remitted_email.pdf">BUSINESS AND INDIVIDUALS THAT HAVE NOT REMITTED EMAIL</a></td>
          </tr>
          <tr class="row226">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Business_and_individual_that_have_not_remitted_email.pdf">BUSINNES INDIVIDUALS THAT HAVE NOT FILLED ANNUAL RETURNS EMAIL</a></td>
          </tr>
          <tr class="row227">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/All_PAYE_organisations_that_have_not_filed_annual_tax_returns.pdf">PLSG ALL PAYE ORG. THAT HAVE NOT FILLED ANNUAL RETURNS</a> </td>
          </tr>
          <tr class="row228">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/All_PAYE_organisation_with_partial_payment_email.pdf">ALL PAYE ORGANISATION WITH PARTIAL PAYMENT EMAIL</a></td>
          </tr>
          <tr class="row229">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Business_and_individual_that_have_not_remitted_email.pdf">BUSINESS INDIVIUAL THAT HAVE NOT REMITTED  EMAIL</a></td>
          </tr>
          <tr class="row230">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/All_PAYE_organisation_up_to_date_payment.pdf">PLSG ALL PAYE ORG WITH FULL PAYMENT</a></td>
          </tr>
          <tr class="row231">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/All_PAYE_organisation_with_payment_up_to_Date_SMS.pdf">PLSG ALL PAYE ORG WITH FULL PAYMENT UP TO DATE SMS</a></td>
          </tr>
          <tr class="row232">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/All_PAYE_organisation_with_partial_payment.pdf">PLSG ALL PAYE ORG WITH PARTIAL PAYMENT</a></td>
          </tr>
          <tr class="row233">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/All_PAYE_organisation_that_have_filed_annual_returns_and_assessment.pdf">PLSG ALL PAYE ORG THAT HAVE FILLED ANNUAL RETURNS &amp; ASSESSMENT</a></td>
          </tr>
          <tr class="row234">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/All_PAYE_organisation_that_have_filed_and_annual_returns.pdf">PLSG ALL PAYE ORG THAT HAVE FILLED ANNUAL RETURNS</a> </td>
          </tr>
          <tr class="row235">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Plateau_State_Citizens_Budget_2019.pdf">PLSG CITIZENS BUDGET 2019</a></td>
          </tr>
          <tr class="row236">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/debt_management_bill _amended_2020.pdf">PLSG DEBT MANAGMENT AMENDED BILL</a></td>
          </tr>
          <tr class="row237">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_TAX_RELIEF_COMPLIANCE_(COVID-19-RESPONSE-MITIGATION MEASURES-2020).pdf">PLSG TAX RELIEF COMPLIANCE </a></td>
          </tr>
          <tr class="row238">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Q4_2019.pdf">QUARTER 4 DEBT MANAGEMENT REPORT</a></td>
          </tr>
          <tr class="row239">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/budget 2020 explantory notes.docx">PLSG 2020 BUDGET EXPLANATORY NOTES </a></td>
          </tr>
          <tr class="row240">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_ARREARS_CLEARANCE_FRAMEWORK _ACF.pdf">PLSG ARREARS CLEARANCE FRAME WORK</a></td>
          </tr>
          <tr class="row241">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_CASH_MANAGEMENT_STRATEGY.pdf">PLSG CASH MANAGEMENT STARTEGY</a></td>
          </tr>
          <tr class="row242">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU REVENUE REVIEW DETAILS 2020 L.xlsx">PLATEAU STATE REVENUE REVIEW DETAILS 2020</a></td>
          </tr>
          <tr class="row243">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/CORRECTED_V2_APPROVED REVISED 2020 BUDGET (COVID-19 RESPONSIVE).pdf">VERSION 2 CORRECTED APPROVED REVISED 2020 BUDGET COVID-19 RESPONSIVE</a></td>
          </tr>
          <tr class="row244">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/CORRECTED_APPROVED_REVISED_2020_BUDGET_(COVID-19 RESPONSIVE).pdf">CORRECTED APPROVED REVISED 2020 BUDGET COVID-19 RESPONSIVE</a></td>
          </tr>
          <tr class="row245">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/APPROVED_REVISED_2020_BUDGET_(COVID-19-RESPONSIVE)-Final-zipped.pdf">PLSG REVISED COVID-19 BUDGET 2020</a></td>
          </tr>
          <tr class="row246">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE COVID-19 2020 BUDGET SUMMARY L.pdf">PLSG COVID-19 2020 BUDGET SUMMARY</a></td>
          </tr>
          <tr class="row247">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_COVID_19_RESPONSIVE_BUDGET_IMPLIMENTATION_REPORT_OCTOBER_2020.xlsx">PLSG COVID-19 RESPONSIVE BUDGET SUMMARY 2020</a></td>
          </tr>
          <tr class="row248">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/APPROVED REVISED 2020 BUDGET (COVID-19 RESPONSIVE) - Copy.pdf">PLSG APPROVED REVISED COVID-19 BUDGET</a></td>
          </tr>
          <tr class="row249">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_2020_COVID-19_REVIEWED_BUDGET.pdf">PLSG COVID-19 REVIEWED BUDGET </a></td>
          </tr>
          <tr class="row250">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE SFTAS EXPLANATORY NOTES L.docx">PLSG SFTAS EXPLANATORY NOTES</a></td>
          </tr>
          <tr class="row251">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE AMENDED OVERHEAD COST 2020 BUDGET SUMMARY L.xlsx">PLSG AMENDED OVERHEAD COST 2020 BUDGET</a></td>
          </tr>
          <tr class="row252">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE AMENDED CAPITAL EXPENDITURE 2020 REVISED BUDGET SUMMARY L.xlsx">PLSG AMENDED CAPITAL EXPENDITURE 2020 BUDGET</a></td>
          </tr>
          <tr class="row253">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE 2020 AMENDED PERSONNEL COST DETAILS L.xlsx">PLSG AMENDED PERSONNEL EXPENDITURE 2020 BUDGET</a></td>
          </tr>
          <tr class="row254">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE 2020 AMENDED RECURRENT EXPENDITURE SUMMARY L.xlsx">PLSG AMENDED RECURRENT EXPENDITURE SUMMARY 2020 BUDGET</a></td>
          </tr>
          <tr class="row255">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE 2020 AMENDED STATUTORY REVENUE ALLOCATION SUMMARY L.xlsx">PLSG STATUTORY REVENUE RECEIPTS 2020 AMENDED BUDGET</a></td>
          </tr>
          <tr class="row256">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE AMENDED IGR REVENUE 2020 SUMMARY L.xlsx">PLSG AMENDED IGR AMENDED 2020 BUDGET</a></td>
          </tr>
          <tr class="row257">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE 2020 AMENDED CAPITAL RECEIPTS REVENUE L.xlsx">PLSG CAPITAL RECEIPTS 2020 AMENDED BUDGET</a></td>
          </tr>
          <tr class="row258">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE AMENDED CAPITAL EXPENDITURE 2020 REVISED BUDGET SUMMARY L.xlsx">PLSG AMENDED CAPITAL EXPENDITURE REVISED BUDGET 2020</a></td>
          </tr>
          <tr class="row259">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE AMENDED OVERHEAD COST 2020 BUDGET DETAILS L.xlsx">PLATEAU STATE AMENDED OVERHEAD COST 2020 BUDGET</a></td>
          </tr>
          <tr class="row260">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/Plataeu_state_reviewed_appriopration_bill_july_dec_2020.pdf">PLATEAU STATE REVIEWED APPROPRIATION BILL  JULY - DEC 2020</a></td>
          </tr>
          <tr class="row261">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/SECOND_QUARTER_BUDGET_REPORT_APRIL_JUNE_2020.pdf">SECOND QUARTER BUDGET REPORT 2020</a></td>
          </tr>
          <tr class="row262">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/ADDENDUM_TO_2020_FIRST_QUARTER_BUDGET_SUMMARY_REPORT_JANUARY_TO_MARCH.pdf">ADDENDUM FIRST QUARTER BUDGET REPORT 2020</a></td>
          </tr>
          <tr class="row263">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/COVID-19-TAX-RELIEF-PLATEAU-STATE.pdf">COVID-19 TAX RELIEF </a></td>
          </tr>
          <tr class="row264">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_2020_BUDGET_ADDENDUM.pdf">PLATEAU STATE 2020 BUDGET ADDENDUM</a></td>
          </tr>
          <tr class="row265">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/FIRST_QUARTER_DEVIATION_REPORT_JANUARY_MARCH_2020.pdf">FIRST QUARTER DEVIATION REPORT JAN - MAR 2020</a></td>
          </tr>
          <tr class="row266">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/FIRST_QUARTER_BUDGET_REPORT_JANUARY_MARCH_2020.pdf">FIRST QUARTER BUDGET REPORT 2020</a></td>
          </tr>
          <tr class="row267">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLSG_AUDITOR_GENERAL_REPORT_ACCOUNT_DEC31ST_1.pdf">PLATEAU STATE AUDITOR GENERAL ACCOUNT REPORT 2019</a></td>
          </tr>
          <tr class="row268">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PLSG_AUDITOR_GENERAL_REPORT_ACCOUNT_DEC31ST_1.pdf">AUDITOR GENERAL REPORT 2019</a></td>
          </tr>
          <tr class="row269">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/FORTH_QUARTER_PERSONNEL_COST_REPORT_JANUARY_DECEMBER_2019.pdf">FOURTH QUARTER PERSONNEL COST REPORT JAN - DEC 2019</a></td>
          </tr>
          <tr class="row270">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/FORTH_QUARTER_OVERHEAD_COST_REPORT_JANUARY_DECEMBER_2019.pdf">FOURTH QUARTER OVERHEAD REPORT JAN - DEC 2019</a></td>
          </tr>
          <tr class="row271">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/FORTH_QUARTER_IGR_REVENUE_REPORT_JANUARY_DECEMBER_2019.pdf">FOURTH QUARTER IGR JAN - DEC 2019</a></td>
          </tr>
          <tr class="row272">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/SECOND_QUARTER_DEVIATION_REPORT_JANUARY - JUNE 2019.pdf">SECOND QUARTER DEVIATION REPORT JAN - JUNE 2019</a></td>
          </tr>
          <tr class="row273">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/THIRD_QUARTER_DEVIATION_REPORT_JANUARY_SEPTEMBER _2019.pdf">THIRD QUARTER DEVIATION REPORT JAN - SEPT 2019</a></td>
          </tr>
          <tr class="row274">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/FORTH_QUARTER_CAPITAL_EXPENDITURE_REPORT_JANUARY_DECEMBER_2019.pdf">FOURTH QUARTER CAPITAL EXPENDITURE JAN - DEC 2019</a></td>
          </tr>
          <tr class="row275">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/FORTH_QUARTER_FAAC_REVENUE_FROM_FEDERAL_GOVERNMENT_REPORT_JANUARY_DECEMBER_2019.pdf">FOURTH QUATER REVENUE FROM FG REPORT JAN - DEC 2019</a></td>
          </tr>
          <tr class="row276">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/FORTH_QUARTER_FAAC_ALLOCATION_AND_DIRECT_DEDUCTIONS_COMPONENTS_REPORT_JANUARY_DECEMBER_2019.pdf">FOURTH QUARTER FAAC ALLOCATIONS &amp; DEDUCTIONS JAN - DEC 2019</a></td>
          </tr>
          <tr class="row277">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/FORTH_QUARTER_DEVIATION_REPORT_JANUARY_DECEMBER_2019.pdf">FOURTH QUARTER DEVIATION REPORT JAN - DEC 2019</a></td>
          </tr>
          <tr class="row278">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/FIRST_QUARTER_DEVIATION_REPORT _JANUARY_MARCH_2019.pdf">FIRST QUARTER DEVIATION  REPORT 2019</a></td>
          </tr>
          <tr class="row279">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/APPROVED 2020 BUDGET V2-02 lamba-edited.pdf">APPROVED BUDGET 2020</a></td>
          </tr>
          <tr class="row280">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/FORTH_QUARTER_REVENUE_REPORT_2019.pdf">FOURTH QUARTER REVENUE REPORT 2019</a></td>
          </tr>
          <tr class="row281">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/FORTH_QUARTER_PERSONNEL_COST_2019.pdf">FOURTH QUARTER PERSONNEL COST 2019</a></td>
          </tr>
          <tr class="row282">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/FORTH_QUARTER_OVERHEAD_REPORT_2019.pdf">FOURTH QUARTER OVERHEAD REPORT 2019</a></td>
          </tr>
          <tr class="row283">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/New_Copy_of_Fifty_percent_Reviewed_fee_structure_updated.xls">REVIEW FEE STRUCTURE UPDATED</a></td>
          </tr>
          <tr class="row284">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/PROPOSED 2020 BUDGET FINAL.pdf">PROPOSED 2020 BUDGET</a></td>
          </tr>
          <tr class="row285">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/2018_approved_budget.pdf">2018 APPROVED BUDGET</a></td>
          </tr>
          <tr class="row286">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/20190828 - Plateau State Strategy - Final.pdf">PLATEAU STATE DEVELOPMENT STRATEGY </a></td>
          </tr>
          <tr class="row287">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/20191006_State_Domestic_Arrears_Oct_2019_Master_v3.pptx">DOMESTIC ARREARS 2019 PDF</a></td>
          </tr>
          <tr class="row288">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/20190916_Domestic_Arrears_Guidelines_Version_1.0_sent">DOMESTIC ARREARS GUIDE WORD DOC</a></td>
          </tr>
          <tr class="row289">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/2020_budget_speech.pdf">2020 BUDGET SPEECH</a></td>
          </tr>
          <tr class="row290">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/4th_quarter_2018_1st_and_2nd_quarter_2019.xlsx">FOURTH QUARTER 2018 AND FIRST AND SECOND QUARTER 2019</a></td>
          </tr>
          <tr class="row291">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/2nd_and_3rd_quarter_2018.xlsx">SECOND AND THIRD QUARTER 2018</a></td>
          </tr>
          <tr class="row292">
            <td class="column0 style0 s"><a href="http://plateaudatadump.com.ng/pdf_files/1st_quarterly_2018.xlsx">1ST QUATER 2018</a> </td>
          </tr>
		        <tr>
		            
				    <td>
						<a target="_bank" href="http://plateaudatadump.com.ng/pdf_files/PLATEAU%20STATE%202022%20MINUTES%20OF%20%20TOWNHALL%20MEETING%20ON%20CITIZENS%20ENGAGEMENT.pdf" alt="BUDGET PERFORMANCE REPORT 2022 QUARTER 2">
				            Minute of town hall meeting 2022 citizens engagement
						</a>
				    </td>
				</tr>
				
				<tr>
		            
				    <td>
						<a target="_bank" href="http://plateaudatadump.com.ng/pdf_files/PLATEAU%20STATE%202022%20MINUTES%20OF%20%20TOWNHALL%20MEETING%20ON_220926_09.pdf" alt="BUDGET PERFORMANCE REPORT 2022 QUARTER 2">
				            Minute of town hall meeting 2022 budget
				            
						</a>
				    </td>
				</tr>
				
				<tr>
		            
				    <td>
						<a target="_bank" href="https://plug-storage.s3.eu-west-3.amazonaws.com/Plateua-State-BPR3-C-BPR-Publication-Finale-CR-2022-CR-QUARTER2-Q2.pdf" alt="BUDGET PERFORMANCE REPORT 2022 QUARTER 2">
				            BUDGET PERFORMANCE REPORT 2022 QUARTER 2
						</a>
				    </td>
				</tr>
				
				<tr>
		            
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLSG%20FS%202021%20Final.pdf" alt="">
				Plateau State Financial Report 2021
						</a>
				    </td>
				</tr>
				
				
		        <tr>
		            
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/1ST%20QUARTER,%202021.pdf" alt="">
				Debt Management 1st Quarter Report - 2021
						</a>
				    </td>
				</tr>
				
		        <tr>
		            
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/SECOND%20QUARTER%20DMO%20REPORT.pdf" alt="">
				Debt Management 2nd Quarter Report - 2021
						</a>
				    </td>
				</tr>
				
		        <tr>
		            
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/3RD%20QUATER,%202020.pdf" alt="">
				Debt Management 3rd Quarter Report - 2021
						</a>
				    </td>
				</tr>
				
		        <tr>
		            
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/Plateau%20State%20(4th%20quarter%20DMO%20report,%202021).pdf" alt="">
				Debt Management 4th Quarter Report - 2021
						</a>
				    </td>
				</tr>


		      
		      

		        <tr>
		            
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/PLSG_DOMESTIC_ARREARS_REPORTING_TEMPLATE.pdf" alt="">
				PLSG DOMESTIC ARREARS REPORTING TEMPLATE
						</a>
				    </td>
				</tr>
		      
		      
		    

 				<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/OUTSTANDING%20CONTRACTUAL%20LIABILITIES%20ABOVE%2020%20MILLION%2C%202019.pdf" alt="">
				Outstanding Contractual liabilities above 20 million as at 31st Dec. 2019 
						</a>
				    </td>
				</tr>



 				<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/OUTSTANDING%20CONTRACTUAL%20LIABILITIES%20AS%20AT%2031ST%20DEC%2C%202020.pdf" alt="">
				Outstanding Contractual Liabilities as at 31st Dec, 2020
						</a>
				    </td>
				</tr>



 				<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/OUTSTANDING%20CONTRATUAL%20LIABILITIES%20ABOVE%2020%20MILLION%20AS%20AT%2031ST%200001.pdf" alt="">
				Outstanding Contractual Liabilities above 20 Million
						</a>
				    </td>
				</tr>


 				<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/OUTSTANDING%20CONTRATUAL%20LIABILITIES%20ABOVE%2020%20MILLION%20AS%20AT%2031ST%200004.pdf" alt="">
				Outstanding Contractual Liabilities above 20 million as at 31st Dec, 2020
						</a>
				    </td>
				</tr>  
				
				<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/OUTSTANDING%20CONTRATUAL%20LIABILITIES%20ABOVE%2020%20MILLION%20AS%20AT%2031ST%200003.pdf" alt="">
				Outstanding Contractual Liabilities above 20 million as at 31st Dec, 2020
						</a>
				    </td>
				</tr>



				<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/OUTSTANDING%20CONTRATUAL%20LIABILITIES%20ABOVE%2020%20MILLION%20AS%20AT%2031ST%200003.pdf" alt="">
				Outstanding contractual liabilities above 20 million as at 31st Dec. 2020
						</a>
				    </td>
				</tr>



				<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/OUTSTANDING%20CONTRATUAL%20LIABILITIES%20ABOVE%2020%20MILLION%20AS%20AT%2031ST%200005.pdf" alt="">
				Outstanding contractual liabilities above 20 million as at 31st Dec. 2020
						</a>
				    </td>
				</tr>



<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/OUTSTANDING%20CONTRATUAL%20LIABILITIES%20AS%20AT%2031ST%20DEC%2C%202020%20%282%29.pdf" alt="">
				Outstanding contractual liabilities above 20 million as at 31st Dec. 2020
						</a>
				    </td>
				</tr>

<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/OUTSTANDING%20LIABILITIES%20AS%20AT%2031ST%20DEC%2C%202019.pdf" alt="">
				Outstanding liabilities as at 31st Dec. 2019
						</a>
				    </td>
				</tr>


<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/OUTSTANDING%20LIABILITIES%20AS%20AT%2031ST%20DEC%2C%202019.pdf" alt="">
				Outstanding liabilities as at 31st Dec. 2019
						</a>
				    </td>
				</tr>


<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU%20STATE%20DOMESTIC%20ARREARS%20SCHEDULE%20AS%20AT%20DECEMBER%2C%202019%20%26%200002.pdf" alt="">
				Outstanding contractual liabilities abvoe 20 million above 20 Million as at 31st Dec. 2020
						</a>
				    </td>
				</tr>

<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU%20STATE%20DOMESTIC%20ARREARS%20SCHEDULE%20AS%20AT%20DECEMBER%2C%202019%20%26%200003.pdf" alt="">
				Outstanding contractual liabilities abvoe 20 million above 20 Million as at 31st Dec. 2020
						</a>
				    </td>
				</tr>

<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU%20STATE%20DOMESTIC%20ARREARS%20SCHEDULE%20AS%20AT%20DECEMBER%2C%202019%20%26%200004.pdf" alt="">
Plateau State Domestic Arrears Reporting Template						</a>
				    </td>
				</tr>
		      
				

		   
		   		      <tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/Plateau-State-2021_DSA-DMS_Report.pdf">
				Plateau State 2021 DSA/DMS Report
						</a>
				    </td>
				</tr>
				
		      <tr>
				    <td>
						<a href="https://res.cloudinary.com/didhqyiyh/image/upload/v1638310991/plateaustate/Q3_REPORT_kjaxeg.jpg">
				Domestic Debt Data
						</a>
				    </td>
				</tr>
<tr>
				    <td>
						<a href="https://res.cloudinary.com/didhqyiyh/image/upload/v1638310977/plateaustate/FPRWARDING_LETTER_n8qikt.jpg">
				Forwarding of Plateau State Domesticre Debt Stock and service (Q3) 2021
						</a>
				    </td>
				</tr>
	<tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/Plateau%20State%20FY%202022%20Draft%20Budget%20-%20NCoA%20Compliant%20Publication%20Version%201.pdf">
				Draft 2022 Budget (PDF)
						</a>
				    </td>
				</tr>
				
<tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/Plateau%20State%20FY%202022%20Draft%20Budget%20-%20NCoA%20Compliant%20Publication%20Version%201.xlsx">
				Draft 2022 Budget (XLSX)
						</a>
				    </td>
				</tr>
								

	<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/Q2-2020-PROJECTS.xlsx">
				BPP Q2-2020 Projects
						</a>
				    </td>
				</tr>
				
				

	<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/Q1-2020-PROJECTS.xlsx">
				BPP Q1-2020 Projects
						</a>
				    </td>
				</tr>
				
				

	<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/Q2-2021-PROJECTS.xlsx">
				BPP Q2-2021 Projects
						</a>
				    </td>
				</tr>
				
				

	
	<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU_STATE_AUGUST_2021_COVID_19_RESPONSIVE_STATEMENTS.pdf">
				PLATEAU STATE AUGUST 2021 COVID19 RESPONSIVE STATEMENT
						</a>
				    </td>
				</tr>
				
				

	<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU_STATE_AUGUST_2021_COVID_19_RESPONSIVE_BUDGET_IMPLIMENTATION_REPORT.xlsx">
				PLATEAU STATE AUGUST 2021 COVID19 RESPONSIVE BUDGET IMPLEMENTATION REPORT  (XLSX)
						</a>
				    </td>
				</tr>
				
				
	<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU_STATE_AUGUST_2021_COVID_19_RESPONSIVE_BUDGET_IMPLIMENTATION_REPORT.pdf">
				PLATEAU STATE AUGUST 2021 COVID19 RESPONSIVE BUDGET IMPLEMENTATION REPORT
						</a>
				    </td>
				</tr>
				
				

	<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU_STATE_AUGUST_2021_COVID_19_RESPONSIVE_STATEMENTS.xls">
				PLATEAU STATE AUGUST 2021 COVID19 RESPONSIVE STATEMENTS
						</a>
				    </td>
				</tr>
				
				

		<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU_STATE_JULY_2021_COVID_19_RESPONSIVE_STATEMENTS.pdf">
				Plateau State July 2021 COVID19 Responsive Statements (pdf)
						</a>
				    </td>
				</tr>
				
				

		<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU_STATE_COVID_19_RESPONSIVE_BUDGET_IMPLIMENTATION_REPORT_JULY_2021.pdf">
				Plateau State COVID19 Responsive budget implementation report July 2021 (pdf)
						</a>
				    </td>
				</tr>
				
				
		<tr>
		<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU_STATE_JULY_2021_COVID_19_RESPONSIVE_STATEMENTS.xls">
				Plateau State July 2021 COVID19 Responsive Statements (xls)
						</a>
				    </td>
				</tr>
				
				

		<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU_STATE_COVID_19_RESPONSIVE_BUDGET_IMPLIMENTATION_REPORT_JULY_2021.xlsx">
				Plateau State COVID19 Responsive budget implementation report July 2021 (xlsx)
						</a>
				    </td>
				</tr>
				
				



	
	
		<tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU%20STATE%20SECOND%20QUARTER%20Q2%202021%20%20COVID%2019%20RESPONSIVE%20STATEMENTS.pdf">
				Plateau State Second Quarter Q2 2021 COVID19 Responsive Statements (pdf)
						</a>
				    </td>
				</tr>
				
				
		<tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU%20STATE%20SECOND%20QUARTER%20Q2%202021%20%20COVID%2019%20RESPONSIVE%20STATEMENTS.xls">
			Plateau State Second Quarter Q2 2021 COVID19 Responsive Statements (xls)
						</a>
				    </td>
				</tr>
				
			<tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU%20STATE%20JUNE%202021%20COVID%2019%20RESPONSIVE%20STATEMENTS.pdf">
				Plateau State June 2021 COVID19 Responsive Statements (pdf)
						</a>
				    </td>
				</tr>
			<tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU%20STATE%20JUNE%202021%20COVID%2019%20RESPONSIVE%20STATEMENTS.xls">
				Plateau State June 2021 COVID19 Responsive Statements (xls)
						</a>
				    </td>
				</tr>
				
			<tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU%20STATE%20JUNE%202021%20COVID%2019%20RESPONSIVE%20BUDGET%20EXPENDITURE%20REPORT.pdf">
				Plateau State June 2021 COVID19 Responsive Budget Expenditure Report (pdf)
						</a>
				    </td>
				</tr>
				
			<tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU%20STATE%20JUNE%202021%20COVID%2019%20RESPONSIVE%20BUDGET%20EXPENDITURE%20REPORT.xlsx">
				Plateau State June 2021 COVID19 Responsive Budget Expenditure Report (xls)
						</a>
				    </td>
				</tr>
	
		      
		      
		      	<tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/2019-2020-annual-nominal-igr-growth-rate-report.pdf">
				Plateau State 2019-2020 Annual Nominal IGR Growth Rate Report
						</a>
				    </td>
				</tr>
	<tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/Plateua%20State%20Second%20Quarter%20Budget%20Implementation%20Report%20April-June%202021.pdf">
				Plateau State Second Quarter BPR 2021
						</a>
				    </td>
				</tr>
	
	
		      
		      
<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/1ST%20QUARTER%2C%202020.pdf">
				Plateau State Domestic Debt Data As AT 31st March 2020 (First Quarter)
				
						</a>
				    </td>
				</tr>
				
<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/2ND%20QUATER%2C%202020.pdf">
				Plateau State Domestic Debt Data As AT 30th June 2020 (Second Quarter)
						</a>
				    </td>
				</tr>
<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/3RD%20QUATER%2C%202020.pdf">
				Plateau State Domestic Debt Data As AT 30th September 2020 (Third Quarter)
						</a>
				    </td>
				</tr>
<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/4TH%20QUARTER%2C%202020.pdf">
				Plateau State Domestic Debt Data As AT 31st December 2020 (Fourth Quarter)
						</a>
				    </td>
				</tr>
				
<tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/2021-financial-autonomy-circular.pdf">
							INSTRUCTION FOR THE IMPLEMENTATION OF THE PLATEAU STATE AUDIT LAW 2021
						</a>
				    </td>
</tr>

<tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/GUIDELINES_ON_THE_CONDUCT_PUBLIC_PROCUREMENT_ACTIVITIES_MDA_AS_COVID-19.pdf">
							GUIDELINES ON CONDUCT OF PUBLIC PROCURMENT COVID-19       
						</a>
				    </td>
</tr>


<tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLSG_AUDIT_LAW_2021.pdf">
				Plateau State Government Audit Law 2021 (pdf)
						</a>
				    </td>
				</tr>
		
<tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/COVID_19_PROCUREMENT_2021.xlsx">
				COVID-19 Procurement
						</a>
				    </td>
				</tr>
				<tr>
				    
<tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLSG_PSIRS_PROHIBITIONS_CONSULTANTS.pdf">
				PLSG PSIRS consultants Prohibitions (pdf)
						</a>
				    </td>
				</tr>
				<tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STAT_MAY_2021_COVID_19%20RESPONSIVE_BUDGET_EXPENDITURE_REPORT.xls">
				Plateau state May 2021 COVID19 Responsive Budget Expenditure Report (xls)
						</a>
				    </td>
				</tr>
				<tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_MAY_2021_COVID_19_RESPONSIVE_BUDGET_EXPENDITURE_REPORT.pdf">
				Plateau state May 2021 COVID19 Responsive Budget Expenditure Report (pdf)
						</a>
				    </td>
				</tr>
				<tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_MAY_2021_FINANCIAL%20STATEMENTS_FOR_COVID_19_RESPONSIVE.xls">
				Plateau state May 2021 Financial Statements for COVID19 Responsive (xls)
						</a>
				    </td>
				</tr>
				<tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_MAY_2021_FINANCIAL_STATEMENTS_FOR_COVID_19_RESPONSIVE.pdf">
				Plateau state May 2021 Financial Statements for COVID19 Responsive (pdf)
						</a>
				    </td>
				</tr>







 <tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/Plateau_State_Q1_2021_Template_from_DMO.xlsx">
				Plateau state domestic debt data as ta 31st March, 2021
						</a>
				    </td>
				</tr>
				
 <tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLSG_Domesticated_Debt_Data_Mar31_2021.jpg">
				Plateau state domestic debt data as ta 31st March, 2021 (Cover Letter)
						</a>
				    </td>
				</tr>
				
				


   <tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_APRIL_2021_COVID19_RESPONSIVE_STATEMENTS.pdf">
				PLATEAU STATE APRIL 2021 COVID19 RESPONSIVE STATEMENTS (pdf)
						</a>
				    </td>
				</tr>
<tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_APRIL_2021_COVID_19_RESPONSIVE_STATEMENTS.xls">
			PLATEAU STATE APRIL 2021 COVID19 RESPONSIVE STATEMENTS (xls)
						</a>
				    </td>
				</tr>
   <tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_APRIL_2021_COVID19_RESPONSIVE_BUDGET_EXPENDITURE_REPORT.xlsx">
				PLATEAU STATE APRIL 2021 COVID19 RESPONSIVE BUDGET EXPENDITURE REPORT (XLSX)
						</a>
				    </td>
				</tr>
 <tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_APRIL_2021_COVID19_RESPONSIVE_BUDGET_EXPENDITURE_REPORT.pdf">
			PLATEAU STATE APRIL 2021 COVID19 RESPONSIVE BUDGET EXPENDITURE REPORT (pdf)
						</a>
				    </td>
				</tr>
 


    <tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/Auditor_Gen_1st_qtr_covid19_2021_submission_letter.pdf">
				Plateau State Minutes and Report of citizens engagement in the budget process April 2021(PDF)
						</a>
				    </td>
				</tr>

		      
    	      <tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/Plateua_State_First_Quarter_Budget_Implementation_Report_January_to_March_2021.pdf">
				Plateau State First Quarter Budget Implementation Report Jan-Mar 2021(PDF)
						</a>
				    </td>
				</tr>
		      <tr>
		          
		          
		        
		          
		          
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_FINANCIAL_STATEMENTS_FOR_COVID_19_RESPOSIVE_MARCH_2021.pdf">
						    
						    
					Plateau State Financial Statement for Covid19 Responsive Mar-2021(pdf)
						</a>
				    </td>
				</tr>
				
		      <tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_COVID_19_RESPONSIVE_BUDGET_IMPLEMENTATION_REPORT_MARCH_2021.pdf">
					Plateau State Covid19 Responsive Budget Implementation Report Mar-2021(PDF)
						</a>
						
				    </td>
				</tr>
				
			      <tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_COVID_19_RESPONSIVE_BUDGE_IMPLIMENTATION_REPORT_MARCH_2021.xlsx">
					Plateau State Covid19 Responsive Budget Implementation Report Mar-2021(Excel)
						</a>
				    </td>
				</tr>
				
			      <tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU%20STATE%20FINANCIAL%20STATEMENTS%20FOR%20COVID%2019%20RESPOSIVE%20MARCH%202021.pdf">
					Plateau State Financial Statement for Covid19 Responsive Mar-2021(PDF)
						</a>
						
						
				    </td>
				</tr>

		      <tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_FEBRUARY_2021_COVID_19_RESPONSIVE_STATEMENTS.xls">
						    
					PLATEAU STATE FEBRUARY 2021 COVID19 RESPONSIVE STATEMENTS(xlsx)
						</a>
				    </td>
				</tr>
				
				<tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_FEBRUARY_2021_COVID_19_RESPONSIVE_STATEMENTS.pdf">
						    
						PLATEAU STATE FEBRUARY 2021 COVID19 RESPONSIVE STATEMENTS(pdf)
						</a>
				    </td>
				</tr>
				<tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_FEBRUARY_2021_COVID_19_RESPONSIVE_BUDGET_EXPENDITURE_REPORT.xlsx">
						PLATEAU STATE FEBRUARY 2021 COVID 19 RESPONSIVE BUDGET EXPENDITURE REPORT (xlsx)
						</a>
						
						
				    </td>
				</tr>
				<tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_FEBRUARY_2021_COVID_19_RESPONSIVE_BUDGET_EXPENDITURE_REPORT.pdf">
						    
						PLATEAU STATE FEBRUARY 2021 COVID 19 RESPONSIVE BUDGET EXPENDITURE REPORT (pdf)
						</a>
				    </td>
				</tr>

 <tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU%20STATE%20JANUARY%202021%20COVID%2019%20RESPONSIVE%20STATEMENTS.xls">
						Plateau State January 2021 COVID 19 Responsive Statements (xlsx)
						
						
						</a>
				    </td>
				</tr>
				
				
				 <tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU%20STATE%20JANUARY%202021%20COVID%2019%20RESPONSIVE%20STATEMENTS.pdf">
						Plateau State January 2021 COVID 19 Responsive Statements (pdf)
						</a>
				    </td>
				</tr>
				
				
				 <tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU%20STATE%20JANUARY%202021%20COVID%2019%20RESPONSIVE%20BUDGET%20EXPENDITURE%20REPORT.pdf">
						PLATEAU STATE JANUARY 2021 COVID 19 RESPONSIVE BUDGET EXPENDITURE REPORT (PDF)
						</a>
				    </td>
				</tr>
				
				
				 <tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU%20STATE%20JANUARY%202021%20COVID%2019%20RESPONSIVE%20BUDGET%20EXPENDITURE%20REPORT.xlsx">
						PLATEAU STATE JANUARY 2021 COVID 19 RESPONSIVE BUDGET EXPENDITURE REPORT (XLS)
						</a>
				    </td>
				</tr>



  <tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_CITIZENS_BUDGET_2020_AND_BUDGET_TOWN_HALL_MEETING_FREPORT_2020.pdf">
						Plateau state citizens budget and town hall meeting 2020
						</a>
				    </td>
				</tr>
				
				
  <tr>
				    <td>
						<a href="https://plug-storage.s3.eu-west-3.amazonaws.com/Final+Plateau+State+FY+2021+NCoA+Compliant+Approved+Budget+-+Publication+Version+FINALE+(2).pdf">
						Plateau State FY 2021 NCoA Compliant Approved Budget (pdf)
						</a>
				    </td>
				</tr>
				

		       <tr>
				    <td>
						<a href="https://plug-storage.s3.eu-west-3.amazonaws.com/Final+Plateau+State+FY+2021+NCoA+Compliant+Approved+Budget+-+Publication+Version+FINALE+(2).xlsx">
						Plateau State FY 2021 NCoA Compliant Approved Budget (xsl)
						</a>
				    </td>
				</tr>	
	
			 <tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_DSA_REPORT_NOV_DEC_2020.pdf">
						PLATEAU STATE DSA REPORT 2020
						</a>
				    </td>
				</tr>



		       <tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_COVID_19_RESPONSIVE_BUDGET_EXPENDITURE_REPORT_DECEMBER_2020.pdf">
						    
							Plateau State COVID19 responsive budget expenditure (pdf)
						</a>
				    </td>
				</tr>
		       <tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_COVID_19_RESPONSIVE_BUDGET_EXPENDITURE_REPORT_DECEMBER_2020.xlsx">
							Plateau State COVID19 responsive budget expenditure (xsl)
						</a>
				    </td>
				</tr>
		       <tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_DECEMBER_2020_STATEMENTS_FOR_COVID19_RESPONSIVE.xls">
						Plateau State December 2020 statement for COVID19 (xsl)
						</a>
				    </td>
				</tr>
		       <tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_DECEMBER_2020_STATEMENT_FOR_COVID_19_RESPONSIVE.pdf">
							Plateau State December 2020 statement for COVID19 (pdf)
						</a>
				    </td>
				</tr>




				
				
		       <tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU%20STATE%20REVISED%202020%20CITIZENS%20BUDGET%20BOOK%20(COVID-19%20RESPONSIVE%20BUDGET).pdf">
							plateau state revised 2020 citizens budget book
						</a>
				    </td>
				</tr>

		       <tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_APPROPRIATION_BILL_2021.pdf">
							2021 budget and Appropriation Bill (pdf)
						</a>
				    </td>
				</tr>


		       <tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_PROPOSED_2021_DRAFT_BUDGET.pdf">
							2021 draft budget and Appropriation Bill (pdf)
						</a>
				    </td>
				</tr>

				
		       <tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_PROPOSED_2021_DRAFT_BUDGET.xlsx">
							2021 draft budget and Appropriation Bill (xlsx)
						</a>
				    </td>
				</tr>
				
		        <tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU%20STATE%20GOVERNMENT%20OF%20NIGERIA%20REPORT%20OF%20THE%20AUDITOR%20GENERAL%20FOR%20THE%203RD%20QUARTER%20ENDED%20%2030RH%20SEPTEMBER%2C%202020%20ON%20COVID%20%2019%20RESPONSIVE.pdf">
							Plateau State Government Of Nigeria Report Of Auditor General For 3rd Quarter 2020: COVID-19 Responsive
						</a>
				    </td>
				</tr>
				<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/SUBMISSION%20OF%20THE%20AUDITOR%20GENERAL%27S%20REPORT%20TO%20THE%20STATE%20HOUSE%20OF%20ASSEMBLY%20IN%20RESPECT%20OF%203RD%20QUARTER%202020.pdf">
							Submission Of The Auditor General Report for 3rd Quarter, 2020 to The State House of Assembly on COVID-19 Responsive
						</a>
				    </td>
				</tr>
		        <tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU%20STATE%20%20FINANCIAL%20STATEMENTS%20FOR%20COVID%2019%20RESPONSIVE%20OCTOBER%202020%20%281%29.pdf">
							Plateau State Financial Statement For COVID-19 Responsive Oct 2020
						</a>
				    </td>
				</tr>
				<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU%20STATE%20%20FINANCIAL%20STATEMENTS%20FOR%20COVID%2019%20RESPONSIVE%20OCTOBER%202020.xls">
							Plateau State Financial Statement For COVID-19 Responsive Oct 2020 xls
						</a>
				    </td>
				</tr>
		        <tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU_STATE_FINANCIAL_STATEMENTS_FOR_COVID_19_RESPONSIVE_OCTOBER_2020.pdf">
							Plateau State Financial Statement For COVID-19 Responsive Oct 2020
						</a>
				    </td>
				</tr>
				<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU_STATE_FINANCIAL_STATEMENTS_FOR%20COVID_19_RESPONSIVE_OCTOBER_2020.xls">
							Plateau State Financial Statement For COVID-19 Responsive Oct 2020 xls
						</a>
				    </td>
				</tr>
				<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU_STATE_COVID_19_RESPONSIVE_BUDGET_IMPLIMENTATION_REPORT_OCTOBER_2020.pdf">
							Plateau State COVID-19 Responsive Budget Implimentation Report Oct 2020
							
							
						</a>
				    </td>
				</tr>
				<tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_COVID_19_RESPONSIVE_BUDGET_IMPLIMENTATION_REPORT_OCTOBER_2020.xlsx">
							Plateau State COVID-19 Responsive Budget Implimentation Report Oct 2020 xlsx
						</a>
				    </td>
				</tr>
		        <tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU%20STATE%20FINANCIAL%20STATEMENTS%20FOR%20COVID%2019%20SEPTEMBER%202020.xls">
							Plateau State Financial Statement For COVID-19 SEPT 2020 XLS
						</a>
				    </td>
				</tr>
				<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU%20STATE%20FINANCIAL%20STATEMENTS%20FOR%20COVID%2019%20SEPTEMBER%202020.pdf">
							Plateau State Financial Statement For COVID-19 SEPT 2020 PDF
						</a>
				    </td>
				</tr>
				<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU%20STATE%20COVID%2019%20RESPONSIVE%20BUDGET%20IMPLIMENTATION%20REPORT%20SEPTEMBER%202020.xlsx">
							Plateau State COVID-19 Responsive Budget Implementation Report SEPT 2020 XLSX
						</a>
				    </td>
				</tr>
				<tr>
				    <td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU%20STATE%20COVID%2019%20RESPONSIVE%20BUDGET%20IMPLIMENTATION%20REPORT%20SEPTEMBER%202020.pdf">
							Plateau State COVID-19 Responsive Budget Implementation Report SEPT 2020 PDF
						</a>
				    </td>
				</tr>
		        <tr>
					<td>
						<a href="http://plateaudatadump.com.ng/pdf_files/Plateau_State_Revised_2020_Citizens_Budget_charts_graphs_(COVID%2019%20RESPONSIVE).xlsx">
							Plateau State Revised 2020 Citizens Budget Charts Graphs COVID 19
						</a>
						
						
					</td>
				</tr>
				<tr>
					<td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU%20STATE%20REVISED%202020%20CITIZENS%20BUDGET%20BOOK%20(COVID-19%20RESPONSIVE%20BUDGET).pdf">
							PLATEAU STATE REVISED 2020 CITIZENS BUDGET BOOK COVID-19
						</a>
						
					</td>
				</tr>
		        <tr>
					<td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU_STATE_COVID19_RESPONSIVE_BUDGET_IMPLEMENTATION_REPORT%20AUGUST_2020.xlsx">
							PLATEAU STATE COVID19 RESPONSIVE BUDGET IMPLEMENTATION REPORT AUGUST 2020
						</a>
					</td>
				</tr>
		        <tr>
					<td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU_STATE_FINANCIAL_STATEMENTS_FOR_COVID19_AUGUST_2020_2.xls">
							PLATEAU STATE FINANCIAL STATEMENTS FOR COVID19 AUGUST 2020
						</a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="https://plug-storage.s3.amazonaws.com/SIGNED_PLATEAU_STATE_FINANCIAL_STATEMENTS_FOR_COVID19_AUGUST_2020.pdf">
							SIGNED PLATEAU STATE FINANCIAL STATEMENTS FOR COVID19 AUGUST 2020
						</a>
					</td>
				</tr>
				
		      
		       <tr>
					<td>
						<a href="https://plug-storage.s3.amazonaws.com/SIGNED_PLATEAU_STATE_FINANCIAL_STATEMENTS_FOR_COVID19_AUGUST_2020.pdf">
							CASHFLOW STATEMENT FOR THE PERIOD ENDED 31ST AUGUST 2020 COVID 19 RESPONSIVE
						</a>
					</td>
				</tr>
				
		       <tr>
					<td>
						<a href=" https://plug-storage.s3.amazonaws.com/PLATEAU_STATE_COVID19_RESPONSIVE_BUDGET_IMPLEMENTATION_REPORT%20AUGUST_2020.xlsx">
							PLATEAU STATE COVID-19 BUDGET IMPLEMENTATIO REPORT AUGUST 2020 (XLSX)
						</a>
					</td>
				</tr>
				
				 <tr>
					<td>
						<a href=" https://plug-storage.s3.amazonaws.com/PLATEAU%20STATE%20COVID-19%20RESPONSIVE%20BUDGET%20IMPLEMENTATION%20REPORT%20AUGUST%202020.pdf">
							PLATEAU STATE FINANCIAL STATEMENTS FOR COVID 19 AUGUST 2020 (PDF)
						</a>
					</td>
				</tr>
				
				
		        <tr>
					<td>
						<a href="https://plug-storage.s3.amazonaws.com/Q4_2019.pdf">
							Domestic Debt Data Reporting Template For State & FCT
						</a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_TAX_RELIEF_COMPLIANCE_(COVID-19-RESPONSE-MITIGATION%20MEASURES-2020).pdf">
							Structured Tax Compliance Relief Program
						</a>
					</td>
				</tr>
		        <tr>
					<td>
						<a href="http://plateaudatadump.com.ng/pdf_files/budget%202020%20explantory%20notes.docx">
							Budget 2020 Explanatory Notes
						</a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU%20STATE%20RESPONSE%20TO%20IVA%200N%202019%20APA.zip">
							Plateau State Response to IVA On 2019 APA
						</a>
					</td>
				</tr>
		        <tr>
					<td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_CASH_MANAGEMENT_STRATEGY.pdf">
							PLATEAU STATE CASH MANAGEMENT STRATEGY
						</a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_ARREARS_CLEARANCE_FRAMEWORK%20_ACF.pdf">
							PLATEAU STATE ARREARS CLEARANCE FRAMEWORK
						</a>
					</td>
				</tr>
		      
		        <tr>
					<td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU_STATE_REVISED_2020_BUDGET_WITH_EXPLANATORY_NOTES_%28COVID19-RESPONSIVE%29.zip">
							Download Plateau State 2020 Approved Budget with Notes In Excel & Word Format
						</a>
					</td>
				</tr>
		      
		        <tr>
					<td>
						<a href="https://plug-storage.s3.amazonaws.com/CORRECTED_V2_APPROVED%20REVISED%202020%20BUDGET%20%28COVID-19%20RESPONSIVE%29.pdf">
							Approved Revised 2020 Budget COVID-19
						</a>
					</td>
				</tr>	
		        <tr>
					<td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_2020_COVID-19_REVIEWED_BUDGET.pdf">
							Plateau State 2020 COVID-19 REVIEWED BUDGET
						</a>
						
					</td>
				</tr>		
		  
		        <tr>
					<td>
						<a href="http://plateaudatadump.com.ng/pdf_files/Plataeu_state_reviewed_appriopration_bill_july_dec_2020.pdf">
							Plateau State Revised 2020 Appropriation Act
						</a>
						
					</td>
				</tr>
				
				<tr>
					<td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_2020_BUDGET_ADDENDUM.pdf">
							Plateau State Approved Budget 2020 (ADDENDUM)
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<a href="http://plateaudatadump.com.ng/pdf_files/COVID-19-TAX-RELIEF-PLATEAU-STATE.pdf">
							TAX RELIEF MEASURES TO MITIGATE COVID-19 IMPACT ON TAXPAYERS IN PLATEAU STATE
						</a>
					</td>
				</tr>
		        <tr>
					<td>
						<a href="http://plateaudatadump.com.ng/pdf_files/FIRST_QUARTER_DEVIATION_REPORT_JANUARY_MARCH_2020.pdf">
							FIRST QUARTER DEVIATION REPORT JANUARY - MARCH 2020
						</a>
					</td>
				</tr>
				
				

				
				
				
				<tr>
					<td>
						<a href="http://plateaudatadump.com.ng/pdf_files/FIRST_QUARTER_BUDGET_REPORT_JANUARY_MARCH_2020.pdf">
							FIRST QUARTER BUDGET REPORT JANUARY - MARCH 2020
						</a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="http://plateaudatadump.com.ng/pdf_files/APPROVED%202020%20BUDGET%20V2-02%20lamba-edited.pdf">
							2020 APPROVED BUDGET
						</a>
						
					</td>

					<td></td>
				</tr>
				<tr>
					<td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PROPOSED%202020%20BUDGET%20FINAL.pdf">
							2020 PROPOSED BUDGET
						</a>
					</td>
					<td></td>
				</tr>
				
				<tr>
					<td>
						<a href="{{ URL::asset('assets/documents/2020/PLATEAU STATE FIRST QUARTER BUDGET REPORT JANUARY - MARCH 2020.pdf') }}">
							PLATEAU STATE FIRST QUARTER BUDGET REPORT JANUARY - MARCH 2020
						</a>
					</td>
				</tr>
				<tr>
				    <tr>
					<td>
						<a href="{{ URL::asset('assets/documents/2020/PLATEAU STATE FIRST QUARTER DEVIATION REPORT JANUARY-MARCH 2020.pdf') }}">
							PLATEAU STATE FIRST QUARTER DEVIATION REPORT JANUARY-MARCH 2020
						</a>
					</td>
				</tr>
					<td>
						<a href="{{ URL::asset('assets/documents/2020/SUMMARY OF APPROVED 2020 BUDGET PLATEAU STATE.pdf') }}">
							SUMMARY OF APPROVED 2020 BUDGET PLATEAU STATE (APPROPRIATION BILL 2020)
						</a>
					</td>
					<td></td>
				</tr>
				
		  </tbody>
		</table>
		<hr />
		<h4>2019 Budget</h4>
		<table class="uk-table uk-table-hover uk-table-divider">
		    <th>
			<tr>
				<td>Approved Yearly Budget</td>
			  <!--<td>Date of entry</td>-->
			</tr>
		  </th>
		  <tbody>
				@foreach($documents as $document)
					<tr>
					  <td>
							<a href="{{ $document->name }}">
								<span style="text-transform: uppercase;"> {{ $document->title }} </span>
							</a>
					  </td>
					</tr>
				@endforeach
				
				
				
				<tr>
					<td>
						<a href="https://plug-storage.s3.eu-west-3.amazonaws.com/PLATEAU+STATE+APPROPRIATION+BILL+2019.pdf">PLATEAU STATE APPROPRIATION BILL 2019</a>
					</td>
				</tr>
				
				
				<tr>
					<td>
						<a href="https://plug-storage.s3.eu-west-3.amazonaws.com/plateau_state_approved_budget_2019.pdf">PLATEAU STATE APPROVED BUDGET 2019</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<a href="https://plug-storage.s3.eu-west-3.amazonaws.com/MINUTES_AND_REPORT_OF_CITIZENS_BUDGET_TOWN_HALL_MEETING_AUGUST_2019.pdf">MINUTES AND REPORT OF CITIZEN BUDGET TOWN HALL MEETING - AUGUST 2019</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<a href="{{ URL::asset('assets/documents/2019/2019-PLATEAU-STATE-APPROVED-BUDGET-1.pdf') }}">2019 PLATEAU STATE APPROVED BUDGET</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<a href="https://plug-storage.s3.eu-west-3.amazonaws.com/PLATEAU_CENTRAL_CITIZENS_PARTICIPATION_IN_BUDGET_PROCESS_2019.pdf">CITIZENS PARTICIPATION IN BUDGET PROCESS 2019 PLATEAU CENTRAL</a>
					</td>
					
				</tr>
				<tr>
					<td>
						<a href="https://plug-storage.s3.eu-west-3.amazonaws.com/PLATEAU_SOUTH_CITIZENS_PARTICIPATION_IN_BUDGET_PROCESS_2019.pdf">CITIZENS PARTICIPATION IN BUDGET PROCESS 2019 PLATEAU SOUTH</a>
					</td>
					
				</tr>
				<tr>
					<td>
						<a href="https://plug-storage.s3.eu-west-3.amazonaws.com/PLATEAU_NORTH_CITIZENS_PARTICIPATION_IN_BUDGET_PROCESS_2019.pdf">CITIZENS PARTICIPATION IN BUDGET PROCESS 2019 PLATEAU NORTH</a>
					</td>
					
				</tr>
				<tr>
					<td>
						PLATEAU STATE 2019 CITIZENS ENGAGEMENT IN THE STATE BUDGETING PROCESS RADIO ADVERTISEMENT 
						<br />
						<audio controls>
						  <source src="{{ URL::asset('assets/documents/2019/Advertisement-for-Citizens-Budget.mpeg') }}" type="audio/mpeg">
						  <p>Your browser doesn't support audio. Here is
							 a <a href="{{ URL::asset('assets/documents/2019/Advertisement-for-Citizens-Budget.mpeg') }}" download>link to the audio</a> instead.</p>
						</audio>
					</td>
					
				</tr>
				
				<tr>
					<td>
						<a href="{{ URL::asset('assets/documents/2019/2019-PLATEAU-STATE-BUDGET-BREAKDOWN.pdf') }}">
							PLATEAU STATE 2019 BUDGET BREAKDOWN
						</a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="https://plug-storage.s3.eu-west-3.amazonaws.com/PLATEAU_STATE_APPROPRIATION_BILL_2019.pdf">
							PLATEAU STATE APPROPRIATION BILL
						</a>
					</td>
				</tr>
				
				     <tr>
                    <td>AUDITOR’S REPORT YEAR 2021 PLATEAU STATE GOVERNMENT  </td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Report June 2022.pdf">View</a></td>
                </tr>
                <tr>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Plateau State Financial Report Y2021 Final_compressed_compressed.pdf" target="_blank">FINANCIAL STATEMENT YEAR 2021 PLATEAU STATE GOVERNMENT </a> </td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Plateau State Financial Report Y2021 Final_compressed_compressed.pdf" target="_blank">View</a></td>
                </tr>
                <tr>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/BPP_1.pdf" target="_blank" rel="noopener noreferrer">LIST OF CONTRACTS AWARDED FOR THE FOUR PILOT MDAS 2022</a></td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/BPP_1.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Plateua State BPR3-C BPR Publication Finale CR - 2022 Q1 CR.pdf" target="_blank" rel="noopener noreferrer">2022 FIRST BPR QUARTER REPORT</a></td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Plateua State BPR3-C BPR Publication Finale CR - 2022 Q1 CR.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Report Final_compressed (1).pdf" target="_blank" rel="noopener noreferrer">AUDITED FINANCIAL STATEMENT 2019</a></td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Report Final_compressed (1).pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>2019 BUDGET</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/plateau_state_approved_budget_2019.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>PLATEAU STATE CASHFLOW FORECAST FOR THE YEAR 2020</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE CASHFLOW FORECAST FOR THE YEAR 2020.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>PLATEAU STATE 2020 CITIZENS REVISED BUDGET DISEMINATION AND BUDGET TOWN-HALL CONSULTATIVE FORUM HELD IN MAY AND SEPTEMBER 2020 IN PREPARATION OF 2021 BUDGET</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE 2020 CITIZENS REVISED BUDGET DISEMINATION AND BUDGET TOWN-HALL CONSULTATIVE FORUM HELD IN MAY AND SEPTEMBER 2020 IN PREPARATION OF 2021 BUDGET.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>PLATEAU STATE 2020 CITIZENS REVISED BUDGET DISEMINATION AND BUDGET TOWN-HALL CONSULTATIVE FORUM REPORTS</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE 2020 CITIZENS REVISED BUDGET DISEMINATION AND BUDGET TOWN-HALL CONSULTATIVE FORUM REPORTS.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>PLATEAU STATE 2021 CITIZENS BUDGET</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE 2021 CITIZENS BUDGET.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>PLATEAU STATE 2021 CITIZENS DISEMINATION AND MINUTES OF CITIZENS CONSULTATIVE FORUM REPORTS</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE 2021 CITIZENS DISEMINATION AND MINUTES OF CITIZENS CONSULTATIVE FORUM REPORTS.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>PLATEAU STATE 2020 REVISED CITIZENS BUDGET</td>
                    <td><<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE 2020 REVISED CITIZENS BUDGET.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>PLATEAU STATE 2020 REVISED CITIZENS BUDGET DISEMINATION AND TOWN HALL ENGAGEMENT REPORTS</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE 2020 REVISED CITIZENS BUDGET DISEMINATION AND TOWN HALL ENGAGEMENT REPORTS.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>PLSG CASH MANAGEMENT STRATEGY ADDENDUM</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/PLSG CASH MANAGEMENT STRATEGY ADDENDUM.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>Plateau State Citizens Accountability Report v6</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Plateau State Citizens Accountability Report v6.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>PLATEAU STATE BUDGET PERFORMANCE DEVIATION REPORT 2020</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE BUDGET PERFORMANCE DEVIATION REPORT 2020.xlsx" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>PLATEAU STATE CITIZENS BUDGET AND TOWN HALL MEETING 2020 COVID 19 RESPONSIVE BUDGET</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE CITIZENS BUDGET AND TOWN HALL MEETING 2020 COVID 19 RESPONSIVE BUDGET.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>PLATEAU STATE 2022 APPROVED BUDGET</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE 2022 APPROVED BUDGET.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>PLATEAU STATE BPR3-C BPR PUBLICATION FINALE CR - 2021 Q4 CR</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Plateua State BPR3-C BPR Publication Finale CR - 2021 q4 CR (2).pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>PLATEAU STATE 2021 DSA-DMS REPORT</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE 2021 DSA-DMS REPORT.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>PLATEAU STATE 2022 APROPRIATION ACT</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE 2022 APROPRIATION BILL.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>2019 AUDITED MANANGMENT OPINION PLATEAU STATE 17 LGC</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/2019 AUDITED MANAGMENT OPINION PLATEAU STATE LGC.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>AUDIT MANAGMENT OPINION 2018 LGC</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/AUDIT MANAGMENT OPINION 17 LGC YEAR 2020.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>ADDENDUM TO COVID19 DECEMBER 2020 REPORT </td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE COVID 19 RESPONSIVE BUDGET IMPLEMENTATION REPORT DECEMBER 2020.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>PLATEAU STATE BPR THIRD QUARTER Q3 2021</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Plateau State BPR THIRD QUARTER Q3 2021.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>MIKANG LGC 2020 AFS UPDATED</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Mikang AFS 2020 Report-compressed.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>PLATEAU STATE 2022 DRAFT BUDGET EXCEL</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Plateau State FY 2022 Draft Budget - NCoA Compliant Publication Version 1.xlsx" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>PLATEAU STATE 2022 DRAFT BUDGET</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Plateau State FY 2022 Draft Budget - NCoA Compliant Publication Version 1.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>WASE LGC 2020 AFS</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/WASE REPORT.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>SHENDAM LGC 2020 AFS</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Shendam Report.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>RIYOM LGC 2020 AFS</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Riyom Report.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>QUAN PAN LGC 2020 AFS</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Quan-Pan Report.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>PANKSHIN LGC 2020 AFS</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Pankshin Report.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>MANGU LGC 2020 AFS</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Mangu Report.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>LANGTANG SOUTH LGC 2020 AFS</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Langtang South Report.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>LANGTANG NORTH LGC 2020 AFS</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Langtang Report.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>KANKE LGC 2020 AFS</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Kanke Report.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>KANAM LGC 2020 AFS</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Kanam Report.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>JOS SOUTH LGC 2020 AFS</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Jos South Report.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>JOS NORTH LGC 2020 AFS</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Jos North Report.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>JOS EAST LGC 2020 AFS</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Jos East Report.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>BOKKOS LGC 2020 AFS</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Bokkos Report.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>BASSA LGC 2020 AFS</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Bassa LG Report.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>BARKIN LADI LGC 2020 AFS</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Barkin Ladi Report.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>CONSOLIDATED 17 LGC AFS 2020 </td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Consolidated Book.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>AUGUST 2021 BUDGET STATEMENTS REPORT COVID -19</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_AUGUST_2021_COVID_19_RESPONSIVE_STATEMENTS.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>AUGUST 2021 BUDGET IMPLIMENTATION REPORT COVID -19</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_AUGUST_2021_COVID_19_RESPONSIVE_BUDGET_IMPLIMENTATION_REPORT.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>AUDITORS NOTE ON 2018 LGC AUDITED FINANCIAL STATEMENTS </td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/MANAGMENT OPINION 2018 LGC AUDIT.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>AUDIT STATEMENT ON 2019 LGC AUDITED FS</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/2019 AUDIT OPINION LGC.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>BARKIN LADI 2018 </td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/B LADI COMPRESSED.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td<a href="http://plateaudatadump.com.ng/pdf_files/Shendam.pdf" target="_blank" rel="noopener noreferrer">>FS SHENDAM 2019</a></td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Shendam.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/COVID-19 REPORT DECEMBER 2020.pdf" target="_blank" rel="noopener noreferrer">COVID-19 REPORT DECEMBER 2020 </a></td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/COVID-19 REPORT DECEMBER 2020.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE FS 2020 REPORT (1).pdf" target="_blank" rel="noopener noreferrer">AUDITED FINANCIAL STATEMENT Y2020</a></td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE FS 2020 REPORT (1).pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/QUAN PAN.pdf" target="_blank" rel="noopener noreferrer">FINANCIAL STATEMENT 2019 QUAN-PAN</a></td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/QUAN PAN.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Wase.pdf" target="_blank" rel="noopener noreferrer">FINANCIAL STATEMENT 2019 WASE</a></td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Wase.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Riyom.pdf" target="_blank" rel="noopener noreferrer">FINANCIAL STATEMENT 2019 RIYOM</a></td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Riyom.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>FINANCIAL STATEMENT 2019 PANKSHIN</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Pankshin.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Mikang.pdf" target="_blank" rel="noopener noreferrer">FINANCIAL STATEMENT 2019 MIKANG</a></td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Mikang.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Mangu.pdf" target="_blank" rel="noopener noreferrer">FINANCIAL STATEMENT 2019 MANGU</a></td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Mangu.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Langtang South.pdf" target="_blank" rel="noopener noreferrer">FINANCIAL STATEMENT 2019 LANGTANG SOUTH</a></td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Langtang South.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>FINANCIAL STATEMENT 2019 LANGTANG NORTH</a></td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Langtang North.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>FINANCIAL STATEMENT 2019 KANKE</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Kanke.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>FINANCIAL STATEMENT 2019 KANAM</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Kanam.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>FINANCIAL STATEMENT 2019 JOS SOUTH</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Jos South.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>FINANCIAL STATEMENT 2019 JOS NORTH</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Jos North.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>FINANCIAL STATEMENT 2019 JOS EAST</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Jos East.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>FINANCIAL STATEMENT 2019 BOKKOS</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Bokkos.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>FINANCIAL STATEMENT 2019 BASSA</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/Bassa.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>FINANCIAL STATEMENT 2019 BARKIN LADI</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/B Ladi.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>FINANCIAL STATEMENT 2018 SHENDAM</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/FS SHENDAM 2018.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td >FINANCIAL STATEMENT 2018 WASE</td>
                    <td ><a href="ttp://plateaudatadump.com.ng/pdf_files/FS WASE.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>FINANCIAL STATEMENT 2018 RIYOM </td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/FS RIYOM.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>FINANCIAL STATEMENT 2018 QUAN-PAN</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/FS QP.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>FINANCIAL STATEMENT 2018 PANKSHIN </td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/FS PANKSHIN.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>FINANCIAL STATEMENT 2018 MIKANG </td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/FS MIKANG.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>FINANCIAL STATEMENT 2018 MANGU</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/FS MANGU.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>FINANCIAL STATEMENT 2018 LANGTANG SOUTH</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/FS LANGTANG SOUTH.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>FINANCIAL STATEMENT 2018 LANGTANG NORTH </td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/FS LANGTANG NORTH.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>FINANCIAL STATEMENT 2018 KANKE</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/FS KANKE.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>FINANCIAL STATEMENT 2018 KANAM</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/FS KANAM.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>FINANCIAL STATEMENT 2018 JOS SOUTH</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/FS JOS SOUTH.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>FINANCIAL STATEMENT 2018 JOS NORTH</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/FS JOS NORTH.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>FINANCIAL STATEMENT 2018 JOS EAST</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/FS JOS EAST.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>FINANCIAL STATEMENT 2018 BOKKOS</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/FS BOKKOS.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                <tr>
                    <td>FINANCIAL STATEMENT 2018 BASSA LGA</td>
                    <td><a href="http://plateaudatadump.com.ng/pdf_files/FS BASSA.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
                </tr>
                
            <tr>
                <td>GOVERNEORS APPROVAL FOR RELEASE OF FUNDS FOR OFFICE OF THE AUDITOR GENERAL LGA</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/GOVERNORS APPROVAL FOR RELEASE OF FUNDS FOR LOCAL GOVERNMENT AUDITOR GENERAL.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>GOVERNEORS APPROVAL FOR RELEASE OF FUNDS FOR OFFICE OF THE AUDITOR GENERAL PLATEAU STATE</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/GOVERNEORS APPROVAL FOR RELEASE OF FUNDS FOR OFFICE OF THE AUDITOR GENERAL PLATEAU STATE.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU STATE SECOND QUARTER Q2 2021  COVID 19 RESPONSIVE STATEMENTS</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE SECOND QUARTER Q2 2021  COVID 19 RESPONSIVE STATEMENTS.xls" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU STATE SECOND QUARTER Q2 2021  COVID 19 RESPONSIVE STATEMENTS</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE SECOND QUARTER Q2 2021  COVID 19 RESPONSIVE STATEMENTS.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU STATE JUNE 2021 COVID 19 RESPONSIVE STATEMENTS</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE JUNE 2021 COVID 19 RESPONSIVE STATEMENTS.xls" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU STATE JUNE 2021 COVID 19 RESPONSIVE STATEMENTS</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE JUNE 2021 COVID 19 RESPONSIVE STATEMENTS.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU STATE JUNE 2021 COVID 19 RESPONSIVE BUDGET EXPENDITURE REPORT</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE JUNE 2021 COVID 19 RESPONSIVE BUDGET EXPENDITURE REPORT.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE JUNE 2021 COVID 19 RESPONSIVE BUDGET EXPENDITURE REPORT.xlsx" target="_blank" rel="noopener noreferrer">PLATEAU STATE JUNE 2021 COVID 19 RESPONSIVE BUDGET EXPENDITURE REPORT</a></td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE JUNE 2021 COVID 19 RESPONSIVE BUDGET EXPENDITURE REPORT.xlsx" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/2019-2020-annual-nominal-igr-growth-rate-report.pdf" target="_blank" rel="noopener noreferrer">PLSG ANNUAL IGR GROWTH RATE 2019 - 2020</a></td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/2019-2020-annual-nominal-igr-growth-rate-report.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLSG IGR REPORT 2019 - 2020 </td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/IGR 2019 TO 2020 FOR SFITAS MALAN.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>Plateua State Second Quarter Budget Implementation Report April-June 2021</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/Plateua State Second Quarter Budget Implementation Report April-June 2021.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>DMO 4TH QUARTER, 2020 REPORT</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/4TH QUARTER, 2020.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>DMO 3RD QUARTER, 2020 REPORT</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/3RD QUATER, 2020.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>DMO 2ND QUARTER, 2020 REPORT</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/2ND QUATER, 2020.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>DMO 1ST QUARTER, 2021 REPORT</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/1ST QUARTER, 2021.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>DMO 1ST QUARTER, 2020 REPORT</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/1ST QUARTER, 2020.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>SUBMISSION OF Y2020 AUDIT REPORT TO HOUSE OF ASSEMBLY</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/SUBMISSION OF Y2020 AUDIT REPORT.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>AUDITOR GENERALS REPORT - PAGE TO 353 - 465</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/AUDITOR GENERALS REPORT - PAGES 353 TO 465.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>AUDITOR GENERALS REPORT - PAGE TO 197 - 352</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/AUDITOR GENERALS REPORT - PAGES 197 TO 352.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>AUDITOR GENERALS REPORT - COVER PAGE TO 196 </td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/AUDITOR GENERALS REPORT - COVER PAGE TO 196.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLSG COVID-19 FINANCIAL STATEMENTS 2020 PDF</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/FINAL_COVID_19_FIN_FINAL.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>2021-financial-autonomy-circular</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/2021-financial-autonomy-circular.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLSG AUDIT LAW 2021</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLSG_AUDIT_LAW_2021.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td >PLSG COVID-19 PROCUMENTS 2021</td>
                <td ><a href="http://plateaudatadump.com.ng/pdf_files/COVID_19_PROCUREMENT_2021.xlsx" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLSG PSIRS PROHIBITION OF CONSULTANTS</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLSG_PSIRS_PROHIBITIONS_CONSULTANTS.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU_STAT_MAY_2021_COVID_19 RESPONSIVE_FINANCIAL STATEMENTS REPORT PDF</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_MAY_2021_FINANCIAL_STATEMENTS_FOR_COVID_19_RESPONSIVE.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU_STAT_MAY_2021_COVID_19 RESPONSIVE_FINANCIAL STATEMENTS REPORT XLS</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_MAY_2021_FINANCIAL STATEMENTS_FOR_COVID_19_RESPONSIVE.xls" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU_STAT_MAY_2021_COVID_19 RESPONSIVE_BUDGET_EXPENDITURE_REPORT pdf</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_MAY_2021_COVID_19_RESPONSIVE_BUDGET_EXPENDITURE_REPORT.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU_STAT_MAY_2021_COVID_19 RESPONSIVE_BUDGET_EXPENDITURE_REPORT XLS</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STAT_MAY_2021_COVID_19 RESPONSIVE_BUDGET_EXPENDITURE_REPORT.xls" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLSG DOMESTIC DEBT DATA </td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLSG_Domesticated_Debt_Data_Mar31_2021.jpg" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLSG FIRST QUARTER TEMPLATE DMO</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/Plateau_State_Q1_2021_Template_from_DMO.xlsx" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLSG FIRST QUARTER COVER LETTER DMO</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/Plateau_State_Q1_2021_CoverLetter_DMO.jpg" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU_STATE_APRIL_2021_COVID_19_BUDGET EXPENDITURE PDF</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_APRIL_2021_COVID19_RESPONSIVE_BUDGET_EXPENDITURE_REPORT.xlsx" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU_STATE_APRIL_2021_COVID_19_BUDGET EXPENDITURE PDF</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_APRIL_2021_COVID19_RESPONSIVE_BUDGET_EXPENDITURE_REPORT.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU_STATE_APRIL_2021_COVID_19_RESPONSIVE_STATEMENTS pdf</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_APRIL_2021_COVID19_RESPONSIVE_STATEMENTS.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU_STATE_APRIL_2021_COVID_19_RESPONSIVE_STATEMENTS xls</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_APRIL_2021_COVID_19_RESPONSIVE_STATEMENTS.xls" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>Auditor_Gen_1st_qtr_covid19_2021_report</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/Auditor_Gen_1st_qtr_covid19_2021.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>Auditor_Gen_1st_qtr_covid19_2021_submission_letter</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/Auditor_Gen_1st_qtr_covid19_2021_submission_letter.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLSG 1ST QUARTER BUDGET  IMPLIMENATION REPORT 2021</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/Plateua_State_First_Quarter_Budget_Implementation_Report_January_to_March_2021.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU_STATE_COVID_19_RESPONSIVE_STATEMENT_MARCH_2021 PDF</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE FINANCIAL STATEMENTS FOR COVID 19 RESPOSIVE MARCH 2021.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU_STATE_COVID_19_RESPONSIVE_STATEMENT_MARCH_2021 XLS</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_FINANCIAL_STATEMENTS_FOR_COVID_19_RESPOSIVE_MARCH_2021.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU_STATE_COVID_19_RESPONSIVE_BUDGE_IMPLIMENTATION_REPORT_MARCH_2021 PDF</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_COVID_19_RESPONSIVE_BUDGET_IMPLEMENTATION_REPORT_MARCH_2021.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU_STATE_COVID_19_RESPONSIVE_BUDGE_IMPLIMENTATION_REPORT_MARCH_2021 XLS</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_COVID_19_RESPONSIVE_BUDGE_IMPLIMENTATION_REPORT_MARCH_2021.xlsx" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>Contract-Award-QCBS-Solina-Health-Plateau-2021 pdf</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/Contract-Award-QCBS-Solina-Health-Plateau-2021.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU_STATE_FEBRUARY_2021_COVID_19_STATEMENTS xls</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_FEBRUARY_2021_COVID_19_RESPONSIVE_STATEMENTS.xls" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU_STATE_FEBRUARY_2021_COVID_19_STATEMENTS PDF</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_FEBRUARY_2021_COVID_19_RESPONSIVE_STATEMENTS.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU_STATE_FEBRUARY_2021_COVID_19_RESPONSIVE_BUDGET_EXPENDITURE_REPORT xls</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_FEBRUARY_2021_COVID_19_RESPONSIVE_BUDGET_EXPENDITURE_REPORT.xlsx" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU_STATE_FEBRUARY_2021_COVID_19_RESPONSIVE_BUDGET_EXPENDITURE_REPORT pdf</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_FEBRUARY_2021_COVID_19_RESPONSIVE_BUDGET_EXPENDITURE_REPORT.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU STATE JANUARY 2021 COVID 19 RESPONSIVE STATEMENTS xls</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE JANUARY 2021 COVID 19 RESPONSIVE STATEMENTS.xls" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU STATE JANUARY 2021 COVID 19 RESPONSIVE STATEMENTS  pdf</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE JANUARY 2021 COVID 19 RESPONSIVE STATEMENTS.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU STATE JANUARY 2021 COVID 19 RESPONSIVE BUDGET EXPENDITURE REPORT XLS</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE JANUARY 2021 COVID 19 RESPONSIVE BUDGET EXPENDITURE REPORT.xlsx" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU STATE JANUARY 2021 COVID 19 RESPONSIVE BUDGET EXPENDITURE REPORT PDF</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE JANUARY 2021 COVID 19 RESPONSIVE BUDGET EXPENDITURE REPORT.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>SUBMISSION OF THE AUDITOR GENERAL TO HOUSE OF ASSEMBLY  4TH QUARTER COVID-19 RESPONSIVE REPORT 2020</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/SUBMISSION_OF_THE_AUDITOR_GENERAL_REPORT_TO_THE_HOUSE_OF_ASSEMBLY_FOR_THE_4TH_QUARTER_ENDED_31ST_DECEMBER_2020_COVID_19_REPONSIVE.JPG" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>AUDITOR GENERAL  4TH QUARTER COVID-19 RESPONSIVE REPORT 2020</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/THE AUDITOR-GENERALS REPORT FOR THE 4TH QUARTER ENDED 31ST DECEMBER 2020- COVID-19 RESPONSIVE 2.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLSG  3rd QUARTER DEVIATION REPORT 2020</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_THIRD_QUARTER_DEVIATION_REPORT_JULY_TO_SEPT_2020.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLSG  2nd QUARTER DEVIATION REPORT 2020</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_SECOND_QUARTER_DEVIATION_REPORT_APRIL_TO_JUNE_2020.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLSG  4TH QUARTER DEVIATION REPORT 2020 pdf</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_FOURTH_QUARTER_DEVIATION_REPORT_OCT_TO_DEC_2020.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLSG 4TH QUARTER BUDGET IMPLIMENTATION REPORT 2020 XLS</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_4TH_QUARTER_BUDGET_MPLEMENTATION_REPORT_OCTOBER_TO_DECEMBER_2020.xlsx" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLSG 4TH QUARTER BUDGET IMPLIMENTATION REPORT 2020 PDF</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_4TH_QUARTER_BUDGET_IMPLEMENTATION_REPORT_OCTOBER_TO_DECEMBER_2020.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLSG 1ST_2ND_3RD &amp; 4TH QUARTER DEVIATION REPORT 2020</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STAT_ FIRST_SECOND_THIRD_AND_FOURTH_QUARTER_DEVIATION_EXCEL_REPORTS_JANUARY_TO_DECEMBER_2020.xlsx" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLSG FOURTH QUARTER 2020 EXECUTIVE SUMMARY</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/EXECUTIVE_SUMMARY_FOURTH_QUARTER_OCTOMBER_TO_DECEMBER_2020.docx" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLSG CITIZENS BUDGET AND TOWN HALL MEETING 2020 REPORT PDF</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_CITIZENS_BUDGET_2020_AND_BUDGET_TOWN_HALL_MEETING_FREPORT_2020.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLSG DECEMBER 2020 STATEMENT PDF</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_DECEMBER_2020_STATEMENT_FOR_COVID_19_RESPONSIVE.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLSG DECEMBER 2020 STATEMENT XLS</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_DECEMBER_2020_STATEMENTS_FOR_COVID19_RESPONSIVE.xls" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU_STATE_COVID_19_RESPONSIVE_BUDGET_EXPENDITURE_REPORT_DECEMBER_2020 PDF</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_COVID_19_RESPONSIVE_BUDGET_EXPENDITURE_REPORT_DECEMBER_2020.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU_STATE_COVID_19_RESPONSIVE_BUDGET_EXPENDITURE_REPORT_DECEMBER_2020 XLS</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_COVID_19_RESPONSIVE_BUDGET_EXPENDITURE_REPORT_DECEMBER_2020.xlsx" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>2019 BALANCE SHEETS 17 LGA OF PLATEAU STATE PDF</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE BALANCED SHEET 17 LGAS 2019.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>2018 BALANCE SHEETS 17 LGA OF PLATEAU STATE PDF</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE BALANCED SHEET 17 LGAS 2018.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLSG DSA REPORT NOV-DEC 2020 PDF</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_DSA_REPORT_NOV_DEC_2020.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU STATE REVISED 2020 CITIZENS BUDGET BOOK COVID-19 RESPONSIVE BUDGET</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE REVISED 2020 CITIZENS BUDGET BOOK (COVID-19 RESPONSIVE BUDGET).pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU STATE PROPOSED 2021 BUDGET pdf</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_PROPOSED_2021_DRAFT_BUDGET.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU STATE PROPOSED 2021 BUDGET</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_PROPOSED_2021_DRAFT_BUDGET.xlsx" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU STATE APPROPRIATION BILL 2021</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_APPROPRIATION_BILL_2021.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU STATE BUDGET EXECUTION REPORT FOR COVID-19 RESPONSE NOVEMBER 2020 PDF</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_BUDGET_EXECUTION_REPORT_FOR_COVID_19_RESPONSE_NOVEMBER 2020.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>FINANCIAL STATEMENT FOR COVID-19 RESPONSE NOVEMBER 2020 pdf</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_FINANCIAL_STATEMENTS_FOR_COVID_19_RESPONSIVE_NOVEMBER_2020.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>FINANCIAL STATEMENT  FOR COVID-19 RESPONSE NOVEMBER 2020</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_FINANCIAL_STATEMENTS_FOR_COVID_19_RESPONSIVE_NOVEMBER_2020.xls" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLATEAU STATE BUDGET EXECUTION REPORT FOR COVID-19 RESPONSE NOVEMBER 2020</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_BUDGET_EXECUTION_REPORT_FOR_COVID_19_RESPONSE_NOVEMBER 2020.xlsx" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>SUBMISSION OF THE AUDITOR GENERALS REPORT TO THE STATE HOUSE OF ASSEMBLY IN RESPECT OF 3RD QUARTER 2020</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/SUBMISSION OF THE AUDITOR GENERALS REPORT TO THE STATE HOUSE OF ASSEMBLY IN RESPECT OF 3RD QUARTER 2020.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLSG REPORT OF THE AUDITOR GENERAL FOR THE 3RD QUARTER ENDED  30RH SEPTEMBER, 2020 ON COVID  19 RESPONSIVE</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE GOVERNMENT OF NIGERIA REPORT OF THE AUDITOR GENERAL FOR THE 3RD QUARTER ENDED  30RH SEPTEMBER, 2020 ON COVID  19 RESPONSIVE.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>FS STATEMENT FOR COVID-19 REPORT OCT 2020 XLS</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE  FINANCIAL STATEMENTS FOR COVID 19 RESPONSIVE OCTOBER 2020.xls" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>FS STATEMENT FOR COVID-19 REPORT OCT 2020 PDF</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE  FINANCIAL STATEMENTS FOR COVID 19 RESPONSIVE OCTOBER 2020 (1).pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>COVID-19 BUDGET RESPONSIVE REPORT OCT 2020 PDF</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE  FINANCIAL STATEMENTS FOR COVID 19 RESPONSIVE OCTOBER 2020 (1).pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>COVID-19 BUDGET RESPONSIVE REPORT OCT 2020 XLS</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE  FINANCIAL STATEMENTS FOR COVID 19 RESPONSIVE OCTOBER 2020.xls" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>FS FOR COVID-19 RESPONSIVE OCT - 2020 EXCEL</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE  FINANCIAL STATEMENTS FOR COVID 19 RESPONSIVE OCTOBER 2020.xls" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>FS FOR COVID-19 RESPONSE NOV-2020 PDF</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE  FINANCIAL STATEMENTS FOR COVID 19 RESPONSIVE OCTOBER 2020 (1).pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>PLSG THIRD QUARTER REPORT JULY - SEPT  2020 PDF</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_THIRD_QUARTER_REPORT_JULY_TO_SEPTEMBER_2020.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>EXECUTIVE SUMMARY THIRD QUARTER JULY -SEPT 2020 WORD DOC</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/EXECUTIVE SUMMARY THIRD QUARTER JULY TO SEPTEMBER 2020.docx" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>THIRD QUARTER JULY - SEPT 2020 REPORTS</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE THIRD QUARTER REPORT JULY TO SEPTEMBER 2020.xlsx" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>COVID-19 BUDGET IMPLIMENTATION SEPT 2020 PDF</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE COVID 19 RESPONSIVE BUDGET IMPLIMENTATION REPORT SEPTEMBER 2020.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>COVID-19 BUDGET IMPLIMENTATION REPORT FOR SEPT 2020</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE COVID 19 RESPONSIVE BUDGET IMPLIMENTATION REPORT SEPTEMBER 2020.xlsx" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
            <tr>
                <td>FS COVID-19 SEPT 2020 PDF</td>
                <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE FINANCIAL STATEMENTS FOR COVID 19 SEPTEMBER 2020.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
            </tr>
          <tr>
            <td>FS FOR COVID-19 SEPT 2020</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE FINANCIAL STATEMENTS FOR COVID 19 SEPTEMBER 2020.xls" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>REVISED CITIZENS BUDGET CHARTS AND GRAPH 2020</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/Plateau_State_Revised_2020_Citizens_Budget_charts_graphs_(COVID 19 RESPONSIVE).xlsx" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PLSG CITIZENS REVISED BUDGET BOOK COVID-19 2020</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_REVISED_2020_CITIZENS_BUDGET_BOOK_(COVID-19 RESPONSIVE).pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>FS COVID-19 AUGUST 2020 EXCEL</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_FINANCIAL_STATEMENTS_FOR_COVID19_AUGUST_2020_2.xls" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>FS FOR COVID-19 AUGUST 2020</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_FINANCIAL_STATEMENTS_FOR_COVID19_AUGUST_2020_2.xls" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>COVID-19 BUDGET IMPLIMENTATION REPORT AUGUST 2020 PDF</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE COVID-19 RESPONSIVE BUDGET IMPLEMENTATION REPORT AUGUST 2020.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>COVID-19 BUDGET IMPLIMENTATION REPORT AUGUST </td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_COVID19_RESPONSIVE_BUDGET_IMPLEMENTATION_REPORT AUGUST_2020.xlsx" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>GUIDELINES ON SMS PARTICIPATION ON AWARD</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/GUIDELINE_TO_INCREASE_SMES_PARTICIPATION_CONTRACT_AWARDED_BY_PLSG.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>GUIDELINES ON CONDUCT OF PUBLIC PROCURMENT COVID-19</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/GUIDELINES_ON_THE_CONDUCT_PUBLIC_PROCUREMENT_ACTIVITIES_MDA_AS_COVID-19.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>BUSINESS AND INDIVIDUAL THAT HAVE NOT FILLED ANNUAL TAX RETURN</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/Business_and_individuals_that_have_not_filed_annual_tax_return.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>BUSINESS AND INDIVIDUALS THAT HAVE NOT REMITTED EMAIL</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/Business_and_individual_that_have_not_remitted_email.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>BUSINNES INDIVIDUALS THAT HAVE NOT FILLED ANNUAL RETURNS EMAIL</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/Business_and_individual_that_have_not_remitted_email.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PLSG ALL PAYE ORG. THAT HAVE NOT FILLED ANNUAL RETURNS </td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/All_PAYE_organisations_that_have_not_filed_annual_tax_returns.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>ALL PAYE ORGANISATION WITH PARTIAL PAYMENT EMAIL</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/All_PAYE_organisation_with_partial_payment_email.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>BUSINESS INDIVIUAL THAT HAVE NOT REMITTED  EMAIL</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/Business_and_individual_that_have_not_remitted_email.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PLSG ALL PAYE ORG WITH FULL PAYMENT</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/All_PAYE_organisation_up_to_date_payment.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PLSG ALL PAYE ORG WITH FULL PAYMENT UP TO DATE SMS</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/All_PAYE_organisation_with_payment_up_to_Date_SMS.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PLSG ALL PAYE ORG WITH PARTIAL PAYMENT</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/All_PAYE_organisation_with_partial_payment.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PLSG ALL PAYE ORG THAT HAVE FILLED ANNUAL RETURNS &amp; ASSESSMENT</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/All_PAYE_organisation_that_have_filed_annual_returns_and_assessment.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PLSG ALL PAYE ORG THAT HAVE FILLED ANNUAL RETURNS </td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/All_PAYE_organisation_that_have_filed_and_annual_returns.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PLSG CITIZENS BUDGET 2019</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/Plateau_State_Citizens_Budget_2019.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PLSG DEBT MANAGMENT AMENDED BILL</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/debt_management_bill _amended_2020.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PLSG TAX RELIEF COMPLIANCE </td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_TAX_RELIEF_COMPLIANCE_(COVID-19-RESPONSE-MITIGATION MEASURES-2020).pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>QUARTER 4 DEBT MANAGEMENT REPORT</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/Q4_2019.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PLSG 2020 BUDGET EXPLANATORY NOTES</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/budget 2020 explantory notes.docx" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td >PLSG ARREARS CLEARANCE FRAME WORK</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_ARREARS_CLEARANCE_FRAMEWORK _ACF.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PLSG CASH MANAGEMENT STARTEGY</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_CASH_MANAGEMENT_STRATEGY.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PLATEAU STATE REVENUE REVIEW DETAILS 2020</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU REVENUE REVIEW DETAILS 2020 L.xlsx" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>VERSION 2 CORRECTED APPROVED REVISED 2020 BUDGET COVID-19 RESPONSIVE</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/CORRECTED_V2_APPROVED REVISED 2020 BUDGET (COVID-19 RESPONSIVE).pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>CORRECTED APPROVED REVISED 2020 BUDGET COVID-19 RESPONSIVE</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/CORRECTED_APPROVED_REVISED_2020_BUDGET_(COVID-19 RESPONSIVE).pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PLSG REVISED COVID-19 BUDGET 2020</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/APPROVED_REVISED_2020_BUDGET_(COVID-19-RESPONSIVE)-Final-zipped.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PLSG COVID-19 2020 BUDGET SUMMARY</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE COVID-19 2020 BUDGET SUMMARY L.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PLSG COVID-19 RESPONSIVE BUDGET SUMMARY 2020</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_COVID_19_RESPONSIVE_BUDGET_IMPLIMENTATION_REPORT_OCTOBER_2020.xlsx" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PLSG APPROVED REVISED COVID-19 BUDGET</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/APPROVED REVISED 2020 BUDGET (COVID-19 RESPONSIVE) - Copy.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PLSG COVID-19 REVIEWED BUDGET </td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_2020_COVID-19_REVIEWED_BUDGET.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PLSG SFTAS EXPLANATORY NOTES</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE SFTAS EXPLANATORY NOTES L.docx" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PLSG AMENDED OVERHEAD COST 2020 BUDGET</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE AMENDED OVERHEAD COST 2020 BUDGET SUMMARY L.xlsx" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PLSG AMENDED CAPITAL EXPENDITURE 2020 BUDGET</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE AMENDED CAPITAL EXPENDITURE 2020 REVISED BUDGET SUMMARY L.xlsx" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PLSG AMENDED PERSONNEL EXPENDITURE 2020 BUDGET</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE 2020 AMENDED PERSONNEL COST DETAILS L.xlsx" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PLSG AMENDED RECURRENT EXPENDITURE SUMMARY 2020 BUDGET</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE 2020 AMENDED RECURRENT EXPENDITURE SUMMARY L.xlsx" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PLSG STATUTORY REVENUE RECEIPTS 2020 AMENDED BUDGET</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE 2020 AMENDED STATUTORY REVENUE ALLOCATION SUMMARY L.xlsx" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PLSG AMENDED IGR AMENDED 2020 BUDGET</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE AMENDED IGR REVENUE 2020 SUMMARY L.xlsx" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PLSG CAPITAL RECEIPTS 2020 AMENDED BUDGET</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE 2020 AMENDED CAPITAL RECEIPTS REVENUE L.xlsx" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PLSG AMENDED CAPITAL EXPENDITURE REVISED BUDGET 2020</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE AMENDED CAPITAL EXPENDITURE 2020 REVISED BUDGET SUMMARY L.xlsx" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PLATEAU STATE AMENDED OVERHEAD COST 2020 BUDGET</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU STATE AMENDED OVERHEAD COST 2020 BUDGET DETAILS L.xlsx" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PLATEAU STATE REVIEWED APPROPRIATION BILL  JULY - DEC 2020</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/Plataeu_state_reviewed_appriopration_bill_july_dec_2020.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>SECOND QUARTER BUDGET REPORT 2020</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/SECOND_QUARTER_BUDGET_REPORT_APRIL_JUNE_2020.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>ADDENDUM FIRST QUARTER BUDGET REPORT 2020</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/ADDENDUM_TO_2020_FIRST_QUARTER_BUDGET_SUMMARY_REPORT_JANUARY_TO_MARCH.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>COVID-19 TAX RELIEF </td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/COVID-19-TAX-RELIEF-PLATEAU-STATE.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PLATEAU STATE 2020 BUDGET ADDENDUM</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU_STATE_2020_BUDGET_ADDENDUM.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>FIRST QUARTER DEVIATION REPORT JAN - MAR 2020</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/FIRST_QUARTER_DEVIATION_REPORT_JANUARY_MARCH_2020.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>FIRST QUARTER BUDGET REPORT 2020</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/FIRST_QUARTER_BUDGET_REPORT_JANUARY_MARCH_2020.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PLATEAU STATE AUDITOR GENERAL ACCOUNT REPORT 2019</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/PLSG_AUDITOR_GENERAL_REPORT_ACCOUNT_DEC31ST_1.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>AUDITOR GENERAL REPORT 2019</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/PLSG_AUDITOR_GENERAL_REPORT_ACCOUNT_DEC31ST_1.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>FOURTH QUARTER PERSONNEL COST REPORT JAN - DEC 2019</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/FORTH_QUARTER_PERSONNEL_COST_REPORT_JANUARY_DECEMBER_2019.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>FOURTH QUARTER OVERHEAD REPORT JAN - DEC 2019</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/FORTH_QUARTER_OVERHEAD_COST_REPORT_JANUARY_DECEMBER_2019.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>FOURTH QUARTER IGR JAN - DEC 2019</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/FORTH_QUARTER_IGR_REVENUE_REPORT_JANUARY_DECEMBER_2019.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>SECOND QUARTER DEVIATION REPORT JAN - JUNE 2019</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/SECOND_QUARTER_DEVIATION_REPORT_JANUARY - JUNE 2019.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>THIRD QUARTER DEVIATION REPORT JAN - SEPT 2019</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/THIRD_QUARTER_DEVIATION_REPORT_JANUARY_SEPTEMBER _2019.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>FOURTH QUARTER CAPITAL EXPENDITURE JAN - DEC 2019</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/FORTH_QUARTER_CAPITAL_EXPENDITURE_REPORT_JANUARY_DECEMBER_2019.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>FOURTH QUATER REVENUE FROM FG REPORT JAN - DEC 2019</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/FORTH_QUARTER_FAAC_REVENUE_FROM_FEDERAL_GOVERNMENT_REPORT_JANUARY_DECEMBER_2019.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>FOURTH QUARTER FAAC ALLOCATIONS &amp; DEDUCTIONS JAN - DEC 2019</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/FORTH_QUARTER_FAAC_ALLOCATION_AND_DIRECT_DEDUCTIONS_COMPONENTS_REPORT_JANUARY_DECEMBER_2019.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>FOURTH QUARTER DEVIATION REPORT JAN - DEC 2019</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/FORTH_QUARTER_DEVIATION_REPORT_JANUARY_DECEMBER_2019.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>FIRST QUARTER DEVIATION  REPORT 2019</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/FIRST_QUARTER_DEVIATION_REPORT _JANUARY_MARCH_2019.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>APPROVED BUDGET 2020</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/APPROVED 2020 BUDGET V2-02 lamba-edited.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>FOURTH QUARTER REVENUE REPORT 2019</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/FORTH_QUARTER_REVENUE_REPORT_2019.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>FOURTH QUARTER PERSONNEL COST 2019</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/FORTH_QUARTER_PERSONNEL_COST_2019.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>FOURTH QUARTER OVERHEAD REPORT 2019</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/FORTH_QUARTER_OVERHEAD_REPORT_2019.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>REVIEW FEE STRUCTURE UPDATED</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/New_Copy_of_Fifty_percent_Reviewed_fee_structure_updated.xls" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PROPOSED 2020 BUDGET</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/PROPOSED 2020 BUDGET FINAL.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>2018 APPROVED BUDGET</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/2018_approved_budget.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>PLATEAU STATE DEVELOPMENT STRATEGY </td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/20190828 - Plateau State Strategy - Final.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>DOMESTIC ARREARS 2019 PDF</td>
            <td ><a href="http://plateaudatadump.com.ng/pdf_files/20191006_State_Domestic_Arrears_Oct_2019_Master_v3.pptx" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>DOMESTIC ARREARS GUIDE WORD DOC</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/20190916_Domestic_Arrears_Guidelines_Version_1.0_sent.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>2020 BUDGET SPEECH</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/2020_budget_speech.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>FOURTH QUARTER 2018 AND FIRST AND SECOND QUARTER 2019</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/4th_quarter_2018_1st_and_2nd_quarter_2019.xlsx" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>SECOND AND THIRD QUARTER 2018</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/2nd_and_3rd_quarter_2018.xlsx" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          <tr>
            <td>1ST QUATER 2018 </td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/1st_quarterly_2018.xlsx" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          
     <tr>
            <td>Auditor </td>
            <td><a href=" http://plateaudatadump.com.ng/pdf_files/Report%20of%20the%20Auditor%20General%20FS%202021%20.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
          
           <tr>
            <td>General Report BPP</td>
            <td><a href="http://plateaudatadump.com.ng/pdf_files/GENERAL%20REPORT%20BPP%202.pdf" target="_blank" rel="noopener noreferrer">View</a></td>
          </tr>
         






		  </tbody>
		</table>

		<table class="uk-table uk-table-hover uk-table-divider">
			<!--<thead>-->
				<!--<tr>-->
					<!--<th>Document Title</th>-->
					<!-- <th>Date of Entry</th> -->
				<!--</tr>-->
			<!--</thead>-->
			<tbody>
				<tr>
					<td>
						<a href="{{ route('2019approved') }}">2019 APPROVED BUDGET</a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="{{ route('citizens2019approved') }}">PLATEAU STATE CITIZENS’BUDGET 2019</a>
					</td>
				</tr>
			</tbody>
		</table>
		<hr />
        <h4>2018</h4>
        
        <table class="uk-table uk-table-hover uk-table-divider">
			<!--<thead>-->
			<!--	<tr>-->
			<!--		<th>Document Title</th>-->
					<!-- <th>Date of Entry</th> -->
			<!--	</tr>-->
			<!--</thead>-->
			<tbody>
				<tr>
					<td>
						<a href="https://plug-storage.s3.eu-west-3.amazonaws.com/PLATEAU_STATE_APPROPRIATION_Bill_2018.pdf">PLATEAU STATE APPROPRIATION BILL 2018</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
@endsection
