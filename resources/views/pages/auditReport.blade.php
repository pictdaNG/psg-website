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
		<ul class="uk-list uk-list-striped">
			
			<li>
				<a href="{{ URL::asset('assets/documents/2019/AUDIT REPORT (2018).pdf') }}">
					<span style="text-transform: uppercase;"></span>
					AUDIT REPORT (2018)
				</a>
			</li>
		</ul>
	</div>
@endsection