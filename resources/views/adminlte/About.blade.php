@extends('adminlte.principal')
@section('admincontent')
<div class="col-md-12 card card-frm" >
    <!-- general form elements -->
    
        <div class="card-header" >
         <h3 class="card-title">About us</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div class="card-body " >
        <form role="form" action="{{url('admin/ingreso/abouts')}}" method="post"  enctype="multipart/form-data"> 
        @csrf
           
                <div class="form-group">
                    <label>Titulo</label>
                    <input type="text" name="titulo" class="form-control"  placeholder="Ingrese el icono">
                </div>
                <div class="form-group">
                    <label">Descripcion</label>
                    <input type="text" name="descripcion" class="form-control" placeholder="Ingrese la ruta">
                </div>
                <div class="form-group">
                    <label">Imagen</label>
                    <input type="text" name="imagen" class="form-control" placeholder="Ingrese la imagen">
                </div>
                <!-- <div class="form-group">
                    <label">Imagen</label>
                    <input type="file" name="imagen" class="form-control" placeholder="Ingrese la ruta">
                </div> -->
          
            <div class="card-footer ">
                <button type="submit" class="btn btn-dark col-12">Enviar</button>
            </div>
        </form>
        <br>
        </div>
    
</div>
<div class="card card-frm">
    <div class="card-header">
        <h3 class="card-title">DATOS </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titulo</th>
                    <th>Descripción</th>
                    <th>Imagen</th>
                    <th>Action</th>
                   
                </tr>
            </thead>
            <tbody>
           
            @foreach($abouts as $item)
                <tr>

                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->titulo}}</td>
                    <td>{{$item->descripcion}}</td>
                    <td> {{$item->imagen}}</td>
                    <td>
                    <button class="btn editar"><a href="{{url('admin/abouts/edit',$item->id)}}"><i class="far fa-edit" ></i></a></button>
                    <span>
                    <form class="frm" action="{{url('admin/abouts/eliminar',$item->id)}}" method="post">
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