@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Bestellingen</h1>
            <a href="/orders/send" class="btn">Afgeleverd</a> <a href="/orders/not_send" class="btn">Niet afgeleverd</a>
            <table class="table table-striped">
                @if($orders->count() > 0)
                    <thead>
                    <tr>
                        <th class="col-sm-2">Ordernummer</th>
                        <th class="col-sm-2">Klantnummer</th>
                        <th class="col-sm-2">Producten</th>
                        <th class="col-sm-4">Geplaatst op</th>
                        <th class="col-sm-2">Prijs</th>
                        <th class="col-sm-2">Status</th>
                    </tr>
                    </thead>
                @else
                    <p>Geen bestellingen</p>
                @endif
                @foreach($orders->sortByDesc('created_at') as $order)
                    <tr>
                        <td>
                            <a href="/order/{{$order->id}}">#{{$order->id}} <i class="fa fa-search-plus"></i>
                            </a>
                        </td>
                        <td>
                            <a href="/profile/{{ $order->user_id }}">
                                #{{ $order->user_id }} <i class="fa fa-search-plus"></i>
                            </a>
                        </td>
                        <td>
                            <ul>
                                @foreach($order->OrderItems as $item)
                                    <li>
                                        {{ $item->product->name }}
                                    </li>
                                @endforeach
                            </ul>

                        </td>
                        <td>{{$order->created_at->format('j-n-Y G:i')}}</td>
                        <td>€ {{ number_format($order->total_price, 2, ',', '') }}</td>

                        <td>
                            <form method="post" action="/order/{{ $order->id }}/send">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="put">

                                <button type="submit" class="btn btn-success"
                                        style="width: 3em">
                                    <i class="fa fa-check"></i>
                                </button>
                            </form>
                            <form method="post" action="/order/{{ $order->id }}/not_send">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="put">

                                <button type="submit" class="btn btn-danger" style="width: 3em">
                                    <i class="fa fa-times"></i>
                                </button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection