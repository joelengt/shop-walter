<h3 class="left">Formulario de Consultas</h3>
<div class="destacados">
    <form class="gen_form form-horizontal" action="" id="form_contacto">
        <div class="col-md-4">
            <div class="form-group">
                <label class="col-sm-3 control-label">Nombre<span class="red">*</span></label>
                <div class="col-sm-8">
                    <input type="text" name="" class="form-control" id="" value="{{ $producto['first_name'] }}" disabled>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Apellido<span class="red">*</span></label>
                <div class="col-sm-8">
                    <input type="text" name="" class="form-control" id="" value="{{ $producto['last_name'] }}" disabled>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Email<span class="red">*</span></label>
                <div class="col-sm-8">
                    <input type="text" name="" class="form-control" value="{{ $producto['email'] }}" disabled>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group">
                <label class="col-sm-3 control-label">Teléfono</label>
                <div class="col-sm-8">
                    <input type="text" name="" class="form-control" id="" value="{{ $producto['contact_phone'] }}" disabled>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Producto</label>
                <div class="col-sm-8">
                    <input type="text" name="productos[product_name]" value="{{ $producto['product_name'] }}" class="form-control" readonly="1" id="productos_product_name">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Consulta</label>
                <div class="col-sm-8">
                    <textarea rows="4" cols="30" name="productos[message]" class="form-control" id="productos_message" disabled>{{ $producto['message'] }}</textarea>
                </div>
            </div>
        </div>
    </form>
</div>