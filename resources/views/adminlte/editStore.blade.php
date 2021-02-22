@extends('adminlte.principal')
@section('admincontent')
@include('templateadmin.titulo')
<div class="col-md-12  card card-frm">
    <!-- general form elements -->

    <div class="card-header">
        <h3 class="card-title">Editar Productos</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="card-body">
        <form role="form" action="{{url('admin/store/update',$producto->id)}})}}" method="post">
            @method('put')
            @csrf
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{$producto->nombre}}" required>
            </div>
            <div class="form-group">
                <label">Precio</label>
                    <input type="text" name="precio" class="form-control" value="{{$producto->precio}}" required>
            </div>

            <div class="form-group">
                <label">Tipo</label>
                    <input type="text" name="tipo" class="form-control" value="{{$producto->tipo}}" required>
            </div>
            <div class="form-group">
                <label">Imagen</label>
                    <input type="text" name="imagen" class="form-control" value="{{$producto->imagen}}" required>
            </div>

            <div class="form-group">
                 <label class="titulo_img">Imagen</label> 
                 <div class="img_dtable"><img src="{{asset('imagenes/imgStore').'/'.$producto->imagen}}" class="titulo_img"></div>
                    <input type="file" name="imagen" class="form-control" required>
            </div>
            <p>!La imagen se modifica en la BD pero no se esta guardando ni reemplazando en el sistema .............!</p>
            <div class="card-footer">
                <button type="submit" class="btn btn-dark col-12">Editar</button>
            </div>
        </form>
    </div>
</div>
@endsection
