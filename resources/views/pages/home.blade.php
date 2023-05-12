@extends('layouts.master')

@section('content')
    <div class="w-6/12 h-full flex flex-row flex-wrap align-middle content-center mx-auto my-12 gap-5 justify-center">

        <form action={{route('upload-image')}} enctype="multipart/form-data" method="POST">
            @csrf
            <div class="flex flex-col w-6/12">
                <label for="file-name" class="block mb-2 text-lg font-semibold text-gray-900">
                    File Name
                </label>
                <input class="border rounded-lg bg-gray-50 w-fit px-4 py-1 font-light focus:outline-gray-300" type="text" id="fileName" name="fileName">
                <label for="file_input" class="block mb-2 text-lg font-semibold text-gray-900">
                    Upload File
                </label>
                <input class="border rounded-r-lg bg-gray-50 w-fit pr-4" id="file_input" name="file" type="file"/>
                @error('file')
                <span class="text-sm text-red-500">
                    {{$message}}
                </span>
                @enderror
            </div>
            <div>
                <button class="border border-gray-300 px-2 py-1
                mt-2 bg-gray-200 text-gray-950 rounded-lg hover:bg-gray-950 hover:text-white focus:outline-1 outline-gray-600" type="submit">
                    Send
                </button>
            </div>
        </form>
    </div>
@endsection
