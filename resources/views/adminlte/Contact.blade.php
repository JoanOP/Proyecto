@extends('adminlte.principal')
@section('admincontent')
@include('templateadmin.titulo')
<div class="col-md-12  card card-frm">
    <!-- general form elements -->

    <div class="card-header">
        <h3 class="card-title">Ingreso de Dirección,celular.......</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="card-body">
        <form role="form" action="{{url('admin/ingreso/contact')}}" method="post">
            @csrf
            <div class="form-group">
                <label>Titulo</label>
                <input type="text" name="titulo" class="form-control" placeholder="Ingrese el título" required>
            </div>
            <div class="form-group">
                <label">Icono</label>
                    <input type="text" name="icono" class="form-control" placeholder="Ingrese solo el nombre del icono " required>
              <div style="text-align:right;"><a target="_blank"href="https://fontawesome.com/icons?d=gallery">Página de iconos recomendos</a></div>  
            </div>
            <div class="form-group">
                <label">Descripción</label>
                    <input type="text" name="descripcion" class="form-control" placeholder="Ingrese la descripción" required>
            </div>


            <div class="card-footer">
                <button type="submit" class="btn btn-dark col-12">Guardar</button>
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
        <table id="example1" class="table table-bordered table-striped" >
            <thead>
                <tr>
                    <th>#</th>
                    <th>Título</th>
                    <th>Icono</th>
                    <th>Descripción</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>

                @foreach($contacts as $item)
                <tr>

                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->titulo}}</td>
                    <td ><i style="font-size:35px;"class="{{$item->icono}}"><i></td>
                    <td>{{$item->descripcion}}</td>
                
                    <td>
                        <button class="btn editar"  title="Editar"><a href="{{url('admin/contact/edit',$item->id)}}"><i
                                    class="far fa-edit"></i></a></button>
                        <span>
                            <form class="frm" action="{{url('admin/contact/eliminar',$item->id)}}" method="post">
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
