@extends('layouts.app')

@section('title')
	News &amp; Events | Plateau State Government Website
@endsection

@section('header')
	Plateau State Government House
@endsection

@section('subheader')
	The Governor's Office, Rayfield
@endsection

@section('content')
	<div class="content uk-width-1-2@m">
		<div class="uk-child-width-1-2@m" uk-grid>
			@foreach($news as $n)
				<div>
					<a href="{{route('news.news1', $n->slug)}}" class="uk-card uk-display-block uk-card-default">
						<div class="uk-card-media-top">
							<img src="{{ $n->news_image }}" alt="" height="300px">
						</div>
						<div class="uk-card-body">
							<h3 class="uk-card-title">
								{!!strlen($n->title) > 50 ? substr($n->title,0,50) : $n->title!!}
							</h3>
							<div>
								{!! str_word_count($n->body) > 150 ? substr($n->body,0,150) : $n->body !!}...
							</div>
						</div>
					</a>
				</div>
			@endforeach
		</div>
		<div>
			<ul class="uk-pagination uk-flex-center" uk-margin>
		    {{ $news->links() }}
			</ul>
		</div>
	</div>
@endsection

