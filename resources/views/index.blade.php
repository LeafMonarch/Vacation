@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Would you like to go on a vacation?
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://www.planetware.com/wpimages/2020/05/cheap-tropical-vacations-koh-rong-cambodia.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Struggling to get the find the best vacation?
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                Do not worry...
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Our goal with this Vacation Blog is to ensure our customers' utmost satisfaction while keeping expenses to a minimum, accessible at all times and at any location.
            </p>

            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="background-image grid grid-cols-1 m-auto text-center p-15 bg-yellowish text-white">
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
            Carousel
        </span>

        <h2 class="text-4xl text-mycolor font-bold py-10">
            Best Moments
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Discover and explore our most favourite posts!
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

{{-- Additional Feature --}}

<div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 5</div>
      <img src="https://images.pexels.com/photos/22804/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="width:100%">
      <div class="text">Malaysia</div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">2 / 5</div>
      <img src="https://images.pexels.com/photos/259804/pexels-photo-259804.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="width:100%">
      <div class="text">Canada</div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">3 / 5</div>
      <img src="https://images.pexels.com/photos/2363/france-landmark-lights-night.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="width:100%">
      <div class="text">France</div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">4 / 5</div>
      <img src="https://images.pexels.com/photos/1650882/pexels-photo-1650882.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="width:100%">
      <div class="text">Ireland</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">5 / 5</div>
        <img src="https://images.pexels.com/photos/2607830/pexels-photo-2607830.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="width:100%">
        <div class="text">Australia</div>
      </div>
    
    {{-- <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a> --}}
    
    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
      <span class="dot" onclick="currentSlide(4)"></span> 
      <span class="dot" onclick="currentSlide(5)"></span> 
    </div>


    <script>
        // let slideIndex = 1;
        // showSlides(slideIndex);
        
        // function plusSlides(n) {
        //   showSlides(slideIndex += n);
        // }
        
        // function currentSlide(n) {
        //   showSlides(slideIndex = n);
        // }
        
        // function showSlides(n) {
        //   let i;
        //   let slides = document.getElementsByClassName("mySlides");
        //   let dots = document.getElementsByClassName("dot");
        //   if (n > slides.length) {slideIndex = 1}    
        //   if (n < 1) {slideIndex = slides.length}
        //   for (i = 0; i < slides.length; i++) {
        //     slides[i].style.display = "none";  
        //   }
        //   for (i = 0; i < dots.length; i++) {
        //     dots[i].className = dots[i].className.replace(" active", "");
        //   }
        //   slides[slideIndex-1].style.display = "block";  
        //   dots[slideIndex-1].className += " active";
        // }
        let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}

        
        </script>











@endsection