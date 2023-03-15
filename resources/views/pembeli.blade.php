<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bukawarung</title>
	<link rel="stylesheet" href="css/pembeli.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>

<body>
	<!-- header -->
	<header>
		<h1>Pembeli</h1>
	</header>

	<!-- new product -->
	<div class="section">
		<div class="container">
			<h3>Produk</h3>
			@foreach($pembeli as $data)
			<div class="box">
				<tr>
					<div class="col-4">
						<p>{{$data['username']}}</p>
						<p>{{$data['email']}}</p>
					</div>
				</tr>
			</div>
			@endforeach
		</div>
	</div>

</body>

</html>