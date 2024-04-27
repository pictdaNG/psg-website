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
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU_STATE_THIRD_QUARTER_DEVIATION_REPORT_JULY_TO_SEPT_2020.pdf">
							Plateau State 3RD Quater Deviation Report July - Sept 2020
						</a>
					</td>
                </tr>
                               <tr>
					<td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU_STATE_SECOND_QUARTER_DEVIATION_REPORT_APRIL_TO_JUNE_2020.pdf">
							Plateau State 2nd quarter deviation report April to June 2020
						</a>
					</td>
                </tr>
                               <tr>
					<td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU_STATE_FOURTH_QUARTER_DEVIATION_REPORT_OCT_TO_DEC_2020.pdf">
							Plateau State 4th quarter deviation report October to December 2020
						</a>
					</td>
                </tr>
                               <tr>
					<td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU_STATE_4TH_QUARTER_BUDGET_MPLEMENTATION_REPORT_OCTOBER_TO_DECEMBER_2020.xlsx">
							Plateau State 4th Quarter Budget Implementation report October to December 2020 (xlsl)
						</a>
					</td>
                </tr>
                               <tr>
					<td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU_STATE_4TH_QUARTER_BUDGET_IMPLEMENTATION_REPORT_OCTOBER_TO_DECEMBER_2020.pdf
">
							Plateau State 4th Quarter Budget Implementation Report October to December 2020 (pdf)
						</a>
					</td>
                </tr>
                
                
   <tr>
					<td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU_STAT_%20FIRST_SECOND_THIRD_AND_FOURTH_QUARTER_DEVIATION_EXCEL_REPORTS_JANUARY_TO_DECEMBER_2020.xlsx
