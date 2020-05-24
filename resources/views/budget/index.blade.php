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
		<h4>2020 Budget</h4>
		<table class="uk-table uk-table-hover uk-table-divider">
		  <th>
			<tr>
				<td>Approved Yearly Budget</td>
			  <td><a href="{{ route('feedback') }}">Feedback</a></td>
			</tr>
		  </th>
		  <tbody>				
				<tr>
					<td>
						<a href="https://plug-storage.s3.amazonaws.com/APPROVED%202020%20BUDGET%20V2-02%20lamba-edited.pdf">
							2020 APPROVED BUDGET
						</a>
						
					</td>

					<td></td>
				</tr>
				<tr>
					<td>
						<a href="https://plug-storage.s3.amazonaws.com/PROPOSED%202020%20BUDGET%20FINAL.pdf">
							2020 PROPOSED BUDGET
						</a>
					</td>
					<td></td>
				</tr>
				<tr>
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