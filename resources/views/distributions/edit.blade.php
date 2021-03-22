@extends('layouts.app')

@section('title')
    Encuesta | Datos sobre Distribucion.
@endsection

@section('content')
    <div class="container pad-top">
        <div class="row">
            <div class="col-12">
                <h1 class="title-surveys">Datos sobre Distribucion</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="{{ url('distributions/'.Auth::user()->id) }}" method="POST">
                    @csrf

                    @method('put')
                    <div class="row">
                        <div class="col-12">
                            <b><label class="text-checkbox-title"> ¿Cuál es la distribución horaria de su organización? </label></b>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-4">
                            <b><label class="text-checkbox-title-distribution"> Turnos con que cuenta el centro de trabajo. </label></b>
                            <div class="form-group">
                                <input type="number" class="formcontrol text-box-distribution-number" id="TurnosEmpresa" name="TurnosEmpresa" value="{{ old('TurnosEmpresa') }}">
                            </div>
                        </div>
                        <div class="col-4">
                            <b><label class="text-checkbox-title-distribution"> Tipo de turnos con los que cuenta: </label></b>
                            <div class="form-check">
                                <div class="row">
                                    <div class="col-12">
                                        <label class="text-checkbox-type1"><input type="checkbox" name="TipoTurnos[]" value="Turnos fijos"> Turnos fijos. </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label class="text-checkbox-type1"><input type="checkbox" name="TipoTurnos[]" value="Turnos moviles"> Turnos moviles. </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <b><label class="text-checkbox-title-distribution"> ¿Ha variado/reducido la duración de los turnos de trabajo? </label></b>
                            <div class="form-check">

                                <label class="form-check-label text-checkbox-type1" for="ReduccionTurnosSi"> <input class="form-check-input" type="radio" name="ReduccionTurnos" value="Si" id="ReduccionTurnosSi" checked>
                                    Si.
                                </label>
                            </div>
                            <div class="form-check">

                                <label class="form-check-label text-checkbox-type1" for="ReduccionTurnosNo"> <input class="form-check-input" type="radio" name="ReduccionTurnos" value="No" id="ReduccionTurnosNo">
                                    No.
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--  VOY AQUI -->
                    <hr>

                    <div class="row">
                        <div class="col-6">
                            <b><label class="text-checkbox-title-distribution"> Horarios de mayor ocupación del centro de trabajo: </label></b>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" class="formcontrol text-box-surveys" id="HoraMayorOcupacion" name="HoraMayorOcupacion" value="{{ old('HoraMayorOcupacion') }}">
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-6">
                            <b><label class="text-checkbox-title-distribution"> Tiempos muertos o de baja demanda identificados por el centro de trabajo: </label></b>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" class="formcontrol text-box-surveys" id="BajaDemanda" name="BajaDemanda" value="{{ old('BajaDemanda') }}">
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-6">
                            <b><label class="text-checkbox-title-distribution"> Ventana de tiempo optima para la limpieza y sanitización: </label></b>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" class="formcontrol text-box-surveys" id="TiempoOptimoLimpieza" name="TiempoOptimoLimpieza" value="{{ old('TiempoOptimoLimpieza') }}">
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-12">
                            <b><label class="text-checkbox-title-distribution"> Trabajo remoto y modificación de tareas. </label></b>
                        </div>
                    </div>
                    <div class="form-check">
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="TrabajoRemoto[]" value="Ha transformado tareas físicas en virtuales"> Ha transformado tareas físicas en virtuales. </label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="TrabajoRemoto[]" value="Dispone de plataformas virtuales que reducen el contacto personal"> Dispone de plataformas virtuales que reducen el contacto personal. </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="TrabajoRemoto[]" value="Tiene posibilidades de realizar Home Office"> Tiene posibilidades de realizar Home Office. </label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="TrabajoRemoto[]" value="Ha implementado Home Office"> Ha implementado Home Office. </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="TrabajoRemoto[]" value="Ha reducido la cantidad de personas por tarea"> Ha reducido la cantidad de personas por tarea. </label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="TrabajoRemoto[]" value="Cuenta con un equipo de trabajo remoto"> Cuenta con un equipo de trabajo remoto. </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="TrabajoRemoto[]" value="Ha cambiado roles para proteger a las personas de mayor riesgo"> Ha cambiado roles para proteger a las personas de mayor riesgo. </label>
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
