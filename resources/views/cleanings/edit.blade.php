@extends('layouts.app')

@section('title')
    Actualizar | Datos sobre limpieza.
@endsection

@section('content')
    <div class="container pad-top">
        <div class="row">
            <div class="col-12">
                <h1 class="title-surveys">Datos sobre limpieza</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="{{ url('cleanings/'.Auth::user()->id) }}" method="POST">
                    @csrf

                    @method('put')
                    <div class="row">
                        <div class="col-12">
                            <b><label class="text-checkbox-title"> ¿Quién se encarga de la limpieza? </label></b>
                        </div>
                    </div>
                    <div class="form-check">
                        <div class="row">
                            <div class="col-4">
                                <label class="text-checkbox-type1"><input type="checkbox" name="EncargadoLimpieza[]" value="Prestador de servicios externo"> Prestador de servicios externo.</label>
                            </div>
                            <div class="col-4">
                                <label class="text-checkbox-type1"><input type="checkbox" name="EncargadoLimpieza[]" value="Unipersonal"> Unipersonal.</label>
                            </div>
                            <div class="col-4">
                                <label class="text-checkbox-type1"><input type="checkbox" name="EncargadoLimpieza[]" value="Equipo interno dedicado"> Equipo interno dedicado.</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <b><label class="text-checkbox-title"> Otros: </label></b>
                        </div>
                        <div class="col-10">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Indique cuál (De lo contrario dejar el campo vacío)." name="OtrosLimpieza" value="{{ old('OtrosLimpieza', $cleaning-> otros_limpieza) }}" bane></textarea>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-12">
                            <b><label class="text-checkbox-title"> ¿Qué ingredientes activos utiliza? </label></b>
                        </div>
                    </div>
                    <div class="form-check">
                        <div class="row">
                            <div class="col-4">
                                <label class="text-checkbox-type1"><input type="checkbox" name="IngredientesActivos[]" value="Sales cuaternarias de amonio"> Sales cuaternarias de amonio.</label>
                            </div>
                            <div class="col-4">
                                <label class="text-checkbox-type1"><input type="checkbox" name="IngredientesActivos[]" value="Acido peracético"> Acido peracético.</label>
                            </div>
                            <div class="col-4">
                                <label class="text-checkbox-type1"><input type="checkbox" name="IngredientesActivos[]" value="Dióxido de Cloro"> Dióxido de Cloro.</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label class="text-checkbox-type1"><input type="checkbox" name="IngredientesActivos[]" value="Cloro/Lejía"> Cloro/Lejía.</label>
                            </div>
                            <div class="col-4">
                                <label class="text-checkbox-type1"><input type="checkbox" name="IngredientesActivos[]" value="Alcohol"> Alcohol.</label>
                            </div>
                            <div class="col-4">
                                <label class="text-checkbox-type1"><input type="checkbox" name="IngredientesActivos[]" value="Agua y Jabón"> Agua y Jabón.</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <b><label class="text-checkbox-title"> Otros: </label></b>
                        </div>
                        <div class="col-10">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Indique cuál (De lo contrario dejar el campo vacío)." name="OtrosIngredientes" value="{{ old('OtrosIngredientes') }}" bane></textarea>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-6">
                            <b><label class="text-checkbox-title"> ¿Cada cuanto tiempo aplica una desinfección? </label></b>
                            <div class="form-check">
                                <label class="form-check-label text-checkbox-type1" for="DesinfeccionDiaria"> <input class="form-check-input" type="radio" name="TiempoDesinfeccion" value="Diaria" id="DesinfeccionDiaria" checked>
                                    Diaria.
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label text-checkbox-type1" for="DesinfeccionSemanal"> <input class="form-check-input" type="radio" name="TiempoDesinfeccion" value="Semanal" id="DesinfeccionSemanal">
                                    Semanal.
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label text-checkbox-type1" for="DesinfeccionQuincenal"> <input class="form-check-input" type="radio" name="TiempoDesinfeccion" value="Quincenal" id="DesinfeccionQuincenal">
                                    Quincenal.
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label text-checkbox-type1" for="DesinfeccionMensual"> <input class="form-check-input" type="radio" name="TiempoDesinfeccion" value="Mensual" id="DesinfeccionMensual">
                                    Mensual.
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <b><label class="text-checkbox-title"> ¿Cada cuánto tiempo aplica una sanitización? </label></b>
                            <div class="form-check">
                                <label class="form-check-label text-checkbox-type1" for="SanitizacionDiaria"> <input class="form-check-input" type="radio" name="TiempoSanitizacion" value="Diaria" id="SanitizacionDiaria" checked>
                                    Diaria.
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label text-checkbox-type1" for="SanitizacionSemanal"> <input class="form-check-input" type="radio" name="TiempoSanitizacion" value="Semanal" id="SanitizacionSemanal">
                                    Semanal.
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label text-checkbox-type1" for="SanitizacionQuincenal"> <input class="form-check-input" type="radio" name="TiempoSanitizacion" value="Quincenal" id="SanitizacionQuincenal">
                                    Quincenal.
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label text-checkbox-type1" for="SanitizacionMensual"> <input class="form-check-input" type="radio" name="TiempoSanitizacion" value="Mensual" id="SanitizacionMensual">
                                    Mensual.
                                </label>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-12">
                            <b><label class="text-checkbox-title"> ¿Qué herramientas y métodos esta utilizando para la aplicación de productos? </label></b>
                        </div>
                    </div>
                    <div class="form-check">
                        <div class="row">
                            <div class="col-4">
                                <label class="text-checkbox-type1"><input type="checkbox" name="HerramientasMetodos[]" value="In Situ"> In Situ.</label>
                            </div>
                            <div class="col-4">
                                <label class="text-checkbox-type1"><input type="checkbox" name="HerramientasMetodos[]" value="Atomización"> Atomización.</label>
                            </div>
                            <div class="col-4">
                                <label class="text-checkbox-type1"><input type="checkbox" name="HerramientasMetodos[]" value="Aspersión"> Aspersión.</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label class="text-checkbox-type1"><input type="checkbox" name="HerramientasMetodos[]" value="Termo nebulización"> Termo nebulización.</label>
                            </div>
                            <div class="col-4">
                                <label class="text-checkbox-type1"><input type="checkbox" name="HerramientasMetodos[]" value="Luz ultravioleta"> Luz ultravioleta.</label>
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
