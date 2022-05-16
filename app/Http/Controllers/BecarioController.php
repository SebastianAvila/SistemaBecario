<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BecarioCuenta;

class BecarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $becarios=BecarioCuenta::all();
        return view('becario.index')->with('becarios', $becarios);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        $becarios = new BecarioCuenta(); 
        $becarios -> id_UnicoAlum = $request ->get('id_UnicoAlum'); 
        $becarios -> usuarioBecario= $request ->get('usuarioBecario'); 
        $becarios -> passwordBecario = $request ->get('passwordBecario'); 
        $becarios -> horasRestantes = $request ->get('horasRestantes'); 
        $becarios -> tipo = $request ->get('tipo'); 
        $becarios -> fechaInicioPresta = $request ->get('fechaInicioPresta'); 
        $becarios -> fechaFinPresta = $request ->get('fechaFinPresta'); 
        $becarios -> save();
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
    }
}
