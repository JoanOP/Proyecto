
<div class="toplinks" >
      
      <a href="{{url('../admin/index')}}"style="margin:5px 25px 10px 0;font-size:20px " > <i class="ion-unlocked" ></i>ADMIN</a>
     
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

          </div>

          <div id="navbar" class="navbar-collapse ">
            <ul class="nav navbar-nav">
            @foreach($menus as $menu)
            <li><a href="{{$menu->ruta}}">{{$menu->descripcion}}</a></li>
            @endforeach
            </ul>
          </div><!--/.nav-collapse -->


          <!-- <div class="search hidden-xs" data-style="hidden">
            <div class="input">
              <button type="button"><i class="ion-ios-search"></i></button>

              <input type="text" name="search" value="" placeholder="Type here..." />
            </div>
          </div> -->
        </div><!--/.container-fluid -->
        
    </nav>

    

