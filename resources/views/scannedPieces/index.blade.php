@extends('layouts.app')

@section('extra-css')

@endsection

@section('content')
<div class="container mt-5 pt-4">
            <div class="col-4">
                <img src="img/logo2.png" class="img-fluid"/>
            </div>
            <div class="text-center mt-4 mb-3">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" alt="First slide" src="{{asset('img/filtro_aceite_3.jpg')}}"/>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" alt="Second slide" src="{{asset('img/filtro_aceite_4.png')}}"/>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" alt="Third slide" src="{{asset('img/filtro_aceite_5.gif')}}"/>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-2"></div>
            <div class="col-md-8 float-none">
                <main class="text-center">
                    <div class="text-center text-md-left">
                        <button type="button" class="btn btn-lg btn-block btn-primary">Comprar en linea</button>
                        <button type="button" class="btn btn-lg btn-block btn-success">Refaccionaria mas cercana</button>
                    </div>
                </main>
            </div>
            <div class="col-md-2"></div>
        </div>
@endsection

@section('extra-script')

@endsection
