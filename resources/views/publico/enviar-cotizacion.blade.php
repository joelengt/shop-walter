@extends('publico.plantilla-principal')

@section('contenido')
    <div class="general1">
        <div class="container general2 cotizacionF">
            <h1>Confirmar datos de contacto para cotización</h1>
            <div class="form-group">
                <span class="red">*</span>Indica que llenar el campo es obligatorio
            </div>
            <form class="gen_form form-horizontal" action="#" method="post">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                <div class="col-md-6">
                    <h2>Información Personal</h2>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nombre<span class="red">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" name="z_catalog_user_quotation[first_name]" class="form-control" id="z_catalog_user_quotation_first_name">          </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Apellido<span class="red">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" name="z_catalog_user_quotation[last_name]" class="form-control" id="z_catalog_user_quotation_last_name">          </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email<span class="red">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" name="z_catalog_user_quotation[email]" class="form-control" id="z_catalog_user_quotation_email">          </div>
                    </div>
                    <h2>Datos de Contacto</h2>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Razón social<span class="red">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" name="z_catalog_user_quotation[company]" class="form-control" id="z_catalog_user_quotation_company">          </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Cargo<span class="red">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" name="z_catalog_user_quotation[company_position]" class="form-control" id="z_catalog_user_quotation_company_position">          </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Ciudad<span class="red">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" name="z_catalog_user_quotation[country_state]" class="form-control" id="z_catalog_user_quotation_country_state">          </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Teléfono<span class="red">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" name="z_catalog_user_quotation[contact_phone]" class="form-control" id="z_catalog_user_quotation_contact_phone">          </div>
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
                    <div class="form-group align">
                        <button type="submit" class="content">Enviar</button>
                        <a href="{{ route('cotizacion') }}">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection