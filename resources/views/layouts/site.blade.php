<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WL2JRH4');</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Organo builds full-featured sustainable housing and living environments integrated
                    into the natural world, supportive of a healthy way of living.">
    <meta name="keywords"
          content="Rurban, Sustainable Living, Farm House, Housing, Architecture, Horizontal Living, Natural, Nature, Peaceful, Experience, Conservation, Conscious, Reverse Migration, Authentic, Farm , Ecohabitats, Impact, Harmony, Modern, Community, Neighbourhood, Environment, Health , Lifestyle">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <title>Organo | Sustainable Rurban Living</title>
</head>
<body>
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WL2JRH4"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<div id="app" class="">

    @include('components.header')

    <div class="page-content">
        <router-view></router-view>
    </div>


    {{--@include('components.cta')--}}
    @include('components.footer')
</div>

<script src="{{asset('/js/jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
<script src="{{asset('/js/app.js')}}"></script>
<script src="{{asset('/js/manifest.js')}}"></script>
<script src="{{asset('/js/vendor.js')}}"></script>
</body>
</html>


