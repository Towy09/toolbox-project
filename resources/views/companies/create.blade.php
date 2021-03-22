@extends('layouts.app')

@section('title')
    Encuesta | Datos de la empresa.
@endsection

@section('content')
    <div class="container pad-top">
        <div class="row">
            <div class="col-12">
                <h1 class="title-surveys">Datos de la empresa</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="{{ url('/companies') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="TamañoEmpresa" class="text-surveys-company"></label>
                            </div>
                            <div class="col-3">
                                <b><label for="TamañoEmpresa" class="text-surveys-company-black"> Tamaño </label></b>
                            </div>
                            <div class="col-3">
                                <b><label for="TamañoEmpresa" class="text-surveys-company-black"> Habilitadas </label></b>
                            </div>
                            <div class="col-3">
                                <b><label for="TamañoEmpresa" class="text-surveys-company-black"> Deshabilitadas </label></b>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="TamañoEmpresa" class="text-surveys-company"> Empresa:</label>
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-meter" id="TamañoEmpresa" name="TamañoEmpresa" value="{{ old('TamañoEmpresa') }}"> m²
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="Entradas" class="text-surveys-company">Entradas:</label>
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-meter" id="TamañoEntradas" name="TamañoEntradas" value="{{ old('TamañoEntradas') }}"> m²
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="EntradasHabilitadas" name="EntradasHabilitadas" value="{{ old('EntradasHabilitadas') }}">
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="EntradasDeshabilitadas" name="EntradasDeshabilitadas" value="{{ old('EntradasDeshabilitadas') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="Salas" class="text-surveys-company">Salas:</label>
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-meter" id="TamañoSalas" name="TamañoSalas" value="{{ old('TamañoSalas') }}"> m²
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="SalasHabilitadas" name="SalasHabilitadas" value="{{ old('SalasHabilitadas') }}">
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="SalasDeshabilitadas" name="SalasDeshabilitadas" value="{{ old('SalasDeshabilitadas') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="Oficinas" class="text-surveys-company">Oficinas:</label>
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-meter" id="TamañoOficinas" name="TamañoOficinas" value="{{ old('TamañoOficinas') }}"> m²
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="OficinasHabilitadas" name="OficinasHabilitadas" value="{{ old('OficinasHabilitadas') }}">
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="OficinasDeshabilitadas" name="OficinasDeshabilitadas" value="{{ old('OficinasDeshabilitadas') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="Baños" class="text-surveys-company">Baños:</label>
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-meter" id="TamañoBaños" name="TamañoBaños" value="{{ old('TamañoBaños') }}"> m²
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="BañosHabilitadas" name="BañosHabilitadas" value="{{ old('BañosHabilitadas') }}">
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="BañosDeshabilitadas" name="BañosDeshabilitadas" value="{{ old('BañosDeshabilitadas') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="Ensamble" class="text-surveys-company">Zona de ensamble:</label>
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-meter" id="TamañoEnsamble" name="TamañoEnsamble" value="{{ old('TamañoEnsamble') }}"> m²
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="EnsambleHabilitadas" name="EnsambleHabilitadas" value="{{ old('EnsambleHabilitadas') }}">
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="EnsambleDeshabilitadas" name="EnsambleDeshabilitadas" value="{{ old('EnsambleDeshabilitadas') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="Produccion" class="text-surveys-company">Zona de produccion:</label>
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-meter" id="TamañoProduccion" name="TamañoProduccion" value="{{ old('TamañoProduccion') }}"> m²
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="ProduccionHabilitadas" name="ProduccionHabilitadas" value="{{ old('ProduccionHabilitadas') }}">
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="ProduccionDeshabilitadas" name="ProduccionDeshabilitadas" value="{{ old('ProduccionDeshabilitadas') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="Carga" class="text-surveys-company">Zona de carga:</label>
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-meter" id="TamañoCarga" name="TamañoCarga" value="{{ old('TamañoCarga') }}"> m²
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="CargaHabilitadas" name="CargaHabilitadas" value="{{ old('CargaHabilitadas') }}">
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="CargaDeshabilitadas" name="CargaDeshabilitadas" value="{{ old('CargaDeshabilitadas') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="Cafeteria" class="text-surveys-company">Cafeteria:</label>
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-meter" id="TamañoCafeteria" name="TamañoCafeteria" value="{{ old('TamañoCafeteria') }}"> m²
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="CafeteriaHabilitadas" name="CafeteriaHabilitadas" value="{{ old('CafeteriaHabilitadas') }}">
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="CafeteriaDeshabilitadas" name="CafeteriaDeshabilitadas" value="{{ old('CafeteriaDeshabilitadas') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="Comedores" class="text-surveys-company">Comedores:</label>
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-meter" id="TamañoComedores" name="TamañoComedores" value="{{ old('TamañoComedores') }}"> m²
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="ComedoresHabilitadas" name="ComedoresHabilitadas" value="{{ old('ComedoresHabilitadas') }}">
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="ComedoresDeshabilitadas" name="ComedoresDeshabilitadas" value="{{ old('ComedoresDeshabilitadas') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="Ascensores" class="text-surveys-company">Ascensores:</label>
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-meter" id="TamañoAscensores" name="TamañoAscensores" value="{{ old('TamañoAscensores') }}"> m²
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="AscensoresHabilitadas" name="AscensoresHabilitadas" value="{{ old('AscensoresHabilitadas') }}">
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="AscensoresDeshabilitadas" name="AscensoresDeshabilitadas" value="{{ old('AscensoresDeshabilitadas') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="Escaleras" class="text-surveys-company">Escaleras:</label>
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-meter" id="TamañoEscaleras" name="TamañoEscaleras" value="{{ old('TamañoEscaleras') }}"> m²
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="EscalerasHabilitadas" name="EscalerasHabilitadas" value="{{ old('EscalerasHabilitadas') }}">
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="EscalerasDeshabilitadas" name="EscalerasDeshabilitadas" value="{{ old('EscalerasDeshabilitadas') }}">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="InformacionExtra" class="text-surveys-company">Informacion extra:</label>
                            </div>
                            <div class="col-9">
                                <textarea class="form-control" placeholder="Otro sitio que no este en la tabla, incluir las medidas y la cantidad si es posible (De lo contrario dejar el campo vacío)." name="InformacionExtra" value="{{ old('InformacionExtra') }}" bane></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="AltoRiesgo" class="text-surveys-company">Zonas de alto riesgo:</label>
                            </div>
                            <div class="col-9">
                                <textarea class="form-control" placeholder="Ha identificado alguna de las posibles zonas de alto riesgo (De lo contrario dejar el campo vacío)." name="AltoRiesgo" value="{{ old('AltoRiesgo') }}" bane></textarea>
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
