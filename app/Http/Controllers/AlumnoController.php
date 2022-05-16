<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use DateTime; 

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $alumnos = Alumno ::All(); 
        return view('alumno.index')->with('alumnos', $alumnos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('alumno.create');
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
      

        $alumnos = new Alumno(); 
        $alumnos -> id_UnicoAlum = $request -> get('id_UnicoAlum'); 
        $alumnos -> primerNomBeca = $request -> get('primerNomBeca'); 
        $alumnos -> segundoNomBeca = $request -> get('segundoNomBeca'); 
        $alumnos -> apellidoPaterBeca = $request -> get('apellidoPaterBeca'); 
        $alumnos -> apellidoMaterBeca = $request -> get('apellidoMaterBeca'); 
        $alumnos -> celular = $request -> get('celular'); 
        $alumnos -> correoElec = $request -> get('correoElec'); 
        $alumnos -> horasCubiertas = $request -> get('horasCubiertas'); 
        $alumnos -> id_UnicoPro = $request -> get('id_UnicoPro'); 
        $alumnos -> clavePlantel = $request -> get('clavePlantel'); 
        $alumnos -> save();
        
        return redirect('/alumno/create'); 


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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $alumno= Alumno :: find($id); 
        return view('alumno.edit')-> with('alumno', $alumno); 
        return redirect('/alumno'); 
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
        $alumno =  Alumno::find($id);
        $alumno -> id_UnicoAlum = $request -> get('id_UnicoAlum'); 
        $alumno -> primerNomBeca = $request -> get('primerNomBeca'); 
        $alumno -> segundoNomBeca = $request -> get(' segundoNomBeca'); 
        $alumno -> apellidoPaterBeca = $request -> get('apellidoPaterBeca'); 
        $alumno -> apellidoMaterBeca = $request -> get('apellidoMaterBeca'); 
        $alumno -> celular = $request -> get('celular'); 
        $alumno -> correoElec = $request -> get('correoElec'); 
        $alumno -> horasCubiertas = $request -> get(' horasCubiertas'); 
        $alumno -> id_UnicoPro = $request -> get(' id_UnicoPro'); 
        $alumno -> ClavePlantel = $request -> get(' ClavePlantel '); 
        $alumno -> save();
        
        return redirect('/alumno'); 
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
        $alumno = Alumno :: find($id);
        $alumno -> delete(); 
        return redirect('/alumno');
    }
}
