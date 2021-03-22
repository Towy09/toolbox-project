<?php

namespace App\Http\Controllers;

use App\Models\Strategy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StrategyController extends Controller
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
        $strategies = Strategy::all();
        return view('interacions.index', compact('strategies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('strategies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $strategy = new Strategy();

        $strategy->user_id = Auth::user()->id;

        $request->merge([ 'SupervisionConsulta' => implode(', ', (array) $request->get('SupervisionConsulta')) ]);
        $strategy->supervision_consulta = $request->input('SupervisionConsulta');

        $request->merge([ 'EstrategiaDigital' => implode(', ', (array) $request->get('EstrategiaDigital')) ]);
        $strategy->estrategia_digital = $request->input('EstrategiaDigital');

        $request->merge([ 'NormasProtocolos' => implode(', ', (array) $request->get('NormasProtocolos')) ]);
        $strategy->normas_protocolos = $request->input('NormasProtocolos');

        $request->merge([ 'CapacitacionComunicacion' => implode(', ', (array) $request->get('CapacitacionComunicacion')) ]);
        $strategy->capacitacion_comunicacion = $request->input('CapacitacionComunicacion');

        $strategy->frecuencia_sanitaria = $request->input('FrecuenciaSanitaria');
        $strategy->acciones_promovidas = $request->input('AccionesPromovidas');

        $request->merge([ 'IndicadoresKPI' => implode(', ', (array) $request->get('IndicadoresKPI')) ]);
        $strategy->indicadores_kpi = $request->input('IndicadoresKPI');

        $strategy->rediseño_kpi = $request->input('RediseñoKPI');
        $strategy->ausentismo_c19 = $request->input('AusentismoC19');
        $strategy->ausentismo_estres = $request->input('AusentismoEstres');
        $strategy->ausentismo_pacientes_riesgo = $request->input('AusentismoPacientesRiesgo');
        $strategy->ausentismo_otros = $request->input('AusentismoOtros');
        $strategy->observaciones = $request->input('Observaciones');

        //$strategy->fecha_hora = now();

        $strategy->save();

        return redirect('/survey/')->with('notification','Se guardo exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Strategy  $strategy
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $strategy = Strategy::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Strategy  $strategy
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $strategy = Strategy::find($id);
        return view('strategies.edit', compact('strategy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Strategy  $strategy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $strategy = Strategy::find($id);

        $strategy->user_id = Auth::user()->id;

        $request->merge([ 'SupervisionConsulta' => implode(', ', (array) $request->get('SupervisionConsulta')) ]);
        $strategy->supervision_consulta = $request->input('SupervisionConsulta');

        $request->merge([ 'EstrategiaDigital' => implode(', ', (array) $request->get('EstrategiaDigital')) ]);
        $strategy->estrategia_digital = $request->input('EstrategiaDigital');

        $request->merge([ 'NormasProtocolos' => implode(', ', (array) $request->get('NormasProtocolos')) ]);
        $strategy->normas_protocolos = $request->input('NormasProtocolos');

        $request->merge([ 'CapacitacionComunicacion' => implode(', ', (array) $request->get('CapacitacionComunicacion')) ]);
        $strategy->capacitacion_comunicacion = $request->input('CapacitacionComunicacion');

        $strategy->frecuencia_sanitaria = $request->input('FrecuenciaSanitaria');
        $strategy->acciones_promovidas = $request->input('AccionesPromovidas');

        $request->merge([ 'IndicadoresKPI' => implode(', ', (array) $request->get('IndicadoresKPI')) ]);
        $strategy->indicadores_kpi = $request->input('IndicadoresKPI');

        $strategy->rediseño_kpi = $request->input('RediseñoKPI');
        $strategy->ausentismo_c19 = $request->input('AusentismoC19');
        $strategy->ausentismo_estres = $request->input('AusentismoEstres');
        $strategy->ausentismo_pacientes_riesgo = $request->input('AusentismoPacientesRiesgo');
        $strategy->ausentismo_otros = $request->input('AusentismoOtros');
        $strategy->observaciones = $request->input('Observaciones');

        $strategy->save();

        return redirect('/survey/')->with('notification','El registro se ha actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Strategy  $strategy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Strategy $strategy)
    {
        //
    }
}
