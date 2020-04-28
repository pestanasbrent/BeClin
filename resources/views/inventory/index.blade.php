@extends('layouts.adminmain')
@section('title', 'View Medicine Inventory')
@section('content')
		
		<div class="container-fluid"><br/>
			<h1 align="center">Medicine List</h1>
			@if(session('successMsg'))	
				<div class="alert alert-success">
						{{ session ('successMsg')}}
				</div>
			@endif
			<table class="table">
				<thead>
					<th>Medicine ID</th>
					<th>Generic Name</th>
					<th>Brand Name</th>
					<th>Dosage</th>
					<th>Description</th>
					<th>Stock</th>
					<th>Created At</th>
					<th>Updated At</th>
					<th>Actions</th>
				</thead>
				<tbody>
						@foreach($records as $item)	
						<tr>
							<td>{{$item->id}}</td>
							<td>{{$item->generic_name}}</td>
							<td>{{$item->brand_name}}</td>
							<td>{{$item->dose}}</td>
							<td>{{$item->description}}</td>
							<td>{{$item->stock}}</td>
							<td>{{$item->created_at}}</td>
							<td>{{$item->updated_at}}</td>
							<td>
								<a href="{{ route('inventory_edit', $item->id)}}" class="btn btn-sm btn-info" >
									<i class="fa fa-edit"></i>
								</a>
								<form method="POST" action="{{ route('inventory_delete', $item->id) }}">
									{{ csrf_field() }}
									{{ method_field('delete') }}

									<button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?');" >
										<i class="fa fa-trash"></i> 
									</button>
								</form>
							</td>
						</tr>
						@endforeach

				</tbody>
			</table>
			{{ $records->links()}}
		</div>
@endsection