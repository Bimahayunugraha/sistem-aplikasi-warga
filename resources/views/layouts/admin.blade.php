<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Aplikasi Warga - {{ $title }}</title>
    <link rel="icon" href="">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/trix.css') }}">
    <script type="text/javascript" src="{{ asset('js/trix.js') }}"></script>
    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
          display: none;
        }
    </style>
    
</head>
<body id="body" class="antialiased">
    
    <div x-data="{ sidemenu: false }" class="h-screen flex overflow-hidden" x-cloak @keydown.window.escape="sidemenu = false">
        @include('includes.admin.sidebar')
        <div class="flex flex-1 flex-col w-full">
            @include('includes.admin.header')
            @yield('content')
        </div>
    </div>

    <script src="https://unpkg.com/flowbite@1.4.2/dist/datepicker.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.2/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/adminscript.js') }}"></script>
</body>
</html>