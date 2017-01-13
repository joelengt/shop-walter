@extends('publico.plantilla-principal')

@section('titulo navegador'){{ $producto->nombre_producto }}@endsection

@section('facebook_title'){{ $producto->nombre_producto }}@endsection

@section('facebook_descripcion'){{ $producto->descripcion }}@endsection

@section('facebook_imagen'){{ asset($producto->imagenes[0]->ruta_imagen) }}@endsection

@section('facebook_url'){{ asset($url_detalle) }}@endsection

@section('contenido')
    <script type="text/javascript">

        $(document).ready(function(){
            $("#add_to_quotation_button").click(function () {

                var ele = $(this);
                if (!checkMinOrderQuantity()) {
                    return false;
                }

                ele.addClass('loader-background').prop('disabled', true);
                $.ajax({
                    url: $('#add_to_quotation_form').attr('action'),
                    data: $('#add_to_quotation_form').serialize(),
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

        function checkMinOrderQuantity() {
            var cantidad = $('#order_quantity');
            if (isNaN(cantidad.val()) || parseInt(cantidad.val()) < 1 || parseInt(cantidad.val()) < parseInt(cantidad.attr('rel'))) {
                cantidad.qtip({
                    content: cantidad.attr('min_error'), // Set the tooltip content to the current corner
                    position: {
                        corner: {
                            tooltip: 'bottomRight', // Use the corner...
                            target: 'topLeft' // ...and opposite corner
                        }
                    },
                    show: {
                        when: false, // Don't specify a show event
                        ready: true // Show the tooltip when ready
                    },

                    hide: {
                        delay: 500
                    }, // Don't specify a hide event
                    style: {
                        border: {
                            width: 5,
                            radius: 10
                        },
                        padding: 10,
                        textAlign: 'center',
                        tip: true, // Give it a speech bubble tip with automatic corner detection
                        name: 'cream' // Style it according to the preset 'cream' style
                    }
                });
                cantidad.val(cantidad.attr('rel'));
                return false;
            } else {
                return true;
            }
        }
    </script>

    <div class="general1">


        <div class="container general2">

            <div class="col-md-12 ficha">

                <!-- RUTA ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
                <div class="col-md-12 ruta">
                    <a href="">Productos</a> &gt;
                    <a href="{{ asset("productos/{$categoria_principal->slug}") }}">{{ $categoria_principal->nombre_categoria }}</a> &gt;
                    <a href="{{ asset("productos/{$categoria_principal->slug}/{$subcategoria->slug}") }}">{{ $subcategoria->nombre_categoria }}</a>
                </div>

                <div class="col-md-12 contenido">

                    <div class="fotorama col-md-6" data-arrows="always" data-allowfullscreen="native" data-autoplay="true" data-click="true" data-swipe="false" data-nav="thumbs">
                        @foreach($producto->imagenes as $imagen)
                        <img src="{{ asset($imagen->ruta_imagen) }}" title="{{ $producto->nombre_producto }}" alt="{{ $producto->nombre_producto }}">
                        @endforeach

                    </div>

                    <div class="col-md-6 datos">
                        <h1>{{ $producto->nombre_producto }}</h1>
                        <div class="novedadProd">
                            @foreach($producto->carruseles as $carrusel)
                            <a href="">{{ $carrusel->nombre_corto }}</a>
                            @endforeach
                        </div>
                        <p>{{ $producto->descripcion }}</p>

                        <div class="iconos">
                            @forelse($producto->especificaciones as $especificacion)
                            <img src="{{ asset($especificacion->imagen->ruta_imagen) }}" alt="{{ $especificacion->nombre_especificacion }}" title="{{ $especificacion->nombre_especificacion }}">
                            @endforeach
                        </div>

                        <p>Colores disponibles: </p>
                        <ul class="color_picker" id="color_picker">
                            @foreach($producto->colores as $color)
                            <li>
                                <a style="background: {{ $color->codigo_color }}; border:2px solid {{ $color->codigo_color }};" title="{{ $color->nombre_color }}"></a>
                            </li>
                            @endforeach

                            <div class="clear"></div>
                        </ul>

                        <form class="add" id="add_to_quotation_form" action="{{ route('agregar-producto-cotizacion') }}" method="post">
                            <input type="hidden" name="id_producto" value="{{ $producto->id_producto }}">
                            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                            <div class="form-group col-md-6">
                                <label for="order_quantity">Cantidad</label>
                                <input name="order_quantity" id="order_quantity" min_error="Hay un mínimo de {{ $producto->stock }} unidades" rel="1" value="1" size="4" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="order_colors">Color</label>
                                <select name="order_colors" id="order_colors" class="form-control">
                                    @foreach($producto->colores as $color)
                                    <option value="{{ $color->id_color }}">{{ $color->nombre_color }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div style="display:inline-block;">
                                <button id="add_to_quotation_button" name="add_to_quotation_button">Pedir cotización</button>
                            </div>

                        </form>

                    </div>

                    <div class="fb-share-button" data-href="{{ $url_detalle }}" data-layout="button_count" data-size="small" data-mobile-iframe="true">
                        <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Compartir</a>
                    </div>

                </div>

                <div class="popup popups" id="photosModal" style="display:none;">
                    <table cellpadding="0" cellspacing="0" border="0" width="100%">
                        <tbody><tr class="top">
                            <td class="left"></td>
                            <td class="center"></td>
                            <td class="right"></td>
                        </tr>
                        <tr class="middle">
                            <td class="left"></td>
                            <td class="center">
                                <div class="popup_content">
                                    <div class="left">
                                        <h1>{{ $producto->nombre_producto }}</h1>
                                    </div>
                                    <a class="close_simple_btn_big right" href="javascript:closePopup('photosModal')"></a>
                                    <div class="clear"></div>
                                    <div id="pop_up_main_image" class="left product">
                                        <img class="img-responsive" src="{{ asset('/img/products/5be27c619f83daaad045d7b589172aa898bd170b.jpg') }}" border="0" alt="Pendrive Slim (usb / micro usb)">
                                    </div>
                                    <div class="left info">
                                        <h5>Imágenes del Producto</h5>
                                        <ul id="image_thumbs" class="thumbs">
                                            <li><a href="#" title="Pendrive Slim (usb / micro usb)"><img src="{{ asset('/img/products/5be27c619f83daaad045d7b589172aa898bd170b.jpg') }}" height="100" border="0" alt="Pendrive Slim (usb / micro usb)"></a></li>
                                            <li><a href="#" title="Pendrive Slim (usb / micro usb)"><img src="{{ asset('/img/products/2f07234047a2e7691549b5540c959cc45ec4b198.jpg') }}" height="100" border="0" alt="Pendrive Slim (usb / micro usb)"></a></li>
                                            <li><a href="#" title="Pendrive Slim (usb / micro usb)"><img src="{{ asset('/img/products/ddb922d3cdd42e0fb8f29c2d8869bb6e45e6fff8.jpg') }}" height="100" border="0" alt="Pendrive Slim (usb / micro usb)"></a></li>
                                        </ul>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </td>
                            <td class="right"></td>
                        </tr>
                        <tr class="bottom">
                            <td class="left"></td>
                            <td class="center"></td>
                            <td class="right"></td>
                        </tr>
                        </tbody></table>
                </div>

                <div class="popup popups" id="areaImprimible" style="display:none;">
                    <table cellpadding="0" cellspacing="0" border="0" width="100%">
                        <tbody><tr class="top">
                            <td class="left"></td>
                            <td class="center"></td>
                            <td class="right"></td>
                        </tr>
                        <tr class="middle">
                            <td class="left"></td>
                            <td class="center">
                                <div class="popup_content">
                                    <div class="left">
                                        <h1>Área de impresión</h1>
                                    </div>
                                    <a class="close_simple_btn_big right" href="javascript:closePopup('areaImprimible')"></a>
                                    <div class="clear"></div>
                                    <div class="left product"><img src="{{ asset('/img/products/2f593f223d85a61b4c8c834b374538eb707b2719.jpg') }}"></div>
                                    <div class="clear"></div>
                                </div>
                            </td>
                            <td class="right"></td>
                        </tr>
                        <tr class="bottom">
                            <td class="left"></td>
                            <td class="center"></td>
                            <td class="right"></td>
                        </tr>
                        </tbody></table>
                </div>

                <!-- INFO EXTENDIDA -------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

                <!-- Formulario de Contacto -------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                <div class="col-md-12 contenido">
                    <h3 class="left">Formulario de Consultas</h3>
                    <div class="destacados">
                        <form class="gen_form form-horizontal" action="{{ route('enviar-consulta-productos') }}" method="post" id="form_contacto">
                            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Nombre<span class="red">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="productos[first_name]" class="form-control" id="productos_first_name">                                </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Apellido<span class="red">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="productos[last_name]" class="form-control" id="productos_last_name">                                </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Email<span class="red">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="productos[email]" class="form-control" id="productos_email">                                </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Teléfono</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="productos[contact_phone]" class="form-control" id="productos_contact_phone">                                </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Producto</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="productos[product_name]" value="{{ $producto->nombre_producto }}" class="form-control" readonly="1" id="productos_product_name">                                </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Consulta</label>
                                    <div class="col-sm-8">
                                        <textarea rows="4" cols="30" name="productos[message]" class="form-control" id="productos_message"></textarea>                                </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group align">
                                    <button type="submit" onclick="contacto();" class="enviarConsulta">Enviar</button>
                                </div>
                                <input type="hidden" name="productos[_csrf_token]" value="b35d7c07dcd9006a6cc3fc1c981e316d" id="productos__csrf_token">                        </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>


    </script>
@endsection