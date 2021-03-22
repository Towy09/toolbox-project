<?php

namespace App\Http\Controllers;

use App\Models\Cleaning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CleaningController extends Controller
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
        $cleanings = Cleaning::all();
        return view('cleanings.index', compact('cleanings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cleanings.create');
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
        $cleaning = new Cleaning();

        $cleaning->user_id = Auth::user()->id;

        //$cleaning->cleaning_id = $request->input('CleaningID');
        //$cleaning->encargado_limpieza = $request->input('EncargadoLimpieza');
        //$arregloLimpieza = $_POST('EncargadoLimpieza');
        $request->merge([ 'EncargadoLimpieza' => implode(', ', (array) $request->get('EncargadoLimpieza')) ]);
        $cleaning->encargado_limpieza = $request->input('EncargadoLimpieza');

        $cleaning->otros_limpieza = $request->input('OtrosLimpieza');

        $request->merge([ 'IngredientesActivos' => implode(', ', (array) $request->get('IngredientesActivos')) ]);
        $cleaning->ingredientes_activos = $request->input('IngredientesActivos');

        $cleaning->otros_ingredientes = $request->input('OtrosIngredientes');

        $cleaning->tiempo_desinfeccion = $request->input('TiempoDesinfeccion');
        $cleaning->tiempo_sanitizacion = $request->input('TiempoSanitizacion');

        $request->merge([ 'HerramientasMetodos' => implode(', ', (array) $request->get('HerramientasMetodos')) ]);
        $cleaning->herramientas_metodos = $request->input('HerramientasMetodos');

        $cleaning->save();

        return redirect('/survey/')->with('notification','Se guardo exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cleaning  $cleaning
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cleaning = Cleaning::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cleaning  $cleaning
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cleaning = Cleaning::find($id);
        return view('cleanings.edit', compact('cleaning'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cleaning  $cleaning
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cleaning = Cleaning::find($id);

        $cleaning->user_id = Auth::user()->id;

        $request->merge([ 'EncargadoLimpieza' => implode(', ', (array) $request->get('EncargadoLimpieza')) ]);
        $cleaning->encargado_limpieza = $request->input('EncargadoLimpieza');

        $cleaning->otros_limpieza = $request->input('OtrosLimpieza');

        $request->merge([ 'IngredientesActivos' => implode(', ', (array) $request->get('IngredientesActivos')) ]);
        $cleaning->ingredientes_activos = $request->input('IngredientesActivos');

        $cleaning->otros_ingredientes = $request->input('OtrosIngredientes');

        $cleaning->tiempo_desinfeccion = $request->input('TiempoDesinfeccion');
        $cleaning->tiempo_sanitizacion = $request->input('TiempoSanitizacion');

        $request->merge([ 'HerramientasMetodos' => implode(', ', (array) $request->get('HerramientasMetodos')) ]);
        $cleaning->herramientas_metodos = $request->input('HerramientasMetodos');

        $cleaning->save();

        return redirect('/survey/')->with('notification','El registro se ha actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cleaning  $cleaning
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cleaning $cleaning)
    {
        //
    }
}
