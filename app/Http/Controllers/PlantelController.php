<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plantel; 
use DateTime; 

class PlantelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $planteles = Plantel ::All();
        return view('plantel.index')->with('planteles', $planteles);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('plantel.create'); 
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
    
 

        $planteles = new Plantel(); 
        $planteles-> clavePlantel = $request->get('clavePlantel');
        $planteles -> nombrePlantel = $request->get('nombrePlantel');
        $planteles -> localidad = $request->get('localidad'); 
        $planteles -> save();

        return redirect('planteles/create');
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
        $plantel = Plantel :: find($id); 
        return view('plantel.edit')->with('plantel', $plantel); 
        return redirect('/planteles');
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

        $plantel = Plantel:: find($id); 
        $plantel-> clavePlantel = $request->get('clavePlantel');
        $plantel -> nombrePlantel = $request->get('nombrePlantel');
        $plantel -> localidad = $request->get('localidad'); 
        $plantel -> save();

        return redirect('/planteles');
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
        $plantel = Plantel :: find($id); 
        $plantel -> delete(); 
        return redirect('/planteles');

    }
}
