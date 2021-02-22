@extends('templates.principal')
@section('content')
<hr class="offset-lg">
<hr class="offset-lg">

<div class="container ">
    <h1 class="upp" style="text-align:center">Contactenos </h1>
    <hr class="offset-md">
    <div class="row dcont" style="text-align:center">
    @foreach($contactos as $item)
       
        <div class="cont-dir col-xs-12 col-sm-6 col-md-3 col-lg-3 " >
            <div  >
            <h2>{{$item->titulo}}</h2>
            <i class="{{$item->icono}} cont"></i>
            </div>
            <div >
            <p>{{$item->descripcion}}</p>
                
            </div>
        </div>
    @endforeach
 
    </div>


</div>

@endsection
