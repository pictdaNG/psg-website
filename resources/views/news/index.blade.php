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

@section('styles') 
    <style>
        
        li.page-item {
            margin-right: 20px;
            background: rgb(12 87 56);
            padding: 15px 20px;
            color: rgb(255 255 255);
        }
        
        .pagination {
            display: flex;
            margin-top: 40px;
            color: #fff;
        }
        .page-link {
            color: #fff !important;
            
        }
        
        .nani {
            color: #fff;
        }
        
        .nani:hover{
            color:#000;
        }
        
    </style>
@endsection

@section('content')
	<div class="content uk-width-1-2@m">
		<div class="uk-child-width-1-2@m" uk-grid uk-height-match="target: > div > .uk-card-default > .card-base-content">
			@foreach($news as $n)
                <div>
                    <a href="{{route('news.news1', $n->slug)}}" class="uk-card uk-display-block uk-card-default uk-link-reset">
                        <div class="card-top">
                            <img src="{{$n->news_image}}" alt="{!! str_word_count($n->title) > 20 ? substr($n->title,0,20) : $n->title !!} ...">
                        </div>
                        <div class="card-base-content uk-card-hover uk-text-right">
                            <time datetime="{{ \Carbon\Carbon::parse($n->created_at)->format('l, F j, Y') }}" class="uk-text-small uk-text-right">{{ \Carbon\Carbon::parse($n->created_at)->format('l, F j, Y') }}</time>
                            <div class="uk-text-left">
                                <h4 class="uk-margin-remove card-title uk-text-bold nani">{!! str_word_count($n->title) > 20 ? substr($n->title,0,20) : $n->title !!} ...</h4>
                            </div>
                        </div>
                    </a>
                </div>
			@endforeach
		</div>
		<div>
			
			<ul class="uk-pagination pagination uk-flex-center" uk-margin>
                {{ $news->links() }}
            </ul>
		</div>
	</div>
@endsection

