@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create article
                </div>

                <div class="panel-body">
                    <form method="POST" action="/">
                        {{ csrf_field() }}
                        <div class="form-group">

                            <label for="name">Product naam</label>
                            <input type="text" name="name" id="name">

                        </div>
                        <div class="form-group">
                            <label for="discription">Omschrijving</label>
                            <textarea name="discription" class="form-control" id="discription" rows="10"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="prijs">Prijs</label>
                            <input type="number" min="1" step="any" name="prijs" id="prijs"/>
                        </div>

                        <div class="form-group">
                            <label for="image">Afbeelding</label>
                            <input type="file" name="image" id="image">
                        </div>

                        <input type="submit" class="btn btn-success pull-right" value="Opslaan">
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection