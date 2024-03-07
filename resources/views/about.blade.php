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
            <img src="https://www.planetware.com/wpimages/2020/05/cheap-tropical-vacations-koh-rong-cambodia.jpg" width="700" alt="">
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

    <div class="text-center p-15 bg-yellowish text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            We are available at...
        </h2>

        
        <span class="font-extrabold block text-4xl py-1">
            Malaysia
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Canada
        </span>
        <span class="font-extrabold block text-4xl py-1">
            France
        </span>
        <span class="font-extrabold block text-4xl py-1">
           Ireland
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Australia
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Discover and explore our most recent posts!
        </p>
    </div>

    {{-- <div class="recentpost-container">
    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-canada text-gray-100 pt-10" style="background-image: url(https://imgproxy.natucate.com/f658kHUpVe82wlR2RkwDBSaJe7oQQgw9BVP2XiWBPwU/rs:fill/g:ce/w:3500/h:1969/aHR0cHM6Ly93d3cubmF0dWNhdGUuY29tL21lZGlhL3BhZ2VzL3JlaXNlemllbGUvZTFhY2RhNjMtYzY2Ny00MWUwLWIyZWMtZjlkODcyZGYyNTMwL2NjOTcxNDk4ZTUtMTY3OTQ4NjgzNi9rYW5hZGEtbGFlbmRlcmluZm9ybWF0aW9uZW4tcm9ja3ktbW91bnRhaW5zLWJlcmdlLXNlZS1uYXR1Y2F0ZS5qcGc)">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    Canada
                </span>

                <h3 class="text-xl font-bold py-10">
                    Canada is the second-largest country in the world by land area, located in North America, stretching from the Atlantic Ocean in the east to the Pacific Ocean in the west, and northward into the Arctic Ocean.s
                </h3>

                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
    </div>
    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-canada text-gray-100 pt-10" style="background-image: url(https://imgproxy.natucate.com/f658kHUpVe82wlR2RkwDBSaJe7oQQgw9BVP2XiWBPwU/rs:fill/g:ce/w:3500/h:1969/aHR0cHM6Ly93d3cubmF0dWNhdGUuY29tL21lZGlhL3BhZ2VzL3JlaXNlemllbGUvZTFhY2RhNjMtYzY2Ny00MWUwLWIyZWMtZjlkODcyZGYyNTMwL2NjOTcxNDk4ZTUtMTY3OTQ4NjgzNi9rYW5hZGEtbGFlbmRlcmluZm9ybWF0aW9uZW4tcm9ja3ktbW91bnRhaW5zLWJlcmdlLXNlZS1uYXR1Y2F0ZS5qcGc)">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    Canada
                </span>

                <h3 class="text-xl font-bold py-10">
                    Canada is the second-largest country in the world by land area, located in North America, stretching from the Atlantic Ocean in the east to the Pacific Ocean in the west, and northward into the Arctic Ocean.s
                </h3>

                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
    </div>
</div> --}}
<div class="recentpost-container flex gap-20 w-4/5 m-auto">
    <div class="sm:grid grid-cols-2 w-full">
        <div class="flex bg-canada text-gray-100 pt-10" style="background-image: url(https://imgproxy.natucate.com/f658kHUpVe82wlR2RkwDBSaJe7oQQgw9BVP2XiWBPwU/rs:fill/g:ce/w:3500/h:1969/aHR0cHM6Ly93d3cubmF0dWNhdGUuY29tL21lZGlhL3BhZ2VzL3JlaXNlemllbGUvZTFhY2RhNjMtYzY2Ny00MWUwLWIyZWMtZjlkODcyZGYyNTMwL2NjOTcxNDk4ZTUtMTY3OTQ4NjgzNi9rYW5hZGEtbGFlbmRlcmluZm9ybWF0aW9uZW4tcm9ja3ktbW91bnRhaW5zLWJlcmdlLXNlZS1uYXR1Y2F0ZS5qcGc)">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    Canada
                </span>

                <h3 class="text-xl font-bold py-10">
                    Canada is the second-largest country in the world by land area, located in North America, stretching from the Atlantic Ocean in the east to the Pacific Ocean in the west, and northward into the Arctic Ocean.s
                </h3>

                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        {{-- <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div> --}}
    </div>
    <div class="sm:grid grid-cols-2 w-full">
        <div class="flex bg-canada text-gray-100 pt-10" style="background-image: url(https://imgproxy.natucate.com/f658kHUpVe82wlR2RkwDBSaJe7oQQgw9BVP2XiWBPwU/rs:fill/g:ce/w:3500/h:1969/aHR0cHM6Ly93d3cubmF0dWNhdGUuY29tL21lZGlhL3BhZ2VzL3JlaXNlemllbGUvZTFhY2RhNjMtYzY2Ny00MWUwLWIyZWMtZjlkODcyZGYyNTMwL2NjOTcxNDk4ZTUtMTY3OTQ4NjgzNi9rYW5hZGEtbGFlbmRlcmluZm9ybWF0aW9uZW4tcm9ja3ktbW91bnRhaW5zLWJlcmdlLXNlZS1uYXR1Y2F0ZS5qcGc)">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    Canada
                </span>

                <h3 class="text-xl font-bold py-10">
                    Canada is the second-largest country in the world by land area, located in North America, stretching from the Atlantic Ocean in the east to the Pacific Ocean in the west, and northward into the Arctic Ocean.s
                </h3>

                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        {{-- <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div> --}}
    </div>
</div>
@endsection