@extends('templates.principal')
@section('content')
@include('templates.slider')
<hr class="offset-lg">
    <hr class="offset-lg">

    <div class="bars">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4 no-padding padding-xs">
            <div class="bar medium" data-background="img/bars/macbook.jpg">
              <h3 class="title black">MacBook Air</h3>

              <div class="wrapper">
                <div class="content">
                  <hr class="offset-sm">
                  <a href="{{url('store')}}" rel="nofollow" class="btn btn-default black"> Ver más </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="bar small" data-background="img/bars/dellinspirion.jpg">
              <h3 class="title black">Dell Inspirion 7000</h3>

              <div class="wrapper">
                <div class="content">
                  <hr class="offset-sm">
                  <a href="{{url('store')}}" rel="nofollow" class="btn btn-primary black">Ver más </a>
                </div>
              </div>
            </div>

            <hr class="offset-xs">
            <hr class="offset-xs">

            <div class="bar small" data-background="img/bars/surfacestudio.jpg">
              <h3 class="title">Surface Studio</h3>
              
              <div class="wrapper">
                <div class="content">
                  <hr class="offset-sm">
                  <a href="{{url('store')}}" rel="nofollow" class="btn btn-primary black">Ver más</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 no-padding hidden-xs hidden-sm">
            <div class="bar medium" data-background="img/bars/accessories.jpg">
              <h3 class="title black">Accessories</h3>
              
              <div class="wrapper">
                <div class="content">
                  <hr class="offset-sm">
                  <a href="{{url('store')}}" rel="nofollow" class="btn btn-primary black">Ver más</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr class="offset-lg">
    <hr class="offset-md">


    <section class="products">
      <div class="container">
        <h2 class="h2 upp align-center" style="text-transform:uppercase;"> Productos</h2>
        <hr class="offset-lg">

        <div class="row">
        @foreach($productos as $producto)
             <div class="col-sm-6 col-md-3 product">
            
            <div class="body">
              
              <img src="{{asset('imagenes/imgHome').'/'.$producto->imagen}}" alt="Apple iMac 27 Retina"/>

              <div class="content align-center"> 
              <p class="price">${{$producto->precio}}</p>
                <h2 class="h3">{{$producto->nombre}}</h2>
                <hr class="offset-sm">

              <a href="{{url('store')}}"><button class="btn btn-primary btn-sm rounded"> Ver más</button> </a>
              </div>
              </div>
          </div>
        @endforeach
        <div class="align-right align-center-xs">
          <hr class="offset-sm">
          <a href="{{url('store')}}"> <h5 class="upp">View all desktops </h5> </a>
        </div>
      </div>
    </section>

    <hr class="offset-lg">
    <hr class="offset-sm">
    @endsection