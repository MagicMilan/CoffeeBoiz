@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row plans pull-right">
            @if(isset(Auth::user()->admin))
                @if(Auth::user()->admin)
                    <div class="row text-center">
                        <a class="btn btn-primary" href="{{ url('/products/create') }}"><b>Product
                                toevoegen</b></a>
                    </div>
                @endif
            @endif
        </div>
        <section class="price-1" style="padding-top: 40px">
            <div class="container">
                <h3>ALLE PRODUCTEN</h3>
                <div class="row plans">
                    @foreach($products as $product)
                        <div class="span3 plan">
                            <div class="title">{{ strtoupper($product->name) }}</div>
                            <div class="image"><img width="150" src="{{ ("images/$product->image") }}"></div>
                            <div class="price">€{{ $product->price }}</div>
                            <div class="description">{{ $product->description }}</div>
                            <div class="title center-block">Voeg toe<a class="fa fa-cart-plus pull-right" href="/addProduct/{{$product->id}}"></a></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

@endsection