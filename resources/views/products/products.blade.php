@extends('layouts.app')

@section('content')
    <section class="logos">
        <div class="container">
            @foreach($categories as $category)
                <div>
                    <a href="#">
                        <img class="catpict" src=" {{ ("images/$category->image") }}" width="150" height="150" alt=""
                             title="Filteren op {{ $category->name }}">
                        <p>{{ strtoupper($category->name) }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    <div class="container">
        <div class="row plans pull-right">
            @if(isset(Auth::user()->admin))
                @if(Auth::user()->admin)
                    <div class="row text-center">
                        <a class="btn" href="{{ url('/products/create') }}" title="Een product toevoegen">
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
                        <div class="span3 plan" style="cursor: auto" title="{{ $product->description }}">
                            @if(isset(Auth::user()->admin))
                                @if(Auth::user()->admin === 1)
                                    <div style="position: absolute; right: 0.25em">
                                        <a href="products/{{ $product->id }}/edit"
                                           title="{{ $product->name }} wijzigen">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                        <a href="products/{{ $product->id }}/delete"
                                           title="{{ $product->name }} verwijderen">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                @endif
                            @endif
                            <div class="title">{{ strtoupper($product->name) }}</div>
                            <div class="image">
                                <img width="150" class="picture" src="{{ ("images/$product->image") }}">
                            </div>
                            <div class="description">
                                €{{ number_format($product->price,2,',','') }}
                            </div>
                            <a class="btn btn-navbar" href="/addProduct/{{$product->id}}"
                               title="{{ $product->name }} toevoegen aan het winkelwagentje">
                                +<i class="fa fa-shopping-cart" style="color: #fff"></i>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

@endsection