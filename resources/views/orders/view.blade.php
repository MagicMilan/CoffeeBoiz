@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h3>Order: #{{$order->id}}</h3>
            <p>Geplaatst op: {{$order->created_at}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th class="col-sm-2">Productnummer</th>
                    <th class="col-sm-4">Productnaam</th>
                    <th class="col-sm-2">Price</th>
                </tr>
                </thead>
                @foreach($order->orderItems as $item)
                    <tr>
                        <td>#{{ $item->product->id }}</td>
                        <td><a href="/products/{{$item->product_id}}"> {{$item->product->name}}</a></td>
                        <td>€ {{number_format($item->product->price,2,',','')}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection