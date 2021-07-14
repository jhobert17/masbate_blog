@extends('layouts.app')

@section('content')
    

    <div class="background-image grid grid-cols-1">
        <div class="flex text-gray-900 pt-10">
            <div class="m-auto pt-4 pb-16 w-4/5 block text-center text-6xl  font-extrabold">
                <h1>
                    MASBATE BEACH
                </h1>
            </div>
        </div>
    </div>

    <br><br>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
            <div>
                <img src="https://thehappytrip.com/wp-content/uploads/2020/02/Sandbar_view.jpg" width="500px" alt="">
            </div>

            <div class="m-auto sm:m-auto text-left w-4/5 block">
                <h2 class="text-4xl font-extrabold text-gray-600"> 
                    Masbate Beach
                </h2>
    
                <p class="py-8 text-gray-500 text-l">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
    
                <p class="font-extrabold text-gray-600 text-l pb-9">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, in nostrum ut voluptatum hic
                </p>

                <a 
                    href="/blog"
                    class="uppercase bg-green-300 text-gray-100 text-s font-extrabold py-1 px-4 rounded-xl">
                    See More
                </a>
    
            </div>

    </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

@endsection
