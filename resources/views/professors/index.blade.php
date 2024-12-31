<x-app-menu-layout>
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">Professors List</h1>

        <!-- Search Form -->
        <div class="mb-6">
            <form action="{{ route('searchProfessors') }}" method="GET" class="flex items-center space-x-4">
                <input type="text" name="search" placeholder="Search Professor by Name" class="w-full md:w-1/3 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ request('search') }}">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Search</button>
            </form>
        </div>

        <!-- Professors List -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($professors as $professor)
                <div class="bg-white shadow-lg rounded-lg p-6 border border-gray-200 hover:shadow-xl transition">
                    <h2 class="text-2xl font-bold text-blue-600">{{ $professor->full_name }}</h2>
                    <p class="text-sm text-gray-600 mt-2">DNI: {{ $professor->dni }}</p>
                    <p class="text-sm text-gray-600">Email: <a href="mailto:{{ $professor->email }}" class="text-blue-500 underline">{{ $professor->email }}</a></p>
                    <p class="text-sm text-gray-600">Category: {{ $professor->category }}</p>
                    <p class="text-sm text-gray-600">Group: {{ $professor->group }}</p>
                    <p class="text-sm text-gray-600">Office: {{ $professor->office }}</p>
                    
                    <div class="mt-4">
                        <a href="{{ $professor->website }}" target="_blank" class="text-green-500 font-medium underline">Visit Website</a>
                    </div>

                    <div class="mt-4 text-sm text-gray-700">
                        <p><strong>Teaches:</strong> {{ $professor->teaches ? 'Yes' : 'No' }}</p>
                        <p><strong>Last Access:</strong> {{ $professor->last_access }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-menu-layout>
