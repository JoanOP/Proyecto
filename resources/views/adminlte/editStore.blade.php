@extends('adminlte.principal')
@section('admincontent')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Editar Productos</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{url('admin/store/update',$producto->id)}})}}" method="post">
        @method('put')
        @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="nombre" class="form-control"  value="{{$producto->nombre}}">
                </div>
                <div class="form-group">
                    <label">Precio</label>
                    <input type="text" name="precio" class="form-control" value="{{$producto->precio}}">
                </div>
                
                <div class="form-group">
                    <label">Tipo</label>
                    <input type="text" name="tipo" class="form-control" value="{{$producto->tipo}}">
                </div>
                <div class="form-group">
                    <label">Imagen</label>
                    <input type="text" name="imagen" class="form-control" value="{{$producto->imagen}}">
                </div>
                
                <!-- <div class="form-group">
                    <label for="exampleInputFile">Imagen</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="imagen" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Seleccionar</label>
                      </div>    
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Subir</span>
                      </div>
                    </div>
                  </div>
  
            </div> -->
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Editar</button>
            </div>
        </form>
    </div>
</div>
@endsection