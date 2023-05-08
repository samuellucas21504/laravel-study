@extends('layouts.master')

@section('content')

<div class="w-full h-full flex flex-row justify-center mb-12">

    <form action={{ route('login.submit') }} method="POST" class="md:w-96 w-66 my-auto p-12 justify-self-center border-2 border-solid border-gray-100 rounded-lg ">
        @csrf
        <div class="self-start text-gray-400 font-light mb-4">
            Login
        </div>
        <div class="my-2">
            <label for="username" class="block text-gray-700 text-sm font-bold mb-2">
                Username
            </label>
            <input type="text" name="username" id="username" class="shadow placeholder:font-extralight appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-md focus:shadow-blue-300" placeholder="Username" required
            @if(old('username'))value='{{old('username')}}' @endif/>

            @error('username')
            <span class="font-extralight text-red-500 text-sm">{{$message}}</span>
            @enderror
        </div>
        <div class="my-2">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                Email
            </label>
            <input type="email" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-md focus:shadow-blue-300 placeholder:font-extralight" required placeholder="Email" @if(old('email')) value='{{old('email')}}' autocomplete="email" @endif/>

            @error('email')
            <span class="font-extralight text-red-500 text-sm">{{$message}}</span>
            @enderror
        </div>
        <div class="my-2">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                Password
            </label>
            <input type="password" name="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-md focus:shadow-blue-300 placeholder:font-extralight" placeholder="Password" required/>

            @error('password')
                <span class="font-extralight text-red-500 text-sm">{{$message}}</span>
            @enderror
        </div>
        <div class="mt-4 flex items-center">
            <button class="bg-blue-500 hover:bg-blue-700 text-gray-200 font-light py-2 px-4 rounded focus:outline-none focus:shadow-outline hover:transition-all ease-in-out delay-100" type="submit">
                Login
              </button>
        </div>
    </form>
</div>

@endsection
