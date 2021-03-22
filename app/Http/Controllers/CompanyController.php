<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
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
        $companies = Company::all();
        return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = new Company();

        $company->user_id = Auth::user()->id;

        $company->tamaño_empresa = $request->input('TamañoEmpresa');

        $company->tamaño_entradas = $request->input('TamañoEntradas');
        $company->entradas_habilitadas = $request->input('EntradasHabilitadas');
        $company->entradas_deshabilitadas = $request->input('EntradasDeshabilitadas');

        $company->tamaño_salas = $request->input('TamañoSalas');
        $company->salas_habilitadas = $request->input('SalasHabilitadas');
        $company->salas_deshabilitadas = $request->input('SalasDeshabilitadas');

        $company->tamaño_oficinas = $request->input('TamañoOficinas');
        $company->oficinas_habilitadas = $request->input('OficinasHabilitadas');
        $company->oficinas_deshabilitadas = $request->input('OficinasDeshabilitadas');

        $company->tamaño_baños = $request->input('TamañoBaños');
        $company->baños_habilitadas = $request->input('BañosHabilitadas');
        $company->baños_deshabilitadas = $request->input('BañosDeshabilitadas');

        $company->tamaño_ensamble = $request->input('TamañoEnsamble');
        $company->ensamble_habilitadas = $request->input('EnsambleHabilitadas');
        $company->ensamble_deshabilitadas = $request->input('EnsambleDeshabilitadas');

        $company->tamaño_produccion = $request->input('TamañoProduccion');
        $company->produccion_habilitadas = $request->input('ProduccionHabilitadas');
        $company->produccion_deshabilitadas = $request->input('ProduccionDeshabilitadas');

        $company->tamaño_carga = $request->input('TamañoCarga');
        $company->carga_habilitadas = $request->input('CargaHabilitadas');
        $company->carga_deshabilitadas = $request->input('CargaDeshabilitadas');

        $company->tamaño_cafeteria = $request->input('TamañoCafeteria');
        $company->cafeteria_habilitadas = $request->input('CafeteriaHabilitadas');
        $company->cafeteria_deshabilitadas = $request->input('CafeteriaDeshabilitadas');

        $company->tamaño_comedores = $request->input('TamañoComedores');
        $company->comedores_habilitadas = $request->input('ComedoresHabilitadas');
        $company->comedores_deshabilitadas = $request->input('ComedoresDeshabilitadas');

        $company->tamaño_ascensores = $request->input('TamañoAscensores');
        $company->ascensores_habilitadas = $request->input('AscensoresHabilitadas');
        $company->ascensores_deshabilitadas = $request->input('AscensoresDeshabilitadas');

        $company->tamaño_escaleras = $request->input('TamañoEscaleras');
        $company->escaleras_habilitadas = $request->input('EscalerasHabilitadas');
        $company->escaleras_deshabilitadas = $request->input('EscalerasDeshabilitadas');

        $company->informacion_extra = $request->input('InformacionExtra');
        $company->zonas_alto_riesgo = $request->input('AltoRiesgo');

        $company->save();

        return redirect('/survey/')->with('notification','Se guardo exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find($id);
        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $company = Company::find($id);

        $company->user_id = Auth::user()->id;

        $company->tamaño_empresa = $request->input('TamañoEmpresa');

        $company->tamaño_entradas = $request->input('TamañoEntradas');
        $company->entradas_habilitadas = $request->input('EntradasHabilitadas');
        $company->entradas_deshabilitadas = $request->input('EntradasDeshabilitadas');

        $company->tamaño_salas = $request->input('TamañoSalas');
        $company->salas_habilitadas = $request->input('SalasHabilitadas');
        $company->salas_deshabilitadas = $request->input('SalasDeshabilitadas');

        $company->tamaño_oficinas = $request->input('TamañoOficinas');
        $company->oficinas_habilitadas = $request->input('OficinasHabilitadas');
        $company->oficinas_deshabilitadas = $request->input('OficinasDeshabilitadas');

        $company->tamaño_baños = $request->input('TamañoBaños');
        $company->baños_habilitadas = $request->input('BañosHabilitadas');
        $company->baños_deshabilitadas = $request->input('BañosDeshabilitadas');

        $company->tamaño_ensamble = $request->input('TamañoEnsamble');
        $company->ensamble_habilitadas = $request->input('EnsambleHabilitadas');
        $company->ensamble_deshabilitadas = $request->input('EnsambleDeshabilitadas');

        $company->tamaño_produccion = $request->input('TamañoProduccion');
        $company->produccion_habilitadas = $request->input('ProduccionHabilitadas');
        $company->produccion_deshabilitadas = $request->input('ProduccionDeshabilitadas');

        $company->tamaño_carga = $request->input('TamañoCarga');
        $company->carga_habilitadas = $request->input('CargaHabilitadas');
        $company->carga_deshabilitadas = $request->input('CargaDeshabilitadas');

        $company->tamaño_cafeteria = $request->input('TamañoCafeteria');
        $company->cafeteria_habilitadas = $request->input('CafeteriaHabilitadas');
        $company->cafeteria_deshabilitadas = $request->input('CafeteriaDeshabilitadas');

        $company->tamaño_comedores = $request->input('TamañoComedores');
        $company->comedores_habilitadas = $request->input('ComedoresHabilitadas');
        $company->comedores_deshabilitadas = $request->input('ComedoresDeshabilitadas');

        $company->tamaño_ascensores = $request->input('TamañoAscensores');
        $company->ascensores_habilitadas = $request->input('AscensoresHabilitadas');
        $company->ascensores_deshabilitadas = $request->input('AscensoresDeshabilitadas');

        $company->tamaño_escaleras = $request->input('TamañoEscaleras');
        $company->escaleras_habilitadas = $request->input('EscalerasHabilitadas');
        $company->escaleras_deshabilitadas = $request->input('EscalerasDeshabilitadas');

        $company->informacion_extra = $request->input('InformacionExtra');
        $company->zonas_alto_riesgo = $request->input('AltoRiesgo');

        $company->save();

        return redirect('/survey/')->with('notification','El registro se ha actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
