<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $data['meta_title'] }}</title>
    <meta name="theme-color" content="#1a3958">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="72x72" href="/favicon/favicon-72x72.png">
    <link rel="icon" type="image/png" sizes="152x152"  href="/favicon/favicon-152x152.png">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons" />
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,400,500,600,700|Roboto:300,400,500,700&amp;subset=latin-ext" rel="stylesheet">

</head>