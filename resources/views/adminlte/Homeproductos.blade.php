@extends('adminlte.principal')
@section('admincontent')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Ingreso de Productos</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{url('admin/ingreso/homeproducto')}}" method="post">
        @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="nombre" class="form-control"  placeholder="Ingrese el menu">
                </div>
                <div class="form-group">
                    <label">Precio</label>
                    <input type="text" name="precio" class="form-control" placeholder="Ingrese la ruta">
                </div>
                
                <div class="form-group">
                    <label">Imagen</label>
                    <input type="text" name="imagen" class="form-control" placeholder="Ingrese la ruta">
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
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">DATOS </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Imagen</th>                   
                    <th>Action</th>                   
                </tr>
            </thead>
            <tbody>
           
            @foreach($productos as $item)
                <tr>

                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->precio}}</td>
                    <td> {{$item->imagen}}</td>
                    <td>
                    
                    <button class="btn editar"><a href="{{url('admin/Homeproducto/edit',$item->id)}}"><i class="far fa-edit" ></i></a></button>
                    <span>
                    <form class="frm" action="{{url('admin/Homeproducto/eliminar',$item->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn eliminar"><i class="far fa-trash-alt" ></i></button>
                    </form>
                    </span>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection