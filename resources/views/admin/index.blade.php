@extends('template.index')
@section('content')

<div class="card mt-4">
	
	<div class="card-header">
		<a href="{{route('student.create')}}" class="btn btn-primary ">Create Student</a>
	</div>
	<div class="card-body">
			 <table class="table table-stripped table-bordered">
				<thead>
					<tr>
						<th>CODE</th>
						<th>NAME</th>
						<th>CAREER</th>
						<th>ACTION</th>
					</tr>
				</thead>
				<tbody>
					@foreach($student as $st)
					<tr>
						<td>{{$st->code}}</td>
						<td>{{$st->name}}</td>
						<td>{{$st->career}}</td>
						<td>
							<a href="{{route('student.edit', $st->id)}}" class="btn btn-info">
								<icon class="fa fa-edit"></icon>
							</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div class="row">
				<div class="col-m-12">
					{{$student -> render()}}
				</div>
			</div>
	</div>
</div>

	  
@endsection