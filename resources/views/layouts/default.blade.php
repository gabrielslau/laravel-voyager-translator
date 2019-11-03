<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
        >

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: calc(100vh - 56px);
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

                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    Soulphia
                </a>

                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li
                            class="
                                nav-item
                                @if (\Illuminate\Support\Facades\Route::currentRouteName() == 'categories.index') active @endif
                            "
                        >
                            <a
                                class="nav-link"
                                href="{{ route('categories.index', app()->getLocale()) }}"
                            >
                                Categories
                            </a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ml-auto">
                        @foreach (config('app.locales') as $locale)
                            <li
                                class="
                                    nav-item
                                    @if (app()->getLocale() == $locale) active @endif
                                "
                            >
                                <a
                                    class="nav-link"
                                    href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}"
                                >
                                    {{ strtoupper($locale) }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>

        <div class="flex-center position-ref full-height">
            @yield('content')
        </div>
    </body>
</html>
