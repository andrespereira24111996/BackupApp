<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $usuarios = usuario::orderBy('id','DESC')->paginate(10);
      return view ('Usuarios.index',compact('usuarios'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Usuarios.create'); 
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
//
    $this->validate($request,[ 'nombre'=>'required',
     'apellido'=>'required', 
     'correo'=>'required', 
     'sexo'=>'required',
     'edad'=>'required']
    );
    Usuario::create($request->all());
    //return redirect()->route('Usuarios.index')->with('success','Registro creado satisfactoriamente');
   
    $msg='Registro creado satisfactoriamente'; 
    
    $usuarios=usuario::orderBy('id','DESC')->paginate(10);
    return view ('Usuarios.index',compact('usuarios', 'msg' ));
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $usuarios=Usuario::find($id);
        return  view('Usuarios.show',compact('usuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[ 'nombre'=>'required', 'apellido'=>'required', 'correo'=>'required', 'sexo '=>'required', 'edad'=>'required']);
        usuario::find($id)->update($request->all());
        return redirect()->route('Usuarios.index')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Usuario::find($id)->delete();
        return redirect()->route('Usuarios.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
