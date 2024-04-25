@extends('layouts.app')  

@section('title')
	Download Audit Reports | Plateau State Government Website
@endsection

@section('header')
	Download Audit Reports
@endsection

@section('subheader')
	Download Audit Reports
@endsection

@section('content')
	<div class="content uk-width-1-2@m">
		<h2 class="bold">Download Audit Reports</h2>


		<table class="uk-table uk-table-hover uk-table-divider">
		    <thead>
		        <tr>
                    <th>Documents</th>
                    <th>Added Date</th>
                </tr>
		    </thead>
		 
		  <tbody>


		  	<tr>
				    <td>
				        
				        
				        
						<a href="{{asset('assets/documents/2022-plsg-financial-statement.pdf')}}" target="_blank">
						PLATEAU STATE AUDITED FINANCIAL REPORT 2022

						</a>
				    </td>
				    <td>
				        2023-07-01 20:59:39
				    </td>
			</tr>		  
		      
		      	<tr>
				    <td>
				        
				        
				        
						<a href="http://plateaudatadump.com.ng/pdf_files/forwading%20letter%20to%20PLHA.pdf">
						FORWARDING LETTER TO PLHA AUDITED FINANCIAL REPORT PLATEAU STATE Y2021

						</a>
				    </td>
				    <td>
				        2022-06-21 13:59:38
				    </td>
			</tr>		     
			
			
			
				<tr>
				    <td>
						<a href ="http://plateaudatadump.com.ng/pdf_files/forwarding%20letter%20Audit%20to%20Gov.pdf">
						FORWARDING LETTER TO GOVERNOR AUDITED FINANCIAL REPORT PLATEAU STATE Y2021
						</a>
				    </td>
				    <td>
				        2022-06-21 13:59:13
				    </td>
			</tr>		     
			

		      
		      		      	<tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU%20STATE%20GOVERNMENT%20Y2021%20FS.pdf">
						YEAR 2021 FINANCIAL STATEMENT
						</a>
				    </td>
				    <td>
				        2022-06-27 07:12:17
				    </td>
			</tr>		      	<tr>
				    <td>
						<a href="http://plateaudatadump.com.ng/pdf_files/PLATEAU%20STATE%20Y2021%20AUDIT%20REPORT.pdf">
							AUDITOR'S REPORT
						</a>
				    </td>
				    <td>
				        2022-06-27 07:12:17
				    </td>
			</tr>		      
		  </tbody>
		</table>
	</div>
@endsection