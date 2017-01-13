@extends('privado.nueva-plantilla-principal')

@section('contenido')
    <style>
        .pagination {
            margin: 5px 0;
        }
    </style>

    <script>
        function AgregarCategoria()
        {
            location.href = "{{ route('agregar-categorias-admin') }}"
        }

        function EditarCategoria(codigo)
        {
            location.href = "{{ route('editar-categorias-admin',['id_categoria'=>'']) }}/" + codigo;
        }

        function BorrarCategoria(codigo)
        {
            var r = confirm("Desea eliminar categoria?");
            if (r == true) {
                location.href = "{{ route("borrar-categorias-admin",['id_categoria' => '']) }}/" + codigo;
            }
        }
    </script>

    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border bg-light-blue">
                    <h3 class="box-title">Categorias registradass</h3>
                </div>

                <div class="box-body">

                        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6"></div>
                            </div>
                            <button class="btn btn-primary btn-xs" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="AgregarCategoria()">Agregar categoria</button>
                            <div class="row" style="margin: 1px;font-size: 11px;">
                                <div class="col-sm-12 table-responsive">
                                    <table id="example2" class="table table-bordered table-hover table-condensed table-striped" role="grid" aria-describedby="example2_info">
                                        <thead>
                                        <tr role="row" class="bg-light-blue">
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label=""></th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Codigo</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Categoria padre</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Nombre categoria</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Slug</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Orden</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Habilitado</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Imagen Menu</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Imagen Principal</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($categorias as $categoria)
                                            <tr role="row" class="odd">
                                                <td>
                                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true" onclick="EditarCategoria({{ $categoria->id_categoria }})"></span>
                                                    
                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true" onclick="BorrarCategoria({{ $categoria->id_categoria }})"></span>
                                                </td>

                                                <td>{{ $categoria->id_categoria }}</td>
                                                <td>{{ $categoria->padre->nombre_categoria or 'Categoria principal' }}</td>
                                                <td>{{ $categoria->nombre_categoria }}</td>
                                                <td>{{ $categoria->slug }}</td>
                                                <td>{{ $categoria->orden }}</td>
                                                <td>{{ $categoria->habilitado?'Si':'No' }}</td>
                                                <td>@if(isset($categoria->imagen_menu->ruta_imagen)) <a href="{{ asset($categoria->imagen_menu->ruta_imagen) }}" target="_blank">Imagen</a> @else Sin imagen @endif</td>
                                                <td>@if(isset($categoria->imagen_principal->ruta_imagen)) <a href="{{ asset($categoria->imagen_principal->ruta_imagen) }}" target="_blank">Imagen</a> @else Sin imagen @endif</td>
                                            </tr>
                                        @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <div class="row input-group-sm">
                                <div class="col-sm-5" style="margin-top: 8px;">
                                    {{--*/ $numero_registro_inicial = ($categorias->perPage()*($categorias->currentPage()-1))+1; /*--}}
                                    {{--*/ $numero_registro_final = ($categorias->perPage()*($categorias->currentPage()-1))+$categorias->perPage(); /*--}}
                                    {{--*/ $numero_registro_final = $numero_registro_final>$categorias->total()?$categorias->total():$numero_registro_final; /*--}}
                                    <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Mostrando {{ $numero_registro_inicial }} a {{ $numero_registro_final }} de {{ $categorias->total() }}  registros</div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate" style="float: right;">
                                        <ul class="pagination">
                                            {{ $categorias->links() }}
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