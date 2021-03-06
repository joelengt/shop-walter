@extends('publico.plantilla-principal')

@section('contenido')
    <div class="general1">
        <div class="container general2">

            <div class="col-md-12 listado">

                <div id="filters_tags">
                    @if(!empty($texto_buscar))
                    <div class="title">Filtros: </div>
                    <a href="{{ route('buscar-productos') }}?query=">"{{ $texto_buscar }}"</a>
                    <br clear="all">
                    @endif
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
                                <a href="{{ route('buscar-productos') }}?query={{ $texto_buscar }}&amp;page_size={{ $cantidad }}">{{ $cantidad }}</a>
                            @endif
                        @endforeach
                    </div>
                    <div class="col-md-4">
                        Ordenar por
                        <select id="sort_on_select" class="sort_on form-control">
                            <option value="{{ route('buscar-productos') }}?query={{ $texto_buscar }}&amp;sort=name_asc">Nombre ascendente</option>
                            <option value="{{ route('buscar-productos') }}?query={{ $texto_buscar }}&amp;sort=name_desc">Nombre descendente</option>
                            <option value="{{ route('buscar-productos') }}?query={{ $texto_buscar }}&amp;sort=newest">Novedades primero</option>
                            <option value="{{ route('buscar-productos') }}?query={{ $texto_buscar }}&amp;sort=lowest_price">Precio: menor a mayor</option>
                            <option value="{{ route('buscar-productos') }}?query={{ $texto_buscar }}&amp;sort=higher_price">Precio: mayor a menor</option>
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
                                        <img class="ímage" alt="{{ $producto->nombre_producto }}" height="102" src="{{ asset($producto->imagenes[0]->ruta_imagen) }}">
                                    </a>
                                </div>
                                <div class="title">
                                    <h2>
                                        <a class="name" href="{{ asset($producto->GetUrlDetalleProducto()) }}" title="{{ $producto->nombre_producto }}">{{ $producto->nombre_producto }}.</a>
                                    </h2>
                                </div>

                                <a class="add_to_cart_link boton" href="http://www.zecat.com.ar/AR/es/user_quotations/add_item" rel="516" title="Pedir cotización">Pedir cotización</a>
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
                        <ul>
                            @for($pagina=1;$pagina<=$productos->lastPage();$pagina++)
                            <li><a class="selected" href="{{ route('buscar-productos') }}?query={{ $texto_buscar }}&amp;page_size={{ $por_pagina }}&amp;page={{ $pagina }}">{{ $pagina }}</a></li>
                            @endfor
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection