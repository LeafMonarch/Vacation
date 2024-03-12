@extends('layouts.app')

@section('content')
<html>
	<style>
	* {
	  box-sizing: border-box;
	}
	
	body {
	  margin: 0;
	  font-family: Arial;
	}
	
	.header {
	  text-align: center;
	  padding: 32px;
	}
	
	.row {
	  display: -ms-flexbox; /* IE10 */
	  display: flex;
	  -ms-flex-wrap: wrap; /* IE10 */
	  flex-wrap: wrap;
	  padding: 0 4px;
	}
	
	/* Create four equal columns that sits next to each other */
	.column {
	  -ms-flex: 25%; /* IE10 */
	  flex: 25%;
	  max-width: 25%;
	  padding: 0 4px;
	}
	
	.column img {
	  margin-top: 8px;
	  vertical-align: middle;
	  width: 100%;
	}

	.column img:hover{
		transition: transform .6s;
		transform: scale(1.02);
	}
	
	/* Responsive layout - makes a two column-layout instead of four columns */
	@media screen and (max-width: 800px) {
	  .column {
		-ms-flex: 50%;
		flex: 50%;
		max-width: 50%;
	  }
	}
	
	/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
	@media screen and (max-width: 600px) {
	  .column {
		-ms-flex: 100%;
		flex: 100%;
		max-width: 100%;
	  }
	}
	</style>
	<body>
	
	<!-- Header -->
	<div class="text-center p-15 bg-darkerdark" style="background-image: url(https://wallpapercave.com/wp/wp4676582.jpg)">
		<div class="header">
	  		<h1 class="font-sans-serif font-bold text-white text-4xl">Image Gallery</h1>
	  		<p class="font-sans-serif font-bold text-white text-xl">Enjoy the magnificent scenery of various countries.</p>
		</div>
	</div>
	
	<!-- Photo Grid -->
	<div class="row"> 
	  <div class="column">
		<img src="https://images.unsplash.com/photo-1508062878650-88b52897f298?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bWFsYXlzaWF8ZW58MHx8MHx8fDA%3D" style="width:100%">
		<img src="https://wallpapercave.com/wp/wp1842874.jpg" style="width:100%">
		<img src="https://images.pexels.com/photos/2097603/pexels-photo-2097603.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="width:100%">
		<img src="https://wallpapercave.com/wp/wp1842875.jpg" style="width:100%">
		<img src="https://wallpapercave.com/wp/wp1842876.jpg" style="width:100%">
	  </div>
	  <div class="column">
		<img src="https://images.pexels.com/photos/1739264/pexels-photo-1739264.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="width:100%">
		<img src="https://images.unsplash.com/photo-1509118796018-30cc4ce216f1?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fGNhbmFkYXxlbnwwfHwwfHx8MA%3D%3D" style="width:100%">
		<img src="https://images.pexels.com/photos/2478248/pexels-photo-2478248.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="width:100%">
		<img src="https://images.pexels.com/photos/910307/pexels-photo-910307.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="width:100%">
		<img src="https://images.pexels.com/photos/9719409/pexels-photo-9719409.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="width:100%">
	  </div>  
	  <div class="column">
		<img src="https://burst.shopifycdn.com/photos/the-eiffel-tower-paris.jpg?width=1000&format=pjpg&exif=0&iptc=0" style="width:100%">
		<img src="https://images.pexels.com/photos/548077/pexels-photo-548077.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="width:100%">
		<img src="https://images.pexels.com/photos/16823627/pexels-photo-16823627/free-photo-of-sunlight-over-seine-in-paris.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="width:100%">
		<img src="https://images.pexels.com/photos/19236025/pexels-photo-19236025/free-photo-of-eiffel-tower-and-seine-at-night.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="width:100%">
		<img src="https://images.pexels.com/photos/8430474/pexels-photo-8430474.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="width:100%">
	  </div>
	  <div class="column">
		<img src="https://images.pexels.com/photos/18286222/pexels-photo-18286222/free-photo-of-medieval-church-building-in-killarney-in-ireland.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="width:100%">
		<img src="https://images.pexels.com/photos/1650824/pexels-photo-1650824.jpeg?auto=compress&cs=tinysrgb&w=600" style="width:100%">
		<img src="https://images.pexels.com/photos/18700219/pexels-photo-18700219/free-photo-of-stone-walls-of-lismore-castle.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="width:100%">
		<img src="https://images.pexels.com/photos/1208781/pexels-photo-1208781.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="width:100%">
		<img src="https://images.pexels.com/photos/15393843/pexels-photo-15393843/free-photo-of-scenic-photo-of-the-cliffs-of-moher-in-ireland.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="width:100%">
	  </div>
	</div>
	{{-- <div class="column">
		<img src="https://images.pexels.com/photos/5698885/pexels-photo-5698885.jpeg?auto=compress&cs=tinysrgb&w=600" style="width:100%">
		<img src="https://images.pexels.com/photos/7711689/pexels-photo-7711689.jpeg?auto=compress&cs=tinysrgb&w=600" style="width:100%">
		<img src="https://images.pexels.com/photos/10572991/pexels-photo-10572991.jpeg?auto=compress&cs=tinysrgb&w=600" style="width:100%">
	  </div> --}}
	
	</body>
	</html>
@endsection