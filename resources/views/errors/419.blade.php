@extends('website::layouts.app')

@section('title', 'Session Expired')

@section('content')
    <div class="container  nav-gap text-center">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="display-1">419</h1>
                <h2 class="mb-4">Session Expired!</h2>
                <p class="lead mb-5">Your session has expired or your form submission has timed out. Please try again.</p>
                <a href="{{ route('website.home') }}" class="button button-primary">Back to Home</a>
            </div>
        </div>
    </div>
@endsection
