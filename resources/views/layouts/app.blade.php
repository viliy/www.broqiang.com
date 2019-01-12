<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" >

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name=”keywords” Content=”PHP,Linux,Laravel,Go,博客,Zhaqq″>
    <meta name="description" content="Zhaqq 博客">
    <meta name="author" content="Zhaqq<34485431@qq.com>">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title','title') - {{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('css')
    <style>
        body {
            position: unset !important;
        }
    </style>

</head>

<body id="canvas-boom" style="position: unset !important;">
<div id="app" class="{{ route_class() }}-page">
    @include('layouts._header')
    <header class="bs-docs-nav navbar navbar-static-top" id="top"></header>

    <main class="py-4">

        @include('common._error')
        @include('common._message')

        @yield('content')

    </main>
    <div style="position:fixed; right:50px; bottom:80px;"><a href="#top" class="btn btn-outline-info">返回顶部</a></div>
    @include('layouts._footer')
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
{{--<script src="{{ asset('js/jquery.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/boom.js') }}"></script>--}}
{{--<script src="{{ asset('js/canvas.js') }}"></script>--}}
<script src="{{ asset('js/canvas-umd.js') }}"></script>

<script>
    var cn = new CanvasNest(document.getElementById('canvas-boom'), {
        color: '38,121,210',
        pointColor: '228,222,29',
        opacity: '0.8',
        count: 800,
    });
</script>
@yield('script')

@include('layouts._baidutongji')
</body>

</html>