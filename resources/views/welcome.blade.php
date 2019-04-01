<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Red Velvet</title>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="redvelvet.pro">
    <meta name="twitter:title" content="Red Velvet">
    <meta name="twitter:description" content="Red Velvet content.">
    <meta name="twitter:image" content="/images/card.jpg">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('./../css/app.css')}}" rel="stylesheet" />
    
</head>
<div id="app">
    <main-app></main-app>
</div>
<script src="{{ asset('../js/app.js')}}"></script>
</body>

</html>