@extends ('admin.layouts.master')

@section ('content')
<div class="row">
	<section class="content">
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
					<h3 class="panel-title">Nuevo Usuario</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
                        <form method="POST" action="{{ route('Usuario.store') }}"  role="form">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre del Usuario">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="apellido" id="apellido" class="form-control input-sm" placeholder="Apellido del Usuario">
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="email" name="correo" id="correo" class="form-control input-sm" placeholder="Correo Electronico">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="sexo" id="sexo" class="form-control input-sm" placeholder="Sexo">
									</div>
								</div>
							</div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="edad" id="edad" class="form-control input-sm" placeholder="Edad del Usuario">
                                </div>
                            </div>
                        </div>
                        
							<div class="row">
 
								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
									<a href="{{ route('Usuario.index') }}" class="btn btn-info btn-block" >Atr??s</a>
								</div>	
 
							</div>
						</form>
					</div>
				</div>
 
			</div>
		</div>
	</section>
@endsection