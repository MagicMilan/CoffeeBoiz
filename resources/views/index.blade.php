@extends('layouts.app')

@section('content')
    <!-- logos -->
    <section class="logos">
        <div class="container">
            <div><a href="#"><img src="assets/koffie.jpg" width="150" alt=""><p>COFFEE</p></a></div>
            <div><a href="#"><img src="assets/espresso.jpg" width="150" alt=""><p>ESPRESSO</p></a></div>
            <div><a href="#"><img src="assets/choc.jpg" width="150" alt=""><p>CHOCOLATE</p></a></div>
            <div><a href="#"><img src="assets/cold.jpg" width="150" alt=""><p>COLD </p></a></div>
            <div><a href="#"><img src="assets/frappu.jpg" width="150" alt=""><p>FRAPPUCINO</p></a></div>
        </div>
    </section>

    <!-- price-1 -->
    <section class="price-1">
        <div class="container">
            <h3>MEEST VERKOCHT</h3>
            <p class="lead"></p>
            <div class="row plans">
                @foreach($products as $product)
                <div class="span4 plan">
                    <div class="title">{{ strtoupper($product->name) }}</div>
                    <div class="image"><img src="{{ ("images/$product->image") }}"></div>
                    <div class="price">€{{ $product->price }}</div>
                    <div class="description">{{ $product->description }}</div>
                    <a class="btn btn-primary" href="/addProduct/{{$product->id}}">Toevoegen aan winkelmandje</a>
                </div>
                @endforeach
        </div>
    </section>

    <!-- footer-2 -->
    <footer class="footer-2 bg-starbucks">
        <div class="container">
            &copy; The Coffee Project
        </div>
    </footer>
@endsection


