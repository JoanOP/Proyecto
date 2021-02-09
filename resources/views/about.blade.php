@extends('templates.principal')
@section('content')
<hr class="offset-lg hidden-xs">
    <hr class="offset-lg hidden-xs">
    <hr class="offset-lg hidden-xs">
    <div class="white">
      <hr class="offset-lg hidden-xs">
      <hr class="offset-lg hidden-xs">
      <hr class="offset-lg">

      <div class="container about">
      @foreach($abouts as $about)
      
        <div class="row">
          <div class="col-sm-6 hidden-sm hidden-md hidden-lg">
            <img src="img/about/sleek-and-colorful.png" alt="Sleek and colorful" title="Sleek and colorful"/>
          </div>
          <div class="col-sm-6">
            <hr class="offset-lg hidden-xs hidden-sm">
            <hr class="offset-lg hidden-xs hidden-sm">
            <h2 class="featurette-heading">{{$about->titulo}}</h2>
            <hr class="offset-md">
           <p class="lead">{{$about->descripcion}} </p>
          </div>
          <div class="col-sm-6 hidden-xs">
            <hr class="offset-lg visible-sm">
            <img src="{{$about->imagen}}" alt="Sleek and colorful" title="Sleek and colorful"/>
          </div>
          <hr class="offset-lg">
      <hr class="offset-lg hidden-xs">
        </div>
      @endforeach
      </div>
      <hr class="offset-lg">
      <hr class="offset-lg hidden-xs">
      <hr class="offset-lg hidden-xs">
    </div>
    <hr class="offset-lg hidden-xs">
    <hr class="offset-lg">

    <div class="container align-center">
      <h1 class="upp"> Contact us </h1>
      <p> Please insert question to a form below. </p>
      <hr class="offset-md">
      
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
          <form class="contact" action="index.php" method="post">
            <textarea class="form-control" name="message" placeholder="Message" required="" rows="5"></textarea>
            <br>

            <input type="email" name="email" value="" placeholder="E-mail" required="" class="form-control" />
            <br>

            <button type="submit" class="btn btn-primary justify"> Send question</button>
          </form>
        </div>
      </div>
      <br>
    </div>


    <hr class="offset-lg">
    <hr class="offset-sm">
@endsection