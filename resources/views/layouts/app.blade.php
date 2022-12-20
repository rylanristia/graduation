<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Next Chapter: Graduation</title>

    @include('includes.styles')

    <style>
        * {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <nav>
        <div class="navbar navbar-nav fixed-top">
            <div class="container-fluid">
                <div class="navbar-content d-flex justify-content-between">
                    <div class="hamburger-icon">
                        <img src="{{ url('/images/hamburger.png') }}" alt="" class="hamburger" width="80px">
                    </div>
                    <div class="her-name">
                        <h2>APRILIA ANJANI</h2>
                    </div>
                    <div class="language">
                        <h3>ENG</h3>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="footer fixed-bottom">

    </footer>

    @include('includes.scripts')
</body>

</html>
