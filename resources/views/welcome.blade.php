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
                <div class="title m-b-md">
                    Fakultet Organizacionih Nauka
                </div>

                <div class="links">
                    <a href="http://www.fon.bg.ac.rs/">Pocetna</a>
                    <a href="https://student.fon.bg.ac.rs/security/login.jsf;jsessionid=BA987C13FFD2E8A133B0E35882923358">E-student</a>
                    <a href="http://www.fon.bg.ac.rs/obavestenja/vesti-osnovne-studije/">Vesti</a>
                    <a href="https://webmail.fon.bg.ac.rs/">Webmail</a>
                    <a href="http://www.fon.bg.ac.rs/studije/osnovne-akademske-studije/">Osnovne studije</a>
                    <a href="http://www.fon.bg.ac.rs/studije/master-i-specijalisticke-studije/">Master studije</a>
                    <a href="http://www.fon.bg.ac.rs/studije/doktorske-studije/">Doktorske studije</a>
                    <a href="https://github.com/miki173173/Laravel2">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
