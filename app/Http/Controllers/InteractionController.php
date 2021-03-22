<?php

namespace App\Http\Controllers;

use App\Models\Interaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InteractionController extends Controller
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
        $interactions = Interaction::all();
        return view('interacions.index', compact('interactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('interactions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $interaction = new Interaction();

        $interaction->user_id = Auth::user()->id;

        $request->merge([ 'PromocionSalud' => implode(', ', (array) $request->get('PromocionSalud')) ]);
        $interaction->promocion_salud = $request->input('PromocionSalud');

        $request->merge([ 'DistanciaInterpersonal' => implode(', ', (array) $request->get('DistanciaInterpersonal')) ]);
        $interaction->distancia_interpersonal = $request->input('DistanciaInterpersonal');

        $request->merge([ 'ControlIngresoEgreso' => implode(', ', (array) $request->get('ControlIngresoEgreso')) ]);
        $interaction->control_ingreso_egreso = $request->input('ControlIngresoEgreso');

        $request->merge([ 'AccesoVisitantesProveedores' => implode(', ', (array) $request->get('AccesoVisitantesProveedores')) ]);
        $interaction->acceso_visitantes_proveedores = $request->input('AccesoVisitantesProveedores');

        $request->merge([ 'ControlVisitas' => implode(', ', (array) $request->get('ControlVisitas')) ]);
        $interaction->control_visitas = $request->input('ControlVisitas');

        $interaction->save();

        return redirect('/survey/')->with('notification','Se guardo exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Interaction  $interaction
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $interaction = Interaction::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Interaction  $interaction
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $interaction = Interaction::find($id);
        return view('interactions.edit', compact('interaction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Interaction  $interaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $interaction = Interaction::find($id);

        $interaction->user_id = Auth::user()->id;

        $request->merge([ 'PromocionSalud' => implode(', ', (array) $request->get('PromocionSalud')) ]);
        $interaction->promocion_salud = $request->input('PromocionSalud');

        $request->merge([ 'DistanciaInterpersonal' => implode(', ', (array) $request->get('DistanciaInterpersonal')) ]);
        $interaction->distancia_interpersonal = $request->input('DistanciaInterpersonal');

        $request->merge([ 'ControlIngresoEgreso' => implode(', ', (array) $request->get('ControlIngresoEgreso')) ]);
        $interaction->control_ingreso_egreso = $request->input('ControlIngresoEgreso');

        $request->merge([ 'AccesoVisitantesProveedores' => implode(', ', (array) $request->get('AccesoVisitantesProveedores')) ]);
        $interaction->acceso_visitantes_proveedores = $request->input('AccesoVisitantesProveedores');

        $request->merge([ 'ControlVisitas' => implode(', ', (array) $request->get('ControlVisitas')) ]);
        $interaction->control_visitas = $request->input('ControlVisitas');

        $interaction->save();

        return redirect('/survey/')->with('notification','El registro se ha actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Interaction  $interaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Interaction $interaction)
    {
        //
    }
}
