@extends('publico.plantilla-principal')

@section('contenido')
    <style>

    </style>
    <script>
        function iniciar() {
            var mapOptions = {
                center: new google.maps.LatLng(-12.114499, -77.023765),
                zoom: 16,
                mapTypeId: google.maps.MapTypeId.ROADMAP};



            var map = new google.maps.Map(document.getElementById("map"),mapOptions);

            var uluru = {lat: -12.114499, lng: -77.023765};
            var marker = new google.maps.Marker({
                    position: uluru,
                    map: map,
                    title: "OWP SAC"
            });
        }
    </script>

    <div class="general1">
        <div class="container general2 contacto" style="padding: 0 40px 0 40px;width: 95%">
            <h1>Contacto</h1>
            <div class="col-md-6" style="margin-bottom:20px;">

                        <div id="map" style="width:320px;height:240px"></div>

                <h4 class="titulo_negrita">CENTRAL</h4>
                <ul>
                    <li style="list-style-image: url({{ asset('imagenes/direccion.png') }})">Cll. San Carlos 248 (Altura Cdra. 7 Av. Agamos)</li>
                    <li>Surquillo Lima</li>
                    <li class="resaltar_texto" style="list-style-image: url({{ asset('imagenes/telefono.png') }})">510-1113 - Anexo 103</li>
                    <li class="resaltar_texto" style="list-style-image: url({{ asset('imagenes/correo.png') }})">gerencia@owpsac.com</li>
                </ul>
                <h4 class="titulo_negrita">OFICINA LIMA 1</h4>
                <ul>
                    <li style="list-style-image: url({{ asset('imagenes/direccion.png') }})">Jr. Inambari 734/C.C. Real Int. 223</li>
                    <li>Cercado de Lima - Lima</li>
                    <li class="resaltar_texto" style="list-style-image: url({{ asset('imagenes/telefono.png') }})">446-1920 Anexo 109</li>

                </ul>
                <h4 class="titulo_negrita">OFICINA LIMA 2</h4>
            </div>
            <div class="col-md-6">
                <h2>Escríbanos</h2>
                <form class="gen_form form-horizontal" action="#" method="post">

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nombre<span class="red">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" name="contact[first_name]" class="form-control" id="contact_first_name">          </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Apellido<span class="red">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" name="contact[last_name]" class="form-control" id="contact_last_name">          </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email<span class="red">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" name="contact[email]" class="form-control" id="contact_email">          </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Teléfono</label>
                        <div class="col-sm-10">
                            <input type="text" name="contact[contact_phone]" class="form-control" id="contact_contact_phone">          </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">¿Cómo nos conoció?</label>
                        <div class="col-sm-10">
                            <select name="contact[contact_origin]" class="form-control" id="contact_contact_origin">
                                <option value="Google">Google</option>
                                <option value="Buscadores">Buscadores</option>
                                <option value="Otros">Otros</option>
                                <option value="" selected="selected"></option>
                            </select>          </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Comentarios</label>
                        <div class="col-sm-10">
                            <textarea rows="4" cols="30" name="contact[message]" class="form-control" id="contact_message"></textarea>          </div>
                    </div>

                    <div class="form-group align">
                        <button type="submit">Enviar</button>
                    </div>
                    <input type="hidden" name="contact[_csrf_token]" value="00855bb34260b33070ffe9a3492face4" id="contact__csrf_token">      </form>
            </div>
        </div>
    </div>


    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkLuQbeqyYkXs9tDxC-MyoTC_C-Jn_Wis&callback=iniciar">
    </script>
@endsection