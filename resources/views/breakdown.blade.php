@extends('layouts.app')

@section('title')
    Reporte de desglose de puntos.
@endsection

@section('content')
    <div class="container pad-top">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <tbody>
<!--              Reporte de desglose de puntos.              -->
                        <tr>
                            <th scope="row" class="table-dark" colspan="12"> Limpieza del establecimiento.</th>
                        </tr>
                        <tr>
                            <th colspan="6" scope="col"> Respuesta. </th>
                            <th colspan="3" scope="col"> Valor. </th>
                            <th colspan="3" scope="col"> Total. </th>
                        </tr>
                        <tr>
                            <th colspan="6" scope="row"> Quién limpia. </th>
                            <td colspan="3">  </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Prestador de servicios externo. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Unipersonal. </td>
                            <td colspan="3"> 1 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Equipo interno dedicado. </td>
                            <td colspan="3"> 1 </td>
                            <td colspan="3"> 4 </td>
                        </tr>
                        <tr>
                            <th colspan="6" scope="row"> Ingredientes activos. </th>
                            <td colspan="3">  </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Sales cuaternarias de amonio. </td>
                            <td colspan="3"> 3 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Ácido peracético. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Dióxido de cloro. </td>
                            <td colspan="3"> 3 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Cloro/Lejía. </td>
                            <td colspan="3"> 1 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Alcohol. </td>
                            <td colspan="3"> 1 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Agua y jabón. </td>
                            <td colspan="3"> 1 </td>
                            <td colspan="3"> 11 </td>
                        </tr>
                        <tr>
                            <th colspan="6" scope="row"> Cada cuanto tiempo limpia. </th>
                            <td colspan="3">  </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Desinfección diaria. </td>
                            <td colspan="3"> 4 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Desinfección semanal. </td>
                            <td colspan="3"> 3 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Desinfección quincenal. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Desinfección mensual. </td>
                            <td colspan="3"> 1 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Sanitización diaria. </td>
                            <td colspan="3"> 4 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Sanitización semanal. </td>
                            <td colspan="3"> 3 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Sanitización quincenal. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Sanitización mensual. </td>
                            <td colspan="3"> 1 </td>
                            <td colspan="3"> 20 </td>
                        </tr>
                        <tr>
                            <th colspan="6" scope="row"> Herramientas de limpieza. </th>
                            <td colspan="3">  </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> In Situ. </td>
                            <td colspan="3"> 1 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Atomización. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Aspersión. </td>
                            <td colspan="3"> 3 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Termo nebulización. </td>
                            <td colspan="3"> 3 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Luz ultravioleta. </td>
                            <td colspan="3"> 0 </td>
                            <td colspan="3"> 9 </td>
                        </tr>

                        <tr>
                            <th scope="row" class="table-dark" colspan="12"> Distribución horaria.</th>
                        </tr>
                        <tr>
                            <th colspan="6" scope="col"> Respuesta. </th>
                            <th colspan="3" scope="col"> Valor. </th>
                            <th colspan="3" scope="col"> Total. </th>
                        </tr>
                        <tr>
                            <th colspan="6" scope="row"> Reducción de turnos. </th>
                            <td colspan="3">  </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Si. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> No. </td>
                            <td colspan="3"> 0 </td>
                            <td colspan="3"> 2 </td>
                        </tr>
                        <tr>
                            <th colspan="6" scope="row"> Trabajo remoto. </th>
                            <td colspan="3">  </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Ha transformado tareas físicas en virtuales. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Dispone de plataformas virtuales que reducen el contacto personal. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Tiene posibilidades de realizar Home Office. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Ha implementado Home Office. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Ha reducido la cantidad de personas por tarea. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Cuenta con un equipo de trabajo remoto. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Ha cambiado roles para proteger a las personas de mayor riesgo. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3"> 14 </td>
                        </tr>

                        <tr>
                            <th scope="row" class="table-dark" colspan="12"> Interacción de personas y prevención.</th>
                        </tr>
                        <tr>
                            <th colspan="6" scope="col"> Respuesta. </th>
                            <th colspan="3" scope="col"> Valor. </th>
                            <th colspan="3" scope="col"> Total. </th>
                        </tr>
                        <tr>
                            <th colspan="6" scope="row"> Promoción de la salud. </th>
                            <td colspan="3">  </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Informa física y virtualmente. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Desarrolla campañas de buena higiene. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Promueve la limpieza y desinfección. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Establece un programa de capacitación y guía. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Dispone de cartelería en zonas clave con información. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Sanitiza a fondo los espacios públicos. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Ofrece equipos de protección individual completos. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Ofrece guantes y mascarillas a sus empleados. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Ofrece gel sanitizante en diferentes puntos del establecimiento. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Ha definido recorridos internos para evitar contacto excesivo. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Tiene accesos controlados. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Tiene un protocolo de gestión de deshechos y materiales susceptibles de estar contaminados. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3"> 24 </td>
                        </tr>
                        <tr>
                            <th colspan="6" scope="row"> Distancia interpersonal. </th>
                            <td colspan="3">  </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Ha informado sobre la distancia mínima requerida. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Ha reducido el mobiliario en los espacios de trabajo para minimizar el riesgo de aglomeración. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Ha señalizado las distancias permitidas en cada área dentro del trabajo. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Ha reorganizado los espacios de trabajo para evitar aglomeraciones. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Ha adicionado barreras físicas en el espacio de trabajo para cuidar la distancia. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3"> 10 </td>
                        </tr>
                        <tr>
                            <th colspan="6" scope="row"> Control de ingreso-egreso. </th>
                            <td colspan="3">  </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Ha informado un equipo para gestionar los accesos. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Cuenta con un espacio específico de ingreso-egreso. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Dispone de un sistema de autodiagnóstico. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Dispone de un sistema de monitoreo a distancia. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Dispone de un sistema de telemedicina. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Implementar un sistema de telemedicina avanzado. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3"> 12 </td>
                        </tr>
                        <tr>
                            <th colspan="6" scope="row"> Acceso de visitantes y proveedores. </th>
                            <td colspan="3">  </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Ha definido un protocolo de acceso de personas externas. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Se informa a personas externas de las normas en el interior. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Ofrece material protector a los visitantes. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Dispone de un espacio de recepción aislado. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Existe un protocolo de recepción de mercancías de transportistas. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Desinfecta las mercancías recibidas. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3"> 12 </td>
                        </tr>
                        <tr>
                            <th colspan="6" scope="row"> Control de visitas y despacho de mercancías hacia el exterior. </th>
                            <td colspan="3">  </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Tiene un protocolo para empleados que realizan visitas a clientes externos. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Dispone de un sistema de recepción de pedidos desde el exterior. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Dispone de un sistema de gestión de salida de pedidos. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Existe un protocolo de entrega hacia transportistas externos. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Dispone de una zona de entrega seguro (proceso delivery). </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Dispone de un sistema de entrega seguro (proceso delivery). </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3"> 12 </td>
                        </tr>

                        <tr>
                            <th scope="row" class="table-dark" colspan="12"> Elementos de información y consulta. </th>
                        </tr>
                        <tr>
                            <th colspan="6" scope="col"> Respuesta. </th>
                            <th colspan="3" scope="col"> Valor. </th>
                            <th colspan="3" scope="col"> Total. </th>
                        </tr>
                        <tr>
                            <th colspan="6" scope="row"> Supervisión y consulta. </th>
                            <td colspan="3">  </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Dispone de equipo de referencia Covid-19. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Ha definido un comité de supervisión. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Ha contratado personal especializado en salud. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Dispone de un plan de acción en caso de contagios. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Dispone de un plan de acción para casos sospechosos. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Dispone de los datos de contacto para emergencia. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Ha capacitado un equipo que efectúe tareas de supervisión. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3"> 14 </td>
                        </tr>
                        <tr>
                            <th colspan="6" scope="row"> Estrategia digital. </th>
                            <td colspan="3">  </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Usa Códigos QR. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> APP de Intercambio. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Email / WhatsApp / SMS marketing / Microservicios APP/ Sitio WEB dinámico. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Plataforma digital. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Plataforma digital para el seguimiento y control de enfermos y/o casos sospechosos. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Sensor voluntario. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3"> 12 </td>
                        </tr>
                        <tr>
                            <th colspan="6" scope="row"> Normas y protocolos. </th>
                            <td colspan="3">  </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Ha establecido normas de comportamiento y ha informado sobre ellas. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Ha definido protocolos deseguridad y los ha comunicado. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Certifica a las personas que los han recibido. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Cuenta y distribuye con un "Manual de Buenas Prácticas". </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Incentiva su seguimiento. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3"> 10 </td>
                        </tr>
                        <tr>
                            <th colspan="6" scope="row"> Capacitación y comunicación. </th>
                            <td colspan="3">  </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Ha colocado cartelería adecuada. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Dispone de un sistema de información. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Dispone de un sistema de capacitación y prevención. </td>
                            <td colspan="3"> 2 </td>
                            <td colspan="3"> 6 </td>
                        </tr>
                        <tr>
                            <th colspan="6" scope="row"> Indicadores KPI. </th>
                            <td colspan="3">  </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Ha variado su capacidad productiva. </td>
                            <td colspan="3"> 0 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Ha tenido que contratar personal extra. </td>
                            <td colspan="3"> 0 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Ha tenido que reducir personal. </td>
                            <td colspan="3"> 0 </td>
                            <td colspan="3">  </td>
                        </tr>
                        <tr>
                            <td colspan="6" scope="row"> Ha tenido que aumentar la rotación de puestos. </td>
                            <td colspan="3"> 0 </td>
                            <td colspan="3"> 0 </td>
                        </tr>

                        <tr>
                            <th scope="row" class="table-dark" colspan="6"> Total: </th>
                            <td colspan="3">  </td>
                            <td colspan="3"> 172 </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a class="btn btn-outline-primary float-left" href="{{ url('survey') }}" role="button">Regresar</a>
                <!--<a class="btn btn-outline-primary float-right" href="{{ url('download') }}" role="button">Descargar</a>-->
            </div>
        </div>
    </div>
@endsection
