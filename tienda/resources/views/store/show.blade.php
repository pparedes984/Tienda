@extends('store.template')

@section('content')


<div class="container">
    <div class="page header">
        <h1><i class="fa fa-shopping-cart"></i>Detalle del producto</h1>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="product-block">
                <img src="{{ $product->image }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="product-block">
                <h3>{{ $product->name }}</h3><hr>
                <div class="product-info panel">
                    <p>{{ $product->description}}</p>
                    <h3><span class="label label-success"> Precio: ${{ number_format($product->price,2) }}</h3>
                    <p>
                        <a class="btn btn-warning -btn-block" href="{{ route('cart-add', $product->slug) }}">
                            La quiero <i class="fa fa-cart-plus fa.2x"></i></a>
                    </p>
                </div>
            </div>
        </div></span>
    </div><hr>  
    <p><a class="btn btn.primary" href="{{ route('home') }}"><i class="fa fa-chevron-circle-left"></i>
        Regresar</a></p>
</div>
@stop