<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Docente;
use Validator;
use Exception;
use DB;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       $cursos = Curso::all();
       return view('cursos.index', compact('cursos'));
            
    }

         /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $arr = Docente::all()->pluck('nombre', 'nombre')->toArray();
        return view('cursos.create',  compact('arr'));      
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        $arr = Docente::all()->pluck('nombre', 'nombre')->toArray();
        return view('cursos.edit', compact('curso', 'arr'));
    
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
            'curso'=> 'required',
            'descripcion'=> 'required',
            'duracion'=> 'required',
            'fecha'=> 'required',
            'precio'=> 'required',
            'docente'=> 'required'
        ]);
        
        if($validator->fails()){
            return $validator->errors();
        }
        
        $curso = new Curso();
        $curso->curso = $request->curso;
        $curso->descripcion =  $request->descripcion;
        $curso->duracion =  $request->duracion;
        $curso->fecha =  $request->fecha;
        $curso->precio =  $request->precio;
        $curso->docente = $request->docente;
        $curso->save(); 
        return redirect()->route('curso.edit', $curso)->with('mensaje','El registro ha sido creado.');
                    
       
    
    
    }

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curso $curso)
    {
       
        $data['status'] = 200;
        $validator = Validator::make($request->all(), [
            'curso'=> 'required',
            'descripcion'=> 'required',
            'duracion'=> 'required',
            'fecha'=> 'required',
            'precio'=> 'required',
            'docente'=> 'required'
        ]);

        if($validator->fails()){
            return $validator->errors();
        }
    
        
    
        $curso->curso = $request->curso;
        
        $curso->descripcion =  $request->descripcion;
        $curso->duracion =  $request->duracion;
        $curso->fecha =  $request->fecha;
        $curso->precio =  $request->precio;
        $curso->docente = $request->docente;
        $curso->save(); 
        return redirect()->route('curso.edit',  $curso)->with('mensaje','El registro ha sido actualizado.');
          
        
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        
        $data['status'] = 200;
        $validator = Validator::make($request->all(), [
            'id'=> 'required',
        ]);
        $curso =  Curso::destroy($id);
        return redirect()->route('curso.index')->with('mensaje','El documento ha sido eleminado.');
           
       
    }
}
