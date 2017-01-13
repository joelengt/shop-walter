@extends('privado.nueva-plantilla-principal')

@section('contenido')
    <style>
        .pagination {
            margin: 5px 0;
        }
    </style>

    <script>
        function AgregarImagen()
        {
            location.href = "{{ route('agregar-producto-imagen-admin',['id_producto' => $producto->id_producto]) }}"
        }

        function EditarImagen(codigo)
        {
            location.href = "{{ route('editar-producto-imagen-admin',['id_producto' => $producto->id_producto,'id_imagen'=>'']) }}/" + codigo;
        }

        function BorrarImagen(codigo)
        {
            location.href = "{{ route("borrar-producto-imagen-admin",['id_producto' => $producto->id_producto,'id_imagen' => '']) }}/" + codigo;
        }
    </script>

    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border bg-light-blue">
                    <h3 class="box-title">Imagenes de {{ $producto->nombre_producto }}</h3>
                </div>
                <div class="box-body">
                    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-6"></div>
                            <div class="col-sm-6"></div>
                        </div>
                        <button class="btn btn-primary btn-xs" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="AgregarImagen()">Agregar Imagen</button>
                        <div class="row" style="margin: 1px;font-size: 11px;">
                            <div class="col-sm-12 table-responsive">
                                <table id="example2" class="table table-bordered table-hover table-condensed table-striped" role="grid" aria-describedby="example2_info">
                                    <thead>
                                        <tr role="row" class="bg-light-blue">
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label=""></th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label=""></th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Producto</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Imagen</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Habilitado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($producto->imagenes as $indice =>$imagen)
                                        <tr role="row" class="odd">
                                            <td>
                                                <span class="glyphicon glyphicon-pencil" aria-hidden="true" onclick="EditarImagen({{ $imagen->id_imagen }})"></span>
                                                    
                                                <span class="glyphicon glyphicon-remove" aria-hidden="true" onclick="BorrarImagen({{ $imagen->id_imagen }})"></span>

                                            </td>
                                            <td>{{ ++$indice }}</td>
                                            <td>{{ $producto->nombre_producto }}</td>
                                            <td>@if(!empty($imagen->ruta_imagen)) <a href="{{ asset($imagen->ruta_imagen) }}" target="_blank">Imagen</a> @else Sin imagen @endif</td>
                                            <td>{{ $imagen->habilitado?'Si':'No' }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="box-footer">
                                <a class="btn btn-warning btn-close" href="{{ URL::previous() }}">Regresar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection