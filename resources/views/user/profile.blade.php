@extends('layouts.app')
<link href="{{ asset('css/profile.css') }}" rel="stylesheet">

@section('content')
    <div class="panel panel-info">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3 col-lg-3" align="center">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-9 col-lg-9">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h1 class="panel-title">{{ $user->name }}</h1>
                        <table class="table table-user-information">
                            <tbody>
                            <tr>
                                <td>Naam:</td>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <td>Geboortedatum:</td>
                                <td>{{ $user->dob->format('j - n - Y') }} ({{ $user->dob->age }} jaar oud)</td>
                            </tr>
                            <tr>
                                <td>Adres:</td>
                                <td>{{ $user->address }}</td>
                            </tr>
                            <tr>
                                <td>Postcode:</td>
                                <td>{{ $user->zip }}</td>
                            </tr>
                            <tr>
                                <td>Woonplaats:</td>
                                <td>{{ $user->place }}</td>
                            </tr>
                            <tr>
                                <td>Telefoonnummer:</td>
                                <td>{{ $user->phone_nr }}</td>
                            </tr>
                            <tr>
                                <td>Lid sinds:</td>
                                <td>{{ $user->created_at->format('j - n - Y') }} ({{ $user->created_at->diffInDays() }}
                                    dagen)
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-9 col-lg-9">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h1 class="panel-title">Bestellingen</h1>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="col-sm-2">#</th>
                                <th class="col-sm-4">Datum</th>
                                <th class="col-sm-2">Prijs</th>
                                <th class="col-sm-2"></th>
                            </tr>
                            </thead>
                            @forelse($orders as $order)
                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td><a href="/order/{{$order->id}}"> {{$order->created_at}}</a></td>
                                    <td>€ {{ number_format($order->total_price, 2, ',', '') }}</td>
                                    <td><a href="/order/{{$order->id}}"><i class="fa fa-search-plus"></i></a></td>
                                </tr>
                            @empty
                                <p>Geen bestellingen</p>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection