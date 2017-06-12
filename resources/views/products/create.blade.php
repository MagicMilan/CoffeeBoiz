@extends('layouts.app')



@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <h4><b>Product toevoegen</b></h4>
                </div>

                <div class="panel-body">
                    <form method="POST" action="/products">
                        {{ csrf_field() }}

                        {{--<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">--}}

                        <div class="form-group">

                            <label for="name">Product naam</label>
                            <input type="text" name="name" id="name">

                        </div>
                        <div class="form-group">
                            <label for="description">Omschrijving</label>
                            <textarea name="description" class="form-control" id="description" rows="10"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="price">Prijs</label>
                            <input type="number" min="1" step="any" name="price" id="price"/>
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