@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-xl">
            @if(session('status'))
            <div class="bg-red-500 p-4 rounded-lg text-white text-center mb-6">

            </div>
                {{session('status')}}
            @endif


              <form action="{{route('login')}}" method="post">
                @csrf

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input class="bg-gray-100 border-2 w-full rounded-lg p-4" type="email" name="email" placeholder="Email" id="email" value="{{old('email')}}">

                    @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input class="bg-gray-100 border-2 w-full rounded-lg p-4" type="password" name="password" placeholder="password" id="password" >

                    @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>

               
                <div class="mb-4">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label for="remember">Remember me</label>
                    </div>
                </div>

                
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Login</button>
                </div>
            </form> 
        </div>
    </div>

@endsection()