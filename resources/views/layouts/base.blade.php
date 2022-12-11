<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $description }}">

    <title>{{ $title }}</title>

@php
	$version = date('Ymd');
@endphp

    <link href="{{ asset('favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset('css/styles.css?'.$version) }}" rel="stylesheet">
    <link href="{{ asset('css/adaptive.css?'.$version) }}" rel="stylesheet">

@section('css')
@show

</head>
<body>
	{{-- <img src="{{ asset('img/main_pic.jpg') }}" class="main_pic"> --}}
@include('includes.header')

@yield('content')


@include('includes.footer')

@if(session('note'))

@include('includes.form_answer')

@endif

<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/menu_mobile.js') }}"></script>

{{-- Живосайт --}}
<script src="//code.jivosite.com/widget/JwNNXBipEy" async></script>

@section('scripts')
@show
    
</body>
</html>



