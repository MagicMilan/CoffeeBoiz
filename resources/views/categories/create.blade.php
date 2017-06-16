@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form method="POST" action="/categories" enctype='multipart/form-data'>
                    {{ csrf_field() }}

                    <div class="form-group">
                        <h2>Categorie toevoegen</h2>

                        <label for="name">Categorie naam</label>
                        <input type="text" name="name" id="name">
                    </div>

                    <div class="form-group">
                        <label for="image">Afbeelding</label>
                        <input type="file" name="image" id="image">
                        <input type="submit" value="Opslaan" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection