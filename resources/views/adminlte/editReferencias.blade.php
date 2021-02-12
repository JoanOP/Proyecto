@extends('adminlte.principal')
@section('admincontent')

<div class="col-md-12  card card-frm">
    <!-- general form elements -->

    <div class="card-header">
        <h3 class="card-title">Ingreso de Referencias</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="card-body">
        <form role="form" action="{{url('admin/referencias/update',$referencias->id)}}" method="post">
            @method('put')
            @csrf
            <div class="form-group">
                <label>Descripcion</label>
                <input type="text" name="descripcion" class="form-control" value="{{$referencias->descripcion}}">
            </div>
            <div class="form-group">
                <label">Icono</label>
                    <input type="text" name="icono" class="form-control" value="{{$referencias->icono}}">
            </div>
            <div class="form-group">
                <label">Tipo</label>
                    <input type="text" name="tipo" class="form-control" value="{{$referencias->span}}">
            </div>


            <div class="card-footer">
                <button type="submit" class="btn btn-dark col-12">Editar</button>
            </div>
        </form>
        <br>
    </div>
</div>
@endsection
