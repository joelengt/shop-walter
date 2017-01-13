@extends('publico.plantilla-principal')

@section('contenido')
    <style>
        .parrafoempresa {
            color: black;
            column-count: initial;
        }
        .parrafoempresa h3 {
            font-family: 'Exo2RegularCondensed';
            font-weight: bold;
            font-size: 21px;
            color: #FF7300;
            padding: 0;
            margin: 0 0 10px 0;
        }

        .parrafoempresa p {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        #laempresa > div > div > h2 {
            color: #FF7300;
            text-transform: none;
            font-weight: bold;
        }

        #zecatsolidario > div > div > h2, #nuestroseventos > div > div > h2 {
            color: #FF7300;
        }
    </style>

    <div class="general3" style="background-color: white;">
        <div class="container">
            <div class="col-md-12">
                <div class="quienessomos1">
                    <div class="container-fluid" id="laempresa">
                        <div class="row-fluid text-center">
                            <div class="col-md-12"><h2>ONE WORLD PROMOCIONAL: Nuestra trayectoria nos avala</h2></div>
                        </div>
                        <div class="row-fluid">
                            <div class="col-md-12">
                                <div class="bxslider">
                                    <div class="bxslider-inner"><a class="image-popup-no-margins" href="{{ asset('images/1.png') }}"> <img src="{{ asset('images/1.png') }}" alt="" /></a></div>
                                    <div class="bxslider-inner"><a class="image-popup-no-margins" href="{{ asset('images/2.png') }}"> <img src="{{ asset('images/2.png') }}" alt="" /></a></div>
                                    <div class="bxslider-inner"><a class="image-popup-no-margins" href="{{ asset('images/3.png') }}"> <img src="{{ asset('images/3.png') }}" alt="" /></a></div>
                                    <div class="bxslider-inner"><a class="image-popup-no-margins" href="{{ asset('images/4.png') }}"> <img src="{{ asset('images/4.png') }}" alt="" /></a></div>
                                    <div class="bxslider-inner"><a class="image-popup-no-margins" href="{{ asset('images/5.png') }}"> <img src="{{ asset('images/5.png') }}" alt="" /></a></div>
                                    <div class="bxslider-inner"><a class="image-popup-no-margins" href="{{ asset('images/6.png') }}"> <img src="{{ asset('images/6.png') }}" alt="" /></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="col-md-12 parrafoempresa">
                                <p>En el año 1994 incursionamos en el negocio de los artículos promocionales imprimiendo globos, por medio de un proceso de fabricación creado por nosotros mismos.
                                    Dicho proceso de impresión dio como resultado un producto de calidad, lo que nos permitió ser reconocidos como una de las mejores opciones en el rubro y originó que las principales empresas del país (bancos, supermercados,compañías de seguros, etc.) trabajen con nosotros. Con el paso del tiempo y ante la necesidad de los clientes de contar con productos bien elaborados, a tiempo y a precios muy competitivos; comenzamos a crecer, adquiriendo maquinaria para ampliar y automatizar los procesos productivos.
                                </p>
                                <p>
                                    Después de un inicio variado en experiencias, en el año 2004 se constituye la empresa
                                    ONE WORLD PROMOCIONAL SAC y es entonces  que se adquiere e implementa una línea de producción para la elaboración de productos microinyectados, y otra para la elaboración de productos lenticulares.Ambas líneas de producción al ser novedosas para el mercado peruano y latinoamericano,han abierto muchas nuevas posibilidades de negocios.
                                    Además, seguimos creciendo y manteniéndonos a la vanguardia y atentos a las necesidades del rubro. En la actualidad estamos exportando nuestros productos a Ecuador, Venezuela y Chile.
                                </p>
                                <h3>VISIÓN</h3>

                                <p>
                                    Ser líderes a nivel nacional y en los principales países de la región en el negocio de promoción y comunicación de imagen, mediante la fabricación y comercialización de artículos publicitarios y promocionales. Establecer negocios de importación y exportación en latinoamérica y nuestra oficina en China y convertirnos en socios estratégicos de nuestros clientes.
                                </p>
                                <h3>MISIÓN</h3>
                                <p>
                                    Somos una organización que elabora y comercializa productos que ayudan a
                                    promover, comunicar y fortalecer la imagen corporativa y de la marca de nuestros
                                    Clientes. También asesoramos a nuestros clientes, pues estamos comprometidos con el crecimiento de cada empresa con la que trabajamos, que es también el crecimiento de nuestro país. Contamos con un capital humano comprometido y que es capacitado constantemente, para obtener el estándar de calidad que nos caracteriza.
                                </p>
                                <h3>VALORES DE LA EMPRESA</h3>
                                <p>
                                    <strong>Ética: </strong>respetamos y cumplimos las normas laborales e impositivas, preocupándonos siempre por realizar una sana competencia.
                                </p>
                                <p>
                                    <strong>Respeto: </strong>profesamos el respeto mutuo, tanto con los colaboradores de nuestra empresa, como con nuestros proveedores, clientes y miembros de la comunidad. Aseguramos las condiciones mínimas legales de todos nuestros trabajadores.
                                    Nos preocupamos por su constante capacitación. Cumplimos oportunamente con el pago de sus remuneraciones, y beneficios sociales.
                                </p>
                                <p>
                                    <strong>Vocación de servicio: </strong>nuestros clientes son nuestra razón de ser, nuestros puestos de trabajo dependen de la satisfacción que cada cliente perciba de nuestro servicio.
                                </p>
                                <p>
                                    <strong>Iniciativa: </strong>siempre atentos a los procesos de trabajo, nos anticipamos a problemas que puedan surgir y sugerimos soluciones hacen que el trabajo diario sea más eficiente.
                                </p>
                                <p>
                                    <strong>Disciplina: </strong>para nosotros la disciplina es un valor fundamental para el desarrollo de nuestro día a día. Acciones como el orden, el respeto, la lealtad y la puntualidad son características
                                    fundamentales de nuestro desarrollo.
                                </p>
                                <p>
                                    <strong>Honestidad: </strong>somos sinceros con nuestras acciones, actuando siempre con la verdad en la mano. De ser el caso, reconocemos nuestros errores, lo que nos nos ayuda a ser mejores personas y a la organización a solucionar y anticiparse a las dificultades diarias.
                                </p>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>

    <div class="general5">
        <div class="container">
            <div class="col-md-12">
                <div class="quienessomos1">
                    <div class="container-fluid" id="nuestroseventos" style="padding: 2em;">
                        <div class="row-fluid">
                            <div class="col-md-12"><h2>EVENTOS</h2></div>
                        </div>
                        <div class="row-fluid">
                            <div class="col-md-12">
                                <div class="bxslider">
                                    <div class="bxslider-inner"><a class="image-popup-no-margins" href="{{ asset('images/expo1.jpg') }}"> <img src="{{ asset('images/expo1.jpg') }}" alt="" /></a></div>
                                    <div class="bxslider-inner"><a class="image-popup-no-margins" href="{{ asset('images/expo3.jpg') }}"> <img src="{{ asset('images/expo3.jpg') }}" alt="" /></a></div>
                                    <div class="bxslider-inner"><a class="image-popup-no-margins" href="{{ asset('images/expo4.jpg') }}"> <img src="{{ asset('images/expo4.jpg') }}" alt="" /></a></div>
                                    <div class="bxslider-inner"><a class="image-popup-no-margins" href="{{ asset('images/expo5.jpg') }}"> <img src="{{ asset('images/expo5.jpg') }}" alt="" /></a></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('.bxslider').bxSlider({
                captions: true,
                controls: true,
                slideWidth: 200,
                minSlides: 1,
                maxSlides: 4,
                slideMargin: 5
            });
            $('.image-popup-no-margins').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                closeBtnInside: false,
                fixedContentPos: true,
                mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
                image: {
                    verticalFit: true
                },
                zoom: {
                    enabled: true,
                    duration: 300 // don't foget to change the duration also in CSS
                }
            });
        })
    </script>
@endsection