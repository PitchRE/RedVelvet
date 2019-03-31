<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('./../css/app.css')}}" rel="stylesheet" />
</head>
<div id="app">
    <main-app></main-app>
</div>
<script src="{{ asset('../js/app.js')}}"></script>
</body>

</html>