@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto" style="background-image: url(https://wallpapercg.com/download/lakeside-3840x2160-4584.png)">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    About Laravel Vacation Blog Post
                </h1>
                {{-- <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a> --}}
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="images/threepeople.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                The Laravel Vacation Blog
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                What is the Laravel Vacation Blog
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                The Laravel Vacation Blog comprised of several talented individual working behind the scene, aim to bring the most satisfaction to anyone lucky enough to stumble on our website.
            </p>

            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="background-imageabout text-center p-15 bg-magentaa text-white ">
        <h2 class="text-2xl pb-5 text-l"> 
            Our Team Members...
        </h2>

        
        <span class="font-extrabold block text-4xl py-1">
            Yee Chean Chang
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Jamie Duffy Creagh
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Raphael Frogoso
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Chang Yee Chean
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Chean Yee Chang
        </span>
    </div>

    <div class="yt">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/OCzzN8VZgfY?si=lDY91eBQ4P-goe0x" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
   </div>
@endsection