@extends('adminlte.principal')
@section('admincontent')

<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Ingreso de Referencias</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{url('admin/ingreso/referencias')}}" method="post">
        @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Descripcion</label>
                    <input type="text" name="descripcion" class="form-control"  placeholder="Ingrese el icono">
                </div>
                <div class="form-group">
                    <label">Icono</label>
                    <input type="text" name="icono" class="form-control" placeholder="Ingrese la ruta">
                </div>
                <div class="form-group">
                    <label">Tipo</label>
                    <input type="text" name="tipo" class="form-control" placeholder="Ingrese la ruta">
                </div>
               
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
        <br>
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
                    <th>Descripción</th>
                    <th>Icono</th>
                    <th>Tipo</th>
                    <th>Action</th>
                   
                </tr>
            </thead>
            <tbody>
           
            @foreach($referencias as $item)
                <tr>

                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->descripcion}}</td>
                    <td>{{$item->icono}}</td>
                    <td> {{$item->span}}</td>
                    <td>
                    <button class="btn editar"><a href="{{url('admin/referencias/edit',$item->id)}}"><i class="far fa-edit" ></i></a></button>
                    <span>
                    <form class="frm" action="{{url('admin/referencias/eliminar',$item->id)}}" method="post">
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