@extends('adminlte.principal')
@section('admincontent')
<div class="col-md-12  card card-frm">
    <!-- general form elements -->

    <div class="card-header">
        <h3 class="card-title">Editar Productos</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="card-body">
        <form role="form" action="{{url('admin/Homeproducto/update',$productos->id)}}" method="post">
            @method('put')
            @csrf
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{$productos->nombre}}">
            </div>
            <div class="form-group">
                <label">Precio</label>
                    <input type="text" name="precio" class="form-control" value="{{$productos->precio}}">
            </div>

            <div class="form-group">
                <label">Imagen</label>
                    <input type="text" name="imagen" class="form-control" value="{{$productos->imagen}}">
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
                <button type="submit" class="btn btn-dark col-12">Editar</button>
            </div>
        </form>
    </div>
</div>
@endsection
