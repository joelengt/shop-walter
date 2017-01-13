@extends('privado.nueva-plantilla-principal')

@section('contenido')
    <style>
        .pagination {
            margin: 5px 0;
        }
    </style>

    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Editar imagen de {{ $slider_imagen->slider->nombre_slider }}</h3>
                </div>
                <form name="editar-licencia" id="editar-licencia" style="font-size: 11px;" class="form-horizontal" action="{{ route('editar-slider-imagen-admin',['id_slider'=>$slider_imagen->slider->id_slider,'id_slider_imagen'=>$slider_imagen->id_slider_imagen]) }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    <div class="box-body">
                        <div class="form-group col-xs-12 col-md-6 input-group-sm">
                            <label for="imagen_slider" class="col-md-5 control-label">Imagen</label>
                            <div class="col-md-7">
                                <input type="file" id="imagen_slider" name="imagen_slider">
                            </div>
                        </div>
                        <div class="form-group col-xs-12 col-md-6 input-group-sm">
                            <label for="url" class="col-md-2 control-label">Url</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control input-sm" id="url" name="url" value="{{ $slider_imagen->url }}">
                            </div>
                        </div>
                        <div class="form-group col-xs-12 col-md-6 input-group-sm">
                            <label for="habilitado" class="col-md-5 control-label">Habilitado:</label>
                            <div class="col-md-7">
                                <select class="form-control input-sm" name="habilitado" id="habilitado">
                                    <option value="1">Si</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Grabar</button>
                        <a class="btn btn-warning btn-close" href="{{ URL::previous() }}">Cancelar</a>
                    </div>
                    <!-- /.box-body -->
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
    </div>
@endsection