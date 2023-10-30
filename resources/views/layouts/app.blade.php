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
            <li>Home</li>
            <li>Dashboard</li>
            <li>Posts</li>
        </ul>

        <ul class="flex items-center space-x-5">
            <li>Ikran hashi</li>
            <li>Login</li>
            <li >
                <a href="{{route('register')}}">Register</a>
            </li>
            <li>Logout</li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>