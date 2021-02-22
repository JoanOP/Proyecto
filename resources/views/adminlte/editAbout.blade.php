@extends('adminlte.principal')
@section('admincontent')
@include('templateadmin.titulo')
<div class="col-md-12 card card-frm">
    <!-- general form elements -->
 
        <div class="card-header">
            <h3 class="card-title">Editar About us</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div class="card-body " >
        <form role="form" action="{{url('admin/abouts/update',$abouts->id)}}" method="post">
        @method('put')
        @csrf
            
                <div class="form-group">
                    <label>Titulo</label>
                    <input type="text" name="titulo" class="form-control"  value="{{$abouts->titulo}}"required>
                </div>
                <div class="form-group">
                    <label>Descripcion</label>
                    <input type="text" name="descripcion" class="form-control"  value="{{$abouts->descripcion}}"required>
                </div>
                <!-- <div class="form-group">
                    <label">Imagen</label>
                    <input type="text" name="imagen" class="form-control"  value="{{$abouts->imagen}}"required>
                </div> -->
                <div class="form-group">
                 <label class="titulo_img">Imagen</label> 
                 <div class="img_dtable"><img src="{{asset('imagenes/imgabout').'/'.$abouts->imagen}}"
                 class="titulo_img"></div>
                    <input type="file" name="imagen" class="form-control" required>
                </div>
           <p>!La imagen se modifica en la BD pero no se esta guardando ni reemplazando en el sistema .............!</p>
            <div class="card-footer">
                <button type="submit" class="btn btn-dark col-12" >Editar</button>
            </div>
        </form>
        <br>
    </div>
</div>

@endsection