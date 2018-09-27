<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--  configuro el titulo que tendra cada vista --}}
	<title>@yield('title')</title>

	<script src="{!! asset('assets/lib/js/jquery.js') !!}"></script>

	<script src="{!! asset('assets/lib/js/jquery.dataTables.min.js') !!}"></script>
	

	{{-- <link href="{{assets('/lib/css/bootstrap.min.css')}}" rel="stylesheet"> --}}
	<link rel="stylesheet" href="{!! asset('assets/lib/css/bootstrap.min.css') !!}">
	{{-- <link rel="stylesheet" type="text/css" href="assets/lib/css/bootstrap.min.css"> --}}

	{{--  font awezone estilos, copiar la carpeta webfonts en tu proyecto debe estar
	al mismo nivel de carpetas que los css  --}}
	<link rel="stylesheet" href="{!! asset('assets/lib/css/fontawesome-all.css') !!}">

	{{--  Datepicker estilos --}}
	<link rel="stylesheet" href="{!! asset('assets/lib/css/jquery-ui.css') !!}">


	{{--  Tabla estilos --}}
	<link rel="stylesheet" href="{!! asset('assets/lib/css/jquery.dataTables.min.css') !!}">
	

	{{-- <link rel="stylesheet" href="{!! asset('assets/css/styles_sidebar.css') !!}"> --}}

	{{-- <link rel="stylesheet" href="{!! asset('assets/css/styles_content.css') !!}"> --}}


	{{--  HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --}}
    {{--  WARNING: Respond.js doesn't work if you view the page via file://  --}}
    {{-- [if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif] --}}		
	
	<script type="text/javascript">
	   {{--   var app = @json($array);--}}
	</script>
	
</head>
<body>

	
		{{-- el contenido que mostrare --}}
		@yield('content')


		@show
       {{-- fin content --}}
	
 


   {{--  google charts --}}
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

   <script src="{!! asset('assets/lib/js/moment.js') !!}"></script>

   {{-- Datepicker js  --}}
   <script src="{!! asset('assets/lib/js/jquery-ui.js') !!}"></script>    
  

   <script src="{!! asset('assets/lib/js/bootstrap.min.js') !!}"></script>  

   {{-- <script src="assets/lib/js/bootstrap.min.js"></script> --}}   

   <script src="{!! asset('js/datepicker.js') !!}"></script>  

   <script src="{!! asset('js/table.js') !!}"></script>

  {{--  <script src="assets/js/shop.js"></script> --}}


</body>
</html>