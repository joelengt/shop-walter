@extends('privado.nueva-plantilla-principal')

@section('titulo_pagina')
    Editar Usuario
@endsection

@section('subtitulo_superior_izquierda')

@endsection

@section('contenido')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Agregar Configuraci&oacute;n</h3>
            </div>

            <form role="form" action="{{ route("agregar-configuracion") }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                <div class="box-body">
                    <div class="form-group">
                        <label for="etiqueta">Etiqueta(*)</label>
                        <input type="text" class="form-control" name="etiqueta" id="etiqueta" placeholder="Ingresar etiqueta de la variable">
                    </div>
                    <div class="form-group">
                        <label for="key">Llave(*)</label>
                        <input type="text" class="form-control" id="llave" name="llave" placeholder="Ingresar llave">
                    </div>
                    <div class="form-group">
                        <label for="valor">Valor de la llave(*)</label>
                        <input type="text" class="form-control" id="valor" name="valor" placeholder="Ingresar valor de la llave">
                    </div>
                    <div class="form-group">
                        <label for="imagen_configuracion">Imagen</label>
                        <input type="file" id="imagen_configuracion" name="imagen_configuracion">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Habilitado</label>
                        <select class="form-control" name="habilitado">
                            <option value="1">Si</option>
                            <option value="0">No</option>
                        </select>
                    </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Grabar</button>
                </div>
            </form>
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        <!-- /.box -->

    </div>
@endsection