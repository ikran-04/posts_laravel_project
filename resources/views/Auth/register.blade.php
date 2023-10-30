
@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-xl">
              <form action="{{route('register')}}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input class="bg-gray-100 border-2 w-full rounded-lg p-4 @error('name') border-red-500 @enderror" type="text" name="name" value="{{old('name')}}" placeholder="Your name" id="name">

                    @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="username" class="sr-only">UserName</label>
                    <input class="bg-gray-100 border-2 w-full rounded-lg p-4" type="text" name="username" placeholder="Username" id="username" value="{{old('username')}}">

                    @error('username')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>

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
                    <label for="password_confirmation" class="sr-only">password again</label>
                    <input class="bg-gray-100 border-2 w-full rounded-lg p-4" type="text" name="password_confirmation" placeholder="Repeat Your password" id="password_confirmation">
                    
                </div>

                    @error('password_confirmation')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
                </div>
            </form> 
        </div>
    </div>

@endsection()