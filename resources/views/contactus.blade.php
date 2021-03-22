@extends('layouts.app')

@section('title')
    Contacto | Página para contactarnos.
@endsection

@section('content')
    <div class="container pad-top">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <!-- https://formspree.io/f/xqkgjggn -->
                <h1 class="title-surveys">Formulario de contacto:</h1>
                    <form action="https://formspree.io/f/xqkgjggn" class="border-contact" method="POST">
                        <h1 class="text-contact">Puedes contactarnos llenando el formulario.</h1>
                        <hr>
                        <div class="form-group">
                            <label class="label-contact" for="nombre"> Nombre: </label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                        </div>
                        <div class="form-group">
                            <label class="label-contact" for="email"> Correo electrónico: </label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Correo electrónico" required>
                        </div>
                        <div class="form-group">
                            <label class="label-contact" for="telefono"> Teléfono: </label>
                            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" required>
                        </div>
                        <div class="form-group">
                            <label class="label-contact" for="detalles"> Detalles: </label>
                            <textarea class="form-control" id="detalles" name="detalles" rows="5" placeholder="Detalles" required></textarea>
                        </div>
                            <button type="submit" class="button-to-save">Enviar</button>
                    </form>
                </form>
            </div>
        </div>
    </div>
@endsection
