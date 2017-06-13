@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1>{{ $user->name }}</h1>
                    <table class="table">
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
                            <td>{{ $user->dob->format('j F Y') }} ({{ $user->dob->age }} jaar oud)</td>
                        </tr>
                        <tr>
                            <td>Adres:</td>
                            <td>{{ $user->address }}</td>
                        </tr>
                        <tr>
                            <td>Telefoonnummer:</td>
                            <td>{{ $user->phone_nr }}</td>
                        </tr>
                        <tr>
                            <td>Lid sinds:</td>
                            <td>{{ $user->created_at->format('j - n - Y') }} ({{ $user->created_at->diffInDays() }} dagen)</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection