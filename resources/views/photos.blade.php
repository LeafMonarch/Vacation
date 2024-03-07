@extends('layouts.app')

@section('content')
    {{-- <div>
        <div class="flex bg-canada text-black pt-10">
            <img src = url(https://wallpapers.com/images/featured/malaysia-zicdqiz888if4861.jpg)/>
            <h2>Malaysia, Kuala Lumpur\n</h2></br>
            <h3>29th May 2024</h3>
        </div>  
    </div> --}}
    <html>
<head>
	<meta charset="utf-8"/>
	<title>beautiful image gallery using html only (no css used)</title>
</head>
<body>
	<div class="text-center p-15">
		<h1 class="font-sans-serif font-bold text-mycolor text-4xl" >VACATION GALLERY</h1>
	</div>

	<table align="center">
		<th class="text-center font-sans-serif font-bold text-mycolor text-2xl p-5">Malaysia</th>
		<tr>
			<td>
				<img src="https://wallpapercave.com/wp/wp1842874.jpg" height="350" width="400"/>
			</td>
			<td>
				<img src="https://wallpapercave.com/wp/wp1842875.jpg" height="350" width="400"/>
			</td>
			<td>
				<img src="https://wallpapercave.com/wp/wp1842876.jpg" height="350" width="400"/>
			</td>
		</tr>
		<th class="text-center font-sans-serif font-bold text-mycolor text-2xl p-5">Canada</th>
		<tr>
			<td>
				<img src="https://images.pexels.com/photos/1739264/pexels-photo-1739264.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" height="350" width="400"/>
			</td>
			<td>
				<img src="https://images.pexels.com/photos/2478248/pexels-photo-2478248.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" height="350" width="400"/>
			</td>
			<td>
				<img src="https://images.pexels.com/photos/9719409/pexels-photo-9719409.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" height="350" width="400"/>
			</td>
		</tr>
		<th class="text-center font-sans-serif font-bold text-mycolor text-2xl p-5">France</th>
		<tr>
			<td>
				<img src="https://images.pexels.com/photos/16823627/pexels-photo-16823627/free-photo-of-sunlight-over-seine-in-paris.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" height="350" width="400"/>
			</td>
			<td>
				<img src="https://images.pexels.com/photos/19236025/pexels-photo-19236025/free-photo-of-eiffel-tower-and-seine-at-night.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" height="350" width="400"/>
			</td>
			<td>
				<img src="https://images.pexels.com/photos/8430474/pexels-photo-8430474.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1 	" height="350" width="400"/>
			</td>
		</tr>
		<th class="text-center font-sans-serif font-bold text-mycolor text-2xl p-5">Ireland</th>
		<tr>
			<td>
				<img src="https://images.pexels.com/photos/18286222/pexels-photo-18286222/free-photo-of-medieval-church-building-in-killarney-in-ireland.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1 height="350" width="400"/>
			</td>
			<td>
				<img src="https://images.pexels.com/photos/18700219/pexels-photo-18700219/free-photo-of-stone-walls-of-lismore-castle.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" height="350" width="400"/>
			</td>
			<td>
				<img src="https://images.pexels.com/photos/15393843/pexels-photo-15393843/free-photo-of-scenic-photo-of-the-cliffs-of-moher-in-ireland.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" width="400"/>
			</td>
		</tr>
		<th class="text-center font-sans-serif font-bold text-mycolor text-2xl p-5">Australia</th>
		<tr>
			<td>
				<img src="https://images.pexels.com/photos/5698885/pexels-photo-5698885.jpeg?auto=compress&cs=tinysrgb&w=600" height="350" width="400"/>
			</td>
			<td>
				<img src="https://images.pexels.com/photos/7711689/pexels-photo-7711689.jpeg?auto=compress&cs=tinysrgb&w=600" height="350" width="400"/>
			</td>
			<td>
				<img src="https://images.pexels.com/photos/10572991/pexels-photo-10572991.jpeg?auto=compress&cs=tinysrgb&w=600" height="350" width="400"/>
			</td>
		</tr>
	</table>
</body>
</html>
@endsection