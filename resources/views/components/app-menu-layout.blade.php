<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.13.5/cdn.min.js"></script>
    <title>Gestión Interna</title>
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    </style>
    @endif
</head>
<body class="bg-gradient-to-b from-blue-500 to-green-400 min-h-screen flex flex-col" x-data="{ sidebarOpen: true }">
    <!-- Header -->
    <header class="bg-gradient-to-r from-blue-600 to-green-500 text-white shadow-lg fixed top-0 left-0 w-full z-10">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center gap-4">
                <!-- Hamburger Menu Button -->
                <button @click="sidebarOpen = !sidebarOpen" class="text-white focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <h1 class="text-2xl font-bold">
                    <a href="{{ url('/dashboard') }}">Gestión Interna</a>
                </h1>
            </div>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="" class="hover:underline">Home</a></li>
                    <li><a href="" class="hover:underline">About</a></li>
                    <li><a href="" class="hover:underline">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Body -->
    <div class="flex flex-1 mt-16">
        <!-- Sidebar -->
        <aside 
            class="w-64 bg-white shadow-lg p-4 h-full fixed top-16 left-0 z-10 transition-transform duration-300 ease-in-out"
            :class="{'translate-x-0': sidebarOpen, '-translate-x-full': !sidebarOpen}"
        >
            <h2 class="text-xl font-bold text-blue-600 mb-6">Dashboard</h2>
            <nav>
                <ul>
                    <li>
                        <a href="{{ route('professors') }}" class="block py-2 px-4 rounded hover:bg-blue-500 hover:text-white text-gray-700 transition-colors duration-200">Professors</a>
                    </li>
                    <li>
                        <a href="{{ route('profile.index') }}" class="block py-2 px-4 rounded hover:bg-blue-500 hover:text-white text-gray-700 transition-colors duration-200">Profile</a>
                    </li>
                    <li>
                        <a href="{{ route('settings') }}" class="block py-2 px-4 rounded hover:bg-blue-500 hover:text-white text-gray-700 transition-colors duration-200">Settings</a>
                    </li>
                    <li>
                        <a href="{{ route('courses') }}" class="block py-2 px-4 rounded hover:bg-blue-500 hover:text-white text-gray-700 transition-colors duration-200">Courses</a>
                    </li>
                    <li>
                        <a href="{{ route('students') }}" class="block py-2 px-4 rounded hover:bg-blue-500 hover:text-white text-gray-700 transition-colors duration-200">Students</a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Content Area -->
        <main 
            class="flex-1 p-6 bg-white shadow-lg rounded-lg transition-all duration-300 ease-in-out"
            :class="{'ml-64': sidebarOpen, 'ml-0': !sidebarOpen}"
        >
            {{ $slot }}
        </main>
    </div>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-green-500 to-blue-600 text-white text-sm shadow-lg mt-6">
        <div class="container mx-auto px-4 py-4 text-center">
            <p>&copy; {{ date('Y') }}Juan Hernández. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>