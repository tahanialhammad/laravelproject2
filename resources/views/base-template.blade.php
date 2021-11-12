<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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