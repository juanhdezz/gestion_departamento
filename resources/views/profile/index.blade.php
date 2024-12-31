<x-app-menu-layout>
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold mb-6 text-blue-700">My Profile</h1>

        <!-- Mensaje de éxito -->
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <!-- Mostrar los campos del profesor -->
        <div class="space-y-4">
            <div>
                <strong>Full Name:</strong> {{ $professor->full_name }}
            </div>
            <div>
                <strong>Email:</strong> {{ $professor->email }}
            </div>
            <div>
                <strong>Office:</strong> {{ $professor->office ?? 'Not set' }}
            </div>
            <div>
                <strong>Personal Phone:</strong> {{ $professor->personal_phone ?? 'Not set' }}
            </div>
            <div>
                <strong>Website:</strong> 
                <a href="{{ $professor->website }}" target="_blank" class="text-blue-500 underline">
                    {{ $professor->website ?? 'Not set' }}
                </a>
            </div>
        </div>

        <a href="{{ route('profile.edit') }}" 
           class="mt-6 inline-block bg-blue-600 text-white px-6 py-3 rounded-lg shadow-lg hover:bg-blue-700 transition">
            Edit Profile
        </a>
    </div>
</x-app-menu-layout>
