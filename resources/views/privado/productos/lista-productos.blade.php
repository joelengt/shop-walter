@extends('privado.nueva-plantilla-principal')

@section('contenido')
    <style>
        .pagination {
            margin: 5px 0;
        }
    </style>

    <script>
        function AgregarProducto()
        {
            location.href = "{{ route('agregar-producto-admin') }}"
        }

        function EditarProducto(codigo)
        {
            location.href = "{{ route('editar-producto-admin',['id_producto'=>'']) }}/" + codigo;
        }

        function EliminarProducto(codigo)
        {
            var r = confirm("Desea eliminar producto?");
            if (r == true) {
                location.href = "{{ route('borrar-producto-admin',['id_producto' => '']) }}/" + codigo;
            }
            return false;
        }
    </script>

    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border bg-light-blue">
                    <h3 class="box-title">Productos registrados</h3>
                </div>

                <div class="box-body">

                        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6"></div>
                            </div>

                            <button class="btn btn-primary btn-xs" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="AgregarProducto()">Agregar Producto</button>
                            
                            <div class="row" style="margin: 1px;font-size: 11px;">
                                <div class="col-sm-12 table-responsive">
                                    <table id="example2" class="table table-bordered table-hover table-condensed table-striped" role="grid" aria-describedby="example2_info">
                                        <thead>
                                        <tr role="row" class="bg-light-blue">
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label=""></th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Nombre producto</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Fecha publicaci&oacute;n</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Stock</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Precio</th>

                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Especificaciones</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Colores</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Categorias</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Imagenes</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Habilitado</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($productos as $producto)
                                            <tr role="row" class="odd">
                                                <td>
                                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true" onclick="EditarProducto({{ $producto->id_producto }})"></span>
                                                    
                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true" onclick="EliminarProducto({{ $producto->id_producto }})"></span>

                                                </td>

                                                <td>{{ $producto->nombre_producto }}</td>
                                                <td>{{ $producto->fecha_publicacion }}</td>
                                                <td>{{ $producto->stock }}</td>
                                                <td>{{ $producto->precio }}</td>
                                                <?php
                                                    $especificaciones = "";
                                                    foreach ($producto->especificaciones as $especificacion){
                                                        $especificaciones .= " {$especificacion->nombre_especificacion},";
                                                    }

                                                    $especificaciones = trim($especificaciones,",");
                                                ?>
                                                <td>{{ $especificaciones or 'Sin especificaciones' }}</td>
                                                <?php
                                                    $colores = "";
                                                    foreach ($producto->colores as $color){
                                                        $colores .= " {$color->nombre_color},";
                                                    }

                                                    $colores = trim($colores,",");
                                                ?>
                                                <td>@if(!empty($colores)) {{ $colores }} @else Sin colores @endif</td>
                                                <?php
                                                    $categorias = "";
                                                    foreach ($producto->categorias as $categoria){
                                                        $categorias .= " {$categoria->nombre_categoria},";
                                                    }

                                                $categorias = trim($categorias,",");
                                                ?>
                                                <td>@if(!empty($categorias)) {{ $categorias }} @else Sin categorias @endif</td>
                                                <td>@if(!empty($producto->imagenes)) <a href="{{ route('productos-imagenes-admin',['id_producto' => $producto->id_producto]) }}">Imagenes</a> @else Sin imagenes @endif</td>
                                                <td>@if($producto->habilitado) Si @else No @endif</td>

                                            </tr>
                                        @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <div class="row input-group-sm">
                                <div class="col-sm-5" style="margin-top: 8px;">
                                    {{--*/ $numero_registro_inicial = ($productos->perPage()*($productos->currentPage()-1))+1; /*--}}
                                    {{--*/ $numero_registro_final = ($productos->perPage()*($productos->currentPage()-1))+$productos->perPage(); /*--}}
                                    {{--*/ $numero_registro_final = $numero_registro_final>$productos->total()?$productos->total():$numero_registro_final; /*--}}
                                    <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Mostrando {{ $numero_registro_inicial }} a {{ $numero_registro_final }} de {{ $productos->total() }}  registros</div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate" style="float: right;">
                                        <ul class="pagination">
                                            {{ $productos->links() }}
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