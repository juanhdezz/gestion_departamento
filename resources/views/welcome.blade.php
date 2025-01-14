<x-app-layout>
    <div class="w-full flex items-center justify-center relative">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        
        <div class="relative z-10 flex flex-col items-center justify-center w-full px-4">
            <!-- Logo -->
            <img src="{{ asset('cciaugr3.png') }}" alt="Logo" class="mb-8 w-80 h-auto">
            
            <!-- Title -->
            <h1 class="text-5xl font-bold mb-6 text-white text-center">Welcome to the Internal Management System of CCIA</h1>
            <p class="text-xl mb-8 text-white">Streamlining operations for Professors and future Becarios</p>
            
            <!-- Buttons -->
            <div class="flex flex-wrap justify-center gap-6">
                <a href="{{ route('login.form') }}" class="bg-gradient-to-r from-blue-600 to-green-500 hover:from-blue-700 hover:to-green-600 text-white font-semibold py-3 px-8 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                    Login
                </a>
                {{-- <a href="#" class="bg-gradient-to-r from-yellow-600 to-orange-500 hover:from-yellow-700 hover:to-orange-600 text-white font-semibold py-3 px-8 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                    Access as Becario (Coming Soon) // al final he metido los dos login en uno solo, con opcion para indicar tu rol
                </a> --}}
            </div>
        </div>
    </div>
</x-app-layout>

