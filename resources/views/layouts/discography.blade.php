<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Next Chapter: Graduation</title>

    @include('includes.style-discography')

    <style>
        * {
            margin: 0;
            padding: 0;
            /* outline: red solid 1px; */
        }
    </style>
</head>

<body>
    @include('includes.navbar-bighit')

    @yield('content')

    @include('includes.footer-bighit-not-fixed')

    @include('includes.scripts')
</body>

</html>
