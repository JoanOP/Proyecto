
<div class="toplinks">
      <a href="#signin" data-toggle="modal" data-target="#Modal-Registration"> <i class="ion-person"></i> Registration</a>
      <a href="#signin" data-toggle="modal" data-target="#Modal-SignIn"> <i class="ion-unlocked"></i> Sign In</a>
      <a href="{{url('favorites')}}"> <i class="ion-ios-heart"></i> Favorites </a>
      <a href="tel:+80005554465" class="hidden-xs"> <i class="ion-android-call"></i> 8000 555-44-65 </a>
    </div>
<nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./"> Unistore Pro </a>
            <a class="navbar-brand pull-right hidden-sm hidden-md hidden-lg" href="#open-cart"> <i class="ion-bag"></i> 7 </a>
          </div>

          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            @foreach($menus as $menu)
            <li><a href="{{$menu->ruta}}">{{$menu->descripcion}}</a></li>
            @endforeach
            </ul>
          </div><!--/.nav-collapse -->


          <div class="search hidden-xs" data-style="hidden">
            <div class="input">
              <button type="button"><i class="ion-ios-search"></i></button>

              <input type="text" name="search" value="" placeholder="Type here..." />
            </div>
          </div>
        </div><!--/.container-fluid -->
    </nav>

