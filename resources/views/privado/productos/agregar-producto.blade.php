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
                    <h3 class="box-title">Agregar producto</h3>
                </div>
                <form name="editar-producto" id="editar-producto" style="font-size: 11px;" class="form-horizontal" action="{{ route("agregar-producto-admin") }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    <div class="box-body">

                        <div class="form-group col-xs-12 col-md-12 input-group-sm">
                            <label for="nombre_producto" class="col-md-2 control-label">Nombre producto(*):</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control input-sm" id="nombre_producto" name="nombre_producto" value="" required>
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-md-12 input-group-sm">
                            <label for="descripcion" class="col-md-2 control-label">Descripci&oacute;n(*):</label>
                            <div class="col-md-10">
                                <textarea class="form-control input-sm" id="descripcion" name="descripcion" style="height: 150px;"></textarea>
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-md-6 input-group-sm">
                            <label for="stock" class="col-md-4 control-label">Stock(*):</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control input-sm" id="stock" name="stock" value="0" required>
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-md-6 input-group-sm">
                            <label for="precio" class="col-md-4 control-label">Precio(*):</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control input-sm" id="precio" name="precio" value="0.0" required>
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-md-12 input-group-sm">
                            <label for="id_color" class="col-md-2 control-label">Colores:</label>
                            <div class="checkbox col-md-10">
                                @foreach($colores as $color)
                                    <label>
                                        <input type="checkbox" name="id_color[]" id="id_color" value="{{ $color->id_color }}">
                                        {{ $color->nombre_color }}
                                    </label>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group col-xs-12 col-md-12 input-group-sm">
                            <label for="id_especificacion" class="col-md-2 control-label">Especificaciones:</label>
                            <div class="checkbox col-md-10">
                                @foreach($especificaciones as $especificacion)
                                    <label>
                                        <input type="checkbox" name="id_especificacion[]" id="id_especificacion" value="{{ $especificacion->id_especificacion }}">
                                        {{ PrimerasEnMayusculas($especificacion->nombre_especificacion) }}
                                    </label>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group col-xs-12 col-md-12 input-group-sm">
                            <label for="id_categoria" class="col-md-2 control-label">Categorias:</label>
                            <div class="checkbox col-md-10">
                                @foreach($subcategorias as $subcategoria)
                                    <label>
                                        <input type="checkbox" id="id_categoria" name="id_categoria[]" value="{{ $subcategoria->id_categoria }}">
                                        {{ $subcategoria->nombre_categoria }} ({{ $subcategoria->padre->nombre_categoria }})
                                    </label>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group col-xs-12 col-md-12 input-group-sm">
                            <label for="id_carrusel" class="col-md-2 control-label">Carruseles:</label>
                            <div class="checkbox col-md-10">
                                @foreach($carruseles as $carrusel)
                                    <label>
                                        <input type="checkbox" name="id_carrusel[]" id="id_carrusel" value="{{ $carrusel->id_carrusel }}">
                                        {{ PrimerasEnMayusculas($carrusel->nombre_carrusel) }}
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-md-6 input-group-sm">
                            <label for="fecha_publicacion" class="col-md-4 control-label">Fecha publicaci&oacute;n(*):</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control input-sm" id="fecha_publicacion" name="fecha_publicacion" value="{{ date('Y-m-d') }}" required>
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-md-6 input-group-sm">
                            <label for="habilitado" class="col-md-4 control-label">Habilitado:</label>
                            <div class="col-md-8">
                                <select class="form-control input-sm" name="habilitado" id="habilitado">
                                    <option value="1">Si</option>
                                    <option value="0" selected>No</option>
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

    <script>
        $(function() {
            $('#fecha_publicacion').datepicker({
                format: "yyyy-mm-dd",
                startDate: "{{ date('Y-m-d') }}",
                language: "es"
            });
        });
    </script>
@endsection