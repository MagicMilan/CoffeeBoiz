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
                        <h1 class="panel-title">Profiel aanpassen</h1>
                        <form method="POST" action="/user/{{ $user->id }}" enctype='multipart/form-data'>
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="put">
                            <table class="table table-user-information">

                                <tbody>
                                <tr>
                                    <td><label for="name">Naam:</label></td>
                                    <td><input type="text" name="name" id="name" value="{{ $user->name }}" required></td>
                                </tr>
                                <tr>
                                    <td><label for="email">Email</label></td>
                                    <td><input type="email" name="email" id="email" value="{{ $user->email }}" required></td>
                                </tr>
                                <tr>
                                    <td><label for="dob">Geboortedatum:</label></td>
                                    <td><input type="date" name="dob" id="dob" value="{{ $user->dob }}" required></td>
                                </tr>
                                <tr>
                                    <td><label for="address">Adres:</label></td>
                                    <td><input type="text" name="address" id="address" value="{{ $user->address }}" required></td>
                                </tr>
                                <tr>
                                    <td><label for="zip">Postcode:</label></td>
                                    <td><input type="text" name="zip" id="zip" value="{{ $user->zip }}" required></td>
                                </tr>
                                <tr>
                                    <td><label for="place">Woonplaats:</label></td>
                                    <td><input type="text" name="place" id="place" value="{{ $user->place }}" required></td>
                                </tr>
                                <tr>
                                    <td><label for="phone_nr">Telefoonnummer:</label></td>
                                    <td><input type="text" name="dob" id="phone_nr" value="{{ $user->phone_nr }}" required></td>
                                </tr>
                                <tr>
                                    <td>Lid sinds:</td>
                                    <td>{{ $user->created_at->format('j - n - Y') }}
                                        ({{ $user->created_at->diffInDays() }}
                                        dagen)
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection