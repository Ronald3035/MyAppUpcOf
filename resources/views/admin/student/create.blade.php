@extends('template.index')
@section('content')
		
		<form action="{{route('student.store')}}" method="POST">
			<div class="card mt-4">
				<div class="card-header">
					<h3>Create Student</h3>
				</div>
				<div class="card-body">
					

					<div class="row">
						<div class="class col-md-4">
							<label>Name</label>
							<input type="text" class="form-control" name="name"/>
						</div>
						<div class="class col-md-4">
							<label>Code</label>
							<input type="text" class="form-control" name="code"/>
						</div>
						<div class="class col-md-4">
							<label>Career</label>
							<input type="text" class="form-control" name="career"/>
						</div>
					</div>

					<div class="row mt-3">

						<div class="col-md-8">
							<!--espacio de 8 columnas para llevar lo botones a la derecha-->
						</div>
						<div class="col-md-2">
							<input type="submit" class="btn btn-success btn-block " value="Registrer">
						</div>
						<div class="col-md-2">
							<input type="button" class="btn btn-danger btn-block" value="Cancel">
						</div>		
					</div>

				</div>

			</card>
			
		</form>
@endsection