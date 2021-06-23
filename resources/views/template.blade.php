<!doctype html>
<html>

<head>

    <title>KOS.in</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #F7F7FC;
            color: #14142B;
            font-family: 'Inter', sans-serif;
        }

        .background-box {
            padding-top: 2rem;
            padding-bottom: 2rem;
            background-color: #EFF0F6;
            border-radius: 9px;
        }

        .tombol {
            background-color: #578887;
            float: right;
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-white navbar-light sticky-top">
        <a class="navbar-brand" href="{{ route('admin') }}">
            <img src="/images/kosin.png" alt="brand" style="width:120px;">
        </a>
        <div style="margin-left: auto;margin-right: 0;">
            <!--
            <a href="#">
                <button type="button" class="btn btn-outline-dark">
                    Log Out
                    <span class="iconify" data-inline="false" data-icon="mi:log-out" style="font-size: 18px;"></span>
                </button>
            </a>
            -->
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login <span class="iconify"
                                data-inline="false" data-icon="mi:log-in" style="font-size: 18px;"></span></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>

    @yield('konten')

</body>

</html>
