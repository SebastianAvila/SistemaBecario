<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programa; 
class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $programas = Programa :: All(); 
        return view('programa.index')->with('programas', $programas);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('programa.create');
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
        $programas = new Programa(); 
        $programas -> id_UnicoPro = $request -> get('id_UnicoPro');
        $programas -> tipoProgra = $request -> get('tipoProgra');
        $programas -> fechaInicioBeca = $request -> get('fechaInicioBeca');
        $programas -> fechaFinBeca = $request -> get('fechaFinBeca');
        $programas -> clavePlantel = $request -> get('clavePlantel');
        $programas -> horasCubrir = $request -> get('horasCubrir');
        $programas -> save(); 

        return redirect('programas/create');
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
    
        $programa = Programa :: find($id); 
        return view('programa.edit')->with('programa', $programa);

        return redirect('/programas/create');

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
        $programa = Programa :: find($id); 
        $programa -> id_UnicoPro = $request -> get('id_UnicoPro');
        $programa -> tipoProgra = $request -> get('tipoProgra');
        $programa -> fechaInicioBeca = $request -> get('fechaInicioBeca');
        $programa -> fechaFinBeca = $request -> get('fechaFinBeca');
        $programa -> clavePlantel = $request -> get('clavePlantel');
        $programa -> horasCubrir = $request -> get('horasCubrir');
        $programa -> save(); 

        return redirect('/programas');
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
    $programa = Programa  :: find($id); 
    $programa->delete();
    return redirect('/programas');

    }
}
