<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Graphicode India</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <style>
        .floating-button {
            position: fixed;
            top: 85px;
            right: 20px;
            z-index: 1000;
        }

        .floating-button2 {
            position: fixed;
            top: 85px;
            right: 230px;
            z-index: 1000;
        }

        .floating-button3 {
            position: fixed;
            top: 85px;
            right: 150px;
            z-index: 1000;
        }

        .floating-button4 {
            position: fixed;
            top: 85px;
            right: 295px;
            z-index: 1000;
        }

        .floating-button5 {
            position: fixed;
            top: 85px;
            right: 250px;
            z-index: 1000;
        }

        .btn-danger {
            background-color: #2e4a9f !important;
            border: 1px solid #2e4a9f !important;

            &:hover {
                background-color: #10339b !important;
            }
        }

        .btn-danger2 {
            background-color: #ff6011 !important;
            border: 1px solid #ff6011 !important;
            color: white !important;

            &:hover {
                background-color: #ff5805 !important;
            }
        }
    </style>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>