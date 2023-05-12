@extends('layouts.master')

@section('content')
<div class="flex align-middle justify-center m-auto">
   @if($url != null)
    <img src="/storage/{{$url}}" alt="image" class="w-6/12 aspect-video">
   @endif
</div>
@endsection
