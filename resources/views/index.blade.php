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
                  <a href="{{url('store')}}" rel="nofollow" class="btn btn-default black"> Buy now </a>
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
                  <a href="{{url('store')}}" rel="nofollow" class="btn btn-primary black"> Buy now </a>
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
                  <a href="{{url('store')}}" rel="nofollow" class="btn btn-primary black"> Buy now </a>
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
                  <a href="{{url('store')}}" rel="nofollow" class="btn btn-primary black"> Buy now </a>
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
        <h2 class="h2 upp align-center"> Products</h2>
        <hr class="offset-lg">

        <div class="row">
        @foreach($productos as $producto)
             <div class="col-sm-6 col-md-3 product">
            
            <div class="body">
              <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
              <a href="./"><img src="{{$producto->imagen}}" alt="Apple iMac 27 Retina"/></a>

              <div class="content align-center"> 
              <p class="price">{{$producto->precio}}</p>
                <h2 class="h3">{{$producto->nombre}}</h2>
                <hr class="offset-sm">

                <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
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