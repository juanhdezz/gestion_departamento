<x-app-menu-layout>
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">Welcome, {{ $professor->full_name }}</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-gradient-to-r from-green-400 to-blue-500 text-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-bold">Personal Information</h2>
                <p class="mt-4">DNI: {{ $professor->dni }}</p>
                <p>Email: <a href="mailto:{{ $professor->email }}" class="underline">{{ $professor->email }}</a></p>
                <p>Office: {{ $professor->office }}</p>
            </div>
            
            <div class="bg-white shadow-lg rounded-lg p-6 border border-gray-200">
                <h2 class="text-2xl font-bold text-blue-600">Teaching Details</h2>
                <p class="mt-4">Category: {{ $professor->category }}</p>
                <p>Group: {{ $professor->group }}</p>
                <p>Teaches: {{ $professor->teaches ? 'Yes' : 'No' }}</p>
            </div>
            
            <div class="bg-white shadow-lg rounded-lg p-6 border border-gray-200">
                <h2 class="text-2xl font-bold text-blue-600">Access Information</h2>
                <p class="mt-4">Last Access: {{ $professor->last_access }}</p>
                <p>Website: <a href="{{ $professor->website }}" target="_blank" class="text-blue-500 underline">Visit</a></p>
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
