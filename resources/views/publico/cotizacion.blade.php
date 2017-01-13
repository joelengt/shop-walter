@extends('publico.plantilla-principal')

@section('contenido')
    <script>
        $(document).ready(function() {
            $('#actual_quotation_form').submit(function(){
                var result = true;
                $('.quantity_input').each(function(i,e){
                    if ((parseInt($(e).val())<$(e).attr('rel') || isNaN($(e).val())) && !$(e).parent().parent().hasClass('deleted'))
                    {
                        $(e).qtip({
                            content: $(e).attr('min_error'), // Set the tooltip content to the current corner
                            position: {
                                corner: {
                                    tooltip: 'bottomLeft', // Use the corner...
                                    target: 'topRight' // ...and opposite corner
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
                        result = false;
                        var offset = $(e).offset();
                        $('html, body').animate({scrollTop:offset.top-100}, 'slow');
                        return false;
                    }
                });
                $('.colors_select').each(function(i,e){
                    if ($(e).val()=='' && !$(e).parent().parent().hasClass('deleted'))
                    {
                        $(e).qtip({
                            content: $(e).attr('rel'), // Set the tooltip content to the current corner
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
                        result = false;
                        var offset = $(e).offset();
                        $('html, body').animate({scrollTop:offset.top-100}, 'slow');
                        return false;
                    }
                });
                return result;
            });

            $('.delete_item').click(function () {
                var id = $(this).attr('rel');
                if ($('#delete_' + id).val() == 'false') {
                    $(this).parent().parent().addClass('deleted');
                    $('#delete_' + id).val('true');
                } else {
                    $(this).parent().parent().removeClass('deleted');
                    $('#delete_' + id).val('false');
                }
                return false;
            });
        });
    </script>

    <div class="general1">
        <div class="container general2 cotizacion">
            @if(!empty($productos))
            <h1>Cotización</h1>
            <div class="col-md-9 listado">

                <form id="actual_quotation_form" action="#" method="post">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th colspan="2">Producto</th>
                            <th>Color</th>
                            <th>Cantidad</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($productos as $producto)
                        <tr id="row_">
                            <td class="td"><img src="{{ asset($producto->imagenes[0]->ruta_imagen) }}"></td>
                            <td class="td">{{ $producto->nombre_producto }}</td>
                            <td>
                                <select name="colors[{{ $producto->id_producto }}]" rel="Debes indicar el color" class="form-control">
                                    @foreach($producto->colores as $color)
                                    <option value="{{ $color->id_color }}" @if($productos_cotizacion[$producto->id_producto]['color']==$color->id_color) selected @endif>{{ $color->nombre_color }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <input min_error="Hay un mínimo de 1 unidades" rel="1" class="form-control" name="item_quantity[{{ $producto->id_producto }}]" type="text" value="{{ $productos_cotizacion[$producto->id_producto]['cantidad'] }}">
                            </td>
                            <td>
                                <a class="delete_item" href="#" rel="{{ $producto->id_producto }}">Borrar</a>
                                <input type="hidden" id="delete_{{ $producto->id_producto }}" name="delete[{{ $producto->id_producto }}]" value="false">
                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <div class="form-group">
                        <button type="submit" class="content">Actualizar cotización</button>
                    </div>
                </form>

            </div>

            <div class="col-md-3 barraDer">
                <h2><b>Acciones</b></h2>
                <p>Para pedir más detalles o realizar consultas sobre tu consulta solicita su cotización.</p>
                <a style="margin-top:10px;" href="{{ route('enviar-cotizacion') }}">Enviar Cotización</a>
                <a onclick="if (confirm('¿Estás seguro que deseas vaciar el carro?')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'post'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_token'); m.setAttribute('value', '{{{ csrf_token() }}}'); f.appendChild(m);f.submit(); };return false;" href="{{ route('vaciar-cotizacion') }}">Vaciar carro</a>                  </div>
            <div class="col-md-12">

                <div class="popup popups" id="solicitudPermisosEnviada" style="display:none;">
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
                                    <div style="text-align:center">
                                        <p>Al confirmar tu pedido procederemos al proceso de los productos indicados.</p>
                                        <a style="margin-top:10px;" href="#">Confirmar cotización</a>
                                        <a href="javascript:closePopup('solicitudPermisosEnviada')">Cancelar y no enviar</a>
                                    </div>
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
            </div>
            @else
                <h1>Sin productos a cotizar</h1>
            @endif
        </div>
    </div>
@endsection