<!-- welcome.blade.php -->
@extends('layout')

@section('title', 'index')

@section('content')
<style>
    div {
        text-align: center;
    }
</style>

<div>
    Home Page
</div>

<script>
    $(function() {
    });
</script>
@endsection

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @include('login')

            <div class="content">
                <div class="title m-b-md">
                    丞德文創
                </div>

                <div class="links">
                    <!--a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a-->
                    <a href="quote">報價</a>
                    <a href="punch">打卡</a>
                    <a href="admin">Admin</a>
                </div>
            </div>
        </div>
    </body>
</html>
