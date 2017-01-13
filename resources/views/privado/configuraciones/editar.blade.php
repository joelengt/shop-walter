@extends('privado.nueva-plantilla-principal')

@section('titulo_pagina')
    Editar Configuracion
@endsection

@section('subtitulo_superior_izquierda')

@endsection

@section('contenido')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Editar Configuraci&oacute;n</h3>
            </div>

            <form role="form" action="{{ route("editar-configuracion",['id_configuracion'=>$configuracion->id_configuracion]) }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                <div class="box-body">
                    <div class="form-group">
                        <label for="etiqueta">Etiqueta(*)</label>
                        <input type="text" class="form-control" name="etiqueta" id="etiqueta" placeholder="Ingresar etiqueta de la variable" value="{{ $configuracion->etiqueta }}">
                    </div>
                    <div class="form-group">
                        <label for="key">Llave(*)</label>
                        <input type="text" class="form-control" id="key" name="llave" placeholder="Ingresar llave" value="{{ $configuracion->llave }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="valor">Valor de la llave(*)</label>
                        <input type="text" class="form-control" id="valor" name="valor" placeholder="Ingresar valor de la llave" value="{{ $configuracion->valor }}">
                    </div>
                    <div class="form-group">
                        <label for="imagen_configuracion">Imagen</label>
                        <input type="file" id="imagen_configuracion" name="imagen_configuracion">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Habilitado</label>
                        <select class="form-control" name="habilitado">
                            <option value="1" @if($configuracion->habilitado == 1) selected @endif>Si</option>
                            <option value="0" @if($configuracion->habilitado == 0) selected @endif>No</option>
                        </select>
                    </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Grabar</button>
                </div>
            </form>
        </div>
        <!-- /.box -->

    </div>
@endsection