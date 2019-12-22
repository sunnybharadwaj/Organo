<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.0/css/bulma.css">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <title>Organo | Administration Panel</title>
</head>
<body>
    @include ('admin.header')
    @yield('content')
    @include ('admin.footer')
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script src="{{mix('js/app.js')}}"></script>
</body>
</html>