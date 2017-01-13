@extends('publico.plantilla-principal')

@section('contenido')
    <div class="slider">
        <div class="slider-wrapper theme-default">
            <div class="ribbon"></div>
            @foreach($sliders as $slider)
            <div id="slider" class="nivoSlider">
                @foreach($slider->imagenes as $imagen)
                @if($imagen->pivot->habilitado==1)
                <a href=@if(!empty($imagen->pivot->url))"{{ $imagen->pivot->url }}"@else"#"@endif >
                    <img src="{{ asset($imagen->ruta_imagen) }}" />
                </a>
                @endif
                @endforeach
            </div>
            @endforeach
        </div>


    </div>

    <div class="general1home">
        <div class="container general2 home">
            @foreach($carruseles as $carrusel)
                @if(count($carrusel->productos))
                <table class="homeTitle">
                    <tr>
                        <td class="homeTitle2">
                            <div class="homeTitle2Div"><h1>{{ strtoupper($carrusel->nombre_carrusel) }}</h1></div>
                        </td>
                    </tr>
                </table>

                <div class="destacados">
                    <div class="bxslider">
                        @foreach($carrusel->productos as $producto)
                        <div class="bxslider-inner">
                            <div class="lshowcase-tooltip" title="{{ $producto->descripcion }}">
                                <a href="{{ asset($producto->GetUrlDetalleProducto()) }}" title="{{ $producto->descripcion }}">
                                    <img src="{{ $producto->imagenes[0]->ruta_imagen }}" height="100%" width="100%" alt="">
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>

    <script type="text/javascript">
        $(window).load(function () {
            $('#slider').nivoSlider({
                effect: 'random', // Specify sets like: 'fold,fade,sliceDown'
                animSpeed: 500, // Slide transition speed
                pauseTime: 3000, // How long each slide will show
                directionNav: true, // Next & Prev navigation
                controlNav: true, // 1,2,3... navigation
                controlNavThumbs: false, // Use thumbnails for Control Nav
                controlNavThumbsFromRel: false, // Use image rel for thumbs
                keyboardNav: false, // Use left & right arrows
                pauseOnHover: true, // Stop animation while hovering
                manualAdvance: false, // Force manual transitions
                captionOpacity: 0.8, // Universal caption opacity
                prevText: 'Prev', // Prev directionNav text
                nextText: 'Próx' // Next directionNav text
            });
        });
    </script>
@endsection