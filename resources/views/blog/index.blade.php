@extends('layouts.app')

@section('content')
{{-- <div class="w-4/5 m-auto text-center text-white bg-cyan" style="background-image: url('https://wallpapercave.com/wp/wp4676582.jpg')"> --}}
    <div class="w-my m-auto text-center text-white bg-cyan">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Blog Posts
        </h1>
    </div>
</div>

@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif


@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4 text-left pl-1">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

{{-- <form action="{{ route('blog.index') }}" method="GET" class="w-4/5 m-auto mt-5 text-right">
    <label for="sort">Sort by:</label>
    <select name="sort" id="sort" onchange="this.form.submit()">
        <option value="">Select</option>
        <option value="season_asc" @if(request('sort') == 'season_asc') selected @endif>Season (Ascending)</option>
        <option value="season_desc" @if(request('sort') == 'season_desc') selected @endif>Season (Descending)</option>
        <option value="date_asc" @if(request('sort') == 'date_asc') selected @endif>Date (Ascending)</option>
        <option value="date_desc" @if(request('sort') == 'date_desc') selected @endif>Date (Descending)</option>
    </select>

    <label for="toseasonpic">Filter by Season:</label>
    <select name="season" id="season" onchange="this.form.submit()">
        <option value="all">All Seasons</option>
        @foreach($seasons as $season)
            <option value="{{ $season }}" @if(request('season') == $season) selected @endif>{{ $season }}</option>
        @endforeach
    </select>
</form> --}}

@if (Auth::check())
    <div class="pt-15 w-4/5 m-auto">
        <a 
            href="/blog/create"
            class="bg-green-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
            Create post
        </a>
    </div>
@endif






@foreach ($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="{{ asset('images/' . $post->image_path) }}" alt="">
        </div>
        <div>
            <h2 class="text-gray-700 font-bold text-5xl pb-4">
                {{ $post->title }}
            </h2>

            <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span>
            
            <p class="text-gray-500 my-2">
                <span class="font-bold italic text-gray-800">{{ $post->season }} season</span> 
            </p>

            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{ $post->description }}
            </p>

            <a href="/blog/{{ $post->slug }}" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Keep Reading
            </a>

            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
            <div class="deleteandedit">
                <span class="float-right">
                    <a 
                        href="/blog/{{ $post->slug }}/edit"
                        class="text-white text-l bg-green-500 p-1 rounded-sm">
                        Edit
                    </a>
                </span>

                <span class="float-right">
                     <form 
                        action="/blog/{{ $post->slug }}"
                        method="POST">
                        @csrf
                        @method('delete')

                        <button
                            class="text-white text-l bg-red-500 mr-3 p-1 rounded-sm"
                            type="submit">
                            Delete
                        </button>

                    </form>
                </span>
            </div>
            @endif
        </div>
    </div>    
@endforeach

@endsection