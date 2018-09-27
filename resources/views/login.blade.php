@extends('layouts/main')

@section('title','Login')

@section('content')

<br>
<br>
<br>


<div class="login row page-header  col-md-6 col-lg-6 col-md-offset-3">

	{{-- 	preguntamos si existe info, y imprimimos el menssaje --}}
	{{--  @if(session()->hash('info')) --}}

	{{--  @if(session('info')===true) --}}
		<p class="bg-success">

			{{-- {{ session('info') }} --}}

		</p>
	{{-- @endif --}}

	<p class="bg-success">


	</p>



	<h2 class="fas fa-building">Login Laravel CRM</h2>
</div>

<div class="row col-md-6 col-lg-6 col-md-offset-3 ">

	
	{{-- {!! Form::open(['method'=>'POST', 'action'=> '']) !!}	 --}}
	<form action=" " method="POST" >	

	<div class="form-group">

		<input type="text" name="user" placeholder="Username" class="form-control" id="usuario">
		<div class="text-danger"></div>
	</div>	

	<div class="form-group">

		<input type="password" name="password" placeholder="*******" class="form-control" id="contrasena">
		<div class="text-danger"></div>
	</div>

	<div class="form-group" >		
		<select name="role" class="form-control " id="role">
			<option value="0">Select Role</option>					
		</select>
		<div class="text-danger"></div>
	</div>

	<div class="form-group">
		<button type="submit" name="submit" value="submit" class="btn-primary btn-sm glyphicon glyphicon-ok" >Login</button>
		<button type="reset" class="btn-danger btn-sm glyphicon glyphicon-remove">Cancel</button>
	</div>

	<div class="form-group">
		<a href="">Lost Password?</a>			
		<a href="{{route('register')}}">Register</a>
	</div>


</form>

{{-- {!! Form::close() !!} --}}

<br>
<br>
<br>
<br>

</div>

@endsection

