@extends('adminlte.principal')
@section('admincontent')
@include('templateadmin.titulo')
<div class="col-md-12  card card-frm">
    <!-- general form elements -->

    <div class="card-header">
        <h3 class="card-title">Editar redes sociales</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="card-body">
        <form role="form" action="{{url('admin/Redes-sociales/update',$redes->id)}}" method="post">
            @method('put')
            @csrf
           
            <div class="form-group">
                <label  class="titulo_img">Icono</label>
                <div class="img_dtable"><i style="font-size:80px; color:#000;" class="{{$redes->icono}}"></i></div>
                    <input type="text" name="icono" class="form-control " value="{{$redes->icono}}" required>
                    <div style="text-align:right;"><a target="_blank"href="https://fontawesome.com/icons?d=gallery">Página de iconos recomendos</a></div>  

            </div>

            <div class="form-group">
                <label">Ruta</label>
                    <input type="text" name="ruta" class="form-control" value="{{$redes->ruta}}" required>
            </div>


            <div class="card-footer">
                <button type="submit" class="btn btn-dark col-12">Editar</button>
            </div>
        </form>
        <br>
    </div>
</div>
@endsection
