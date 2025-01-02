<x-app-menu-layout>
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">Trainees List</h1>

        <!-- Search Form -->
        <div class="mb-6">
            <form action="{{ route('searchTrainees') }}" method="GET" class="flex items-center space-x-4">
                <input type="text" name="search" placeholder="Search Trainee by Name" class="w-full md:w-1/3 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ request('search') }}">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Search</button>
            </form>
        </div>

        <!-- Trainees List -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($trainees as $trainee)
                <div class="bg-white shadow-lg rounded-lg p-6 border border-gray-200 hover:shadow-xl transition">
                    <h2 class="text-2xl font-bold text-blue-600">{{ $trainee->name }}</h2>
                    <p class="text-sm text-gray-600 mt-2">DNI: {{ $trainee->dni }}</p>
                    <p class="text-sm text-gray-600">Email: <a href="mailto:{{ $trainee->email }}" class="text-blue-500 underline">{{ $trainee->email }}</a></p>
                    <p class="text-sm text-gray-600">Category: {{ $trainee->category }}</p>
                    <p class="text-sm text-gray-600">Group: {{ $trainee->group }}</p>
                    <p class="text-sm text-gray-600">Office: {{ $trainee->office }}</p>

                    <div class="mt-4 text-sm text-gray-700">
                        <p><strong>Currently Assigned:</strong> {{ $trainee->assigned ? 'Yes' : 'No' }}</p>
                        {{-- <p><strong>Last Access:</strong> {{ $trainee->last_access }}</p> --}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-menu-layout>
