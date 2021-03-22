@extends('layouts.app')

@section('title')
    Actualizar | Datos de la empresa.
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
                <form action="{{ url('companies/'.Auth::user()->id) }}" method="POST">
                    @csrf

                    @method('put')
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
                                <input type="number" class="formcontrol text-box-surveys-company-meter" id="TamañoEmpresa" name="TamañoEmpresa" value="{{ old('TamañoEmpresa', $company-> tamaño_empresa) }}"> m²
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="Entradas" class="text-surveys-company">Entradas:</label>
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-meter" id="TamañoEntradas" name="TamañoEntradas" value="{{ old('TamañoEntradas', $company-> tamaño_entradas) }}"> m²
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="EntradasHabilitadas" name="EntradasHabilitadas" value="{{ old('EntradasHabilitadas', $company-> entradas_habilitadas) }}">
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="EntradasDeshabilitadas" name="EntradasDeshabilitadas" value="{{ old('EntradasDeshabilitadas', $company-> entradas_deshabilitadas) }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="Salas" class="text-surveys-company">Salas:</label>
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-meter" id="TamañoSalas" name="TamañoSalas" value="{{ old('TamañoSalas', $company-> tamaño_salas) }}"> m²
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="SalasHabilitadas" name="SalasHabilitadas" value="{{ old('SalasHabilitadas', $company-> salas_habilitadas) }}">
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="SalasDeshabilitadas" name="SalasDeshabilitadas" value="{{ old('SalasDeshabilitadas', $company-> salas_deshabilitadas) }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="Oficinas" class="text-surveys-company">Oficinas:</label>
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-meter" id="TamañoOficinas" name="TamañoOficinas" value="{{ old('TamañoOficinas', $company-> tamaño_oficinas) }}"> m²
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="OficinasHabilitadas" name="OficinasHabilitadas" value="{{ old('OficinasHabilitadas', $company-> oficinas_habilitadas) }}">
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="OficinasDeshabilitadas" name="OficinasDeshabilitadas" value="{{ old('OficinasDeshabilitadas', $company-> oficinas_deshabilitadas) }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="Baños" class="text-surveys-company">Baños:</label>
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-meter" id="TamañoBaños" name="TamañoBaños" value="{{ old('TamañoBaños', $company-> tamaño_baños) }}"> m²
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="BañosHabilitadas" name="BañosHabilitadas" value="{{ old('BañosHabilitadas', $company-> baños_habilitadas) }}">
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="BañosDeshabilitadas" name="BañosDeshabilitadas" value="{{ old('BañosDeshabilitadas', $company-> baños_deshabilitadas) }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="Ensamble" class="text-surveys-company">Zona de ensamble:</label>
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-meter" id="TamañoEnsamble" name="TamañoEnsamble" value="{{ old('TamañoEnsamble', $company-> tamaño_ensamble) }}"> m²
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="EnsambleHabilitadas" name="EnsambleHabilitadas" value="{{ old('EnsambleHabilitadas', $company-> ensamble_habilitadas) }}">
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="EnsambleDeshabilitadas" name="EnsambleDeshabilitadas" value="{{ old('EnsambleDeshabilitadas', $company-> ensamble_deshabilitadas) }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="Produccion" class="text-surveys-company">Zona de produccion:</label>
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-meter" id="TamañoProduccion" name="TamañoProduccion" value="{{ old('TamañoProduccion', $company-> tamaño_produccion) }}"> m²
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="ProduccionHabilitadas" name="ProduccionHabilitadas" value="{{ old('ProduccionHabilitadas', $company-> produccion_habilitadas) }}">
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="ProduccionDeshabilitadas" name="ProduccionDeshabilitadas" value="{{ old('ProduccionDeshabilitadas', $company-> produccion_deshabilitadas) }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="Carga" class="text-surveys-company">Zona de carga:</label>
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-meter" id="TamañoCarga" name="TamañoCarga" value="{{ old('TamañoCarga', $company-> tamaño_carga) }}"> m²
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="CargaHabilitadas" name="CargaHabilitadas" value="{{ old('CargaHabilitadas', $company-> carga_habilitadas) }}">
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="CargaDeshabilitadas" name="CargaDeshabilitadas" value="{{ old('CargaDeshabilitadas', $company-> carga_deshabilitadas) }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="Cafeteria" class="text-surveys-company">Cafeteria:</label>
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-meter" id="TamañoCafeteria" name="TamañoCafeteria" value="{{ old('TamañoCafeteria', $company-> tamaño_cafeteria) }}"> m²
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="CafeteriaHabilitadas" name="CafeteriaHabilitadas" value="{{ old('CafeteriaHabilitadas', $company-> cafeteria_habilitadas) }}">
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="CafeteriaDeshabilitadas" name="CafeteriaDeshabilitadas" value="{{ old('CafeteriaDeshabilitadas', $company-> cafeteria_deshabilitadas) }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="Comedores" class="text-surveys-company">Comedores:</label>
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-meter" id="TamañoComedores" name="TamañoComedores" value="{{ old('TamañoComedores', $company-> tamaño_comedores) }}"> m²
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="ComedoresHabilitadas" name="ComedoresHabilitadas" value="{{ old('ComedoresHabilitadas', $company-> comedores_habilitadas) }}">
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="ComedoresDeshabilitadas" name="ComedoresDeshabilitadas" value="{{ old('ComedoresDeshabilitadas', $company-> comedores_deshabilitadas) }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="Ascensores" class="text-surveys-company">Ascensores:</label>
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-meter" id="TamañoAscensores" name="TamañoAscensores" value="{{ old('TamañoAscensores', $company-> tamaño_ascensores) }}"> m²
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="AscensoresHabilitadas" name="AscensoresHabilitadas" value="{{ old('AscensoresHabilitadas', $company-> ascensores_habilitadas) }}">
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="AscensoresDeshabilitadas" name="AscensoresDeshabilitadas" value="{{ old('AscensoresDeshabilitadas', $company-> ascensores_deshabilitadas) }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="Escaleras" class="text-surveys-company">Escaleras:</label>
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-meter" id="TamañoEscaleras" name="TamañoEscaleras" value="{{ old('TamañoEscaleras', $company-> tamaño_escaleras) }}"> m²
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="EscalerasHabilitadas" name="EscalerasHabilitadas" value="{{ old('EscalerasHabilitadas', $company-> escaleras_habilitadas) }}">
                            </div>
                            <div class="col-3">
                                <input type="number" class="formcontrol text-box-surveys-company-number" id="EscalerasDeshabilitadas" name="EscalerasDeshabilitadas" value="{{ old('EscalerasDeshabilitadas', $company-> escaleras_deshabilitadas) }}">
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
