<!DOCTYPE html>
<html>

<head>
    @isset($title)
        <title>Laravel | {{ $title }}</title>
    @else
        <title>Laravel</title>
    @endisset
</head>

<body>

    {{-- Nabar --}}
    <ul>
        <li><a href="{{ Route('home') }}">Home</a></li>
        <li><a href="{{ Route('about') }}">About</a></li>
        <li><a href="{{ Route('contact') }}">Contact</a></li>
        <li><a href="{{ Route('gallery') }}">Gallery</a></li>
    </ul>

    {{-- Content --}}
    {{ $slot }}

</body>

</html>
