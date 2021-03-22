@extends('layouts.app')

@section('title')
    Home.
@endsection

@section('content')
    <div class="container pad-top">

        <div class="row">
            <div class="col-12">
                @if (session()->has('notification'))
                    <div class="alert alert-success alert-dismissible fade show">
                        <strong>Datos guardados!</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        {{ session('notification') }}
                    </div>
                @endif
                <h1 class="title-surveys">Encuestas</h1>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-12">
                <b><p class="text-survey-help">El formulario fue construido siguiendo criterios básicos y de mejores prácticas,
                    tomando en cuenta 3 pilares: la limpieza, procedimientos de comunicación y prevención
                    y procesos de actualización y consulta. Una vez completado, Ud. contará con un puntaje
                    que orientará la implementación de mejoras para lograr mayor confianza y seguridad en
                    los Clientes externos e internos, para el desarrollo de su negocio, y para enfrentar
                    el futuro con una mayor prevención.</p></b>
            </div>
        </div>

        <hr>

        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Datos generales.
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        En esta sección debe rellenar con los datos de la persona que esta a cargo de responder dicha
                        encuesta. Asegurarse de que el correo ingresado al registrarse este bien ya que sea a donde se
                        enviara un segundo reporte.
                    </div>
                    <hr>
                    <a class="btn btn-outline-primary" href="mains/create" role="button">Responder</a>
                    <a class="btn btn-outline-success" href="{{ url('mains/'.Auth::user()->id.'/edit') }}" role="button">Actualizar</a>
                    <hr>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Datos sobre el establecimiento.
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        En esta sección es necesario poner los números de las medidas del valor que es en m² (metros
                        cuadrados) y en la cantidad también son valores numéricos.
                    </div>
                    <hr>
                    <a class="btn btn-outline-primary" href="companies/create" role="button">Responder</a>
                    <a class="btn btn-outline-success" href="{{ url('companies/'.Auth::user()->id.'/edit') }}" role="button">Actualizar</a>
                    <hr>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Datos sobre la limpieza del establecimiento.
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        En esta sección debe ser lo mas honesto(a) posible al contestar, ya que solo son preguntas sobre
                        periodos de limpieza y que utilizan.
                    </div>
                    <hr>
                    <a class="btn btn-outline-primary" href="cleanings/create" role="button">Responder</a>
                    <a class="btn btn-outline-success" href="{{ url('cleanings/'.Auth::user()->id.'/edit') }}" role="button">Actualizar</a>
                    <hr>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        Datos sobre los turnos y distribución horaria de su establecimiento.
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        En esta sección debe seleccionar los turnos con los que cuenta, los horarios de trabajo y algunas
                        modificaciones de tareas si es que se presentaron.
                    </div>
                    <hr>
                    <a class="btn btn-outline-primary" href="distributions/create" role="button">Responder</a>
                    <a class="btn btn-outline-success" href="{{ url('distributions/'.Auth::user()->id.'/edit') }}" role="button">Actualizar</a>
                    <hr>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        Datos sobre la gestión de la interacción entre personas y como previene los contagios.
                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        En esta sección debe proporcionar información sobre como tratan con proveedores, o visitantes y como
                        esta la distancia del personal, así como algunas medidas de salud tanto para los trabajadores como
                        para mercancías que entran o salen.
                    </div>
                    <hr>
                    <a class="btn btn-outline-primary" href="interactions/create" role="button">Responder</a>
                    <a class="btn btn-outline-success" href="{{ url('interactions/'.Auth::user()->id.'/edit') }}" role="button">Actualizar</a>
                    <hr>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                        Datos sobre los elementos de información y comunicación que utiliza.
                    </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        En esta sección debe proporcionar información acerca reglas, normas, protocolos, etc. Que fueron
                        implementados para ayudar a prevenir problemas de contagio, así como juntas para promover dicha
                        información.
                    </div>
                    <hr>
                    <a class="btn btn-outline-primary" href="strategies/create" role="button">Responder</a>
                    <a class="btn btn-outline-success" href="{{ url('strategies/'.Auth::user()->id.'/edit') }}" role="button">Actualizar</a>
                    <hr>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                        Ver  reporte y desglose de puntos.
                    </button>
                </h2>
                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        Una vez que se llenen todos los datos, puede ver el reporte que contendrá tanto los puntos resultado
                        de sus respuestas, así como también puede ver el desglose de los puntos para saber el valor de cada
                        uno de los elementos.
                    </div>
                    <hr>
                    <a class="btn btn-outline-primary" href="{{ url('report/'.Auth::user()->id.'/show') }}" role="button">Ver reporte</a>
                    <a class="btn btn-outline-secondary" href="{{ url('breakdown') }}" role="button">Ver desglose de puntos</a>
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection
