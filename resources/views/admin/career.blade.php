<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<title>Carreras</title>
</head>
<body>
	<div class="container">
		<h1>ADMINISTRAR CARRERAS</h1>
		<table class="table table-stripped table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>NAME</th>
					<th>STATE</th>
				</tr>
			</thead>
			<tbody>
				@foreach($career as $st)
				<tr>
					<td>{{$st->id}}</td>
					<td>{{$st->name}}</td>
					<td>{{$st->state}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="row">
			<div class="col-m-12">
				{{$career -> render()}}
			</div>
		</div>
		
	</div>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>