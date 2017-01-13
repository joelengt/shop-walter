<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="language" content="es" />
        <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0" />

        <link rel="stylesheet" type="text/css"  href="{{ asset('css/styles.css?ver=13') }}" />
        <link rel="stylesheet" type="text/css"  href="{{ asset('css/responsive.css') }}" />
        <link rel="stylesheet" type="text/css"  href="{{ asset('css/bootstrap.css') }}" />
        <link rel="stylesheet" type="text/css"  href="{{ asset('/css/fotorama.css') }}" />
        <link rel="stylesheet" type="text/css"  href="{{ asset('css/tinycarousel.css?v=3') }}" />
        <link rel="stylesheet" type="text/css"  href="{{ asset('css/jquery.bxslider.css') }}" />
        <link rel="stylesheet" type="text/css"  href="{{ asset('css/bootstrap-dropdownhover.css') }}" />
        <link rel="stylesheet" type="text/css"  href="{{ asset('css/animate.css') }}" />
        <link rel="stylesheet" type="text/css"  href="{{ asset('css/magnific-popup.css') }}" />
        <link rel="stylesheet" type="text/css"  href="{{ asset('css/quienesomos.css') }}" />
        <link rel="stylesheet" type="text/css"  href="{{ asset('css/jquery.fancybox.css') }}" />
        <link rel="stylesheet" type="text/css"  href="{{ asset('css/nivo-slider.css') }}" />
        <link rel="stylesheet" type="text/css"  href="{{ asset('css/default.css') }}" />
    </head>

    <body>
        <div class="general1">
            <div class="container general2 cotizacionF">
                <form class="gen_form form-horizontal" action="#" method="post">
                    <div class="col-md-6">
                        <h2>Información Personal</h2>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" name="z_catalog_user_quotation[first_name]" class="form-control" id="z_catalog_user_quotation_first_name" value="{{ $datos_contacto['first_name'] }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Apellido</label>
                            <div class="col-sm-10">
                                <input type="text" name="z_catalog_user_quotation[last_name]" class="form-control" id="z_catalog_user_quotation_last_name" value="{{ $datos_contacto['last_name'] }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" name="z_catalog_user_quotation[email]" class="form-control" id="z_catalog_user_quotation_email" value="{{ $datos_contacto['email'] }}" readonly>
                            </div>
                        </div>
                        <h2>Datos de Contacto</h2>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Razón social</label>
                            <div class="col-sm-10">
                                <input type="text" name="z_catalog_user_quotation[company]" class="form-control" id="z_catalog_user_quotation_company" value="{{ $datos_contacto['company'] }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Cargo</label>
                            <div class="col-sm-10">
                                <input type="text" name="z_catalog_user_quotation[company_position]" class="form-control" id="z_catalog_user_quotation_company_position" value="{{ $datos_contacto['company_position'] }}" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Ciudad</label>
                            <div class="col-sm-10">
                                <input type="text" name="z_catalog_user_quotation[country_state]" class="form-control" id="z_catalog_user_quotation_country_state" value="{{ $datos_contacto['country_state'] }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Teléfono</label>
                            <div class="col-sm-10">
                                <input type="text" name="z_catalog_user_quotation[contact_phone]" class="form-control" id="z_catalog_user_quotation_contact_phone" value="{{ $datos_contacto['contact_phone'] }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2>Productos Seleccionados</h2>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Color</th>
                                <th>Cantidad</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($productos as $producto)
                                <tr class="row2">
                                    <td>{{ $producto->nombre_producto }}</td>
                                    <?php
                                    $nombre_color = "Sin color";

                                    foreach ($producto->colores as $color )
                                    {
                                        if($color->id_color == $productos_cotizacion[$producto->id_producto]['color']){
                                            $nombre_color = $color->nombre_color;
                                            break;
                                        }
                                    }
                                    ?>
                                    <td>{{ $nombre_color }}</td>
                                    <td>{{ $productos_cotizacion[$producto->id_producto]['cantidad'] or '0' }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
