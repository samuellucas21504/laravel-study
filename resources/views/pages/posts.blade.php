@extends('layouts.master')

@section('content')

<div class="flex flex-col justify-center align-middle w-6/12 mx-auto mt-4 gap-2">
    @foreach ($posts as $post)
        <x-post-card :post="$post"/>
    @endforeach
    {{$posts->links()}}
</div>
@endsection
