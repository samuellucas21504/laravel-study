@extends('layouts.master')

@section('content')
    <div class="w-full h-full flex flex-row flex-wrap align-middle justify-center">
        @foreach($blogs as $blog)
            <div class="my-5 mx-3 w-48 h-48 rounded overflow-hidden shadow-lg shadow-gray-400 flex flex-row justify-center">
                <div class="px-6 y-4">
                    <div class="font-bold text-xl mb-2">
                        {{$blog['title']}}
                    </div>
                    <p class="text-gray-700 text-base">
                        {{$blog['body']}}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
