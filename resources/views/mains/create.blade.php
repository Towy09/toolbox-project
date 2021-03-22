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
                <form action="{{ url('/mains') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-5">
                                <label for="NombreEmpresa" class="text-surveys"> Nombre de la empresa: </label>
                            </div>
                            <div class="col-7">
                                <input type="text" class="formcontrol text-box-surveys" id="NombreEmpresa" name="NombreEmpresa" value="{{ old('NombreEmpresa') }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-5">
                                <label for="NombreResponsable" class="text-surveys">Nombre del responsable: </label>
                            </div>
                            <div class="col-7">
                                <input type="text" class="formcontrol text-box-surveys" id="NombreResponsable" name="NombreResponsable" value="{{ old('NombreResponsable') }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-5">
                                <label for="CargoResponsable" class="text-surveys">Cargo del responsable: </label>
                            </div>
                            <div class="col-7">
                                <input type="text" class="formcontrol text-box-surveys" id="CargoResponsable" name="CargoResponsable" value="{{ old('CargoResponsable') }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-5">
                                <label for="TipoActividad" class="text-surveys">Tipo de actividad: </label>
                            </div>
                            <div class="col-7">
                                <input type="text" class="formcontrol text-box-surveys" id="TipoActividad" name="TipoActividad" value="{{ old('TipoActividad') }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-5">
                                <label for="NumeroTrabajadores" class="text-surveys">Numero de trabajadores: </label>
                            </div>
                            <div class="col-7">
                                <input type="number" class="formcontrol text-box-surveys" id="NumeroTrabajadores" name="NumeroTrabajadores" value="{{ old('NumeroTrabajadores') }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-5">
                                <label for="TraficoExterno" class="text-surveys">Trafico externo: </label>
                            </div>
                            <div class="col-7">
                                <input type="number" class="formcontrol text-box-surveys" id="TraficoExterno" name="TraficoExterno" value="{{ old('TraficoExterno') }}">
                            </div>
                        </div>
                    </div>

                    <button type="submit" name="submit" id="submit" class="button-to-save float-right">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
