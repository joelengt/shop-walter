@extends('publico.plantilla-principal')

@section('contenido')
    <style>
        @media (min-width: 1230px){
            .listado .destacados .destacado {
                width: 225px !important;
            }
        }

		.listado .destacados .destacado .img {
		    max-height: 150px;
		}

        @media (max-width: 768px) {
            .listado .destacados .destacado {
                width: auto !important;
            }
        }
    </style>
    <script>
        $(function () {
            $('#sort_on_select').change(function () {
                        $('#mainList').fadeTo('fast', .3);
                        window.location.href = '{{ asset('/') }}'+$('#sort_on_select').val();
                    }
            );

            $(".add_to_cart_link").click(function () {

                var ele = $(this);
                ele.addClass('loader-background').prop('disabled', true);

                $.ajax({
                    url: ele.attr('href'),
                    data: {id_producto: ele.attr('rel'),_token:"{{{ csrf_token() }}}"},
                    type: 'post',
                    cache: false,
                    error: function (jqXHR, textStatus, errorThrown) {

                        $('#quotation_add_ok_message').hide();
                        $('#quotation_add_no_message').show();
                        showPopup('addQuotationProduct');
                    },
                    success: function (data) {
                        global_has_loaded_products = 1;
                        $('#actualQuotationResume').html(data);
                        $('#quotation_add_ok_message').show();
                        $('#quotation_add_no_message').hide();
                        showPopup('addQuotationProduct');
                    },
                    complete: function () {
                        ele.removeClass('loader-background').prop('disabled', false);
                    }
                });
                return false;
            });
        });
    </script>

    @if(!empty($categoria_principal) || !empty($subcategoria))
    <?php

        $imagen =  isset($subcategoria->imagen_principal)?$subcategoria->imagen_principal:$categoria_principal->imagen_principal;
    ?>
    @if(isset($imagen->ruta_imagen))
    <div class="bannerCat1">
        <div class="container_category_banner bannerCat2">
            <img src="{{ asset($imagen->ruta_imagen) }}">    </div>
    </div>
    @endif
    @endif
    <div class="general1">
        <div class="container general2">

            <div class="col-md-12 listado">

                <div id="filters_tags">
                </div>

                <div class="col-md-12 mostrar">
                    {{--*/ $numero_registro_inicial = ($productos->perPage()*($productos->currentPage()-1))+1; /*--}}
                    {{--*/ $numero_registro_final = ($productos->perPage()*($productos->currentPage()-1))+$productos->perPage(); /*--}}
                    {{--*/ $numero_registro_final = $numero_registro_final>$productos->total()?$productos->total():$numero_registro_final; /*--}}

                    <div class="col-md-4">
                        Mostrando: {{ $numero_registro_inicial }} - {{ $numero_registro_final }} de {{ $productos->total() }}    </div>
                    <div class="col-md-4">
                        Mostrar:
                        @foreach($resultados_por_pagina as $cantidad)
                            @if($cantidad == $por_pagina)
                                {{ $cantidad }},
                            @else
                                <a href="{{ asset($categoria->UrlCategoria()) }}?page_size={{ $cantidad }}">{{ $cantidad }}</a>
                            @endif
                        @endforeach

                    </div>
                    <div class="col-md-4">
                        Ordenar por
                        <select id="sort_on_select" class="sort_on form-control">
                            <option value="{{ $categoria->UrlCategoria() }}?sort_campo=nombre_producto&sort_dir=asc&page_size{{ $por_pagina }}" @if($ordenar_por=='nombre_producto' && $ordenar_dir=='asc') selected @endif>Nombre ascendente</option>
                            <option value="{{ $categoria->UrlCategoria() }}?sort_campo=nombre_producto&sort_dir=desc&page_size{{ $por_pagina }}" @if($ordenar_por=='nombre_producto' && $ordenar_dir=='desc') selected @endif>Nombre descendente</option>

                            <option value="{{ $categoria->UrlCategoria() }}?sort_campo=precio&sort_dir=asc&page_size={{ $por_pagina }}" @if($ordenar_por=='precio' && $ordenar_dir=='asc') selected @endif>Precio: menor a mayor</option>
                            <option value="{{ $categoria->UrlCategoria() }}?sort_campo=precio&sort_dir=desc&page_size={{ $por_pagina }}" @if($ordenar_por=='precio' && $ordenar_dir=='desc') selected @endif>Precio: mayor a menor</option>
                        </select>
                    </div>

                </div>

                <div id="mainList">
                    <form action="#" method="get" id="compare_form" target="_compare">
                        <div class="compares_div">
                            <a href="#">Comparar Productos Seleccionados</a>
                        </div>
                        <div class="destacados">
                            @foreach($productos as $producto)
                            <div class="destacado">
                                <div class="img">
                                    <a href="{{ asset($producto->GetUrlDetalleProducto()) }}" class="image" title="{{ $producto->nombre_producto }}">
                                        <img class="ímage" alt="{{ $producto->nombre_producto }}" height="140" src="{{ asset($producto->imagenes[0]->ruta_imagen) }}">
                                    </a>
                                </div>
                                <div class="title">
                                    <h2>
                                        <a class="name" href="{{ asset($producto->GetUrlDetalleProducto()) }}" title="Stark">{{ $producto->nombre_producto }}</a>
                                    </h2>
                                </div>

                                <a class="add_to_cart_link boton" href="{{ route('agregar-producto-cotizacion') }}" rel="{{ $producto->id_producto }}" title="Pedir cotización">Pedir cotización</a>
                            </div>
                            @endforeach
                        </div>
                    </form>
                </div>

                <div class="paginacion">
                    <div class="col-md-6">
                        <p>Mostrando {{ $numero_registro_inicial }} - {{ $numero_registro_final }} de {{ $productos->total() }} Productos</p>
                    </div>
                    <div class="col-md-6">
                        <?php //dd($productos)?>
                        <ul>
                            @for($pagina=1;$pagina<=$productos->lastPage();$pagina++)
                            <li><a class="selected" href="{{ asset($categoria->UrlCategoria()) }}?page_size={{ $por_pagina }}&amp;page={{ $pagina }}">{{ $pagina }}</a></li>
                            @endfor
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
