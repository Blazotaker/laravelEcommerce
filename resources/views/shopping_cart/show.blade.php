@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card padding">
        <header>
            <h2>Mi carrito de compras</h2>
        </header>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-6 ">
                    <products-shopping-cart-component></products-shopping-cart-component>
                </div>
                <div class="col-10 col-md-6 payments">
                    <p> Paga aquí </p>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection
