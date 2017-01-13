@extends('privado.nueva-plantilla-principal')

@section('contenido')
    <style>
        .pagination {
            margin: 5px 0;
        }
    </style>


    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Editar categoria</h3>
                </div>
                <form name="editar-licencia" id="editar-licencia" style="font-size: 11px;" class="form-horizontal" action="{{ route("editar-categorias-admin",['id_categoria' => $categoria->id_categoria]) }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    <div class="box-body">
                        <div class="form-group col-xs-12 col-md-6 input-group-sm">
                            <label for="id_categoria_padre" class="col-md-5 control-label">Categoria padre:</label>
                            <div class="col-md-7">
                                <select class="form-control input-sm" name="id_categoria_padre" id="id_categoria_padre">
                                    <option value="">Categoria principal</option>
                                    @foreach($principales as $principal)
                                    <option value="{{ $principal->id_categoria }}" @if($categoria->id_categoria_padre==$principal->id_categoria) selected @endif>{{ $principal->nombre_categoria }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-xs-12 col-md-6 input-group-sm">
                            <label for="nombre_categoria" class="col-md-5 control-label">Nombre categoria:</label>
                            <div class="col-md-7">
                                <input type="text" class="form-control input-sm" id="nombre_categoria" name="nombre_categoria" value="{{ $categoria->nombre_categoria }}">
                            </div>
                        </div>
                        <div class="form-group col-xs-12 col-md-6 input-group-sm">
                            <label for="orden" class="col-md-5 control-label">Orden:</label>
                            <div class="col-md-7">
                                <input type="text" class="form-control input-sm" id="orden" name="orden" value="{{ $categoria->orden }}">
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-md-6 input-group-sm">
                            <label for="habilitado" class="col-md-5 control-label">Habilitado:</label>
                            <div class="col-md-7">
                                <select class="form-control input-sm" name="habilitado" id="habilitado">
                                    <option value="1" @if($categoria->habilitado=='1') selected @endif>Si</option>
                                    <option value="0" @if($categoria->habilitado=='0') selected @endif>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-xs-12 col-md-6 input-group-sm">
                            <label for="imagen_menu" class="col-md-5 control-label">Imagen Menu</label>
                            <div class="col-md-7">
                                <input type="file" id="imagen_menu" name="imagen_menu">
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-md-6 input-group-sm">
                            <label for="imagen_principal" class="col-md-5 control-label">Imagen Principal</label>
                            <div class="col-md-7">
                                <input type="file" id="imagen_principal" name="imagen_principal">
                            </div>
                        </div>

                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Grabar</button>
                        <a class="btn btn-warning btn-close" href="{{ URL::previous() }}">Cancelar</a>
                    </div>
                    <!-- /.box-body -->
                </form>
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection