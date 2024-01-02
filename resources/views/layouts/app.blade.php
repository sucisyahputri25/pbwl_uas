<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'uas') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <style>
        body {
            background-color: #ffffff;
            font-family: 'Arial', sans-serif;
        }

        h2 {
            color: #86A789;
        }

        .gradient-bg {
            background: linear-gradient(to right, #86A789, #D2E3C8);
        }

        .form-container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #86A789;
            color: #ffffff;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .navbar {
            background-color: #4F6F52; /* Warna latar belakang navbar menjadi hijau */
        }

        .navbar-brand {
            color: #ffffff; /* Warna teks untuk merek atau judul navbar */
        }

        .navbar-toggler-icon {
            background-color: #ffffff; /* Warna ikon toggler (hamburger) pada navbar */
        }

        .navbar-nav .nav-link {
            color: #ffffff; /* Warna teks untuk tautan navigasi */
        }

        .navbar-nav .nav-link:hover {
            color: #D2E3C8; /* Warna teks saat tautan dihover */
        }

        .btn-primary {
            background-color: #86A789;
            color: #ffffff;
        }

        .btn-primary:hover {
            background-color: #D2E3C8;
        }

        .btn-link {
            color: #86A789;
        }

        .btn-link:hover {
            color: #D2E3C8;
        }

        .table {
            margin-top: 20px;
        }

        .table th, .table td {
            border: 1px solid #86A789;
        }

        .table th {
            background-color: #D2E3C8;
            color: #86A789;
        }

        .table td {
            background-color: #ffffff;
            color: #000000;
        }

        .btn-warning {
            background-color: #FFD700;
            border: none;
            border-radius: 5px;
            color: #000000;
        }

        .btn-warning:hover {
            background-color: #B8860B;
        }

        .btn-danger {
            background-color: #DC143C;
            border: none;
            border-radius: 5px;
            color: #ffffff;
        }

        .btn-danger:hover {
            background-color: #8B0000;
        }

        .custom-container {
            /* Gaya khusus untuk kontainer ini */
            background-color: #ffffff;
            padding: 10px;
            border: 1px solid #ccc;
            /* Tambahkan properti CSS lainnya sesuai kebutuhan Anda */
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
            <img src="{{ asset('pangkas.png') }}" alt="pangkas logo" class="img-fluid mr-2" style="height: 60px;">
                <a class="navbar-brand" href="{{ url('/') }}">
                    BARBERSHOP RAMA 
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/customers') }}">Customers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/servis') }}">Servis</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/appointment') }}">Appointment</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/users') }}">User</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="custom-container">
                @yield('content')
            </div>
        </main>
    </div>
</body>

</html>
