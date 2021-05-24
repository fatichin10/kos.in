<!doctype html>
<html>

<head>

    <title>KOS.in</title>
    <title>Mengelola Kos Menjadi Mudah</title>
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

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-white navbar-light sticky-top">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="images/kosin.png" alt="brand" style="width:150px;">
        </a>
        <div style="margin-left: auto;margin-right: 0;">
            <a href="#">
                <button type="button" class="btn btn-outline-dark">
                    Sign In
                    <span class="iconify" data-inline="false" data-icon="mi:log-out" style="font-size: 24px;"></span>
                </button>
            </a>
        </div>
    </nav>

    @yield('konten')

</body>

</html>
