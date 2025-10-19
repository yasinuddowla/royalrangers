@extends('website::layouts.app')

@section('title', 'Page Not Found')

@section('content')
    <div class="container nav-gap">
        <div class="error-page-404 d-flex justify-content-center align-items-center">
            <div class="ellipse"></div>
            <div class="text-box">
                <div>
                    <h1>404</h1>
                    <h4>Oops! Page Not Be Found</h4>
                    <p class="text-disabled my-5">Sorry but the page you are looking for does not exist, have been removed.
                        name
                        changed or is temporarily unavailable</p>
                    <a href="#" class="text-primary-main text-regular-bold mt-5">Back to homepage</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('custom_styles')
    <style>
        .error-page-404 {
            max-width: 660px;
            height: 380px;
            margin: 120px auto;
        }

        .error-page-404 .text-box {
            margin-top: 50px;
            margin-left: 200px;
        }

        .ellipse {
            position: absolute;
            border-radius: 50%;
            width: 380px;
            height: 380px;
            left: calc(50% - 380px/2 - 145.5px);
            top: calc(50% - 380px/2);
            background: #EEF5FB;
            z-index: -1;
        }
    </style>
@endpush
