@extends('layouts.app')

@section('content')
 
    <div class="w-4/5 m-auto text-center font-extrabold ">
        <div class="py-15">
            <h1 class="text-5xl">
                UPDATE POST
            </h1>
        </div>
    </div>

@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-600 rounded-2x py-4">
                    {{$error}}
                </li>
            @endforeach
        </ul>
    </div>   
@endif



    <div class="w-4/5 m-auto pt-20">
        <form
            action="/blog/{{ $post->slug}}"
            method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <input
                type="text"
                name="title"
                placeholder="Title..."
                value="{{ $post->title }}"
                class="bg-transparent block border-b-2 w-full h-20 text-6xl font-extrabold outline-none">
            <textarea
                name="description"
                placeholder="Description..."
                class="py-20 bg-transparent block border-b-2 w-full h-25 text-xl outline-none">{{ $post->description }}</textarea>

            <div class="bg-grey-lighter pt-15">
                <button 
                    type="submit"
                    class="uppercase mt-15 bg-green-300 text-gray-900 text-lg font-extrabold py-4 px-8 rounded-3xl">
                    Submit Post
                </button>

            </div>
        </form>     
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br>


@endsection