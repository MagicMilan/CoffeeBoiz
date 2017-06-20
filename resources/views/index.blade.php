@extends('layouts.app')

@section('content')
    <!-- logos -->
    <section class="logos">
        <div class="container">
            @foreach($categories as $category)
                <div>
                    <a href="#">
                        <img src=" {{ ("images/$category->image") }}" width="150" height="150" alt="">
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
                    <div class="span4 plan">
                        <div class="title">{{ strtoupper($product->name) }}</div>
                        <div class="image"><img width="200" class="picture"   src=" {{ ("images/$product->image") }}"></div>
                        <div class="price">€ {{ number_format($product->price,2,',','') }}</div>
                        <div class="description">{{ $product->description }}</div>
                        <a class="btn" href="/addProduct/{{$product->id}}">
                            +<i class="fa fa-shopping-cart" style="color: #fff"></i>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- footer-2 -->
    <footer class="footer-2 bg-starbucks">
        <div class="container">
            <p>&copy; The Coffee Project</p>
        </div>
    </footer>
@endsection


