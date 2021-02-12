@extends('adminlte.principal')
@section('admincontent')
<div class="col-md-12  card card-frm">
    <!-- general form elements -->
    
        <div class="card-header">
            <h3 class="card-title">Editar Menu</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div class="card-body">
        <form role="form" action="{{url('admin/menu/update',$menu->id)}}" method="post">
        @method('put')
            @csrf
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


            <div class="card-footer">
                <button type="submit" class="btn btn-dark col-12">Editar</button>
            </div>
        </form>
    </div>
</div>
@endsection