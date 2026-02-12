<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'RSHP Universitas Airlangga')</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .hero-gradient {
            background: linear-gradient(90deg, rgba(14, 116, 144, 0.9) 0%, rgba(6, 182, 212, 0.4) 100%);
        }
    </style>
    @stack('styles')
</head>

<body class="flex bg-gray-50 w-screen min-h-screen">
    @include('dashboard.sidebar')

    <div class="flex flex-col flex-1 min-h-screen">
        <header class="flex flex-col justify-center items-end bg-white px-8 border-b h-16">
            <h3 class="font-semibold">{{ Auth::user()->nama }}</h3>
            <p class="text-gray-600 text-sm">{{ Auth::user()->role->pluck('nama_role')->implode(', ') }}</p>
        </header>

        <main class="p-8">
            @yield('content')
        </main>
    </div>

    @stack('scripts')
</body>
