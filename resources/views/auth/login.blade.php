@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div style="max-width: 25em; margin: 0 auto" class="col-md-8 col-md-offset-2">

                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">

                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <h2>Inloggen</h2>
                        <label for="email" class="col-md-4 control-label">E-mailadres</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                                   required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Wachtwoord</label>

                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password" id="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <a href="{{ route('password.request') }}">
                            Wachtwoord vergeten?
                        </a>
                    </div>


                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    Onthoud mij
                                </label>
                            </div>
                            <button type="submit" class="btn btn-login">
                                <b>Inloggen</b>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
