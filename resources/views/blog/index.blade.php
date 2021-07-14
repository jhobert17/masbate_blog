@extends('layouts.app')

@section('content')
 
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-900 ">
            <h1 class="text-5xl font-extrabold">
                BLOG POST
            </h1>
        </div>
    </div>

@if (session()->has('message'))
    <div class="text-center center w-4/5 m-auto mt-10 pl-2">
        <p class="w-1/4 mb-2 text-gray-50 bg-green-500 rounded-xl py-3">
            {{ session()->get('message') }}
        </p>
    </div>
@endif


@if (Auth::check())
    <div class="text-right pt-15 w-4/5 m-auto">
        <a
            href="/blog/create"
            class="bg-green-300 uppercase text-gray-900 text-xs font-extrabold py-3 px-5 rounded-3xl">
            Create post
        </a>
    </div>    
@endif



@foreach ($posts as $post)
    
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src={{ asset('images/'. $post->image_path) }}  alt="">
        </div>

        <div>
            <h2 class="text-gray-700 font-bold text-5xl pb-4"> 
                {{$post->title}}
            </h2>
            <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800"> {{$post->user->name}} </span>, Created on {{ date('jS M Y,', strtotime($post->updated_at)) }}
            </span>

            <p class="pt-8 pb-10 font-light text-gray-700 text-xl">
                {{$post->description}}    
            </p>

            <a 
                href="/blog/{{$post->slug}}"
                class="uppercase bg-green-300 text-gray-100 text-s font-extrabold py-1 px-4 rounded-xl">
                keep reading
            </a>

            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id )
                <span class="float-right">
                    <a 
                        href="/blog/{{ $post->slug}}/edit"
                        class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                        Edit                    
                    </a>
                </span>

                <span class="float-right">
                    <form 
                        action="/blog/{{$post->slug}}"
                        method="POST">
                        @csrf
                        @method('delete')

                        <button class="text-red-600 pr-4"
                            type="submit">
                                Delete
                        </button>

                    </form>
                </span>


            @endif



        </div>

    </div>
@endforeach




@endsection