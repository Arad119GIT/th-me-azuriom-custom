@extends('layouts.app')

@section('title', trans('messages.home'))

@section('content')
    <div class="home-background @if(theme_config('title')) background-overlay @endif mb-4" style="background: url('{{ setting('background') ? image_url(setting('background')) : 'https://via.placeholder.com/2000x500' }}') no-repeat center / cover">
        @if(theme_config('title'))
            <div class="container h-100">
                <div class="row align-items-center justify-content-center h-100">

                    <div class="col-md-6 text-center">
                        <h1 class="welcome-title">{{ theme_config('title') }}</h1>
                    </div>

                </div>
            </div>
        @endif
    </div>
@endsection
