@extends('adminlte.principal')
@section('admincontent')
@include('templateadmin.titulo')
<div class="col-md-12  card card-frm">
    <!-- general form elements -->
    
        <div class="card-header">
            <h3 class="card-title">Ingreso de Menús</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div class="card-body">
        <form role="form" action="{{url('admin/ingreso/menu')}}" method="post">
            @csrf
                <div class="form-group">
                    <label>Descripción</label>
                    <input type="text" name="descrip" class="form-control" placeholder="Ingrese el menu" required>
                </div>
                <div class="form-group">
                    <label">Ruta</label>
                        <input type="text" name="ruta" class="form-control" placeholder="Ingrese la ruta" required>
                </div>
                <div class="form-group">
                    <label">Orden</label>
                        <input type="number" name="orden" class="form-control" placeholder="Ingrese el orden" required>
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
                    <th>Descripción</th>
                    <th>Ruta</th>
                    <th>Orden</th>
                    <th>Action</th>
                   
                </tr>
            </thead>
            <tbody>
           
            @foreach($menus as $item)
                <tr>

                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->descripcion}}</td>
                    <td>{{$item->ruta}}</td>
                    <td> {{$item->orden}}</td>
                    <td>
                    
                    <button class="btn editar"  title="Editar"><a href="{{url('admin/menu/edit',$item->id)}}"><i class="far fa-edit" ></i></a></button>
                    <span>
                    <form class="frm" action="{{url('admin/menu/eliminar',$item->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn eliminar" title="Eliminar" onclick="return confirm('Quieres eliminar el registro')"><i class="far fa-trash-alt" ></i></button>
                    </form>
                    </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection
