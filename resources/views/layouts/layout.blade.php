<!DOCTYPE html>
<html lang="it">

<head>
    @vite(['resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("name")</title>
</head>

<body>
    @include('partials.header')
    <br>
    @yield("main")
    <br>
    @include('partials.footer')

</body>

</html>
