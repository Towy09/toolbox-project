@extends('layouts.app')

@section('title')
    Encuesta | Datos personales.
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-surveys"> Datos personales </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="{{ url('mains/'.Auth::user()->id) }}" method="POST">
                    @csrf

                    @method('put')
                    <div class="form-group">
                        <div class="row">
                            <div class="col-5">
                                <label for="NombreEmpresa" class="text-surveys"> Nombre de la empresa: </label>
                            </div>
                            <div class="col-7">
                                <input type="text" class="formcontrol text-box-surveys" id="NombreEmpresa" name="NombreEmpresa" value="{{ old('NombreEmpresa', $main-> nombre_empresa) }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-5">
                                <label for="NombreResponsable" class="text-surveys">Nombre del responsable: </label>
                            </div>
                            <div class="col-7">
                                <input type="text" class="formcontrol text-box-surveys" id="NombreResponsable" name="NombreResponsable" value="{{ old('NombreResponsable', $main-> nombre_responsable) }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-5">
                                <label for="CargoResponsable" class="text-surveys">Cargo del responsable: </label>
                            </div>
                            <div class="col-7">
                                <input type="text" class="formcontrol text-box-surveys" id="CargoResponsable" name="CargoResponsable" value="{{ old('CargoResponsable', $main-> cargo_responsable) }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-5">
                                <label for="TipoActividad" class="text-surveys">Tipo de actividad: </label>
                            </div>
                            <div class="col-7">
                                <input type="text" class="formcontrol text-box-surveys" id="TipoActividad" name="TipoActividad" value="{{ old('TipoActividad', $main-> tipo_actividad) }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-5">
                                <label for="NumeroTrabajadores" class="text-surveys">Numero de trabajadores: </label>
                            </div>
                            <div class="col-7">
                                <input type="number" class="formcontrol text-box-surveys" id="NumeroTrabajadores" name="NumeroTrabajadores" value="{{ old('NumeroTrabajadores', $main-> numero_trabajadores) }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-5">
                                <label for="TraficoExterno" class="text-surveys">Trafico externo: </label>
                            </div>
                            <div class="col-7">
                                <input type="number" class="formcontrol text-box-surveys" id="TraficoExterno" name="TraficoExterno" value="{{ old('TraficoExterno', $main-> trafico_externo) }}">
                            </div>
                        </div>
                    </div>

                    <button type="submit" name="submit" id="submit" class="button-to-save float-right">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
