<!-- login.blade.php -->
<x-app-layout>
    <div class="w-full flex justify-center items-center p-6">
        <div class="w-full max-w-sm bg-white p-8 shadow-2xl rounded-lg transform hover:scale-105 transition duration-300">
            <h2 class="text-3xl font-extrabold text-center text-blue-700 tracking-wider">
                Welcome Back!
            </h2>
            <p class="text-center text-gray-600 mt-2">Log in to continue</p>

            <!-- Alert for errors -->
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-4" role="alert">
                    <strong class="font-bold">Oops!</strong>
                    <span class="block sm:inline">{{ $errors->first('login') }}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <title>Close</title>
                            <path d="M14.348 14.849a1 1 0 01-1.415 0L10 11.415 7.067 14.35a1 1 0 01-1.415-1.415l2.933-2.934-2.933-2.933a1 1 0 011.415-1.415L10 8.587l2.933-2.933a1 1 0 011.415 1.415l-2.933 2.933 2.933 2.934a1 1 0 010 1.415z"/>
                        </svg>
                    </span>
                </div>
            @endif

            <!-- Login Form -->
            <form action="{{ route('login') }}" method="POST" class="mt-6 space-y-4">
                @csrf
                <div class="relative">
                    <label for="login" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" name="login" id="login" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none shadow-sm transition"
                        placeholder="Enter your username" required>
                </div>

                <div class="relative">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none shadow-sm transition"
                        placeholder="Enter your password" required>
                </div>

                <button type="submit"
                    class="w-full py-2 bg-gradient-to-r from-blue-500 to-green-400 text-white font-bold rounded-lg shadow-lg hover:opacity-90 transform hover:scale-105 transition duration-300">
                    Login
                </button>
            </form>
        </div>
    </div>
</x-app-layout>