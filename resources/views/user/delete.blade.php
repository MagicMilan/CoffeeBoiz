@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form method="POST" action="/users/{{ $user->id }}" enctype='multipart/form-data'>
                    {{ csrf_field() }}

                    <div class="form-group">
                        <h2>Gebruiker verwijderen</h2>
                        <p>Weet je zeker dat je <strong><a href="/profile/{{ $user->id }}">#{{ $user->id }} {{ $user->name }} </a></strong> wilt verwijderen?</p>
                        <input type="hidden" name="_method" value="delete">


                        <a class="btn btn-default" href="/users">Annuleren</a>
                        <input type="submit" value="Verwijderen" class="btn btn-danger">
                    </div>
                </form>
            </div>
        </div>


        <div class="row">
            <div class="col-md-9 col-lg-9">
                <div class="panel panel-default">
                    <div class="panel-body">
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
    </div>

@endsection