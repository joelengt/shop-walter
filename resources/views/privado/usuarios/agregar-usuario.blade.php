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
                    <h3 class="box-title">Agregar usuario</h3>
                </div>
                <form name="editar-licencia" id="editar-licencia" style="font-size: 11px;" class="form-horizontal" action="{{ route('agregar-usuarios-admin') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    <div class="box-body">

                        <div class="form-group col-xs-12 col-md-6 input-group-sm">
                            <label for="username" class="col-md-5 control-label">Nombre de usuario:</label>
                            <div class="col-md-7">
                                <input type="text" class="form-control input-sm" id="username" name="username" value="" required>
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-md-6 input-group-sm">
                            <label for="id_perfil" class="col-md-5 control-label">Perfiles:</label>
                            <div class="col-md-7">
                                <select class="form-control input-sm" name="id_perfil" id="id_perfil">
                                    @foreach($perfiles as $perfil)
                                    <option value="{{ $perfil->id_perfil }}" >{{ $perfil->nombre_perfil }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-md-6 input-group-sm">
                            <label for="password" class="col-md-5 control-label">Password:</label>
                            <div class="col-md-7">
                                <input type="password" class="form-control input-sm" id="password" name="password" value="" required>
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-md-6 input-group-sm">
                            <label for="re_password" class="col-md-5 control-label">Re-Password:</label>
                            <div class="col-md-7">
                                <input type="password" class="form-control input-sm" id="re_password" name="re_password" value="" required>
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-md-6 input-group-sm">
                            <label for="habilitado" class="col-md-5 control-label">Habilitado:</label>
                            <div class="col-md-7">
                                <select class="form-control input-sm" name="habilitado" id="habilitado">
                                    
                                    <option value="1" >Si</option>
                                    <option value="0" >No</option>
                                </select>
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