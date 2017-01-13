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
            location.href = "{{ route('agregar-slider-imagen-admin',['id_slider'=>$slider->id_slider]) }}"
        }

        function EditarImagen(codigo)
        {
            location.href = "{{ route('editar-slider-imagen-admin',['id_slider'=>$slider->id_slider,'id_slider_imagen'=>'']) }}/" + codigo;
        }
    </script>

    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border bg-light-blue">
                    <h3 class="box-title">Imagenes de {{ $slider->nombre_slider }}</h3>
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
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Slider</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Url</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Imagenes</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Habilitado</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($imagenes as $imagen)
                                        <tr role="row" class="odd">
                                            <td>
                                                <span class="glyphicon glyphicon-pencil" aria-hidden="true" onclick="EditarImagen({{ $imagen->id_slider_imagen }})"></span>
                                            </td>
                                            <td>{{ $imagen->slider->nombre_slider }}</td>
                                            <td>{{ $imagen->url or 'Sin url' }}</td>
                                            <td>@if(!empty($imagen->imagen->ruta_imagen)) <a href="{{ asset($imagen->imagen->ruta_imagen) }}" target="_blank">Imagen</a> @else Sin imagen @endif</td>
                                            <td>{{ $imagen->habilitado?'Si':'No' }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row input-group-sm">
                            <div class="col-sm-5" style="margin-top: 8px;">
                                {{--*/ $numero_registro_inicial = ($imagenes->perPage()*($imagenes->currentPage()-1))+1; /*--}}
                                {{--*/ $numero_registro_final = ($imagenes->perPage()*($imagenes->currentPage()-1))+$imagenes->perPage(); /*--}}
                                {{--*/ $numero_registro_final = $numero_registro_final>$imagenes->total()?$imagenes->total():$numero_registro_final; /*--}}
                                <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Mostrando {{ $numero_registro_inicial }} a {{ $numero_registro_final }} de {{ $imagenes->total() }}  registros</div>
                            </div>
                            <div class="col-sm-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate" style="float: right;">
                                    <ul class="pagination">
                                        {{ $imagenes->links() }}
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