@extends('adminlte.principal')
@section('admincontent')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Editar redes sociales</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{url('admin/Redes-sociales/update',$redes->id)}}" method="post">
        @method('put')
        @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Icono</label>
                    <input type="text" name="icono" class="form-control"  value="{{$redes->icono}}">
                </div>
                <div class="form-group">
                    <label">Ruta</label>
                    <input type="text" name="ruta" class="form-control" value="{{$redes->ruta}}">
                </div>
               
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
        <br>
    </div>
</div>
@endsection