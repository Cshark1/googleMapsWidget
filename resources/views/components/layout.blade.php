<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <x-imports-header />
</head>
<body class="antialiased bg-gray-900 text-white dark">
    <div class="m-auto max-w-4xl">
        <x-header />
        <div class="h-36"></div>
        {{ $slot }}
    </div>
    <x-imports-footer />
</body>
</html>
