@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Producten</div>
                    <div class="panel-body">
                        <div class="list-group">
                            @forelse($products as $product)
                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h4 class="mb-1"><strong>{{ $product->name }}</strong></h4>

                                        <small class="text-muted pull-right"><strong>{{ $product->price }} euro</strong></small>
                                    </div>

                                    <img width="40px" height="40px" src="{{ asset("images/$product->image") }}" alt="Productfoto">

                                    <p class="mb-1">{{ $product->description }}</p>

                                    <small class="text-muted">Laatst gewijzigd: {{ $product->updated_at }}</small>
                                </a>
                            @empty
                                Er zijn geen producten beschikbaar
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection