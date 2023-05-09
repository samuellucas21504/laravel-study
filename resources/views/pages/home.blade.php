@extends('layouts.master')

@section('content')
    <div class="w-6/12 h-full flex flex-row flex-wrap align-middle content-center mx-auto my-12 gap-5">
        @if($posts != null)
            @foreach($posts as $post)
                <div class="w-48 min-h-48 overflow-hidden border-2 border-gray-200 rounded-lg p-4 flex flex-row justify-center">
                    <div class="px-6 y-4">
                        <div class="font-bold text-xl mb-2">
                            {{$post->title}}
                        </div>
                        <p class="text-gray-700 text-base mb-4">
                            {{$post->description}}
                        </p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
