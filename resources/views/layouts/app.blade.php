<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <!-- Top Navigation -->
            @include('layouts.navigation')

            <!-- Main Layout with Sidebar -->
            <div class="flex h-[calc(100vh-4rem)]"> <!-- 4rem = approx nav height -->
                <!-- Sidebar - Always visible -->
                <aside class="w-72 bg-white border-r border-gray-200 flex flex-col">
                    @include('components.sidebar')
                </aside>

                <!-- Main Content Area -->
                <div class="flex-1 flex flex-col overflow-hidden">
                    <!-- Page Heading -->
                    @isset($header)
                        <header class="bg-white shadow-sm border-b border-gray-200">
                            <div class="px-6 py-4">
                                {{ $header }}
                            </div>
                        </header>
                    @endisset

                    <!-- Page Content -->
                    <main class="flex-1 overflow-y-auto bg-gray-50">
                        {{ $slot }}
                    </main>
                </div>
            </div>
        </div>
    </body>
</html>
