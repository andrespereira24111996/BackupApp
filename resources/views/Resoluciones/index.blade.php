@extends('admin.layouts.master')

@section('content')


/*
|--------------------------------------------------------------------------
| Está vista mostrara los datos almacenados de las Resoluciones
|--------------------------------------------------------------------------
*/

<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Resoluciones</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('Resolucion.create') }}" class="btn btn-info" >Añadir Resolución</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nro de Resolución</th>
               <th>Descripción</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($resoluciones->count())  
              @foreach($resoluciones as $resolucion)  
              <tr>
                <td>{{$resolucion->nro_resolucion}}</td>
                <td>{{$resolucion->descripcion}}</td>
               
                <td><a class="btn btn-primary btn-xs" href="{{action('ResolucionController@edit', $resolucion->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('ResolucionController@destroy', $resolucion->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
 
                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No existe registro !!</td>
              </tr>
              @endif
            </tbody>
 
          </table>
        </div>
      </div>
      {{ $resoluciones->links() }}
    </div>
  </div>
</section>
@endsection
