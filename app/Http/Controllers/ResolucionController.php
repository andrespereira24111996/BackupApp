<?php

namespace App\Http\Controllers;



use App\Resolucion;
use Illuminate\Http\Request;





class ResolucionController extends Controller
{
    /**
     * Mostrar una lista del recurso.
     *
     * @return \Illuminate\Http\Response
     */
   
     
    public function index()
    {
        
    //
         $resoluciones=Resolucion::orderBy('id','DESC')->paginate(5);
        return view('Resoluciones.index',compact('resoluciones')); 
     
      
      
    }

    /**
     * Muestre el formulario para crear un nuevo recurso.
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        
        return view('Resoluciones.create'); 
    }

    /**
     * Almacene un recurso recién creado en el almacenamiento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {

    
      $this->validate($request,[ 'nro_resolucion'=>'required', 'descripcion'=>'required']);
      Resolucion::create($request->all());
      return redirect()->route('Resoluciones.index')->with('success','Registro creado satisfactoriamente');
    
      $resoluciones=Resolucion::orderBy('id','DESC')->paginate(5);
      return view('Resoluciones.index',compact('resoluciones')); 
}

    /**
     * Mostrar el recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resoluciones=Resolucion::find($id);
        return  view('Resoluciones.show',compact('resoluciones')); 
    }

    

    /**
     * Mostrar el formulario para editar el recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resolucion=resolucion::find($id);
        return view('Resoluciones.edit',compact('resolucion'));

    }

    /**
     * Actualizar el recurso especificado en el almacenamiento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     /**Actualizar Resoluciones*/
     $this->validate($request,[ 'nro_resolucion'=>'required', 'descripcion'=>'required']); 
     resolucion::find($id)->update($request->all());
     return redirect()->route('Resoluciones.index')->with('success','Registro actualizado satisfactoriamente');
 
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /**Eliminar Resoluciones*/
        Resolucion::find($id)->delete();
        return redirect()->route('Resoluciones.index')->with('success','Registro eliminado satisfactoriamente');
    }
}