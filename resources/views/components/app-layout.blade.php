<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Gestión Interna</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    </style>
    @endif
</head>
<body class="bg-gradient-to-b from-blue-500 to-green-400 min-h-screen flex flex-col">
    <header class="bg-gradient-to-r from-blue-600 to-green-500 text-white shadow-lg">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold">
                <a href="{{ url('/') }}">Intranet DECSAI</a>
            </h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="https://decsai.ugr.es/" class="hover:underline">About</a></li>
                    <li><a href="https://decsai.ugr.es/informacion/contacto" class="hover:underline">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="flex-grow flex">
        {{ $slot }}
    </main>

    <footer class="bg-gradient-to-r from-green-500 to-blue-600 text-white text-sm shadow-lg mt-auto">
        <div class="container mx-auto px-4 py-4 text-center">
            <p>&copy; {{ date('Y') }} Juan Hernández. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>