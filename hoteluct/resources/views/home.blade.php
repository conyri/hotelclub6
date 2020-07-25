
@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Home</div>
                <a href="/principaladmin" >Panel ADM</a>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="links flex-center ">                                                            
                <a href="/">INICIO</a>
                <a href="/reserva2">RESERVA</a> 
                <a href="/coti2">COTIZACION</a>  

                       
            </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
