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
        <div class="uk-flex uk-flex-wrap">
            <div class="uk-width-1-1@m">
                <img src="./assets/img/Riyom-Rock.jpg" alt="">
            </div>
            <div class="uk-width-1-1@m">
                <form method="post" action="{{ route('send_contact_us') }}">

                    {{ csrf_field() }}
                    @if(session('error'))
                        <div class="uk-alert-danger" uk-alert>
                            <a class="uk-alert-close" uk-close></a>
                            <p>{{ session('error') }}</p>
                        </div>
                    @endif
                    
                    @if(session('success'))
                        <div class="uk-alert-success" uk-alert>
                            <a class="uk-alert-close" uk-close></a>
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif

                    <fieldset class="uk-fieldset">

                        <legend class="uk-legend">Fill in your Information below</legend>

                        <div class="uk-margin">
                            <input class="uk-input {{ $errors->has('username') ? 'uk-form-danger' : '' }}" type="text" placeholder="Full name" name="username">
                        </div>

                        <div class="uk-margin">
                            <input class="uk-input {{ $errors->has('email') ? 'uk-form-danger' : '' }}" type="email" placeholder="email" name="email">
                        </div>

                        <div class="uk-margin">
                            <input class="uk-input {{ $errors->has('phone') ? 'uk-form-danger' : '' }}" type="text" placeholder="phone" name="phone">
                        </div>

                        <div class="uk-margin">
                            <input class="uk-input {{ $errors->has('subject') ? 'uk-form-danger' : '' }}" type="text" placeholder="Subject" name="subject">
                        </div>

                        <div class="uk-margin">
                            <textarea class="uk-textarea {{ $errors->has('bodyMessage') ? 'uk-form-danger' : '' }}" rows="5" placeholder="Message" name="bodyMessage"></textarea>
                        </div>
                        <button type="submit" class="uk-button uk-button-secondary uk-width-1-1">Send Message</button>
                    </fieldset>
                </form>
            </div>
        </div>      
    </div>
@endsection