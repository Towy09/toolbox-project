@extends('layouts.app')

@section('title')
    Encuesta | Datos sobre interacciones.
@endsection

@section('content')
    <div class="container pad-top">
        <div class="row">
            <div class="col-12">
                <h1 class="title-surveys"> Datos sobre interacciones </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="{{ url('interactions/'.Auth::user()->id) }}" method="POST">
                    @csrf

                    @method('put')
                    <div class="row">
                        <div class="col-12">
                            <b><label class="text-checkbox-title"> Gestion entre la interaccion de las personas. </label></b>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <b><label class="text-checkbox-title-distribution"> Promoción de la salud. </label></b>
                        </div>
                    </div>
                    <div class="form-check">
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="PromocionSalud[]" value="Información física y virtualmente"> Información física y virtualmente.</label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="PromocionSalud[]" value="Desarrolla campañas"> Desarrolla campañas.</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="PromocionSalud[]" value="Promueve la limpieza y la desinfección"> Promueve la limpieza y la desinfección.</label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="PromocionSalud[]" value="Establece un programa de capacitación y guía"> Establece un programa de capacitación y guía.</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="PromocionSalud[]" value="Dispone de cartelería en zonas clave con la información"> Dispone de cartelería en zonas clave con la información.</label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="PromocionSalud[]" value="Sanitiza a fondo los espacios"> Sanitiza a fondo los espacios.</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="PromocionSalud[]" value="Ofrece equipos de protección individual completos"> Ofrece equipos de protección individual completos.</label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="PromocionSalud[]" value="Ofrece guantes y mascarilla"> Ofrece guantes y mascarilla.</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="PromocionSalud[]" value="Ofrece gel sanitizante"> Ofrece gel sanitizante.</label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="PromocionSalud[]" value="Ha definido recorridos internos"> Ha definido recorridos internos.</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="PromocionSalud[]" value="Tiene accesos controlados"> Tiene accesos controlados.</label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="PromocionSalud[]" value="Tiene un protocolo de gestión de deshechos y materiales susceptibles de estar contaminados"> Tiene un protocolo de gestión de deshechos y materiales susceptibles de estar contaminados.</label>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-12">
                            <b><label class="text-checkbox-title-distribution"> Distancia interpersonal. </label></b>
                        </div>
                    </div>
                    <div class="form-check">
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="DistanciaInterpersonal[]" value="Ha informado sobre la distancia mínima requerida"> Ha informado sobre la distancia mínima requerida.</label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="DistanciaInterpersonal[]" value="Ha señalizado las distancias"> Ha señalizado las distancias.</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="DistanciaInterpersonal[]" value="Ha reorganizado los espacios de trabajo"> Ha reorganizado los espacios de trabajo.</label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="DistanciaInterpersonal[]" value="Ha adicionado barreras físicas en el espacio de trabajo"> Ha adicionado barreras físicas en el espacio de trabajo.</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label class="text-checkbox-type1"><input type="checkbox" name="DistanciaInterpersonal[]" value="Ha reducido el mobiliario en los espacios de trabajo para minimizar el riesgo de aglomeración"> Ha reducido el mobiliario en los espacios de trabajo para minimizar el riesgo de aglomeración.</label>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-12">
                            <b><label class="text-checkbox-title-distribution"> Control de Ingreso-Egreso. </label></b>
                        </div>
                    </div>
                    <div class="form-check">
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="ControlIngresoEgreso[]" value="Ha formado un equipo para gestionar los accesos"> Ha formado un equipo para gestionar los accesos.</label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="ControlIngresoEgreso[]" value="Cuenta con un espacio especifico de ingreso-egreso"> Cuenta con un espacio especifico de ingreso-egreso.</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="ControlIngresoEgreso[]" value="Dispone de un sistema de autodiagnóstico"> Dispone de un sistema de autodiagnóstico.</label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="ControlIngresoEgreso[]" value="Dispone de un sistema de monitoreo a distancia"> Dispone de un sistema de monitoreo a distancia.</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="ControlIngresoEgreso[]" value="Dispone de un sistema de telemedicina"> Dispone de un sistema de telemedicina.</label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="ControlIngresoEgreso[]" value="Implementar un sistema de telemedicina avanzado"> Implementar un sistema de telemedicina avanzado.</label>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-12">
                            <b><label class="text-checkbox-title-distribution"> Acceso de visitantes y proveedores. </label></b>
                        </div>
                    </div>
                    <div class="form-check">
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="AccesoVisitantesProveedores[]" value="Ha definido un protocolo de acceso de personas externas"> Ha definido un protocolo de acceso de personas externas.</label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="AccesoVisitantesProveedores[]" value="Se informa a personas externas de las normas en el interior"> Se informa a personas externas de las normas en el interior.</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="AccesoVisitantesProveedores[]" value="Ofrece material protector a los visitantes"> Ofrece material protector a los visitantes.</label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="AccesoVisitantesProveedores[]" value="Dispone de un espacio de recepción aislado"> Dispone de un espacio de recepción aislado.</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="AccesoVisitantesProveedores[]" value="Existe un protocolo de recepción de mercancías de transportistas"> Existe un protocolo de recepción de mercancías de transportistas.</label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="AccesoVisitantesProveedores[]" value="Desinfecta las mercancías recibidas"> Desinfecta las mercancías recibidas.</label>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-12">
                            <b><label class="text-checkbox-title-distribution"> Control de visitas y despacho de mercancías hacia el exterior. </label></b>
                        </div>
                    </div>
                    <div class="form-check">
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="ControlVisitas[]" value="Tiene un protocolo de empleados que realizan visitas a Clientes externos"> Tiene un protocolo de empleados que realizan visitas a Clientes externos.</label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="ControlVisitas[]" value="Dispone de un sistema de recepción de pedidos desde el exterior"> Dispone de un sistema de recepción de pedidos desde el exterior.</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="ControlVisitas[]" value="Dispone de un sistema de gestión de salida de pedidos"> Dispone de un sistema de gestión de salida de pedidos.</label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="ControlVisitas[]" value="Existe un protocolo de entrega hacia transportistas externos"> Existe un protocolo de entrega hacia transportistas externos.</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="ControlVisitas[]" value="Dispone de una zona de entrega seguro"> Dispone de una zona de entrega seguro.</label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="ControlVisitas[]" value="Dispone de un sistema de entrega seguro"> Dispone de un sistema de entrega seguro.</label>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <button type="submit" name="submit" id="submit" class="button-to-save float-right">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
