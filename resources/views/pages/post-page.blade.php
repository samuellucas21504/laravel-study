@extends('layouts.master')

@section('content')
<div class="m-auto w-6/12">
    <a href="{{route('posts')}}" class="mb-4 font-semibold text-gray-950 hover:text-gray-800">Return</a>
    <x-post :post="$post" />
</div>

@endsection
