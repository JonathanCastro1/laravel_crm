@extends('layouts/main')

@section('title','Users')



@section('content')

@include('admin.navbar')

<br>
<br>
<br>



<div class="row col-md-6 col-md-offset-2">

	<div class="page-header">

		<p class="bg-danger">

		</p>	
		
		
		<h1>Users <small>Laravel CRM</small></h1>
	</div>

	<div>				
		<a  href="{{route('add')}}" ><span class="btn-success btn-xs glyphicon glyphicon glyphicon-plus" ></span></a>
		<a><span class="btn-default  btn-xs glyphicon glyphicon-print" >Print</span></a>		
	</div>

	<br>



	<table id="table"class="table table-responsive table-hover table-striped" >    
		
		<thead>
			<tr>
				<th >#</th>
				<th >First_Name</th>
				<th >Last_Name</th>
				<th >Email</th>
				<th >State</th>
				<th >Users</th>				
				<th >Actions</th>		                          
				
			</tr>
		</thead>

		<tbody>

			@foreach($datos as $data)

			<tr>

				<td>{{$data->id}} </td>
				<td>{{$data->first_name}} </td>
				<td>{{$data->last_name}} </td>	
				<td>{{$data->email}} </td>	
				<td>{{$data->state}} </td>	
				<td>{{$data->user}} </td>				
				
				<td >
					<a  href="" ><span class="btn-primary btn-xs glyphicon glyphicon-zoom-in" data-toggle="view" title="View" ></span></a>

					<a  href="" ><span class="btn-success btn-xs glyphicon glyphicon glyphicon-pencil" data-toggle="edit" title="Edit"  ></span></a>

					<a id="deleted"  href="" ><span class="btn-danger btn-xs glyphicon glyphicon-trash" data-toggle="deleted" title="Deleted" ></span></a>
				</td>


			</tr>


			@endforeach
		</tbody>

	</table>

	<br>
	<br>
	<br>
</div>



<script type="text/javascript">
	// function approved(evt){
		
	// 	var confirms;
		
	// 	confirms=confirm("you are sure to approve this project?");

	// 	if (confirms) {        
			
	// 	} else {
			
	// 		event.preventDefault();
			
	// 	}

	// }

	// function rejected(evt){
		
	// 	var confirms;
		
	// 	confirms=confirm("You are sure to reject this project?");

	// 	if (confirms) {        
			
	// 	} else {
			
	// 		event.preventDefault();
			
	// 	}

	// } 


	// function deleted(evt){
		
	// 	var confirms;
		
	// 	confirms=confirm("Are you sure to delete this record?");

	// 	if (confirms) {        
			
	// 	} else {
			
	// 		event.preventDefault();
			
	// 	}

	// }                    
</script>


@endsection