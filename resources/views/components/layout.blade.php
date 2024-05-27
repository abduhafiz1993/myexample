<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME')}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-white font-bold">
                <a href="{{ route('home')}}">MyApp</a>
            </div>
            <div class="space-x-4">
            @auth
                <a href="{{ route('dashboard')}}" class="text-white">Dashboard</a>
                <form action="{{ route ('logout')}}" method="post">
                    @csrf
                    <button type="submit" class="text-white">Logout</button>
                </form>
            @endauth

            @guest                
                
                <a href="{{ route('login')}}" class="text-white">Login</a>
                <a href="{{ route('register')}}" class="text-white">Register</a>
            @endguest
            
            </div>
        </div>
    </nav>
    <main>
        {{ $slot }}
    </main>
</body>
</html>