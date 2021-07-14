@extends('layouts.app')

@section('content')
 
    <div class="w-4/5 m-auto text-left font-extrabold ">
        <div class="py-8">
            <h1 class="text-5xl">
                {{$post->title}}
            </h1>
        </div>
    </div>

    <div class="w-4/5 m-auto pt-3">
        <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800"> {{$post->user->name}} </span>, Created on {{ date('jS M Y,', strtotime($post->updated_at)) }}
        </span>

        <p class="pt-8 pb-10 font-light text-gray-700 text-xl">
            {{$post->description}}    
        </p>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br>


@endsection