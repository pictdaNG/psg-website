@extends('layouts.app')  

@section('title')
	Download Quarterly Reports | Plateau State Government Website
@endsection

@section('header')
	Download Quarterly Reports
@endsection

@section('subheader')
	Download Quarterly Reports
@endsection

@section('content')
	<div class="content uk-width-1-2@m">
		<h2 class="bold">Download Quarterly Reports</h2>

		<!--<h4> 2020 Quarterly Reports </h4>-->
		
		
		
		<h4> 2019 Quarterly Reports </h4>

		<table class="uk-table uk-table-hover uk-table-divider">
			<tr>
				<td>Document Title</td>
			  <!-- <td>Date of entry</td> -->
			</tr>
		  <tbody>
				@foreach($documents as $document)
					<tr>
					  <td>
							<a href="{{ $document->name }}">
								<span style="text-transform: uppercase;"> {{ $document->title }} </span>
							</a>
					  </td>
					  <!-- <td>{{ $document->created_at }}</td> -->
					</tr>
				@endforeach
				<tr>
					<td>
						<a href="https://plug-storage.s3.amazonaws.com/FORTH_QUARTER_REVENUE_REPORT_2019.pdf">
							<span style="text-transform: uppercase;">FORTH QUARTER REVENUE REPORT January - December 2019</span>
						</a>
					</td>
					<!-- <td>05 April, 2019</td> -->
				</tr>
				<tr>
					<td>
						<a href="https://plug-storage.s3.amazonaws.com/FORTH_QUARTER_PERSONNEL_COST_2019.pdf">
						FORTH QUARTER PERSONNEL COST January - December 2019
					</a>
					</td>
					<!-- <td>05 April, 2019</td> -->
				</tr>
				<tr>
					<td>
						<a href="https://plug-storage.s3.amazonaws.com/FORTH_QUARTER_OVERHEAD_REPORT_2019.pdf">
							FORTH QUARTER OVERHEAD REPORT January - December 2019
						</a>
					</td>
					<!-- <td>05 April, 2019</td> -->
				</tr>
				<tr>
					<td>
						<a href="https://plug-storage.s3.eu-west-3.amazonaws.com/quaterly_report_federal_allocation_2019_jan_sept_q3.pdf">
							QUARTERLY REPORT FEDERAL ALLOCATION - JANUARY TO SEPTEMBER 2019
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<a href="https://plug-storage.s3.eu-west-3.amazonaws.com/quaterly_report_federal_allocation_deductions_2019_jan_sept_q3.pdf">
							QUARTERLY REPORT FEDERAL ALLOCATION DEDUCTIONS - JANUARY TO SEPTEMBER 2019
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<a href="https://plug-storage.s3.eu-west-3.amazonaws.com/quaterly_report_federal_allocation_deductions_2019_jan_mar_q1.pdf">
							QUARTERLY REPORT FEDERAL ALLOCATION DEDUCTIONS - JANUARY TO MARCH 2019
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<a href="https://plug-storage.s3.eu-west-3.amazonaws.com/quaterly_report_federal_allocation_deductions_2019_jan_june_q2.pdf">
							QUARTERLY REPORT FEDERAL ALLOCATION DEDUCTIONS - JANUARY TO JUNE 2019
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<a href="https://plug-storage.s3.eu-west-3.amazonaws.com/quaterly_report_overhead_cost_2019_jan_sept_q3.pdf">
							QUARTERLY REPORT OVERHEAD COST - JANUARY TO SEPTEMBER 2019
						</a>
					</td>
					<!-- <td>10 October, 2019</td> -->
				</tr>
				
				<tr>
					<td>
						<a href="https://plug-storage.s3.eu-west-3.amazonaws.com/quaterly_report_overhead_cost_2019_jan_june_q2.pdf">
						QUARTERLY REPORT OVERHEAD COST JANUARY TO JUNE 2019
					</a>
					</td>
					<!-- <td>10 July, 2019</td> -->
				</tr>
				<tr>
					<td>
						<a href="https://plug-storage.s3.eu-west-3.amazonaws.com/quaterly_report_igr_2019_jan_sept_q3.pdf">
							QUARTERLY REPORT  INTERNALLY GENERATED REVENUE JANUARY TO SEPTEMBER 2019
						</a>
					</td>
					<!-- <td>05 October, 2019</td> -->
				</tr>
				<tr>
					<td>
						<a href="https://plug-storage.s3.eu-west-3.amazonaws.com/quaterly_report_igr_2019_jan_june_q2.pdf">
						QUARTERLY REPORT  INTERNALLY GENERATED REVENUE JANUARY TO JUNE 2019
					</a>
					</td>
					<!-- <td>10 July, 2019</td> -->
				</tr>
				<tr>
					<td>
						<a href="https://plug-storage.s3.eu-west-3.amazonaws.com/quaterly_report_capital_expenditure_cost_2019_jan_sept_q3.pdf">
							QUARTERLY REPORT CAPITAL EXPENDITURE COST JANUARY TO SEPTEMBER 2019
						</a>
					</td>
					<!-- <td>05 October, 2019</td> -->
				</tr>
				<tr>
					<td>
						<a href="https://plug-storage.s3.eu-west-3.amazonaws.com/quaterly_report_capital_expenditure_cost_2019_jan_june_q2.pdf">
							QUARTERLY REPORT CAPITAL EXPENDITURE COST JANUARY TO JUNE 2019
						</a>
					</td>
					<!-- <td>05 July, 2019</td> -->
				</tr>

				<tr>
					<td>
						<a href="https://plug-storage.s3.eu-west-3.amazonaws.com/2018_approved_budget.pdf">
							APPROVED BUDGET 2018
						</a>
					</td>
					<!-- <td>05 May, 2019</td> -->
				</tr>
				
		  </tbody>
		</table>

		<table class="uk-table uk-table-hover uk-table-divider">
			<tr>
				<td>Document Title</td>
			  <!-- <td>Date of entry</td> -->
			</tr>
		  <tbody>
				<tr>
					<td>
						<a href="{{ URL::asset('assets/documents/2019/QUARTERLY-REPORT-CAPITAL-EXPENDITURE-JANUARY-TO-MARCH-2019-1.pdf') }}">
							<span style="text-transform: uppercase;"></span>QUARTERLY REPORT CAPITAL EXPENDITURE JANUARY TO MARCH 2019
						</a>
					</td>
					<!-- <td>05 April, 2019</td> -->
				</tr>
				<tr>
					<td>
						<a href="{{ URL::asset('assets/documents/2019/QUARTERLY-REPORT-OVERHEAD-COST-JANUARY-TO-MARCH-2019-1.pdf') }}">
						QUARTERLY REPORT OVERHEAD COST JANUARY TO MARCH 2019
					</a>
					</td>
					<!-- <td>05 April, 2019</td> -->
				</tr>
				<tr>
					<td>
						<a href="{{ URL::asset('assets/documents/2019/QUARTERLY-REPORT-PERSONNEL-COST-JANUARY-TO-MARCH-2019-1.pdf') }}">
							QUARTERLY REPORT PERSONNEL COST JANUARY TO MARCH 2019
						</a>
					</td>
					<!-- <td>05 April, 2019</td> -->
				</tr>
				<tr>
					<td>
						<a href="{{ URL::asset('assets/documents/2019/QUARTERLY-REPORT-REVENUE-JANUARY-TO-MARCH-2019-1.pdf') }}">
							QUARTERLY REPORT REVENUE JANUARY TO MARCH 2019
						</a>
					</td>
					<!-- <td>05 April, 2019</td> -->
				</tr>

				<tr>
					<td>
						<a href="{{ URL::asset('assets/documents/2019/QUARTERLY-REPORT-JAN-TO-MAR-2019-Federal-Allocation-to-Plateau-State.pdf') }}">
							QUARTERLY REPORT JANUARY TO MARCH 2019 FEDERAL ALLOCATION TO PLATEAU STATE
						</a>
					</td>
					<!-- <td>05 April, 2019</td> -->
				</tr>
				
		  </tbody>
		</table>

		<hr />
		<h4> 2018 Quarterly Reports </h4>
		<table class="uk-table uk-table-hover uk-table-divider">
			<thead>
				<tr>
					<td>Document Title</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<a href="https://plug-storage.s3.eu-west-3.amazonaws.com/2018_approved_budget.pdf">
							APPROVED BUDGET 2018
						</a>
					</td>
					<!-- <td>05 May, 2019</td> -->
				</tr>
			</tbody>
		</table>
		<hr />

		<h4> 2017 Quarterly Reports </h4>
		<table class="uk-table uk-table-hover uk-table-divider">
			<tr>
				<th>Document Title</th>
				<!-- <th>Date of Entry</th> -->
			</tr>
			<tr>
				<td>
					<a href="{{ URL::asset('assets/documents/first_qtr_2017.pdf') }}">
						First Quarter 2017
					</a>	
				</td>
				<!-- <td>05 April, 2017</td> -->
			</tr>
			<tr>
				<td>
					<a href="{{ URL::asset('assets/documents/second_qtr_2017.pdf') }}">
						Second Quarter 2017
					</a>
				</td>
				<!-- <td>05 July, 2017</td> -->
			</tr>
			<tr>
				<td>
					<a href="{{ URL::asset('assets/documents/2017_approved_budget.pdf') }}">
					Budget 2017
				</a>
				</td>
				<!-- <td>05 January, 2018</td> -->
			</tr>
			<tr>
				<td>
					<a href="{{ URL::asset('assets/documents/accountant_general_report_with_financial_statements_2017.pdf') }}">
						Accountant General Report With Financial Statements 2017
					</a>
				</td>
				<!-- <td>05 January, 2018</td> -->
			</tr>
		</table>

		<hr />
		<h4> 2016 Quarterly Reports </h4>

		<table class="uk-table uk-table-hover uk-table-divider">
			<thead>
				<th>Document Title</th>
				<!-- <th>Date of Entry</th> -->
			</thead>
			<tbody>
				<tr>
					<td>
						<a href="{{ URL::asset('assets/documents/first_qtr_2016.pdf') }}">
							First Quarter 2016
						</a>		
					</td>
					<!-- <td>05 April, 2016</td> -->
				</tr>
				<tr>
					<td>
						<a href="{{ URL::asset('assets/documents/second_qtr_2016.pdf') }}">
							Second Quarter 2016
						</a>		
					</td>
					<!-- <td>05 July, 2016</td> -->
				</tr>
				<tr>
					<td>
						<a href="{{ URL::asset('assets/documents/third_qtr_2016.pdf') }}">
							Third Quarter 2016
						</a>
					</td>
					<!-- <td>05 October, 2016</td> -->
				</tr>
				<tr>
					<td>
						<a href="{{ URL::asset('assets/documents/fourth_qtr_2016.pdf') }}">
							Fourth Quarter 2016
						</a>		
					</td>
					<!-- <td>05 January, 2017</td> -->
				</tr>
				<tr>
					<td>
						<a href="{{ URL::asset('assets/documents/accountant_general_report_2016.pdf') }}">
							Accountant General Report 2016
						</a>
					</td>
					<!-- <td>05 Jaunary, 2017</td>					 -->
				</tr>
				<tr>
					<td>
						<a href="{{ URL::asset('assets/documents/auditor_general_report_2016.pdf') }}">
							Auditor General Report 2016
						</a>
					</td>
					
					<!-- <td>05 Jaunary, 2017</td> -->
				</tr>
			</tbody>
		</table>

		<hr>
		<h4> 2015 Quarterly Reports </h4>
		<table class="uk-table uk-table-hover uk-table-divider">
			<thead>
				<tr>
					<th>Document Title</th>
					<!-- <th>Date of Entry</th> -->
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<a href="{{ URL::asset('assets/documents/accountant_general_report_2015.pdf') }}">
							Accountant General Report 2015
						</a>
					</td>
					<!-- <td>05 Jaunary, 2016</td> -->
				</tr>
				<tr>
					<td>
						<a href="{{ URL::asset('assets/documents/auditor_general_report_2015.pdf') }}">
							Auditor General Report 2015
						</a>
					</td>
					<!-- <td>05 Jaunary, 2016</td> -->
				</tr>
			</tbody>
		</table>       
	</div>
@endsection