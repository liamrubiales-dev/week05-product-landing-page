<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BREWVERY — Milk Tea Shop</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-brew-cream text-brew-ink font-sans">
    @include('components.navbar')
    {{ $slot ?? '' }}
    @yield('content')
</body>
</html>