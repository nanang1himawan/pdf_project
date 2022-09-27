
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="container" style="border: 2px solid rgb(0, 0, 0);">
	<div class="row" >
		<center>
		<h1>BELAJAR PDF LARAVEL </h1>
		</center>
	</div>
	<div class="row" >
	  <div class="col" style="border-right: 5px solid rgb(0, 0, 0)">
		<center>
		<div class="mb-3">{!! DNS2D::getBarcodeHTML('4445645656', 'QRCODE') !!}</div>
		</center>
	</div>
	  <div class="col">
		<h2>Haloo</h2>
		<h2>{{ $detail->nama }}</h2>
		<h2>{{ $detail->email }}</h2>
		<h2>{{ $detail->alamat }}</h2>
		<h2>{{ $detail->telepon }}</h2>
	  </div>
	</div>
  </div>
  