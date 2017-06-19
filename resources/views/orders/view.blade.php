@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h3>Ordernummer: #{{$order->id}}</h3>
            <p>Bestelling geplaatst op: {{$order->created_at}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th class="col-sm-2">Productnummer</th>
                    <th class="col-sm-2">Product</th>
                    <th class="col-sm-12">Prijs</th>
                </tr>
                </thead>
                @foreach($order->orderItems as $item)
                    <tr>
                        <td>
                            <a href="/products/{{$item->product_id}}">
                                #{{ $item->product->id }}
                            </a>
                        </td>
                        <td>
                            <a href="/products/{{$item->product_id}}"> {{ $item->product->name }}</a>
                        </td>
                        <td>€ {{number_format($item->product->price,2,',','')}}</td>
                    </tr>
                @endforeach
                <tr>
                    <td></td>
                    <td><h4>Totaal</h4></td>
                    <td class="text-right"><h4><strong>€ {{ number_format($order->total_pricel,2,',','') }}</strong></h4></td>
                </tr>
            </table>
        </div>
    </div>
@endsection