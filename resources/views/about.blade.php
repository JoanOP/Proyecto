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
            <!-- <img src="{{$about->imagen}}" alt="Sleek and colorful" title="Sleek and colorful"/> -->
            <img src="{{asset('imagenes/imgabout').'/'.$about->imagen}}" alt="Sleek and colorful" />
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
    
    
@endsection