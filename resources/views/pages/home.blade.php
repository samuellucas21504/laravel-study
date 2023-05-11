@extends('layouts.master')

@section('content')
    <div class="w-6/12 h-full flex flex-row flex-wrap align-middle content-center mx-auto my-12 gap-5 justify-center">
        @if($users != null)
            @foreach($users as $user)
                <div class="w-60 md:w-80 min-h-48 border border-gray-300 rounded-lg p-4 flex flex-row justify-baseline">
                    <div class="px-6 y-4">
                        <div class="mb-2 align-baseline break-after-all w-8/12">
                            <p class="font-bold text-l">
                                {{$user->name}}
                            </p>
                            <p class="font-light text-gray-70 text-sm">
                                {{$user->email}}
                            </p>
                        </div>

                        <p class="font-normal text-gray-800 text-base">
                            {{$user->address->address}}
                        </p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
