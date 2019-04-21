@extends('layouts.app')  

@section('title')
    Contact | Plateau State Government Website
@endsection

@section('header')
    Contact
@endsection

@section('subheader')
    We'd like to hear from you
@endsection

@section('content')
    <div class="content uk-width-1-2@m">        
        <form>
            <fieldset class="uk-fieldset">

                <legend class="uk-legend">Legend</legend>

                <div class="uk-margin">
                    <input class="uk-input" type="text" placeholder="Full name" name="">
                </div>

                <div class="uk-margin">
                    <input class="uk-input" type="email" placeholder="email">
                </div>

                <div class="uk-margin">
                    <input class="uk-input" type="text" placeholder="phone">
                </div>

                <div class="uk-margin">
                    <input class="uk-input" type="text" placeholder="Subject">
                </div>

                <div class="uk-margin">
                    <textarea class="uk-textarea" rows="5" placeholder="Message"></textarea>
                </div>
                <button class="uk-button uk-button-secondary uk-width-1-1">Send Message</button>
            </fieldset>
        </form>        
    </div>
@endsection