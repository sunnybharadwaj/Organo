<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WL2JRH4');</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <title>Organo</title>
</head>
<body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WL2JRH4"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<div id="app" class="">

    @include('components.header')

    <div class="page-content">
        <router-view></router-view>
    </div>


    {{--@include('components.cta')--}}
    @include('components.footer')
</div>

<script src="{{asset('/js/jquery.min.js')}}"></script>
<script src="{{asset('/js/owl/dist/owl.carousel.js')}}"></script>
<script src="{{asset('/js/rellax/rellax.js')}}"></script>
<script src="{{asset('/js/app.js')}}"></script>
</body>
</html>


