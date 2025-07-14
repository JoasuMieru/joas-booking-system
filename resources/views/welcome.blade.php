<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }} - Booking System</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-50">
    <div class="min-h-screen flex flex-col">
        <!-- Navigation -->
        <nav class="bg-white border-b border-gray-200">
            <div class="max-w-4xl mx-auto px-4 flex justify-between items-center h-16">
                <span class="text-lg font-bold tracking-tight text-blue-700">JoasBook</span>
                <div class="flex items-center space-x-4">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ route('dashboard') }}" class="btn-primary" style="display:inline-block;padding:0.5rem 1.25rem;border-radius:0.375rem;background:#2563eb;color:#fff;font-weight:500;font-size:1rem;text-decoration:none;transition:background 0.15s;">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn-secondary" style="display:inline-block;padding:0.5rem 1.25rem;border-radius:0.375rem;background:#fff;color:#2563eb;font-weight:500;font-size:1rem;border:1px solid #2563eb;text-decoration:none;transition:background 0.15s;">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn-primary ml-2" style="display:inline-block;padding:0.5rem 1.25rem;border-radius:0.375rem;background:#2563eb;color:#fff;font-weight:500;font-size:1rem;text-decoration:none;transition:background 0.15s;">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </nav>
        <!-- Hero -->
        <main class="flex-1 flex flex-col items-center justify-center text-center px-4">
            <h1 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mt-16 mb-4">Simple Booking System</h1>
            <p class="text-gray-600 max-w-xl mx-auto mb-8">Manage your appointments and schedules with ease. Stay organized and never miss an important date.</p>
            @auth
                <a href="{{ route('dashboard') }}" class="btn-primary mb-12" style="display:inline-block;padding:0.5rem 1.25rem;border-radius:0.375rem;background:#2563eb;color:#fff;font-weight:500;font-size:1rem;text-decoration:none;transition:background 0.15s;">Go to Dashboard</a>
            @else
                <div class="flex flex-col sm:flex-row gap-3 justify-center mb-12">
                    <a href="{{ route('register') }}" class="btn-primary" style="display:inline-block;padding:0.5rem 1.25rem;border-radius:0.375rem;background:#2563eb;color:#fff;font-weight:500;font-size:1rem;text-decoration:none;transition:background 0.15s;">Get Started</a>
                    <a href="{{ route('login') }}" class="btn-secondary" style="display:inline-block;padding:0.5rem 1.25rem;border-radius:0.375rem;background:#fff;color:#2563eb;font-weight:500;font-size:1rem;border:1px solid #2563eb;text-decoration:none;transition:background 0.15s;">Sign In</a>
                </div>
            @endauth
            <section class="w-full max-w-2xl mx-auto mt-8">
                <h2 class="text-base text-blue-600 font-semibold tracking-wide uppercase mb-2">Features</h2>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mt-6">
                    <div class="flex flex-col items-center">
                        <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-100 mb-2">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        </div>
                        <div class="font-medium text-gray-900 mb-1">Visual Calendar</div>
                        <div class="text-sm text-gray-500">Easy date selection and booking management.</div>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-100 mb-2">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5zM4 19h6v-6H4v6zM20 7h-6V1h6v6zM4 7h6V1H4v6z"/></svg>
                        </div>
                        <div class="font-medium text-gray-900 mb-1">No Double Booking</div>
                        <div class="text-sm text-gray-500">Automatic prevention of double bookings.</div>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-100 mb-2">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5zM4 19h6v-6H4v6zM20 7h-6V1h6v6zM4 7h6V1H4v6z"/></svg>
                        </div>
                        <div class="font-medium text-gray-900 mb-1">Real-time Notifications</div>
                        <div class="text-sm text-gray-500">Instant notifications for new bookings and updates.</div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
