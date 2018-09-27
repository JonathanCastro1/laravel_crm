@extends('layouts/main')

@section('title','add')

@section('content')

@include('admin.navbar')

<br>
<br>

<div class="row page-header col-md-6 col-md-offset-3 ">	
	<h2 class="fas fa-users">Register Users</h2>
</div>

<div class="row col-md-6 col-md-offset-3 ">


	{{-- {!! Form::open(['method'=>'POST', 'action'=> 'Register@index']) !!}	 --}}

	{{-- esta forma es valida --}}
	{{-- <form action="registeruser" method="POST" > --}}

	<form action="{{route('registeruser')}}" method="POST" >		

		<div class="form-group">

			<input type="text" name="first_name" placeholder="First Name" class="form-control" >
			<div class="text-danger"></div>
		</div>

		<div class="form-group">

			<input type="text" name="last_name" placeholder="Last Name" class="form-control">
			<div class="text-danger"></div>
		</div>


		<div class="form-group">

			<input type="text" name="email" placeholder="Email" class="form-control" >
			<div class="text-danger"></div>
		</div>

		<div class="form-group">			

			<select class="form-control" name="state" id="state">
				<option value="0">Select State</option>								
			</select>
			<div class="text-danger"></div>			
		</div>	


		<div class="form-group">

			<input type="text" name="user" placeholder="Username" class="form-control">
			<div class="text-danger"></div>
		</div>			

		<div class="form-group">

			<input type="password" name="password" placeholder="Password" class="form-control">
			<div class="text-danger"></div>
		</div>		


		<div class="form-group">
			<button type="submit" name="submit" value="submit" class="btn-primary btn-sm glyphicon glyphicon-ok">Register</button>
			<button type="reset" class="btn-danger btn-sm glyphicon glyphicon-remove">Cancel</button>
		</div>

		<div class="form-group">
			<a href="{{route('users')}}"><span class="btn-default btn-sm glyphicon glyphicon-arrow-left">Back</span></a>
		</div>


	</form>		

	{{-- {!! Form::close() !!}	 --}}

	<br>
	<br>
	<br>
	<br>	
</div>

@endsection