<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Tailwind cdn  --}}
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
{{-- bulma cdn --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    {{-- style --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Laravel project 2</title>
    {{-- LiveWire css  --}}
    @livewireStyles
    {{--OR <livewire:styles /> --}}
</head>
<body>
    
    <main>
        @yield('main')
    </main>
  {{-- LiveWire js --}}
   @livewireScripts
   {{-- OR <livewire:scripts /> --}}
    {{-- Scripts  --}}
   <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>