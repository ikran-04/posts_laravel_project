<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Posty</title>
</head>
<body class="bg-gray-200">
    <nav class="bg-white flex justify-between items-center p-6 mb-6">
        <ul class="flex items-center space-x-5">
            <li>
                <a href="/">Home</a></li>
            <li>
                <a href="{{route('dashboard')}}">Dashboard</a></li>
            <li>Posts</li>
        </ul>

        <ul class="flex items-center space-x-5">

            @auth
            <li><a href="">{{auth()->user()->name}}</a></li>
            <li>
                <form action="{{route('logout')}}" method="post">
                @csrf
                        <button type="submit">Logout</button></li>
                </form>
            @endauth

            @guest    
                <li>
                    <a href="{{route('login')}}">Login</a></li>
                <li >
                    <a href="{{route('register')}}">Register</a>
                </li>
            @endguest
        </ul>
    </nav>
    @yield('content')
</body>
</html>