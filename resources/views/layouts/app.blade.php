<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', '实验室预约管理系统')-educationW</title>
    <meta name="description" content="@yield('description', setting('seo_description', '实验室预约管理系统'))" />
    <meta name="keyword" content="@yield('keyword', setting('seo_keyword', '实验交流，共同进步！'))" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.bootcss.com/semantic-ui/2.2.13/semantic.min.css" rel="stylesheet">
    @yield('styles')
</head>

<body>
<div id="app" class="{{ route_class() }}-page">

    @include('layouts._header')

    <div class="container">

        @include('layouts._message')
        @yield('content')

    </div>


    @include('layouts._footer')
</div>

@if (app()->isLocal())
    @include('sudosu::user-selector')
@endif

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>