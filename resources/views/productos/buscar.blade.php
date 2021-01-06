@extends('master')
@section('content')


<h4>Resultado</h4>
<form method="post">
    <div class="md-form mt-0">
        <input class="form-control" type="text" placeholder="Buscar" name="id_buscar" aria-label="Search">
        <button class="btn btn-default" type="submit" id="buscar">Buscar</button>
    </div>
</from>
<div class="container">   
    <div class="row">
        @foreach($producto as $pro)
            <div class="col-md-3">
            <div class="card" style="width: 15rem;">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src='{{url("/img/anchetas/$pro->foto_producto")}}' class="img-fluid"/>
                <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$pro->nom_producto}}</h5>
                <p class="card-text">{{$pro->descripcion_producto}}</p>
               <!-- <p class="card-text">Categoria: {{$anc->descripcion_cat}}</p>-->
                <h3>$ {{$pro->valor_producto}}</h3>
                
                <a href="#!" class="btn btn-primary"><i class="fas fa-shopping-cart"></i></a>
            </div>
            </div>
            </div>
        @endforeach
    </div>
</div>


@stop