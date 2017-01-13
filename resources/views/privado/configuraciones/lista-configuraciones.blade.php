@extends('privado.nueva-plantilla-principal')

@section('contenido')
    <style>
        .pagination {
            margin: 5px 0;
        }
    </style>

    <script>
        function AgregarConfiguracion()
        {
            location.href = "{{ route('agregar-configuracion') }}"
        }

        function EditarConfiguracion(codigo)
        {
            location.href = "{{ route('editar-configuracion',['id_configuracion'=>'']) }}/" + codigo;
        }

        function EliminarConfiguracion(codigo)
        {
            var r = confirm("Desea eliminar configuracion?");
            if (r == true) {
                location.href = "{{ route('borrar-configuracion',['id_configuracion' => '']) }}/" + codigo;
            }
            return false;
        }
    </script>

    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border bg-light-blue">
                    <h3 class="box-title">Configuraciones registradas</h3>
                </div>

                <div class="box-body">

                        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6"></div>
                            </div>
                            <button class="btn btn-primary btn-xs" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="AgregarConfiguracion()">Agregar configuracion</button>
                            <div class="row" style="margin: 1px;font-size: 11px;">
                                <div class="col-sm-12 table-responsive">
                                    <table id="example2" class="table table-bordered table-hover table-condensed table-striped" role="grid" aria-describedby="example2_info">
                                        <thead>
                                        <tr role="row" class="bg-light-blue">
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label=""></th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Etiqueta</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Llave</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Valor</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Habilitado</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($configuraciones as $configuracion)
                                            <tr role="row" class="odd">
                                                <td>
                                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true" onclick="EditarConfiguracion({{ $configuracion->id_configuracion }})"></span>
                                                    
                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true" onclick="EliminarConfiguracion({{ $configuracion->id_configuracion }})"></span>
                                                </td>

                                                <td>{{ $configuracion->etiqueta }}</td>
                                                <td>{{ $configuracion->llave }}</td>
                                                <td>{{ $configuracion->valor }}</td>
                                                <td>{{ $configuracion->habilitado?'Si':'No' }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <div class="row input-group-sm">
                                <div class="col-sm-5" style="margin-top: 8px;">
                                    {{--*/ $numero_registro_inicial = ($configuraciones->perPage()*($configuraciones->currentPage()-1))+1; /*--}}
                                    {{--*/ $numero_registro_final = ($configuraciones->perPage()*($configuraciones->currentPage()-1))+$configuraciones->perPage(); /*--}}
                                    {{--*/ $numero_registro_final = $numero_registro_final>$configuraciones->total()?$configuraciones->total():$numero_registro_final; /*--}}
                                    <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Mostrando {{ $numero_registro_inicial }} a {{ $numero_registro_final }} de {{ $configuraciones->total() }}  registros</div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate" style="float: right;">
                                        <ul class="pagination">
                                            {{ $configuraciones->links() }}
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