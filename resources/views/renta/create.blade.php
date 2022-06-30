<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<div class="roW m-4">
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
					<h3 class="panel-title">Nueva Renta</h3>
				</div>
				<div class="card  bg-glass">					
				<div class="card-body p-4">
						
						<form method="POST" class="m-5" action="{{ route('renta.store') }}"  role="form">
						{{ csrf_field() }}
						<div class="form-group row m-2">
							<label for="nombre" class="col-4 col-form-label">ID de Pelicula</label> 
							<div class="col-8">
							<input id="nombre" name="pelicula_id"  placeholder="ID de la película"  type="text" class="form-control" required="required">
							</div>
						</div>
						<div class="form-group row m-2">
							<label for="director" class="col-4 col-form-label"> ID de Usuario</label> 
							<div class="col-8">
							<input id="user_id" name="user_id" placeholder="ID de usuario" value="{{ Auth::user()->id }}"  type="text" class="form-control" readonly>
							</div>
						</div>
						
						<div class="form-group row m-2">
							<label for="director" class="col-4 col-form-label">Fecha de Registro</label> 
							<div class="col-8">
							<input id="f_registro" name="f_registro" type="date" class="form-control" required="required">
							</div>
						</div>

						<div class="form-group row m-2">
							<label for="actor1" class="col-4 col-form-label">Fecha de entrega</label> 
							<div class="col-8">
							<input id="f_entrega" name="f_entrega"  type="date" class="form-control" required="required">
							</div>
						</div>
						<div class="form-group row m-2">
							<label for="actor2" class="col-4 col-form-label">Fecha ed Devolucion</label> 
							<div class="col-8">
							<input id="f_devolucion" name="f_devolucion"  type="date" class="form-control" required="required">
							</div>
						</div> 
						<div class="form-group row m-2 " >

								<div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
									<a href="{{ route('pelicula.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	

							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</section>
</div>
