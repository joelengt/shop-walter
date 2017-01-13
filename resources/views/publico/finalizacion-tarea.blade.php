@extends('publico.plantilla-principal')

@section('contenido')
    <div class="general1">
        <div class="container general2 cotizacionF">
            <form class="gen_form form-horizontal" action="#" method="post">
                <div class="col-md-6">
                    <h2>{{ $mensaje or 'Proceso finalizado.' }}</h2>
                </div>
            </form>
        </div>
    </div>
@endsection