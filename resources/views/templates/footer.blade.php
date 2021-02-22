<footer id="footer">
    <div class="about" style="border:none">
        <div class="container" >
            <div class="row ">
                <hr class="offset-md">
                @foreach($garantias as $garantia)
                <div class="col-xs-6 col-sm-3">
                    <div class="item">
                         
                        <i class="{{$garantia->icono}}"></i>
                        <h1>{{$garantia->descripcion}}<br><span>{{$garantia->span}}</span></h1>
                    </div>
                </div>
                @endforeach
                <hr class="offset-md" >
            </div>
        </div>
    </div>
            <div class="footer-top ">
                <div class="container">
                <hr class="offset-md">
                    <div class="redes-container">       
                        <ul>
                            @foreach($redes as $red)
                            <li> <a target="_blank" class="icono" href="{{$red->ruta}}"><i class="{{$red->icono}}"></i></a></li>
                            @endforeach
                        </ul>
                    
                </div>
                <hr class="offset-md">
            </div>
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong>Regna</strong>. All Rights Reserved
                </div>
                <div class="credits">

                    Designed by <a href="#">BootstrapMade</a>
                </div>
            </div>
        </footer><!-- #footer -->