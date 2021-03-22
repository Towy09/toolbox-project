@extends('layouts.app')

@section('title')
    Encuesta | Datos sobre limpieza.
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
                <form action="{{ url('/cleanings') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <b><label class="text-checkbox-title"> ¿Quién se encarga de la limpieza? </label></b>
                            <span id="result"></span>
                        </div>
                    </div>
                    <div class="form-check" id="cb-personal">
                        <div class="row">
                            <div class="col-4">
                                <label class="text-checkbox-type1"><input type="checkbox" name="EncargadoLimpieza[]" value="Prestador de servicios externo"> Prestador de servicios externo.</label>
                                <span title="Persona especializada en limpieza.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="col-4">
                                <label class="text-checkbox-type1"><input type="checkbox" name="EncargadoLimpieza[]" value="Unipersonal"> Unipersonal.</label>
                                <span title="Persona contratada específicamente para la limpieza.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="col-4">
                                <label class="text-checkbox-type1"><input type="checkbox" name="EncargadoLimpieza[]" value="Equipo interno dedicado"> Equipo interno dedicado.</label>
                                <span title="Persona dedicada exclusivamente a la limpieza.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <b><label class="text-checkbox-title"> Otros: </label></b>
                        </div>
                        <div class="col-10">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Indique cuál (De lo contrario dejar el campo vacío)." name="OtrosLimpieza" value="{{ old('OtrosLimpieza') }}" bane></textarea>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-12">
                            <b><label class="text-checkbox-title"> ¿Qué ingredientes activos utiliza? </label></b>
                        </div>
                    <div class="form-check">
                        <div class="row">
                            <div class="col-4">
                                <label class="text-checkbox-type1">
                                    <input type="checkbox" name="IngredientesActivos[]" value="Sales cuaternarias de amonio"> Sales cuaternarias de amonio.
                                </label>
                            </div>
                            <div class="col-4">
                                <label class="text-checkbox-type1"><input type="checkbox" name="IngredientesActivos[]" value="Ácido peracético"> Ácido peracético.</label>
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
                            <span title="Proceso que se lleva a cabo para eliminar los microorganismos patógenos de forma parcial. (Limpieza tradicional profunda)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                </svg>
                            </span>

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
                            <span title="Este método elimina más rápido una mayor cantidad de gérmenes y agentes microbianos que la desinfección.">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                </svg>
                            </span>

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
                                <span title="Preparar y aplicar el producto sanitizante mediante trapeador, tela, etc.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="col-4">
                                <label class="text-checkbox-type1"><input type="checkbox" name="HerramientasMetodos[]" value="Atomización"> Atomización.</label>
                                <span title="Herramienta o bomba que genera gotas del sanitizante.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="col-4">
                                <label class="text-checkbox-type1"><input type="checkbox" name="HerramientasMetodos[]" value="Aspersión"> Aspersión.</label>
                                <span title="Sistema que aplica sanitizante en forma de gota fina, se aplica en frío y no genera vapor.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label class="text-checkbox-type1"><input type="checkbox" name="HerramientasMetodos[]" value="Termo nebulización"> Termo nebulización.</label>
                                <span title="Lanzas de chorros de vapor caliente que llegan a zonas de difícil acceso.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="col-4">
                                <label class="text-checkbox-type1"><input type="checkbox" name="HerramientasMetodos[]" value="Luz ultravioleta"> Luz ultravioleta.</label>
                                <span title="Uso de lámparas y un sistema robusto de seguridad para aplicar sin riesgos para el personal o mediante sistema robotizado o remoto.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
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
