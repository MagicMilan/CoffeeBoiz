@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form method="POST" action="/products/{{ $product->id }}" enctype='multipart/form-data'>
                    {{ csrf_field() }}

                    <div class="form-group">
                        <h2>Product verwijderen</h2>
                        <p>Weet je zeker dat je het product <strong>{{ $product->name }}</strong> wilt verwijderen?</p>
                        <input type="hidden" name="_method" value="delete">


                        <a class="btn btn-default" href="/products">Annuleren</a>
                        <input type="submit" value="Verwijderen" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection