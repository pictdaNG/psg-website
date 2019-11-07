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
                    <a href="{{route('news.news1', $n->slug)}}" class="uk-card uk-display-block uk-card-default uk-link-reset">
                        <div class="card-top">
                            <img src="{{$n->news_image}}" alt="{!! str_word_count($n->title) > 20 ? substr($n->title,0,20) : $n->title !!} ...">
                        </div>
                        <div class="card-base-content uk-card-hover uk-text-right">
                            <time datetime="{{ \Carbon\Carbon::parse($n->published_date)->format('j F, Y') }}" class="date uk-text-small uk-text-right">{{ \Carbon\Carbon::parse($n->published_date)->format('j F, Y') }}</time>
                            <div class="uk-text-left">
                                <h4 class="uk-margin-remove card-title uk-text-bold">{!! str_word_count($n->title) > 20 ? substr($n->title,0,20) : $n->title !!} ...</h4>
                            </div>
                        </div>
                    </a>
                </div>
			@endforeach
		</div>
		{{-- <div>
			<ul class="uk-pagination uk-flex-center" uk-margin>
		    {{ $news->links() }}
			</ul>
		</div> --}}
	</div>
@endsection

