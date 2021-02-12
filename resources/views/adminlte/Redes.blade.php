@extends('adminlte.principal')
@section('admincontent')
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
                    <input type="text" name="icono" class="form-control"  placeholder="Ingrese el icono">
                </div>
                <div class="form-group">
                    <label">Ruta</label>
                    <input type="text" name="ruta" class="form-control" placeholder="Ingrese la ruta">
                </div>
               
           

                <div class="card-footer">
                <button type="submit" class="btn btn-dark col-12">Editar</button>
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
                    <th>Descripción</th>
                    <th>Ruta</th>
                    
                    <th>Action</th>
                   
                </tr>
            </thead>
            <tbody>
           
            @foreach($redes as $item)
                <tr>

                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->icono}}</td>
                    <td>{{$item->ruta}}</td>
                    
                    <td>
                    <button class="btn editar"><a href="{{url('admin/Redes-sociales/edit',$item->id)}}"><i class="far fa-edit" ></i></a></button>
                    <span>
                    <form class="frm" action="{{url('admin/Redes-sociales/eliminar',$item->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn eliminar"><i class="far fa-trash-alt" ></i></button>
                    </form>
                    </span>                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection