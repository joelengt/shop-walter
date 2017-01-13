    <div class="form-group">
        <label class="col-sm-2 control-label">Nombre<span class="red">*</span></label>
        <div class="col-sm-10">
            <input type="text" name="contact[first_name]" class="form-control" id="contact_first_name" value="{{ $datos['first_name'] }}" readonly>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Apellido<span class="red">*</span></label>
        <div class="col-sm-10">
            <input type="text" name="contact[last_name]" class="form-control" id="contact_last_name" value="{{ $datos['last_name'] }}" readonly>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Email<span class="red">*</span></label>
        <div class="col-sm-10">
            <input type="text" name="contact[email]" class="form-control" id="contact_email" value="{{ $datos['email'] }}" readonly>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Teléfono</label>
        <div class="col-sm-10">
            <input type="text" name="contact[contact_phone]" class="form-control" id="contact_contact_phone" value="{{ $datos['contact_phone'] }}" readonly>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">¿Cómo nos conoció?</label>
        <div class="col-sm-10">
            <select name="contact[contact_origin]" class="form-control" id="contact_contact_origin" readonly>
                <option value="Google">Google</option>
                <option value="Buscadores">Buscadores</option>
                <option value="Otros">Otros</option>
                <option value="" selected="selected"></option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Comentarios</label>
        <div class="col-sm-10">
            <textarea rows="4" cols="30" name="contact[message]" class="form-control" id="contact_message" readonly>{{ $datos['message'] }}</textarea>
        </div>
    </div>