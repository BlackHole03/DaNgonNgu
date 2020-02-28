<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                margin-bottom: 20px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            a {
                transition: transform .2s;
            }
            a:hover {
                color: blue;
                background:lighten(#2ECCFA, 20%);
                margin:6px;
                padding:18px 32px;
                -webkit-transition: all 100ms ease;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md mb-3">
                    <!-- Laravel -->
                    {{ __("Welcome to my website!") }}
                </div>

                <div class="links">
                    <a href="{!! route('change-language', ['en']) !!}" data-toggle="tooltip" data-placement="bottom" title="{{__('english')}}">{{__('english')}}</a>
                    <a href="{!! route('change-language', ['vi']) !!}" data-toggle="tooltip" data-placement="bottom" title="{{__('vietnam')}}">{{__('vietnam')}}</a>
                    <a href="{!! route('change-language', ['japan']) !!}" data-toggle="tooltip" data-placement="bottom" title="{{__('japan')}}">{{__('japan')}}</a>
                    <a href="{!! route('change-language', ['lao']) !!}" data-toggle="tooltip" data-placement="bottom" title="{{__('lao')}}">{{__('lao')}}</a>
                    <a href="{!! route('change-language', ['russian']) !!}" data-toggle="tooltip" data-placement="bottom" title="{{__('russian')}}">{{__('russian')}}</a>
                </div>
            </div>
        </div>
    </body>
</html>
