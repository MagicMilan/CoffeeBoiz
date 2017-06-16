@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <!-- Email -->
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <h2>Registreren</h2>
                        <label for="email" class="col-md-4 control-label">E-mailadres</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email"
                                   value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <!-- Wachtwoord -->
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Wachtwoord</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>


                        <!-- Wachtwoord herhalen -->
                        <label for="password-confirm" class="col-md-4 control-label">Wachtwoord herhalen</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control"
                                   name="password_confirmation" required>
                        </div>
                    </div>

                    <!-- Naam -->
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Naam</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name"
                                   value="{{ old('name') }}" required autofocus maxlength="40">

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <!-- Geboortedatum -->
                        <label for="dob" class="col-md-4 control-label">Geboortedatum</label>
                        <div class="col-md-6">
                            <input id="dob" type="date" class="form-control" name="dob"
                                   value="{{ old('dob') }}"
                                   required autofocus>

                            @if ($errors->has('dob'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                            @endif
                        </div>


                        <!-- Adres -->
                        <label for="address" class="col-md-4 control-label">Adres</label>

                        <div class="col-md-6">
                            <input id="address" type="text" class="form-control" name="address"
                                   value="{{ old('address') }}" required autofocus>

                            @if ($errors->has('address'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <!-- Woonplaats -->
                        <label for="place" class="col-md-4 control-label">Woonplaats</label>

                        <div class="col-md-6">
                            <input id="place" type="text" class="form-control" name="place"
                                   value="{{ old('place') }}" required autofocus>

                            @if ($errors->has('place'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('place') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <!-- Woonplaats -->
                        <label for="zip" class="col-md-4 control-label">Postcode</label>

                        <div class="col-md-6">
                            <input id="zip" type="text" class="form-control" name="zip"
                                   value="{{ old('place') }}" required autofocus>

                            @if ($errors->has('zip'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('zip') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <!-- Telefoonnummer -->
                        <label for="phone_nr" class="col-md-4 control-label">Telefoonnummer</label>

                        <div class="col-md-6">
                            <input id="phone_nr" type="text" class="form-control" name="phone_nr"
                                   value="{{ old('phone_nr') }}" required autofocus>

                            @if ($errors->has('phone_nr'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('phone_nr') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Registreren
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
