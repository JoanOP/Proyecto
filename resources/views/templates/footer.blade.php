<footer>
      <div class="about">
        <div class="container">
          <div class="row">
            <hr class="offset-md">
            @foreach($garantias as $garantia)
            <div class="col-xs-6 col-sm-3">
              <div class="item">
                <i class="{{$garantia->icono}}"></i>
                <h1>{{$garantia->descripcion}}<br><span>{{$garantia->span}}</span></h1>
              </div>
            </div>
          @endforeach
            <hr class="offset-md">
          </div>
        </div>
      </div>

      <div class="subscribe">
        <div class="container align-center">
            <hr class="offset-md">
            <hr class="offset-lg">

            <div class="social">
            @foreach($redes as $red)
              <a target="_blank" href="{{$red->ruta}}"><i class="{{$red->icono}}"></i></a>
              @endforeach
            </div>
            <hr class="offset-md">
            <hr class="offset-md">
        </div>
      </div>


      <div class="container">
        <hr class="offset-md">

        <div class="row menu">
          <div class="col-sm-3 col-md-2">
            <h1 class="h4">Information <i class="ion-plus-round hidden-sm hidden-md hidden-lg"></i> </h1>

            <div class="list-group">
              <a href="#" class="list-group-item">About</a>
              <a href="#" class="list-group-item">Terms</a>
              <a href="#" class="list-group-item">How to order</a>
              <a href="#" class="list-group-item">Delivery</a>
            </div>
          </div>
          <div class="col-sm-3 col-md-2">
            <h1 class="h4">Products <i class="ion-plus-round hidden-sm hidden-md hidden-lg"></i> </h1>

            <div class="list-group">
              <a href="#" class="list-group-item">Laptops</a>
              <a href="#" class="list-group-item">Tablets</a>
              <a href="#" class="list-group-item">Servers</a>
            </div>
          </div>
          <div class="col-sm-3 col-md-2">
          	<h1 class="h4">Support <i class="ion-plus-round hidden-sm hidden-md hidden-lg"></i> </h1>

            <div class="list-group">
              <a href="#" class="list-group-item">Returns</a>
              <a href="#" class="list-group-item">FAQ</a>
              <a href="#" class="list-group-item">Contacts</a>
            </div>
          </div>
          <div class="col-sm-3 col-md-2">
            <h1 class="h4">Location</h1>

            <div class="dropdown">
      			  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      			    Language
      			    <span class="caret"></span>
      			  </button>
      			  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
      			    <li><a href="#English"> <img src="img/flags/gb.png" alt="Eng"/> English</a></li>
      			    <li><a href="#Spanish"> <img src="img/flags/es.png" alt="Spa"/> Spanish</a></li>
      			    <li><a href="#Deutch"> <img src="img/flags/de.png" alt="De"/> Deutch</a></li>
      			    <li><a href="#French"> <img src="img/flags/fr.png" alt="Fr"/> French</a></li>
      			  </ul>
      			</div>
      			<hr class="offset-xs">

      			<div class="dropdown">
      			  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      			    Currency
      			    <span class="caret"></span>
      			  </button>
      			  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
      			    <li><a href="#Euro"><i class="ion-social-euro"></i> Euro</a></li>
      			    <li><a href="#Dollar"><i class="ion-social-usd"></i> Dollar</a></li>
      			    <li><a href="#Yen"><i class="ion-social-yen"></i> Yen</a></li>
      			    <li><a href="#Bitcoin"><i class="ion-social-bitcoin"></i> Bitcoin</a></li>
      			  </ul>
      			</div>

          </div>
          <div class="col-sm-3 col-md-3 col-md-offset-1 align-right hidden-sm hidden-xs">
            <h1 class="h4">Unistore Pro, Inc.</h1>

              <address>
                1305 Market Street, Suite 800<br>
                San Francisco, CA 94102<br>
                <abbr title="Phone">P:</abbr> (123) 456-7890
              </address>

              <address>
                <strong>Support</strong><br>
                <a href="mailto:#">sup@example.com</a>
              </address>

          </div>
        </div>
      </div>

      <hr>

      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-9 payments">
            <p>Pay your order in the most convenient way</p>

            <div class="payment-icons">
              <img src="img/payments/paypal.svg" alt="paypal">
              <img src="img/payments/visa.svg" alt="visa">
              <img src="img/payments/master-card.svg" alt="mc">
              <img src="img/payments/discover.svg" alt="discover">
              <img src="img/payments/american-express.svg" alt="ae">
            </div>
            <br>

          </div>
          <div class="col-sm-4 col-md-3 align-right align-center-xs">
            <hr class="offset-sm hidden-sm">
            <hr class="offset-sm">
            <p>Unistore Pro © 2016 <br> Designed By <a href="http://sunrise.ru.com/" target="_blank">Sunrise Digital</a></p>
            <hr class="offset-lg visible-xs">
          </div>
        </div>
      </div>
    </footer>