">
							Plateau State First, Second, Third and Fourth Quarter Deviation Reports January - December 2020 (xlsx)
						</a>
					</td>
                </tr>             
                
                
                
                               <tr>
					<td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU_STAT_%20FIRST_SECOND_THIRD_AND_FOURTH_QUARTER_DEVIATION_EXCEL_REPORTS_JANUARY_TO_DECEMBER_2020.xlsx">
							Plateau State First Second Third and Fourth Quarter Deviation Excel Reports January-December 2020 (xlsx)
						</a>
					</td>
                </tr>
                               <tr>
					<td>
						<a href="https://plug-storage.s3.amazonaws.com/EXECUTIVE_SUMMARY_FOURTH_QUARTER_OCTOMBER_TO_DECEMBER_2020.docx">
							Executive Summary Fourth Quarter October - December 2020
						</a>
					</td>
                </tr>
             
                <tr>
					<td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU%20STATE%20THIRD%20QUARTER%20REPORT%20JULY%20TO%20SEPTEMBER%202020.xlsx">
							Plateau State 3RD Quater Report July - Sept 2020
						</a>
					</td>
                </tr>
                <tr>
					<td>
						<a href="https://plug-storage.s3.amazonaws.com/PLATEAU_STATE_THIRD_QUARTER_REPORT_JULY_TO_SEPTEMBER_2020.pdf">
							Plateau State Third Quater Report July - Sept 2020
						</a>
					</td>
                </tr>
                <tr>
					<td>
						<a href="https://plug-storage.s3.amazonaws.com/EXECUTIVE%20SUMMARY%20THIRD%20QUARTER%20JULY%20TO%20SEPTEMBER%202020.docx">
							Executive Summary 3RD Quater July - Sept 2020
						</a>
					</td>
				</tr>
                <tr>
					<td>
						<a href="https://plug-storage.s3.amazonaws.com/SECOND_QUARTER_BUDGET_REPORT_APRIL_JUNE_2020.pdf">
							2020 Second Quarter Budget Report April - Jun
						</a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="https://plug-storage.s3.amazonaws.com/ADDENDUM_TO_2020_FIRST_QUARTER_BUDGET_SUMMARY_REPORT_JANUARY_TO_MARCH.pdf">
							2020 First Quarter Budget Summary Report Jan - Mar 
						</a>
					</td>
				</tr>
            <tr>
                <td>
                    <a href="https://plug-storage.s3.amazonaws.com/FORTH_QUARTER_REVENUE_REPORT_2019.pdf">
                        <span
                            style="text-transform: uppercase;">FORTH QUARTER REVENUE REPORT January - December 2019</span>
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
                        QUARTERLY REPORT INTERNALLY GENERATED REVENUE JANUARY TO SEPTEMBER 2019
                    </a>
                </td>
                <!-- <td>05 October, 2019</td> -->
            </tr>
            <tr>
                <td>
                    <a href="https://plug-storage.s3.eu-west-3.amazonaws.com/quaterly_report_igr_2019_jan_june_q2.pdf">
                        QUARTERLY REPORT INTERNALLY GENERATED REVENUE JANUARY TO JUNE 2019
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


            <tr>
                <td>
                    <a href="https://plug-storage.s3.amazonaws.com/THIRD_QUARTER_DEVIATION_REPORT_JANUARY_SEPTEMBER%20_2019.pdf">
                        THIRD QUARTER DEVIATION REPORT JANUARY - SEPTEMBER 2019
                    </a>
                </td>
                <!-- <td>05 May, 2019</td> -->
            </tr>


            <tr>
                <td>
                    <a href="https://plug-storage.s3.amazonaws.com/SECOND_QUARTER_DEVIATION_REPORT_JANUARY%20-%20JUNE%202019.pdf">
                        SECOND QUARTER DEVIATION REPORT JANUARY-JUNE 2019
                    </a>
                </td>
                <!-- <td>05 May, 2019</td> -->
            </tr>


            <tr>
                <td>
                    <a href="https://plug-storage.s3.amazonaws.com/FORTH_QUARTER_PERSONNEL_COST_REPORT_JANUARY_DECEMBER_2019.pdf">
                        FORTH QUARTER PERSONNEL COST REPORT JANUARY - DECEMBER 2019
                    </a>
                </td>
                <!-- <td>05 May, 2019</td> -->
            </tr>


            <tr>
                <td>
                    <a href="https://plug-storage.s3.amazonaws.com/FORTH_QUARTER_OVERHEAD_COST_REPORT_JANUARY_DECEMBER_2019.pdf">
                        FORTH QUARTER OVERHEAD COST REPORT JANUARY - DECEMBER 2019
                    </a>
                </td>
                <!-- <td>05 May, 2019</td> -->
            </tr>


            <tr>
                <td>
                    <a href="https://plug-storage.s3.amazonaws.com/FORTH_QUARTER_IGR_REVENUE_REPORT_JANUARY_DECEMBER_2019.pdf">
                        FORTH QUARTER IGR REVENUE REPORT JANUARY - DECEMBER 2019
                    </a>
                </td>
                <!-- <td>05 May, 2019</td> -->
            </tr>


            <tr>
                <td>
                    <a href="https://plug-storage.s3.amazonaws.com/FORTH_QUARTER_FAAC_REVENUE_FROM_FEDERAL_GOVERNMENT_REPORT_JANUARY_DECEMBER_2019.pdf">
                        FORTH QUARTER FAAC REVENUE FROM FEDERAL GOVERNMENT REPORT JANUARY - DECEMBER 2019
                    </a>
                </td>
                <!-- <td>05 May, 2019</td> -->
            </tr>


            <tr>
                <td>
                    <a href="https://plug-storage.s3.amazonaws.com/FORTH_QUARTER_FAAC_ALLOCATION_AND_DIRECT_DEDUCTIONS_COMPONENTS_REPORT_JANUARY_DECEMBER_2019.pdf">
                        FORTH QUARTER FAAC ALLOCATION AND DIRECT DEDUCTIONS COMPONENTS REPORT JANUARY - DECEMBER 2019
                    </a>
                </td>
                <!-- <td>05 May, 2019</td> -->
            </tr>


            <tr>
                <td>
                    <a href="https://plug-storage.s3.amazonaws.com/FORTH_QUARTER_DEVIATION_REPORT_JANUARY_DECEMBER_2019.pdf">
                        FORTH QUARTER DEVIATION REPORT-JANUARY DECEMBER 2019
                    </a>
                </td>
                <!-- <td>05 May, 2019</td> -->
            </tr>


            <tr>
                <td>
                    <a href="https://plug-storage.s3.amazonaws.com/FORTH_QUARTER_CAPITAL_EXPENDITURE_REPORT_JANUARY_DECEMBER_2019.pdf">
                        FORTH QUARTER CAPITAL EXPENDITURE REPORT JANUARY-DECEMBER 2019
                    </a>
                </td>
                <!-- <td>05 May, 2019</td> -->
            </tr>


            <tr>
                <td>
                    <a href="https://plug-storage.s3.amazonaws.com/FIRST_QUARTER_DEVIATION_REPORT%20_JANUARY_MARCH_2019.pdf">
                        FIRST QUARTER DEVIATION REPORT JANUARY- MARCH 2019
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
                        <span style="text-transform: uppercase;"></span>QUARTERLY REPORT CAPITAL EXPENDITURE JANUARY TO
                        MARCH 2019
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

        <hr/>
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
        <hr/>

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

        <hr/>
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
