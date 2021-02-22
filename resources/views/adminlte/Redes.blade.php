@extends('adminlte.principal')
@section('admincontent')
@include('templateadmin.titulo')
<div class="col-md-12  card card-frm">
    <!-- general form elements -->
    
        <div class="card-header">
            <h3 class="card-title">Ingreso de redes sociales</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div class="card-body">
        <form role="form" action="{{url('admin/ingreso/redes')}}" method="post">
        @csrf
                <div class="form-group">
                    <label>Icono</label>
                    <input type="text" name="icono" class="form-control"  placeholder="Ingrese el icono" required>
                    <div style="text-align:right;"><a target="_blank"href="https://fontawesome.com/icons?d=gallery">Página de iconos recomendos</a></div>  
                </div>
                <div class="form-group">
                    <label">Ruta</label>
                    <input type="text" name="ruta" class="form-control" placeholder="Ingrese la ruta" required>

                </div>
               
           

                <div class="card-footer">
                <button type="submit" class="btn btn-dark col-12  " >Guardar</button>
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
                    <th>Icono</th>
                    <th>Ruta</th>
                    <th>Action</th>
                   
                </tr>
            </thead>
            <tbody>
           
            @foreach($redes as $item)
                <tr>

                    <td>{{$loop->iteration}}</td>
                    <td ><i style="font-size:35px;"class="{{$item->icono}}"><i></td>
                    <td>{{$item->ruta}}</td>
                    
                    <td>
                    <button class="btn editar" title="Editar" ><a href="{{url('admin/Redes-sociales/edit',$item->id)}}"><i class="far fa-edit" ></i></a></button>
                    <span>
                    <form class="frm" action="{{url('admin/Redes-sociales/eliminar',$item->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn eliminar" title="Eliminar" onclick="return confirm('Quieres eliminar el registro')"><i class="far fa-trash-alt" ></i></button>
                    </form>
                    </span> </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection