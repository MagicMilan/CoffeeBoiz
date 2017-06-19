@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row plans pull-right">
            @if(isset(Auth::user()->admin))
                @if(Auth::user()->admin)
                    <div class="row text-center">
                        <a class="btn btn-primary" href="{{ url('/products/create') }}">
                            Product toevoegen
                        </a>
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
                            @if(isset(Auth::user()->admin))
                                @if(Auth::user()->admin === 1)
                                    <div style="position: absolute; right: 0.25em">
                                        <a href="products/{{ $product->id }}/delete">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        <a href="products/{{ $product->id }}/edit">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                @endif
                            @endif
                            <div class="title">{{ strtoupper($product->name) }}</div>
                            <div class="image"><img width="150" src="{{ ("images/$product->image") }}"></div>
                            <div class="price">€{{ number_format($product->price,2,',','') }}</div>
                            <div class="description">{{ $product->description }}</div>
                            <a class="btn" href="/addProduct/{{$product->id}}">
                                +<i class="fa fa-shopping-cart" style="color: #fff"></i>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

@endsection