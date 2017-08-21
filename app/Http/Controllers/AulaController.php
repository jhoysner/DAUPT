<?php

namespace App\Http\Controllers;

use App\Asignacion;
use App\Aula;
use App\Dia;
use App\Materia;
use App\Tiempo;
use Illuminate\Http\Request;

class AulaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aulas = Aula::all();
        return view('aula.index', compact('aulas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aula.aulaCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aula = new Aula($request->all());
        $aula->save();
        return redirect()->route('aula.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aula = Aula::findOrFail($id);
        $tiempos = Tiempo::all();
        $dias = Dia::all();
        $asignacionesAll = Asignacion::all();
        $asignaciones = $asignacionesAll->where('aula_id','==', $aula->aula);
        return view('aula.aulaDetail', compact('aula','tiempos','dias','asignaciones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aula = Aula::findOrFail($id);
        $tiempos = Tiempo::all();
        $dias = Dia::all();
        $materias = Materia::all();
        $asignacionesAll = Asignacion::all();
        $asignaciones = $asignacionesAll->where('aula_id','==', $aula->aula);

        return view('aula.aulaEdit', compact('aula','tiempos','dias','asignaciones','materias'));
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
