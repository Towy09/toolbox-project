<?php

namespace App\Http\Controllers;

use App\Models\Distribution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DistributionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $distributions = Distribution::all();
        return view('distributions.index', compact('distributions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('distributions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $distribution = new Distribution();

        $distribution->user_id = Auth::user()->id;

        $distribution->turnos_empresa = $request->input('TurnosEmpresa');
        //$distribution->tipo_turnos = $request->input('TipoTurnos');

        $request->merge([ 'TipoTurnos' => implode(', ', (array) $request->get('TipoTurnos')) ]);
        $distribution->tipo_turnos = $request->input('TipoTurnos');

        $distribution->reduccion_turnos = $request->input('ReduccionTurnos');
        $distribution->hora_mayor_ocupacion = $request->input('HoraMayorOcupacion');
        $distribution->baja_demanda = $request->input('BajaDemanda');
        $distribution->tiempo_optimo_limpieza = $request->input('TiempoOptimoLimpieza');

        $request->merge([ 'TrabajoRemoto' => implode(', ', (array) $request->get('TrabajoRemoto')) ]);
        $distribution->trabajo_remoto = $request->input('TrabajoRemoto');

        $distribution->save();

        return redirect('/survey/')->with('notification','Se guardo exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Distribution  $distribution
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $distribution = Distribution::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Distribution  $distribution
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $distribution = Distribution::find($id);
        return view('distributions.edit', compact('distribution'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Distribution  $distribution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $distribution = Distribution::find($id);

        $distribution->user_id = Auth::user()->id;

        $distribution->turnos_empresa = $request->input('TurnosEmpresa');

        $request->merge([ 'TipoTurnos' => implode(', ', (array) $request->get('TipoTurnos')) ]);
        $distribution->tipo_turnos = $request->input('TipoTurnos');

        $distribution->reduccion_turnos = $request->input('ReduccionTurnos');
        $distribution->hora_mayor_ocupacion = $request->input('HoraMayorOcupacion');
        $distribution->baja_demanda = $request->input('BajaDemanda');
        $distribution->tiempo_optimo_limpieza = $request->input('TiempoOptimoLimpieza');

        $request->merge([ 'TrabajoRemoto' => implode(', ', (array) $request->get('TrabajoRemoto')) ]);
        $distribution->trabajo_remoto = $request->input('TrabajoRemoto');

        $distribution->save();

        return redirect('/survey/')->with('notification','El registro se ha actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Distribution  $distribution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Distribution $distribution)
    {
        //
    }
}
