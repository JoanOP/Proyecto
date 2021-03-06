@extends('adminlte.principal')
@section('admincontent')
@include('templateadmin.titulo')
<div class="col-md-12  card card-frm">
    <!-- general form elements -->

    <div class="card-header">
        <h3 class="card-title">Ingreso de Referencias</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="card-body">
        <form role="form" action="{{url('admin/contact/update',$contacts->id)}}" method="post">
            @method('put')
            @csrf
            <div class="form-group">
                <label>Título</label>
                <input type="text" name="titulo" class="form-control" value="{{$contacts->titulo}}" required>
            </div>
            <div class="form-group">
                <label  class="titulo_img">Icono</label>
                <div class="img_dtable"><i style="font-size:80px; color:#000;" class="{{$contacts->icono}}"></i></div>
                    <input type="text" name="icono" class="form-control " value="{{$contacts->icono}}" required>
                    <div style="text-align:right;"><a target="_blank"href="https://fontawesome.com/icons?d=gallery">Página de iconos recomendos</a></div>  

            </div>
            <div class="form-group">
            
                <label">Descripción</label>
                    <input type="text" name="descripcion" class="form-control" value="{{$contacts->descripcion}}" required>
            </div>
            

            <div class="card-footer">
                <button type="submit" class="btn btn-dark col-12">Editar</button>
            </div>
        </form>
        <br>
    </div>
</div>
@endsection
