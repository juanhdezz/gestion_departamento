<x-app-menu-layout>
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">Welcome, {{ $trainee->name }}</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Personal Information Section -->
            <div class="bg-gradient-to-r from-green-400 to-blue-500 text-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-bold">Personal Information</h2>
                <p class="mt-4">DNI: {{ $trainee->dni }}</p>
                <p>Email: <a href="mailto:{{ $trainee->email }}" class="underline">{{ $trainee->email }}</a></p>
                <p>Phone: {{ $trainee->dni }}</p>
            </div>
            
            <!-- Trainee Details Section -->
            <div class="bg-white shadow-lg rounded-lg p-6 border border-gray-200">
                <h2 class="text-2xl font-bold text-blue-600">Trainee Details</h2>
                <p class="mt-4">Office: {{ $trainee->office }}</p>
                <p>Mentor: {{ $trainee->current_responsible }}</p>
                <p>Role: {{ $trainee->current_category }}</p>
            </div>
            
            <!-- Access Information Section -->
            <div class="bg-white shadow-lg rounded-lg p-6 border border-gray-200">
                <h2 class="text-2xl font-bold text-blue-600">Access Information</h2>
                <p class="mt-4">Imparte creditos: {{ $trainee->teaching_credits_department }}</p>
                <p>Quiere impartir: <a href="{{ $trainee->desired_teaching_credits }}" target="_blank" class="text-blue-500 underline">Visit</a></p>
            </div>
        </div>

        <div class="mt-6">
            <a href="{{ route('profile.index') }}" class="text-white bg-blue-600 hover:bg-blue-700 py-2 px-4 rounded shadow-lg">View Profile</a>
            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button type="submit" class="text-white bg-red-600 hover:bg-red-700 py-2 px-4 rounded shadow-lg">
                    Logout
                </button>
            </form>        
        </div>
    </div>
</x-app-menu-layout>
