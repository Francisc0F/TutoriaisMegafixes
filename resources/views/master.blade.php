<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- <link rel="stylesheet"  type="text/css" href="./resources/sass/app.css">-->

                                                    <!-- protecao para routes de 2 nivel-->

    <!-- Include Editor style. -->
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.0/css/froala_editor.pkgd.min.css" rel="stylesheet"
          type="text/css"/>

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('inputFileStyle/css/component.css') }}">

    <!-- override-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('sass/app.css') }}">

    <title>@yield("title")</title>
</head>
<body onload="showFooterScroll()" >

@include("templates.header")

{{--@include("templates.templateLoginRegist")--}}
@yield('content')

@include("templates.footer")



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/froala-editor@2.9.0/js/froala_editor.pkgd.min.js"></script>




<script type="text/javascript" src="{{ URL::asset('inputFileStyle/js/jquery.custom-file-input.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('inputFileStyle/js/custom-file-input.js') }}"></script>


<script  type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
</body>
</html>
