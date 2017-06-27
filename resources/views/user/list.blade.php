@extends('layouts.app')

@section('content')
    <div class="container">
        <section class="price-1" style="padding-top: 40px">
            <h3>GEBRUIKERS</h3>
            <p>Aantal gebruikers: {{ $users->total() }}</p>


            {{ $users->links() }}


            <form class="form-horizontal pull-right" method="GET" action="/users/search">
                <input type="text" name="value" placeholder="Zoeken" title="Zoeken naar gebruikers">
            </form>


            <table class="table table-striped">
                @if($users->count() > 0)
                    <thead>
                    <tr>
                        <th class="col-sm-2">
                            Klantnummer
                            <a href="/users">
                                <i class="fa fa-arrow-up" aria-hidden="true"></i>
                            </a>
                            <a href="/users_desc">
                                <i class="fa fa-arrow-down" aria-hidden="true"></i>
                            </a>
                        </th>

                        <th class="col-sm-2">
                            Naam
                            <a href="/users/sort_name">
                                <i class="fa fa-arrow-up" aria-hidden="true"></i>
                            </a>
                            <a href="/users/sort_name_desc">
                                <i class="fa fa-arrow-down" aria-hidden="true"></i>
                            </a>
                        </th>

                        <th class="col-sm-4">
                            Lid sinds
                            <a href="/users/sort_created_at">
                                <i class="fa fa-arrow-up" aria-hidden="true"></i>
                            </a>
                            <a href="/users/sort_created_at_desc">
                                <i class="fa fa-arrow-down" aria-hidden="true"></i>
                            </a>
                        </th>

                        <th class="col-sm-4">
                            Type gebruiker
                            <a href="/users/sort_type">
                                <i class="fa fa-arrow-up" aria-hidden="true"></i>
                            </a>
                            <a href="/users/sort_type_desc">
                                <i class="fa fa-arrow-down" aria-hidden="true"></i>
                            </a>
                        </th>

                        <th class="col-sm-4">Aantal bestellingen</th>
                    </tr>
                    </thead>
                @else
                    Geen gebruikers
                @endif

                @foreach($users as $user)
                    <tr>
                        <td>
                            <a href="/profile/{{ $user->id }}">
                                #{{ $user->id }} <i class="fa fa-search-plus"></i>
                            </a>
                        </td>
                        <td>
                            <a href="/profile/{{ $user->id }}">
                                {{ $user->name }}
                            </a>
                        </td>

                        <td>
                            {{ $user->created_at->format('j-n-Y G:i') }} ({{ $user->created_at->diffInDays() }}
                            @if($user->created_at->diffInDays() > 1)
                                dagen)
                            @else
                                dag)
                            @endif
                        </td>
                        <td>
                            @if($user->admin)
                                Personeel
                            @else
                                Klant
                            @endif
                        </td>
                        <td>
                            {{ $orders->where('user_id', $user->id)->count() }}
                        </td>
                        <td>
                            <a href="/users/{{ $user->id }}/edit">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <a href="/users/{{ $user->id }}/delete">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>

            <div>
                {{ $users->links() }}
            </div>
        </section>
    </div>
@endsection