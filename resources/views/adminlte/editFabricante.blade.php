@extends('adminlte.principal')
@section('admincontent')
<div class="col-md-12 ">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Editar Fabricantes</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{url('admin/fabricantes/update',$fabricante->id)}}" method="post">
        @method('put')
        @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="nombre" class="form-control"  value="{{$fabricante->nombre}}">
                </div>
                
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Editar</button>
            </div>
        </form>
        <br>
    </div>
</div>
@endsection