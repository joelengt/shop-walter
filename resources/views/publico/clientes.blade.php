@extends('publico.plantilla-principal')

@section('titulo navegador')
    Clientes OWP Sac
@endsection

@section('contenido')
    <style>
        @media (min-width: 1230px){
            .listado .destacados .destacado {
                width: 225px !important;
            }
        }

        .listado .destacados .destacado .img {
            max-height: 150px;
        }
    </style>
    <div class="general1">
        <div class="container general2">
            <div class="col-md-12 listado">

                <div id="mainList">
                    <form action="#" method="get" id="compare_form" target="_compare">

                        <div class="destacados">
                            <div class="destacado">
                                <div class="img">
                                    <a href="#" class="image" title="Ambev">
                                        <img class="ímage" alt="Ambev" height="140" src="{{ asset('imagenes/clientes/ambev.png') }}">
                                    </a>
                                </div>

                            </div>
                            <div class="destacado">
                                <div class="img">
                                    <a href="#" class="image" title="Backus">
                                        <img class="ímage" alt="Backus" height="140" src="{{ asset('imagenes/clientes/backus.png') }}">
                                    </a>
                                </div>

                            </div>
                            <div class="destacado">
                                <div class="img">
                                    <a href="#" class="image" title="Cineplanet">
                                        <img class="ímage" alt="Cineplanet" height="140" src="{{ asset('imagenes/clientes/cineplanet.png') }}">
                                    </a>
                                </div>

                            </div>
                            <div class="destacado">
                                <div class="img">
                                    <a href="#" class="image" title="Claro">
                                        <img class="ímage" alt="Claro" height="140" src="{{ asset('imagenes/clientes/claro.png') }}">
                                    </a>
                                </div>

                            </div>
                            <div class="destacado">
                                <div class="img">
                                    <a href="#" class="image" title="Movistar">
                                        <img class="ímage" alt="Movistar" height="140" src="{{ asset('imagenes/clientes/movistar.png') }}">
                                    </a>
                                </div>

                            </div>
                            <div class="destacado">
                                <div class="img">
                                    <a href="#" class="image" title="Tgestiona">
                                        <img class="ímage" alt="Tgestiona" height="140" src="{{ asset('imagenes/clientes/tgestiona.png') }}">
                                    </a>
                                </div>

                            </div>
                            <div class="destacado">
                                <div class="img">
                                    <a href="#" class="image" title="Exim">
                                        <img class="ímage" alt="Exim" height="140" src="{{ asset('imagenes/clientes/exim.png') }}">
                                    </a>
                                </div>

                            </div>
                            <div class="destacado">
                                <div class="img">
                                    <a href="#" class="image" title="Lindley">
                                        <img class="ímage" alt="Lindley" height="140" src="{{ asset('imagenes/clientes/lindley.png') }}">
                                    </a>
                                </div>

                            </div>
                            <div class="destacado">
                                <div class="img">
                                    <a href="#" class="image" title="Gloria">
                                        <img class="ímage" alt="Gloria" height="140" src="{{ asset('imagenes/clientes/gloria.png') }}">
                                    </a>
                                </div>

                            </div>
                            <div class="destacado">
                                <div class="img">
                                    <a href="#" class="image" title="Nacional de chocolates">
                                        <img class="ímage" alt="Nacional de chocolates" height="140" src="{{ asset('imagenes/clientes/compania-chocolates.png') }}">
                                    </a>
                                </div>

                            </div>
                            <div class="destacado">
                                <div class="img">
                                    <a href="#" class="image" title="Pinguino">
                                        <img class="ímage" alt="Pinguino" height="140" src="{{ asset('imagenes/clientes/pinguino.png') }}">
                                    </a>
                                </div>

                            </div>
                            <div class="destacado">
                                <div class="img">
                                    <a href="#" class="image" title="San fernando">
                                        <img class="ímage" alt="San fernando" height="140" src="{{ asset('imagenes/clientes/san-fernando.png') }}">
                                    </a>
                                </div>

                            </div>
                            <div class="destacado">
                                <div class="img">
                                    <a href="#" class="image" title="Metro">
                                        <img class="ímage" alt="Metro" height="140" src="{{ asset('imagenes/clientes/metro.png') }}">
                                    </a>
                                </div>

                            </div>
                            <div class="destacado">
                                <div class="img">
                                    <a href="#" class="image" title="Wong">
                                        <img class="ímage" alt="Wong" height="140" src="{{ asset('imagenes/clientes/wong.png') }}">
                                    </a>
                                </div>

                            </div>
                            <div class="destacado">
                                <div class="img">
                                    <a href="#" class="image" title="Cencosud">
                                        <img class="ímage" alt="Cencosud" height="140" src="{{ asset('imagenes/clientes/cencosud.png') }}">
                                    </a>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>


            </div>

        </div>
    </div>
@endsection