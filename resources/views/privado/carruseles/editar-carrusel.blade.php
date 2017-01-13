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
                    <h3 class="box-title">Editar carrusel</h3>
                </div>
                <form name="editar-carrusel" id="editar-carrusel" style="font-size: 11px;" class="form-horizontal" action="{{ route("editar-carrusel-admin",['id_carrusel' => $carrusel->id_carrusel]) }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    <div class="box-body">

                        <div class="form-group col-xs-12 col-md-6 input-group-sm">
                            <label for="nombre_carrusel" class="col-md-4 control-label">Nombre carrusel:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control input-sm" id="nombre_carrusel" name="nombre_carrusel" value="{{ $carrusel->nombre_carrusel }}" required>
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-md-6 input-group-sm">
                            <label for="nombre_corto" class="col-md-4 control-label">Nombre corto:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control input-sm" id="nombre_corto" name="nombre_corto" value="{{ $carrusel->nombre_corto }}" required>
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-md-12 input-group-sm">
                            <label for="id_producto" class="col-md-2 control-label">Productos:</label>
                            <div class="checkbox col-md-10">
                                @foreach($productos as $producto)
                                    <?php
                                        $checked = "";
                                        foreach ($carrusel->productos as $carrusel_producto){
                                            if($carrusel_producto->id_producto == $producto->id_producto){
                                                $checked = "checked";
                                                break;
                                            }
                                        }
                                    ?>
                                    <label>
                                        <input type="checkbox" name="id_producto[]" id="id_producto" value="{{ $producto->id_producto }}" {{ $checked }}>
                                        {{ PrimerasEnMayusculas($producto->nombre_producto) }}
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-md-6 input-group-sm">
                            <label for="orden" class="col-md-4 control-label">Orden:</label>
                            <div class="col-md-8">
                                <select class="form-control input-sm" name="orden" id="orden">
                                    <?php for ($i=1;$i<=20;$i++): ?>
                                    <option value="{{ $i }}" >{{ $i }}</option>
                                    <?php endfor;?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-md-6 input-group-sm">
                            <label for="habilitado" class="col-md-4 control-label">Habilitado:</label>
                            <div class="col-md-8">
                                <select class="form-control input-sm" name="habilitado" id="habilitado">
                                    <option value="1" >Si</option>
                                    <option value="0" >No</option>
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