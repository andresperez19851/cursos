<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;
use Validator;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $docentes = Docente::all();
        return view('docentes.index', compact('docentes'));
             
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            
        return view('docentes.create');      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Docente $docente)
    {
      
        return view('docentes.edit', compact('docente'));
    
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          
        $validator = Validator::make($request->all(), [
            'nombre'=> 'required',
            'documento'=> 'required',
            'correo'=> 'required|email'

        ]);
        if($validator->fails()){
            return $validator->errors();
        }
        
        $docente = new Docente();
        $docente->nombre = $request->nombre;
        $docente->documento = $request->documento;
        $docente->correo = $request->correo;
        $docente->save();
        
        
        return redirect()->route('docente.edit', $docente)->with('mensaje','El registro ha sido creado.');
        
    
    
    }

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Docente $docente)
    {
       
       
        $validator = Validator::make($request->all(), [
            'nombre'=> 'required',
            'documento'=> 'required',
            'correo'=> 'required|email'

        ]);
        
        if($validator->fails()){
            return $validator->errors();
        }
       
       
        $docente->nombre = $request->nombre;
        $docente->documento = $request->documento;
        $docente->correo = $request->correo;
        $docente->save();
        return redirect()->route('docente.edit',  $docente)->with('mensaje','El registro ha sido actualizado.');
            
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        
        
        $validator = Validator::make($request->all(), [
            'id'=> 'required',
        

        ]);
        $docente =  Docente::destroy($id);
        return redirect()->route('docente.index')->with('mensaje','El documento ha sido eleminado.');
       
        
    }
}
