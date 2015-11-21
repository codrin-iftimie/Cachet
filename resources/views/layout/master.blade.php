<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="env" content="{{ app('env') }}">
    <meta name="token" content="{{ csrf_token() }}">

    <link rel="alternate" type="application/atom+xml" href="{{ cachet_route('feed.atom') }}" title="{{ $site_title }} - Atom Feed">
    <link rel="alternate" type="application/rss+xml" href="{{ cachet_route('feed.rss') }}" title="{{ $site_title }} - RSS Feed">

    <!-- Mobile friendliness -->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="description" content="{{ trans('cachet.description', ['app' => $app_name]) }}">

    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $site_title }}">
    <meta property="og:image" content="/img/favicon.png">
    <meta property="og:description" content="{{ trans('cachet.description', ['app' => $app_name]) }}">

    <!-- Mobile IE allows us to activate ClearType technology for smoothing fonts for easy reading -->
    <meta http-equiv="cleartype" content="on">

    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="/img/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/img/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="/img/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="/img/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="/img/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/img/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="/img/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="/img/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="/img/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="/img/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="/img/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="/img/mstile-310x310.png" />

    <title>{{ $site_title }}</title>

    @if($enable_external_dependencies)
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&subset={{ $font_subset }}" rel="stylesheet" type="text/css">
    @endif
    <link rel="stylesheet" href="{{ elixir('dist/css/app.css') }}">

    @include('partials.stylesheet')

    @include('partials.crowdin')

    @if($app_stylesheet)
    <style type="text/css">
    {!! $app_stylesheet !!}
    </style>
    @endif

    <script type="text/javascript">
        var Global = {};
        Global.locale = '{{ $app_locale }}';
    </script>
    <script src="{{ elixir('dist/js/all.js') }}"></script>
</head>
<body class="status-page">
    @yield('outer-content')
    @include('partials.header')
    <div class="main-content-wrap">
        <div class="container">
        @yield('content')
        </div>
    </div>
</body>
</html>
