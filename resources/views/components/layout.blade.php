@props([
    'title' => 'CodeVault'
])
<!DOCTYPE html>

<html lang="en" data-theme="dracula">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title }}</title>
</head>

<body class="">
    <x-nav />
    <main class="max-w-3xl mx-auto px-6">
        {{ $slot }}
    </main>
</body>

</html>


