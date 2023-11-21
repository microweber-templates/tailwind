<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{!! template_url() !!}dist/style.css" rel="stylesheet">
</head>
<body>

@extends('microweber-templates-tailwind::parts.header')

@yield('content')

@extends('microweber-templates-tailwind::parts.footer')

</body>
</html>
