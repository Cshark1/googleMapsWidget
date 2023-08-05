<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MapsWidget</title>

    <x-imports-header />
</head>
<body class="antialiased w-[356px] h-[136px]">
    {{ $slot }}
    <x-imports-footer />
</body>
</html>
