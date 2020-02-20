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

		<h4> 2018 Quarterly Reports </h4>

		<table class="uk-table uk-table-hover uk-table-divider">
		  <th>
			<tr>
				<td>Document title</td>
			  	<td>Date of entry</td>
			</tr>
		  </th>
		  <tbody>
			<tr>
			  <td>
				<a href="{{ URL::asset('assets/documents/2019/AUDIT REPORT (2018).pdf') }}">
					<span style="text-transform: uppercase;"></span>
					AUDIT REPORT (2018)
				</a>
			  </td>
			  <td>05 January, 2019</td>
			</tr>
		  </tbody>
		</table>
	</div>
@endsection