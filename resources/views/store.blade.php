@extends('templates.principal')
@section('content')
<hr class="offset-top">
    <div class="tags">
      <div class="container">
          <div class="btn-group pull-right sorting">
            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ion-arrow-down-b"></i> Sorting by name
            </button>

            <ul class="dropdown-menu">
              <li><a href="#"> <i class="ion-arrow-down-c"></i> Name [A-Z]</a></li>
              <li><a href="#"> <i class="ion-arrow-up-c"></i> Name [Z-A]</a></li>
              <li><a href="#"> <i class="ion-arrow-down-c"></i> Price [Low-High]</a></li>
              <li><a href="#"> <i class="ion-arrow-up-c"></i> Price [High-Low]</a></li>
            </ul>
          </div>

          <p>Search by tags</p>
          <div class="btn-group" data-toggle="buttons">
          @foreach($categorias as $categoria)
            <label class="btn btn-default btn-sm ">
              <input type="radio" name="options" >{{$categoria->nombre}}
            </label>
            @endforeach
          </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <!-- Filter -->
        <div class="col-sm-4 col-md-3">
          <hr class="offset-lg">

          <div class="filter">
            <div class="item">
                <div class="title">
                    <a href="#clear" data-action="open" class="down"> <i class="ion-android-arrow-dropdown"></i> Open</a>
                    <a href="#clear" data-action="clear"> <i class="ion-ios-trash-outline"></i> Clear</a>
                    <h1 class="h4">Type</h1>
                </div>

                <div class="controls">
                @foreach($categorias as $categoria)
                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                      <div class="label" data-value="{{$categoria->nombre}}">{{$categoria->nombre}}</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>
                @endforeach
                 
                </div>
            </div>

            <br>

    

            <div class="item lite">
                <div class="title">
                    <a href="#clear" data-action="open" class="down"> <i class="ion-android-arrow-dropdown"></i> Open</a>
                    <a href="#clear" data-action="clear"> <i class="ion-ios-trash-outline"></i> Clear</a>
                    <h1 class="h4">Manufacturer</h1>
                </div>

                <div class="controls">
@foreach($fabricantes as $fabricante)
                  <div class="checkbox-group" data-status="inactive">
                      <div class="checkbox"><i class="ion-android-done"></i></div>
                      <div class="label" data-value="{{$fabricante->nombre}}">{{$fabricante->nombre}}</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div> 
@endforeach
                </div>
            </div>
          </div>
        </div>
        <!-- /// -->

        <!-- Products -->
        <div class="col-sm-8 col-md-9">
          <hr class="offset-lg">

          <div class="products">
            <div class="row">

@foreach($tiendas as $tienda)
              <div class="col-sm-6 col-md-4 product">
                <div class="body">
                  <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
                  <a href="./"><img src="{{$tienda->imagen}}" /></a>

                  <div class="content">
                    <h1 class="h3">{{$tienda->nombre}}</h1>
                    <p class="price">${{$tienda->precio}}</p>
                    <label>{{$tienda->tipo}}</label>

                    <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                    <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
                  </div>
                </div>
              </div>
  @endforeach
            </div>
          </div>

          <nav>
            <ul class="pagination">
              <li>
                <a href="#" aria-label="Previous">
                  <span aria-hidden="true"><i class="ion-ios-arrow-left"></i></span>
                </a>
              </li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li class="disabled"><a href="#">..</a></li>
              <li><a href="#">10</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true"><i class="ion-ios-arrow-right"></i></span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
        <!-- /// -->
      </div>
    </div>
    <hr class="offset-lg">
    <hr class="offset-sm">
    @endsection