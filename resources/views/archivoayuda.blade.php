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
                            <th scope="row"> Tama??o (en m2) </th>
                            <th scope="row"> Habilitadas </th>
                            <th scope="row"> Deshabilitadas </th>
                        </tr>
                        <tr>
                            <th scope="row"> Empresa: </th>
                            <td> {{ $main->company->tama??o_empresa }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Entradas: </th>
                            <td> {{ $main->company->tama??o_entradas }} </td>
                            <td> {{ $main->company->entradas_habilitadas }} </td>
                            <td> {{ $main->company->entradas_deshabilitadas }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Salas: </th>
                            <td> {{ $main->company->tama??o_salas }} </td>
                            <td> {{ $main->company->salas_habilitadas }} </td>
                            <td> {{ $main->company->salas_deshabilitadas }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Oficinas: </th>
                            <td> {{ $main->company->tama??o_oficinas }} </td>
                            <td> {{ $main->company->oficinas_habilitadas }} </td>
                            <td> {{ $main->company->oficinas_deshabilitadas }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Ba??os: </th>
                            <td> {{ $main->company->tama??o_ba??os }} </td>
                            <td> {{ $main->company->ba??os_habilitadas }} </td>
                            <td> {{ $main->company->ba??os_deshabilitadas }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Zona ensamble: </th>
                            <td> {{ $main->company->tama??o_ensamble }} </td>
                            <td> {{ $main->company->ensamble_habilitadas }} </td>
                            <td> {{ $main->company->ensamble_deshabilitadas }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Zona producci??n: </th>
                            <td> {{ $main->company->tama??o_produccion }} </td>
                            <td> {{ $main->company->produccion_habilitadas }} </td>
                            <td> {{ $main->company->produccion_deshabilitadas }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Zona carga: </th>
                            <td> {{ $main->company->tama??o_carga }} </td>
                            <td> {{ $main->company->carga_habilitadas }} </td>
                            <td> {{ $main->company->carga_deshabilitadas }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Cafeter??a: </th>
                            <td> {{ $main->company->tama??o_cafeteria }} </td>
                            <td> {{ $main->company->cafeteria_habilitadas }} </td>
                            <td> {{ $main->company->cafeteria_deshabilitadas }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Comedores: </th>
                            <td> {{ $main->company->tama??o_comedores }} </td>
                            <td> {{ $main->company->comedores_habilitadas }} </td>
                            <td> {{ $main->company->comedores_deshabilitadas }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Ascensores: </th>
                            <td> {{ $main->company->tama??o_ascensores }} </td>
                            <td> {{ $main->company->ascensores_habilitadas }} </td>
                            <td> {{ $main->company->ascensores_deshabilitadas }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Escaleras: </th>
                            <td> {{ $main->company->tama??o_escaleras }} </td>
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
                                @if ($main->cleaning-> ingredientes_activos == "Cloro/Lej??a" ||
                                $main->cleaning-> ingredientes_activos == "Alcohol" ||
                                $main->cleaning-> ingredientes_activos == "Agua y Jab??n")
                                1
                                @elseif ($main->cleaning-> ingredientes_activos == "Cloro/Lej??a, Alcohol" ||
                                $main->cleaning-> ingredientes_activos == "Cloro/Lej??a, Agua y Jab??n" ||
                                $main->cleaning-> ingredientes_activos == "Alcohol, Agua y Jab??n" ||
                                $main->cleaning-> ingredientes_activos == "Acido perac??tico")
                                2
                                @elseif ($main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio" ||
                                $main->cleaning-> ingredientes_activos == "Di??xido de Cloro" ||
                                $main->cleaning-> ingredientes_activos == "Cloro/Lej??a, Alcohol, Agua y Jab??n" ||
                                $main->cleaning-> ingredientes_activos == "Acido perac??tico, Cloro/Lej??a" ||
                                $main->cleaning-> ingredientes_activos == "Acido perac??tico, Alcohol" ||
                                $main->cleaning-> ingredientes_activos == "Acido perac??tico, Agua y Jab??n")
                                3
                                @elseif ($main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Cloro/Lej??a" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Alcohol" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Agua y Jab??n" ||
                                $main->cleaning-> ingredientes_activos == "Di??xido de Cloro, Cloro/Lej??a" ||
                                $main->cleaning-> ingredientes_activos == "Di??xido de Cloro, Alcohol" ||
                                $main->cleaning-> ingredientes_activos == "Di??xido de Cloro, Agua y Jab??n" ||
                                $main->cleaning-> ingredientes_activos == "Acido perac??tico, Cloro/Lej??a, Alcohol" ||
                                $main->cleaning-> ingredientes_activos == "Acido perac??tico, Cloro/Lej??a, Agua y Jab??n" ||
                                $main->cleaning-> ingredientes_activos == "Acido perac??tico, Alcohol, Agua y Jab??n")
                                4
                                @elseif ($main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Acido perac??tico" ||
                                $main->cleaning-> ingredientes_activos == "Acido perac??tico, Di??xido de Cloro" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Cloro/Lej??a, Alcohol" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Cloro/Lej??a, Agua y Jab??n" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Alcohol, Agua y Jab??n" ||
                                $main->cleaning-> ingredientes_activos == "Di??xido de Cloro, Cloro/Lej??a, Alcohol" ||
                                $main->cleaning-> ingredientes_activos == "Di??xido de Cloro, Cloro/Lej??a, Agua y Jab??n" ||
                                $main->cleaning-> ingredientes_activos == "Di??xido de Cloro, Alcohol, Agua y Jab??n" )
                                5
                                @elseif ($main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Di??xido de Cloro" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Acido perac??tico, Cloro/Lej??a" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Acido perac??tico, Agua y Jab??n" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Acido perac??tico, Alcohol" ||
                                $main->cleaning-> ingredientes_activos == "Di??xido de Cloro, Acido perac??tico, Cloro/Lej??a" ||
                                $main->cleaning-> ingredientes_activos == "Di??xido de Cloro, Acido perac??tico, Agua y Jab??n" ||
                                $main->cleaning-> ingredientes_activos == "Di??xido de Cloro, Acido perac??tico, Alcohol" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Cloro/Lej??a, Alcohol, Agua y Jab??n" ||
                                $main->cleaning-> ingredientes_activos == "Di??xido de Cloro, Cloro/Lej??a, Alcohol, Agua y Jab??n" )
                                6
                                @elseif ($main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Di??xido de Cloro, Cloro/Lej??a" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Di??xido de Cloro, Alcohol" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Di??xido de Cloro, Agua y Jab??n" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, ??cido perac??tico, Cloro/Lej??a, Alcohol" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, ??cido perac??tico, Cloro/Lej??a, Agua y Jab??n" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, ??cido perac??tico, Alcohol, Agua y Jab??n" ||
                                $main->cleaning-> ingredientes_activos == "Di??xido de Cloro, ??cido perac??tico, Cloro/Lej??a, Alcohol" ||
                                $main->cleaning-> ingredientes_activos == "Di??xido de Cloro, ??cido perac??tico, Cloro/Lej??a, Agua y Jab??n" ||
                                $main->cleaning-> ingredientes_activos == "Di??xido de Cloro, ??cido perac??tico, Alcohol, Agua y Jab??n" )
                                7
                                @elseif ($main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, ??cido perac??tico, Di??xido de Cloro" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, ??cido perac??tico, Cloro/Lej??a, Alcohol, Agua y Jab??n" ||
                                $main->cleaning-> ingredientes_activos == "??cido perac??tico, Di??xido de Cloro, Cloro/Lej??a, Alcohol, Agua y jab??n" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, ??cido perac??tico, Cloro/Lej??a, Alcohol, Agua y Jab??n" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Di??xido de Cloro, Cloro/Lej??a, Alcohol" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Di??xido de Cloro, Cloro/Lej??a, Agua y Jab??n" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Di??xido de Cloro, Alcohol, Agua y Jab??n")
                                8
                                @elseif ($main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, ??cido perac??tico, Di??xido de Cloro, Cloro/Lej??a" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, ??cido perac??tico, Di??xido de Cloro, Alcohol" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, ??cido perac??tico, Di??xido de Cloro, Agua y Jab??n" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, Di??xido de Cloro, Cloro/Lej??a, Alcohol, Agua y Jab??n")
                                9
                                @elseif ($main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, ??cido perac??tico, Di??xido de Cloro, Cloro/Lej??a, Alcohol" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, ??cido perac??tico, Di??xido de Cloro, Cloro/Lej??a, Agua y Jab??n" ||
                                $main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, ??cido perac??tico, Di??xido de Cloro, Alcohol, Agua y Jab??n")
                                10
                                @elseif($main->cleaning-> ingredientes_activos == "Sales cuaternarias de amonio, ??cido perac??tico, Di??xido de Cloro, Cloro/Lej??a, Alcohol, Agua y Jab??n")
                                11
                                @endif
                            </td>
                            <td> 10 </td>
                            <td> {{ $main->cleaning-> ingredientes_activos }} </td>
                            <td> {{ $main->cleaning-> otros_ingredientes }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Tiempo de desinfecci??n: </th>
                            <td> Poner numero </td>
                            <td> 10 </td>
                            <td> {{ $main->cleaning-> tiempo_desinfeccion }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Tiempo de sanitizaci??n: </th>
                            <td> Poner numero </td>
                            <td> 10 </td>
                            <td> {{ $main->cleaning-> tiempo_sanitizacion }} </td>
                        </tr>
<!--              Apartado: Datos sobre los turnos y distribuci??n horaria de su establecimiento              -->
                        <tr>
                            <th scope="row" class="table-dark" colspan="10"> Datos sobre los turnos y distribuci??n horaria de su establecimiento. </th>
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
                            <th scope="row"> Tiempo optimo para limpieza/sanitizaci??n: </th>
                            <td colspan="2"> {{ $main->distribution-> tiempo_optimo_limpieza }} </td>
                        </tr>
                        <tr>
                            <th scope="row">  </th>
                            <th scope="row"> Puntos obtenidos </th>
                            <th scope="row"> Puntos optimos </th>
                            <th scope="row"> Respuestas: </th>
                        </tr>
                        <tr>
                            <th scope="row"> Reducci??n de turnos: </th>
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

<!--              Apartado: Datos sobre la gesti??n de la interacci??n entre personas y como previene los contagios              -->
                        <tr>
                            <th scope="row" class="table-dark" colspan="10"> Datos sobre la gesti??n de la interacci??n entre
                                personas y como previene los contagios. </th>
                        </tr>
                        <tr>
                            <th scope="row">  </th>
                            <th scope="row"> Puntos obtenidos </th>
                            <th scope="row"> Puntos optimos </th>
                            <th scope="row"> Respuestas: </th>
                        </tr>
                        <tr>
                            <th scope="row"> Promoci??n de la salud: </th>
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
                            <th scope="row"> Control de visitas y despacho de mercanc??as hacia el exterior: </th>
                            <td> Poner numero </td>
                            <td> 10 </td>
                            <td> {{ $main->interaction->control_visitas }} </td>
                        </tr>
<!--              Apartado: Datos sobre los elementos de informaci??n y comunicaci??n que utiliza              -->
                        <tr>
                            <th scope="row" class="table-dark" colspan="10"> Datos sobre los elementos de informaci??n y
                                comunicaci??n que utiliza. </th>
                        </tr>
                        <tr>
                            <th scope="row"> Supervisi??n y consulta: </th>
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
                            <th scope="row"> Capacitaci??n y comunicaci??n: </th>
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
                            <th scope="row"> Redise??o KPI: </th>
                            <td> {{ $main->strategy->redise??o_kpi }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Ausentismo por: </th>
                            <th scope="row"> COVID-19: </th>
                            <td> {{ $main->strategy->ausentismo_c19 }} </td>
                            <th scope="row"> Estr??s: </th>
                            <td> {{ $main->strategy->ausentismo_estres }} </td>
                            <th scope="row"> Paciente de riesgo: </th>
                            <td> {{ $main->strategy->ausentismo_pacientes_riesgo }} </td>
                        </tr>
                        <tr>
                            <th scope="row"> Ausentismo por otra raz??n: </th>
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
