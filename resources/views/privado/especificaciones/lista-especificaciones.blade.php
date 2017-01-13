@extends('privado.nueva-plantilla-principal')

@section('contenido')
    <style>
        .pagination {
            margin: 5px 0;
        }
    </style>

    <script>
        function AgregarEspecificacion()
        {
            location.href = "{{ route('agregar-especificacion-admin') }}"
        }

        function EditarEspecificacion(codigo)
        {
            location.href = "{{ route('editar-especificacion-admin',['id_especificacion'=>'']) }}/" + codigo;
        }

        function EliminarEspecificacion(codigo)
        {
            var r = confirm("Desea eliminar especificacion?");
            if (r == true) {
                location.href = "{{ route("borrar-especificacion-admin",['id_especificacion' => '']) }}/" + codigo;
            }
        }
    </script>

    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border bg-light-blue">
                    <h3 class="box-title">Especificaciones registradass</h3>
                </div>

                <div class="box-body">

                        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6"></div>
                            </div>
                            <button class="btn btn-primary btn-xs" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="AgregarEspecificacion()">Agregar especificacion</button>
                            <div class="row" style="margin: 1px;font-size: 11px;">
                                <div class="col-sm-12 table-responsive">
                                    <table id="example2" class="table table-bordered table-hover table-condensed table-striped" role="grid" aria-describedby="example2_info">
                                        <thead>
                                        <tr role="row" class="bg-light-blue">
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label=""></th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Codigo</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Nombre especificacion</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Icono</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Habilitado</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($especificaciones as $especificacion)
                                            <tr role="row" class="odd">
                                                <td>
                                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true" onclick="EditarEspecificacion({{ $especificacion->id_especificacion }})"></span>
                                                    
                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true" onclick="EliminarEspecificacion({{ $especificacion->id_especificacion }})"></span>

                                                </td>
                                                <td>{{ $especificacion->id_especificacion }}</td>
                                                <td>{{ $especificacion->nombre_especificacion }}</td>
                                                <td>@if(isset($especificacion->imagen->ruta_imagen)) <a href="{{ asset($especificacion->imagen->ruta_imagen) }}" target="_blank"><img src="{{ asset($especificacion->imagen->ruta_imagen) }}" style="width: 20px;" /></a> @else Sin Imagen @endif </td>
                                                <td>{{ $especificacion->habilitado?'Si':'No' }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <div class="row input-group-sm">
                                <div class="col-sm-5" style="margin-top: 8px;">
                                    {{--*/ $numero_registro_inicial = ($especificaciones->perPage()*($especificaciones->currentPage()-1))+1; /*--}}
                                    {{--*/ $numero_registro_final = ($especificaciones->perPage()*($especificaciones->currentPage()-1))+$especificaciones->perPage(); /*--}}
                                    {{--*/ $numero_registro_final = $numero_registro_final>$especificaciones->total()?$especificaciones->total():$numero_registro_final; /*--}}
                                    <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Mostrando {{ $numero_registro_inicial }} a {{ $numero_registro_final }} de {{ $especificaciones->total() }}  registros</div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate" style="float: right;">
                                        <ul class="pagination">
                                            {{ $especificaciones->links() }}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection