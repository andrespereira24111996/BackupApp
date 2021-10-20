@extends('admin.layouts.master')



@section('content')
<br><br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h5>Noticias</h5>
        </div>
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route ('Noticia.create')}}"> Crear Nueva Noticia</a>
        </div>
    </div>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Observacion</th>
        <th scope="col">Crear</th>
        <th scope="col">Actualizar</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($noticias as $noticia)
            
        
        <tr>
                <th>{{ $noticia->id }}</th>
                <td>{{ $noticia->descripcion }}</td>
                <td>{{ $noticia->observacion }}</td>
                <td>{{ $noticia->created_at }}</td>
                <td>{{ $noticia->updated_at }}</td>
                
                <td>
                    <a class="btn btn-info" href="">Show</a>
                    <a class="btn btn-primary" href="">Edit</a>
                    <a class="btn btn-danger" href="">Delete</a>
                </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection
