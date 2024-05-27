<x-layout>
    <div class="bg-gray-100 flex items-center justify-center h-screen">

        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold mb-6 text-gray-900 text-center">Register</h2>
            
            <form action="{{ route('login')}}" method="POST" class="space-y-6">
                
                @csrf

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" id="name" name="name" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    class="input @error('name') ring-red-500 @enderror" 
                    value="{{ old('username')}}">
                    @error('name')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                
                <!-- Remeber me -->
                 <div>
                    <input type="checkbox" name="remember" id="remember" value="Remeber me">
                 </div>

                @error('felids')
                 <p class="error">{{ $message }}</p>
                @enderror

                <!-- Submit Button -->
                <div>
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Login
                    </button>
                </div>
            </form>
        </div>
    
    </div>
    
</x-layout>