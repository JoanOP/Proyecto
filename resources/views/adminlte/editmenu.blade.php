@extends('adminlte.principal')
@section('admincontent')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Editar Menu</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{url('admin/menu/update',$menu->id)}}" method="post">
        @method('put')
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Descripción</label>
                    <input type="text" name="descrip" class="form-control" value="{{$menu->descripcion}}">
                </div>
                <div class="form-group">
                    <label">Ruta</label>
                        <input type="text" name="ruta" class="form-control"  value="{{$menu->ruta}}">
                </div>
                <div class="form-group">
                    <label">Orden</label>
                        <input type="number" name="orden" class="form-control"  value="{{$menu->orden}}">
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Editar</button>
            </div>
        </form>
    </div>
</div>
@endsection