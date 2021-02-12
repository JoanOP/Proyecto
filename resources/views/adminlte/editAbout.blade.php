@extends('adminlte.principal')
@section('admincontent')
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
                    <input type="text" name="titulo" class="form-control"  value="{{$abouts->titulo}}">
                </div>
                <div class="form-group">
                    <label">Descripcion</label>
                    <input type="text" name="descripcion" class="form-control"  value="{{$abouts->descripcion}}">
                </div>
                <div class="form-group">
                    <label">Imagen</label>
                    <input type="text" name="imagen" class="form-control"  value="{{$abouts->imagen}}">
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
           

            <div class="card-footer">
                <button type="submit" class="btn btn-dark col-12">Enviar</button>
            </div>
        </form>
        <br>
    </div>
</div>
@endsection