<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet"  type="text/css" href="./resources/sass/app.css">-->

                                                    <!-- protecao para routes de 2 nivel-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('sass/app.css') }}">
    <!-- Include Editor style. -->
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.0/css/froala_editor.pkgd.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.0/css/froala_style.min.css" rel="stylesheet"
          type="text/css"/>


    <title>@yield("title")</title>
</head>
<body>

@yield('header')

@yield('content')

@yield('footer')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/froala-editor@2.9.0/js/froala_editor.pkgd.min.js"></script>

<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
</body>
</html>