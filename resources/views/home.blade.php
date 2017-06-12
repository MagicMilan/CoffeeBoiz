@extends('layouts.app')

<!-- Als de gebruiker Admin is -->
@if(Auth::user()->admin)
@section('content')
    <!-- Script dat de pagina iedere X aantal seconden ververst -->
    <script type="text/javascript">
        setTimeout(function(){
            window.location.reload();
        }, 10000);
    </script>


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h4>Welkom {{ Auth::user()->name }}</h4>
                        Je bent ingelogd met <strong>{{ Auth::user()->email }}</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Bestellingen</div>
                    <div class="panel-body">
                        <i>Hier een lijst met bestellingen.</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@else
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h4>Welkom {{ Auth::user()->name }}</h4>
                        Je bent ingelogd met <strong>{{ Auth::user()->email }}</strong>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Producten</div>
                    <div class="panel-body">
                        <i>Hier een lijst met producten</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@endif


