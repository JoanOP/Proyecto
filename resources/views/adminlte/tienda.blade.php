@extends('adminlte.principal')
@section('admincontent')
@include('templateadmin.titulo')
<div class="col-md-12  card card-frm">
    <!-- general form elements -->

    <div class="card-header">
        <h3 class="card-title">Ingreso de Productos</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="card-body">
        <form role="form" action="{{url('admin/ingreso/store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Ingrese el nombre"required>
            </div>
            <div class="form-group">
                <label">Precio</label>
                    <input type="text" name="precio" class="form-control" placeholder="$ precio"required>
            </div>

            <div class="form-group">
                <label">Tipo</label>
                    <input type="text" name="tipo" class="form-control" placeholder="Ingrese el tipo de dispositivo"required>
            </div>
           
            <div class="form-group">
                <label class="titulo_img">Imagen</label>
                    <input type="file" name="imagen" class="form-control" placeholder="Ingrese la imagen" required>
            </div>          

            

            <div class="card-footer">
                <button type="submit" class="btn btn-dark col-12">Guardar</button>
            </div>
        </form>
    </div>
</div>
<div class=" card card-frm">
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
                    <th>Tipo</th>
                    <th>Imagen</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach($tiendas as $item)
                <tr>

                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->precio}}</td>
                    <td>{{$item->tipo}}</td>
                    <td>   <div class="img_dtable"><img src="{{asset('imagenes/imgStore').'/'.$item->imagen}}"
                    class="titulo_img"></div></td>
                    <td>
                        <button class="btn editar" title="Editar" ><a href="{{url('admin/store/edit',$item->id)}}"><i
                                    class="far fa-edit"></i></a></button>
                        <span>
                            <form class="frm" action="{{url('admin/store/eliminar',$item->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn eliminar" title="Eliminar" onclick="return confirm('Quieres eliminar el registro')"><i class="far fa-trash-alt"></i></button>
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
