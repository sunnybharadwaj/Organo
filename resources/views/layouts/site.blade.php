<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <title>Organo</title>
</head>
<body>

<div id="app" class="">

    @include('components.header')

    <div class="page-content">
        <router-view></router-view>
    </div>


    {{--@include('components.cta')--}}
    @include('components.footer')
</div>
<script src="{{asset('/js/jquery.min.js')}}"></script>
<script src="{{asset('/js/app.js')}}"></script>
</body>
</html>


