@extends('layouts.app')

@section('content')
<div class="background-image grid grid-cols-1 m-auto" style="background-image: url(https://i.pinimg.com/originals/4d/b3/91/4db391271d521a2e8f5dcbf5ed892996.jpg)">
    <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    How to Contact US
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
            <img src="https://images.pexels.com/photos/16603873/pexels-photo-16603873/free-photo-of-lens-on-a-desk.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Contact Method
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                Down Below:
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Facebook</br><a href="www.facebook.com" target=_blank>www.facebook.com</a>
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Instagram</br><a href="www.instagram.com" target=_blank>www.instagram.com</a>
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                LinkedIn</br><a href="www.linkedin.com" target=_blank>www.linkedin.com</a>
            </p>

            {{-- <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a> --}}
        </div>
    </div>

    <div class="background-imagecontact text-center p-15 bg-yellowish text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            We are available at...
        </h2>

        
        <span class="font-extrabold block text-4xl py-1">
            Mon - 9:00 - 15:00
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Tues - 9:00 - 15:00
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Wed - 9:00 - 15:00
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Thu - 9:00 - 15:00
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Fri - 9:00 - 17:00
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Sat - 10:00 - 15:00
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Sun - 10:00 - 1:00
        </span>
    </div>

    <div class="text-center py-15">
        {{-- <span class="uppercase text-s text-gray-400">
            Blog
        </span> --}}

        <h2 class="text-4xl text-gray-600 font-bold py-10">
            Location
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            If you have any enquiries, please do not hesitate to contact us!
        </p>
    </div>


<div class="iframe">
    <iframe src="https://www.google.com/maps/d/embed?mid=1opOwF83Zw-Tv1ZVaY7FHET1F_K4&hl=en&ehbc=2E312F" width="90%" height="480"></iframe>
</div>
@endsection