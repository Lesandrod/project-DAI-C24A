<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">      <!-- Styles -->
</head>

<div class="row">
	<section class="row justify-content-center p-4">
		<div class="col-md-8 col-md-offset-2">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Editar Pelicula</h3>
				</div>
				<div class="card  bg-glass">					
				<div class="card-body p-4">
						
						<form method="POST" class="m-5" action="{{ route('membresiaadmin.update',$membresia->id) }}"  role="form">
						{{ csrf_field() }}
						<input name="_method" type="hidden" value="PATCH">
							<div class="row">
						<div class="form-group row m-2">
							<label for="nombre" class="col-4 col-form-label">Id de Usuario</label> 
							<div class="col-8">
							<input type="number" name="user_id" id="user_id" placeholder="Id de usuario" class="form-control" required="required" value="{{$membresia->user_id}}" readonly>
							</div>
						</div>
						<div class="form-group row m-2">
							<label for="director" class="col-4 col-form-label">Fecha de expedición</label> 
							<div class="col-8">
							<input type="date" name="f_expedicion" id="f_expedicion" placeholder="Fecha de expedición" class="form-control" required="required" value="{{$membresia->f_expedicion}}">
							</div>
						</div>
						<div class="form-group row m-2">
							<label for="actor1" class="col-4 col-form-label">Fecha de expiración</label> 
							<div class="col-8">
							<input type="date" name="f_expiracion" id="f_expiracion" placeholder="Fecha de expiración" class="form-control" required="required" value="{{$membresia->f_expiracion}}">
							</div>
						</div>
						<div class="form-group row m-2 " >

								<div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
									<input type="submit"  value="Actualizar" class="btn btn-success btn-block">
									<a href="{{ route('membresia.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	

							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</section>
</div>
