<x-app-menu-layout>
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold mb-6 text-blue-700">Edit Profile</h1>

        <form action="{{ route('profile.update') }}" method="POST" class="space-y-4">
            @csrf

            <!-- Full Name -->
            <div>
                <label for="full_name" class="block text-sm font-medium text-gray-700">Full Name</label>
                <input type="text" id="full_name" name="full_name" 
                       value="{{ old('full_name', $professor->full_name) }}" 
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm">
                @error('full_name')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" 
                       value="{{ old('email', $professor->email) }}" 
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm">
                @error('email')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Office -->
            <div>
                <label for="office" class="block text-sm font-medium text-gray-700">Office</label>
                <input type="text" id="office" name="office" 
                       value="{{ old('office', $professor->office) }}" 
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm">
                @error('office')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Personal Phone -->
            <div>
                <label for="personal_phone" class="block text-sm font-medium text-gray-700">Personal Phone</label>
                <input type="text" id="personal_phone" name="personal_phone" 
                       value="{{ old('personal_phone', $professor->personal_phone) }}" 
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm">
                @error('personal_phone')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Website -->
            <div>
                <label for="website" class="block text-sm font-medium text-gray-700">Website</label>
                <input type="text" id="website" name="website" 
                       value="{{ old('website', $professor->website) }}" 
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm">
                @error('website')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" 
                    class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg shadow-lg hover:bg-blue-700 transition">
                Save Changes
            </button>
        </form>
    </div>
</x-app-menu-layout>
