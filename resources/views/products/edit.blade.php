@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form method="POST" action="/products/{{ $product->id }}" enctype='multipart/form-data'>
                    {{ csrf_field() }}

                    <div class="form-group">
                        <h2>Product toevoegen</h2>

                        <input type="hidden" name="_method" value="put">
                        <label for="name">Product naam</label>
                        <input type="text" name="name" id="name" value="{{ $product->name }}" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="description">Omschrijving</label>
                        <textarea name="description" class="form-control" id="description" required
                                  rows="10">{{ $product->description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="category">Categorie</label>
                        <select name="category_id" id="category">
                            <option value="{{ $product->category->id }}">{{ $product->category->name }}</option>
                            @forelse($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @empty
                                <option disabled="disabled">Geen categoriën</option>
                            @endforelse
                        </select>
                        <br />
                        <a href="/categories/create">Categorie toevoegen</a>
                    </div>

                    <div class="form-group">
                        <label for="price">Prijs</label>
                        <input type="number" step="any" min="1" name="price" id="price" value="{{ number_format($product->price, 2, '.', '') }}"
                               required>
                    </div>

                    <div class="form-group">
                        <label for="image">Afbeelding</label>
                        <input type="file" name="image" id="image" required>
                    </div>
                    <div class="form-group">
                        <a href="/products" class="btn btn-default" title="Wijzigingen annuleren">
                            Annuleren
                        </a>
                        <input type="submit" value="Opslaan" class="btn btn-success" title="Wijzigingen opslaan">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection