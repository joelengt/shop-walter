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
                    <h3 class="box-title">Editar color</h3>
                </div>
                <form name="editar-licencia" id="editar-licencia" style="font-size: 11px;" class="form-horizontal" action="{{ route("editar-colores-admin",['id_color' => $color->id_color]) }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    <div class="box-body">

                        <div class="form-group col-xs-12 col-md-6 input-group-sm">
                            <label for="nombre_color" class="col-md-5 control-label">Nombre color:</label>
                            <div class="col-md-7">
                                <input type="text" class="form-control input-sm" id="nombre_color" name="nombre_color" value="{{ $color->nombre_color }}">
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-md-6 input-group-sm">
                            <label for="codigo_color" class="col-md-5 control-label">Codigo color:</label>
                            <div class="col-md-7">
                                <input type="text" class="form-control input-sm" id="codigo_color" name="codigo_color" value="{{ $color->codigo_color }}">
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-md-6 input-group-sm">
                            <label for="habilitado" class="col-md-5 control-label">Habilitado:</label>
                            <div class="col-md-7">
                                <select class="form-control input-sm" name="habilitado" id="habilitado">
                                    <option value="1" @if($color->habilitado=='1') selected @endif>Si</option>
                                    <option value="0" @if($color->habilitado=='0') selected @endif>No</option>
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
                <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection