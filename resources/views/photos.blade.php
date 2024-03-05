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
	<font face="sans-serif" color="#017bf5" size="5" align="center">
		<h1>BEAUTIFUL IMAGE GALLERY</h1>
	</font>
	<font face="sans-serif" color="#444" size="3" align="center">
		<h1>USING HTML ONLY (NO CSS USED)</h1>
	</font>

	<table align="center">
		<th>Malaysia</th>
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
		<th>Canada</th>
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
		<th>France</th>
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
		<th>Ireland</th>
		<tr>
			<td>
				<img src="https://images.pexels.com/photos/18286222/pexels-photo-18286222/free-photo-of-medieval-church-building-in-killarney-in-ireland.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1 height="350" width="400"/>
			</td>
			<td>
				<img src="11.jpg" height="350" width="400"/>
			</td>
			<td>
				<img src="12.jpg" height="350" width="400"/>
			</td>
		</tr>
		<th>Australia</th>
		<tr>
			<td>
				<img src="10.jpg" height="350" width="400"/>
			</td>
			<td>
				<img src="11.jpg" height="350" width="400"/>
			</td>
			<td>
				<img src="12.jpg" height="350" width="400"/>
			</td>
		</tr>
	</table>
</body>
</html>
@endsection