@extends('privado.nueva-plantilla-principal')

@section('contenido')
    <style>
        .pagination {
            margin: 5px 0;
        }
    </style>

    <script>
        function AgregarSlider()
        {
            location.href = "{{ route('agregar-slider-admin') }}"
        }

        function EditarSlider(codigo)
        {
            location.href = "{{ route('editar-slider-admin',['id_slider'=>'']) }}/" + codigo;
        }

        function EliminarSlider(codigo)
        {
            var r = confirm("Desea eliminar slider?");
            if (r == true) {
                location.href = "{{ route('borrar-slider-admin',['id_slider' => '']) }}/" + codigo;
            }
            return false;
        }
    </script>

    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border bg-light-blue">
                    <h3 class="box-title">Sliders registrados</h3>
                </div>

                <div class="box-body">

                        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6"></div>
                            </div>

                            <button class="btn btn-primary btn-xs" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="AgregarSlider()">Agregar Slider</button>

                            <div class="row" style="margin: 1px;font-size: 11px;">
                                <div class="col-sm-12 table-responsive">
                                    <table id="example2" class="table table-bordered table-hover table-condensed table-striped" role="grid" aria-describedby="example2_info">
                                        <thead>
                                        <tr role="row" class="bg-light-blue">
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label=""></th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Codigo</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Nombre</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Habilitado</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Imagenes</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($sliders as $slider)
                                            <tr role="row" class="odd">
                                                <td>
                                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true" onclick="EditarSlider({{ $slider->id_slider }})"></span>
                                                    
                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true" onclick="EliminarSlider({{ $slider->id_slider }})"></span>

                                                </td>

                                                <td>{{ $slider->id_slider }}</td>
                                                <td>{{ $slider->nombre_slider }}</td>
                                                <td>{{ $slider->habilitado?'Si':'No' }}</td>
                                                <td><a href="{{ route('sliders-imagenes-admin',['id_slider'=>$slider->id_slider]) }}">Imagenes</a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <div class="row input-group-sm">
                                <div class="col-sm-5" style="margin-top: 8px;">
                                    {{--*/ $numero_registro_inicial = ($sliders->perPage()*($sliders->currentPage()-1))+1; /*--}}
                                    {{--*/ $numero_registro_final = ($sliders->perPage()*($sliders->currentPage()-1))+$sliders->perPage(); /*--}}
                                    {{--*/ $numero_registro_final = $numero_registro_final>$sliders->total()?$sliders->total():$numero_registro_final; /*--}}
                                    <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Mostrando {{ $numero_registro_inicial }} a {{ $numero_registro_final }} de {{ $sliders->total() }}  registros</div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate" style="float: right;">
                                        <ul class="pagination">
                                            {{ $sliders->links() }}
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