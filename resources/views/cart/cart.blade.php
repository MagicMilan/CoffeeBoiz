@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Product</th>
                    <th></th>
                    <th class="text-center"></th>
                    <th class="text-center">Totaal</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                    <tr>
                        <td class="col-sm-8 col-md-6">
                            <div class="media">
                                <a class="thumbnail pull-left" href="#"> <img class="media-object"
                                                                              src="images/{{$item->product->image}}"
                                                                              style="width: 100px; height: 72px;"> </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a style="text-decoration: none;"
                                                                 href="#">{{$item->product->name}}</a></h4>
                                </div>
                            </div>
                        </td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>€ {{$item->product->price}}</strong></td>
                        <td class="col-sm-1 col-md-1">
                            <a href="/removeItem/{{$item->id}}">
                                <button type="button" class="btn btn-danger">
                                    <span class="fa fa-remove"></span> Wissen
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><h3>Totaal</h3></td>
                    <td class="text-right"><h3><strong>€ {{ $total }}</strong></h3></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="/products" class="btn btn-default">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Doorgaan met winkelen
                        </a></td>
                    <td>
                        <form method="post" action="/checkout">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="put">
                            <input type="hidden" value="PUT">
                            <button type="submit" href="/checkout" class="btn btn-success">
                                Bestellen <i class="fa fa-play" aria-hidden="true"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection