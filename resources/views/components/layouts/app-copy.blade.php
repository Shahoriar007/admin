<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Inventiro' }}</title>

    <x-partials.styles>

    </x-partials.styles>

</head>
<body>
    {{ $header ?? '' }}

    
    {{ $slot }}


    {{ $footer ?? '' }}
    
    <x-partials.scripts></x-partials.scripts>

    @stack('scripts')

</html>