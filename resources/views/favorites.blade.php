@extends('templates.principal')
@section('content')
<hr class="offset-lg">
    <hr class="offset-lg">
    <hr class="offset-lg hidden-xs">

    <div class="container">
      <div class="row">
        <!-- Products -->
        <div class="col-sm-12">
          <hr class="offset-lg">

          <div class="products">
            <div class="row">

              <div class="col-sm-6 col-md-4 product">
                <div class="body">
                  <a href="#favorites" class="favorites" data-favorite="active"><i class="ion-ios-heart-outline"></i></a>
                  <a href="{{url('store')}}"><img src="img/products/lenovo-yoga.jpg" alt="Lenovo Yoga 900"/></a>

                  <div class="content align-center">
                    <p class="price">$1899.99</p>
                    <h2 class="h3">Lenovo Yoga 900</h2>
                    <hr class="offset-sm">

                    <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                    <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4 product">
                <div class="body">
                  <a href="#favorites" class="favorites" data-favorite="active"><i class="ion-ios-heart-outline"></i></a>
                  <a href="{{url('store')}}"><img src="img/products/surface-pro.jpg" alt="Surface Pro"/></a>

                  <div class="content align-center">
                    <p class="sale">$2099.99</p>
                    <p class="price through">$2499.99</p>
                    <h2 class="h3">Microsoft Surface Pro</h2>
                    <hr class="offset-sm">

                    <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                    <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4 product">
                <div class="body">
                  <a href="#favorites" class="favorites" data-favorite="active"><i class="ion-ios-heart-outline"></i></a>
                  <a href="{{url('store')}}"><img src="img/products/hp-spectre-x360.jpg" alt="HP Spectre x360"/></a>

                  <div class="content align-center">
                    <p class="price">$2994.99</p>
                    <h2 class="h3">HP Spectre x360</h2>
                    <hr class="offset-sm">

                    <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                    <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4 product visible-sm">
                <div class="body">
                  <a href="#favorites" class="favorites" data-favorite="active"><i class="ion-ios-heart-outline"></i></a>
                  <a href="{{url('store')}}"><img src="img/products/dell-inspiron-2in1.jpg" alt="Dell Inspiron 7000 2-in-1s"/></a>

                  <div class="content align-center">
                    <p class="price">$1994.99</p>
                    <h2 class="h3">Dell Inspiron 7000</h2>
                    <hr class="offset-sm">

                    <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                    <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
                  </div>
                </div>
              </div>


              <div class="col-sm-6 col-md-4 product">
                <div class="body">
                  <a href="#favorites" class="favorites" data-favorite="active"><i class="ion-ios-heart-outline"></i></a>
                  <a href="{{url('store')}}"><img src="img/products/apple-imac-27-retina.jpg" alt="Apple iMac 27 Retina"/></a>

                  <div class="content align-center">
                    <p class="price">$2099.99</p>
                    <h2 class="h3">Apple iMac 27 Retina</h2>
                    <hr class="offset-sm">

                    <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                    <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4 product">
                <div class="body">
                  <a href="#favorites" class="favorites" data-favorite="active"><i class="ion-ios-heart-outline"></i></a>
                  <a href="{{url('store')}}"><img src="img/products/microsoft-surface-studio.jpg" alt="Microsoft Surface Studio"/></a>

                  <div class="content align-center">
                    <p class="price">$3749.99</p>
                    <h2 class="h3">Microsoft Surface Studio</h2>
                    <hr class="offset-sm">

                    <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                    <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4 product">
                <div class="body">
                  <a href="#favorites" class="favorites" data-favorite="active"><i class="ion-ios-heart-outline"></i></a>
                  <a href="{{url('store')}}"><img src="img/products/dell-inspiron-23.jpg" alt="Dell Inspion 23"/></a>

                  <div class="content align-center">
                    <p class="price">$1987.99</p>
                    <h2 class="h3">Dell Inspion 23</h2>
                    <hr class="offset-sm">

                    <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                    <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4 product visible-sm">
                <div class="body">
                  <a href="#favorites" class="favorites" data-favorite="active"><i class="ion-ios-heart-outline"></i></a>
                  <a href="{{url('store')}}"><img src="img/products/lenovo-ideacenter.jpg" alt="Lenovo IdeaCenter"/></a>

                  <div class="content align-center">
                    <p class="price">$2487.99</p>
                    <h2 class="h3">Lenovo IdeaCenter</h2>
                    <hr class="offset-sm">

                    <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                    <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <nav>
            <ul class="pagination">
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
            </ul>
          </nav>
        </div>
        <!-- /// -->
      </div>
    </div>


   

    <hr class="offset-lg">
    <hr class="offset-sm">
@endsection