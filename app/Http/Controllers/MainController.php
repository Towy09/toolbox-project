<?php

namespace App\Http\Controllers;

use App\Models\Main;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
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
        $mains = Main::all(); //Esto es igual a un Select * from main
        return view('mains.index', compact('mains'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mains.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $main = new Main();

        $main->user_id = Auth::user()->id;

        $main->nombre_empresa = $request->input('NombreEmpresa');
        $main->nombre_responsable = $request->input('NombreResponsable');
        $main->cargo_responsable = $request->input('CargoResponsable');
        $main->tipo_actividad = $request->input('TipoActividad');
        $main->numero_trabajadores = $request->input('NumeroTrabajadores');
        $main->trafico_externo = $request->input('TraficoExterno');
        $main->save();

        return redirect('/survey/')->with('notification','Se guardo exitosamente!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Main  $main
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $main = Main::find($id);
        return view('report', compact('main'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Main  $main
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $main = Main::find($id);
        return view('mains.edit', compact('main'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Main  $main
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $main = Main::find($id);

        $main->user_id = Auth::user()->id;

        $main->nombre_empresa = $request->input('NombreEmpresa');
        $main->nombre_responsable = $request->input('NombreResponsable');
        $main->cargo_responsable = $request->input('CargoResponsable');
        $main->tipo_actividad = $request->input('TipoActividad');
        $main->numero_trabajadores = $request->input('NumeroTrabajadores');
        $main->trafico_externo = $request->input('TraficoExterno');

        $main->save();

        return redirect('/survey/')->with('notification','El registro se ha actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Main  $main
     * @return \Illuminate\Http\Response
     */
    public function destroy(Main $id)
    {
        //
    }
}
