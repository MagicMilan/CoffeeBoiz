@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <form method="POST" action="/products" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <h2>Product toevoegen</h2>

                    <label for="name">Product naam</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="description">Omschrijving</label>
                    <textarea name="description" class="form-control" id="description"
                              rows="10"></textarea>
                </div>

                <div class="form-group">
                    <label for="price">Prijs</label>
                    <input type="number" name="price" id="price"/>
                </div>

                <div class="form-group">
                    <label for="image">Afbeelding</label>
                    <input type="file" name="image" id="image">
                    <input type="submit" value="Opslaan">
                </div>
            </form>
        </div>
    </div>
@endsection