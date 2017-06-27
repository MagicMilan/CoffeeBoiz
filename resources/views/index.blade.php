@extends('layouts.app')

@section('content')
    <!-- logos -->
    <section class="logos">
        <div class="container">
            @foreach($categories as $category)
                <div>
                    <a href="#">
                        <img class="catpict" src=" {{ ("images/$category->image") }}" width="150" height="150" alt="" title="Filteren op {{ $category->name }}">
                        <p>{{ strtoupper($category->name) }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    <!-- price-1 -->
    <section class="price-1">
        <div class="container">
            <h3>MEEST VERKOCHT</h3>
            <div class="row plans">
                @foreach($products as $product)
                    <div class="span4 plan" style="cursor: auto" title="{{ $product->description }}">
                        <div class="title">{{ strtoupper($product->name) }}</div>
                        <div class="image"><img width="200" class="picture" src=" {{ ("images/$product->image") }}">
                        </div>
                        <div class="description">€ {{ number_format($product->price,2,',','') }}</div>
                        <a class="btn btn-navbar" href="/addProduct/{{$product->id}}"
                           title="{{ $product->name }} toevoegen aan het winkelwagentje">
                            +<i class="fa fa-shopping-cart" style="color: #fff"></i>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


@endsection


