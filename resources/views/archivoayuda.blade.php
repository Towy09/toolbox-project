@extends('layouts.app')

@section('title')
    Reporte de la encuesta.
@endsection

@section('content')
    <div class="container pad-top">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <tbody>
<!--              Apartado: Datos generales              -->
                        <tr>
                            <th scope="row" class="table-dark" colspan="10"> Datos generales.</th>
                        </tr>
                        <tr>
                            <th scope="row"> Nombre de la empresa: </th>
                            <td colspan="3"> {{ $main->nombre_empresa }} </td>
                            <th scope="row"> Fecha:</th>
                            <td colspan="3"> {{ $main->created_at }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Nombre de responsable: </th>
                            <td colspan="3"> {{ $main->nombre_responsable }} </td>
                            <th scope="row"> Correo: </th>
                            <td colspan="3"> {{ Auth::user()->email }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Cargo del responsable: </th>
                            <td> {{ $main->cargo_responsable }} </td>
                            <th scope="row"> Tipo de actividad de la empresa: </th>
                            <td> {{ $main->tipo_actividad }} </td>
                            <th scope="row"> Cantidad de trabajadores: </th>
                            <td> {{ $main->numero_trabajadores }} </td>
                            <th scope="row"> Trafico externo: </th>
                            <td> {{ $main->trafico_externo }} </td>
                        </tr>
<!--              Apartado: Datos sobre el establecimiento              -->
                        <tr>
                            <th scope="row" class="table-dark" colspan="10"> Datos sobre el establecimiento. </th>
                        </tr>
                        <tr>
                            <th scope="row">  </th>
                            <th scope="row"> Tamaño (en m2) </th>
                            <th scope="row"> Habilitadas </th>
                            <th scope="row"> Deshabilitadas </th>
                        </tr>
                        <tr>
                            <th scope="row"> Empresa: </th>
                            <td> {{ $main->company->tamaño_empresa }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Entradas: </th>
                            <td> {{ $main->company->tamaño_entradas }} </td>
                            <td> {{ $main->company->entradas_habilitadas }} </td>
                            <td> {{ $main->company->entradas_deshabilitadas }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Salas: </th>
                            <td> {{ $main->company->tamaño_salas }} </td>
                            <td> {{ $main->company->salas_habilitadas }} </td>
                            <td> {{ $main->company->salas_deshabilitadas }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Oficinas: </th>
                            <td> {{ $main->company->tamaño_oficinas }} </td>
                            <td> {{ $main->company->oficinas_habilitadas }} </td>
                            <td> {{ $main->company->oficinas_deshabilitadas }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Baños: </th>
                            <td> {{ $main->company->tamaño_baños }} </td>
                            <td> {{ $main->company->baños_habilitadas }} </td>
                            <td> {{ $main->company->baños_deshabilitadas }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Zona ensamble: </th>
                            <td> {{ $main->company->tamaño_ensamble }} </td>
                            <td> {{ $main->company->ensamble_habilitadas }} </td>
                            <td> {{ $main->company->ensamble_deshabilitadas }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Zona producción: </th>
                            <td> {{ $main->company->tamaño_produccion }} </td>
                            <td> {{ $main->company->produccion_habilitadas }} </td>
                            <td> {{ $main->company->produccion_deshabilitadas }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Zona carga: </th>
                            <td> {{ $main->company->tamaño_carga }} </td>
                            <td> {{ $main->company->carga_habilitadas }} </td>
                            <td> {{ $main->company->carga_deshabilitadas }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Cafetería: </th>
                            <td> {{ $main->company->tamaño_cafeteria }} </td>
                            <td> {{ $main->company->cafeteria_habilitadas }} </td>
                            <td> {{ $main->company->cafeteria_deshabilitadas }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Comedores: </th>
                            <td> {{ $main->company->tamaño_comedores }} </td>
                            <td> {{ $main->company->comedores_habilitadas }} </td>
                            <td> {{ $main->company->comedores_deshabilitadas }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Ascensores: </th>
                            <td> {{ $main->company->tamaño_ascensores }} </td>
                            <td> {{ $main->company->ascensores_habilitadas }} </td>
                            <td> {{ $main->company->ascensores_deshabilitadas }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Escaleras: </th>
                            <td> {{ $main->company->tamaño_escaleras }} </td>
                            <td> {{ $main->company->escaleras_habilitadas }} </td>
                            <td> {{ $main->company->escaleras_deshabilitadas }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Informacion adicional: </th>
                            <td colspan="7"> {{ $main->company->informacion_extra }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Zonas de alto riesgo: </th>
                            <td colspan="7"> {{ $main->company->zonas_alto_riesgo }} </td>
                        </tr>
<!--              Apartado: Limpieza del establecimiento              -->
                        <tr>
                            <th scope="row" class="table-dark" colspan="10"> Datos sobre la limpieza del establecimiento.
                            </th>
                        </tr>
                        <tr>
                            <th scope="row">  </th>
                            <th scope="row"> Puntos obtenidos </th>
                            <th scope="row"> Puntos optimos </th>
                            <th scope="row"> Respuestas: </th>
                            <th scope="row"> Otros: </th>
                        </tr>
                        <tr>
                            <th scope="row"> Encargado de la limpieza: </th>
                            <td>
                                @if ($main->cleaning-> encargado_limpieza == "Prestador de servicios externo" || $main->cleaning-> encargado_limpieza == "Unipersonal, Equipo interno dedicado")
                                2
                                @elseif ($main->cleaning-> encargado_limpieza == "Unipersonal" || $main->cleaning-> encargado_limpieza == "Equipo interno dedicado")
                                1
                                @elseif ($main->cleaning-> encargado_limpieza == "Prestador de servicios externo, Equipo interno dedicado" || $main->cleaning-> encargado_limpieza == "Prestador de servicios externo, Unipersonal")
                                3
                                @endif
                            </td>
                            <td>
                                10
                            </td>
                            <td> {{ $main->cleaning-> encargado_limpieza }} </td>
                            <td> {{ $main->cleaning-> otros_limpieza }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Ingredientes activos: </th>
                            <td>
                                @if ($main->cleaning-> ingredientes_activos == "Cloro/Lejía" ||
                                $main->cleaning-> ingredientes_activos == "Alcohol" ||
                                $main->cleaning-> ingredientes_activos == "Agua y Jabón")
                                1
                                @elseif ($main->cleaning-> ingredientes_activos == "Cloro/Lejía, Alcohol" ||
                                $main->cleaning-> ingredientes_activos == "Cloro/Lejía, Agua y Jabón" ||
                                $main->cleaning-> ingredientes_activos == "Alcohol, Agua y Jabón" ||
                                $main->cleaning-> ingredientes_activos == "Acido peracético")
                                2
                                @elseif ($main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio" ||
                                $main->cleaning-> ingredientes_activos == "Dióxido de Cloro" ||
                                $main->cleaning-> ingredientes_activos == "Cloro/Lejía, Alcohol, Agua y Jabón" ||
                                $main->cleaning-> ingredientes_activos == "Acido peracético, Cloro/Lejía" ||
                                $main->cleaning-> ingredientes_activos == "Acido peracético, Alcohol" ||
                                $main->cleaning-> ingredientes_activos == "Acido peracético, Agua y Jabón")
                                3
                                @elseif ($main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Cloro/Lejía" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Alcohol" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Agua y Jabón" ||
                                $main->cleaning-> ingredientes_activos == "Dióxido de Cloro, Cloro/Lejía" ||
                                $main->cleaning-> ingredientes_activos == "Dióxido de Cloro, Alcohol" ||
                                $main->cleaning-> ingredientes_activos == "Dióxido de Cloro, Agua y Jabón" ||
                                $main->cleaning-> ingredientes_activos == "Acido peracético, Cloro/Lejía, Alcohol" ||
                                $main->cleaning-> ingredientes_activos == "Acido peracético, Cloro/Lejía, Agua y Jabón" ||
                                $main->cleaning-> ingredientes_activos == "Acido peracético, Alcohol, Agua y Jabón")
                                4
                                @elseif ($main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Acido peracético" ||
                                $main->cleaning-> ingredientes_activos == "Acido peracético, Dióxido de Cloro" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Cloro/Lejía, Alcohol" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Cloro/Lejía, Agua y Jabón" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Alcohol, Agua y Jabón" ||
                                $main->cleaning-> ingredientes_activos == "Dióxido de Cloro, Cloro/Lejía, Alcohol" ||
                                $main->cleaning-> ingredientes_activos == "Dióxido de Cloro, Cloro/Lejía, Agua y Jabón" ||
                                $main->cleaning-> ingredientes_activos == "Dióxido de Cloro, Alcohol, Agua y Jabón" )
                                5
                                @elseif ($main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Dióxido de Cloro" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Acido peracético, Cloro/Lejía" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Acido peracético, Agua y Jabón" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Acido peracético, Alcohol" ||
                                $main->cleaning-> ingredientes_activos == "Dióxido de Cloro, Acido peracético, Cloro/Lejía" ||
                                $main->cleaning-> ingredientes_activos == "Dióxido de Cloro, Acido peracético, Agua y Jabón" ||
                                $main->cleaning-> ingredientes_activos == "Dióxido de Cloro, Acido peracético, Alcohol" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Cloro/Lejía, Alcohol, Agua y Jabón" ||
                                $main->cleaning-> ingredientes_activos == "Dióxido de Cloro, Cloro/Lejía, Alcohol, Agua y Jabón" )
                                6
                                @elseif ($main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Dióxido de Cloro, Cloro/Lejía" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Dióxido de Cloro, Alcohol" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Dióxido de Cloro, Agua y Jabón" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Ácido peracético, Cloro/Lejía, Alcohol" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Ácido peracético, Cloro/Lejía, Agua y Jabón" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Ácido peracético, Alcohol, Agua y Jabón" ||
                                $main->cleaning-> ingredientes_activos == "Dióxido de Cloro, Ácido peracético, Cloro/Lejía, Alcohol" ||
                                $main->cleaning-> ingredientes_activos == "Dióxido de Cloro, Ácido peracético, Cloro/Lejía, Agua y Jabón" ||
                                $main->cleaning-> ingredientes_activos == "Dióxido de Cloro, Ácido peracético, Alcohol, Agua y Jabón" )
                                7
                                @elseif ($main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Ácido peracético, Dióxido de Cloro" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Ácido peracético, Cloro/Lejía, Alcohol, Agua y Jabón" ||
                                $main->cleaning-> ingredientes_activos == "Ácido peracético, Dióxido de Cloro, Cloro/Lejía, Alcohol, Agua y jabón" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Ácido peracético, Cloro/Lejía, Alcohol, Agua y Jabón" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Dióxido de Cloro, Cloro/Lejía, Alcohol" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Dióxido de Cloro, Cloro/Lejía, Agua y Jabón" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Dióxido de Cloro, Alcohol, Agua y Jabón")
                                8
                                @elseif ($main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Ácido peracético, Dióxido de Cloro, Cloro/Lejía" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Ácido peracético, Dióxido de Cloro, Alcohol" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Ácido peracético, Dióxido de Cloro, Agua y Jabón" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Dióxido de Cloro, Cloro/Lejía, Alcohol, Agua y Jabón")
                                9
                                @elseif ($main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Ácido peracético, Dióxido de Cloro, Cloro/Lejía, Alcohol" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Ácido peracético, Dióxido de Cloro, Cloro/Lejía, Agua y Jabón" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Ácido peracético, Dióxido de Cloro, Alcohol, Agua y Jabón")
                                10
                                @elseif($main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Ácido peracético, Dióxido de Cloro, Cloro/Lejía, Alcohol, Agua y Jabón")
                                11
                                @endif
                            </td>
                            <td> 10 </td>
                            <td> {{ $main->cleaning-> ingredientes_activos }} </td>
                            <td> {{ $main->cleaning-> otros_ingredientes }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Tiempo de desinfección: </th>
                            <td> Poner numero </td>
                            <td> 10 </td>
                            <td> {{ $main->cleaning-> tiempo_desinfeccion }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Tiempo de sanitización: </th>
                            <td> Poner numero </td>
                            <td> 10 </td>
                            <td> {{ $main->cleaning-> tiempo_sanitizacion }} </td>
                        </tr>
<!--              Apartado: Datos sobre los turnos y distribución horaria de su establecimiento              -->
                        <tr>
                            <th scope="row" class="table-dark" colspan="10"> Datos sobre los turnos y distribución horaria de su establecimiento. </th>
                        </tr>
                        <tr>
                            <th scope="row"> Cantidad de turnos: </th>
                            <td> {{ $main->distribution-> turnos_empresa }} </td>
                            <th scope="row"> Tipo de turnos: </th>
                            <td> {{ $main->distribution-> tipo_turnos }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Horarios de mayor ocupacion: </th>
                            <td> {{ $main->distribution-> hora_mayor_ocupacion }} </td>
                            <th scope="row"> Tiempos muestros o de baja demanda: </th>
                            <td> {{ $main->distribution-> baja_demanda }} </td>
                            <th scope="row"> Tiempo optimo para limpieza/sanitización: </th>
                            <td colspan="2"> {{ $main->distribution-> tiempo_optimo_limpieza }} </td>
                        </tr>
                        <tr>
                            <th scope="row">  </th>
                            <th scope="row"> Puntos obtenidos </th>
                            <th scope="row"> Puntos optimos </th>
                            <th scope="row"> Respuestas: </th>
                        </tr>
                        <tr>
                            <th scope="row"> Reducción de turnos: </th>
                            <td> Poner numero </td>
                            <td> 10 </td>
                            <td> {{ $main->distribution->reduccion_turnos }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Trabajo remoto: </th>
                            <td> Poner numero </td>
                            <td> 10 </td>
                            <td> {{ $main->distribution->trabajo_remoto }} </td>
                        </tr>

<!--              Apartado: Datos sobre la gestión de la interacción entre personas y como previene los contagios              -->
                        <tr>
                            <th scope="row" class="table-dark" colspan="10"> Datos sobre la gestión de la interacción entre
                                personas y como previene los contagios. </th>
                        </tr>
                        <tr>
                            <th scope="row">  </th>
                            <th scope="row"> Puntos obtenidos </th>
                            <th scope="row"> Puntos optimos </th>
                            <th scope="row"> Respuestas: </th>
                        </tr>
                        <tr>
                            <th scope="row"> Promoción de la salud: </th>
                            <td> Poner numero </td>
                            <td> 10 </td>
                            <td> {{ $main->interaction->promocion_salud }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Distancia interpersonal: </th>
                            <td> Poner numero </td>
                            <td> 10 </td>
                            <td> {{ $main->interaction->distancia_interpersonal }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Control de ingreso-egreso: </th>
                            <td> Poner numero </td>
                            <td> 10 </td>
                            <td> {{ $main->interaction->control_ingreso_egreso }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Acceso de visitantes y proveedores: </th>
                            <td> Poner numero </td>
                            <td> 10 </td>
                            <td> {{ $main->interaction->acceso_visitantes_proveedores }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Control de visitas y despacho de mercancías hacia el exterior: </th>
                            <td> Poner numero </td>
                            <td> 10 </td>
                            <td> {{ $main->interaction->control_visitas }} </td>
                        </tr>
<!--              Apartado: Datos sobre los elementos de información y comunicación que utiliza              -->
                        <tr>
                            <th scope="row" class="table-dark" colspan="10"> Datos sobre los elementos de información y
                                comunicación que utiliza. </th>
                        </tr>
                        <tr>
                            <th scope="row"> Supervisión y consulta: </th>
                            <td> Poner numero </td>
                            <td> 10 </td>
                            <td> {{ $main->strategy->supervision_consulta }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Estrategia digital: </th>
                            <td> Poner numero </td>
                            <td> 10 </td>
                            <td> {{ $main->strategy->estrategia_digital }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Normas y protocolos: </th>
                            <td> Poner numero </td>
                            <td> 10 </td>
                            <td> {{ $main->strategy->normas_protocolos }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Capacitación y comunicación: </th>
                            <td> Poner numero </td>
                            <td> 10 </td>
                            <td> {{ $main->strategy->capacitacion_comunicacion }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Indicadores KPI: </th>
                            <td> 1 </td>
                            <td> 10 </td>
                            <td> {{ $main->strategy->indicadores_kpi }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Frecuencia sanitaria: </th>
                            <td> {{ $main->strategy->frecuencia_sanitaria }} </td>
                            <th scope="row"> Acciones promovidas: </th>
                            <td colspan="3"> {{ $main->strategy->acciones_promovidas }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Rediseño KPI: </th>
                            <td> {{ $main->strategy->rediseño_kpi }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Ausentismo por: </th>
                            <th scope="row"> COVID-19: </th>
                            <td> {{ $main->strategy->ausentismo_c19 }} </td>
                            <th scope="row"> Estrés: </th>
                            <td> {{ $main->strategy->ausentismo_estres }} </td>
                            <th scope="row"> Paciente de riesgo: </th>
                            <td> {{ $main->strategy->ausentismo_pacientes_riesgo }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Ausentismo por otra razón: </th>
                            <td> {{ $main->strategy->ausentismo_otros }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Observaciones generales: </th>
                            <td> {{ $main->strategy->observaciones }} </td>
                        </tr>
<!--              Apartado: Linea negra al final              -->
                        <tr>
                            <th scope="row" class="table-dark" colspan="10">   </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a class="btn btn-outline-primary float-left" href="{{ url('survey') }}" role="button">Regresar</a>
                <!--<a class="btn btn-outline-primary float-right" href="{{ url('breakdown') }}" role="button">Descargar</a>-->
            </div>
        </div>
    </div>
@endsection
