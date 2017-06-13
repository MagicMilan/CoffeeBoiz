@extends('layouts.app')

@section('content')

    <div class="container">

        <section class="price-1" style="padding-top: 40px">
            @if(isset(Auth::user()->admin))
                @if(Auth::user()->admin)
                    <div class="row text-center">
                        <a class="btn btn-primary" style="margin-bottom: 20px" href="{{ url('/products/create') }}">Product
                            toevoegen</a>
                    </div>
                @endif
            @endif
            <div class="container">
                <div class="row plans">
                    <h3>ALLE PRODUCTEN</h3>
                    @foreach($products as $product)
                        <div class="span4 plan">
                            <div class="title">{{ strtoupper($product->name) }}</div>
                            <div class="image"><img width="200" src="{{ ("images/$product->image") }}"></div>
                            <div class="price">€{{ $product->price }}</div>
                            <div class="description">{{ $product->description }}</div>
                            <a class="btn btn-primary" href="/addProduct/{{$product->id}}">Toevoegen aan
                                winkelmandje</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

@endsection