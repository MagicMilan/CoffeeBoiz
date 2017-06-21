@extends('layouts.app')

@section('content')
    <div class="container">
        <section class="price-1" style="padding-top: 40px">
            <h3>GEBRUIKERS</h3>
            <p>Aantal gebruikers: {{ $users->total() }}</p>


            {{ $users->links() }}


            <form class="form-horizontal pull-right" role="form" method="POST">
                {{ csrf_field() }}
                <input type="text" name="search" id="search" placeholder="Zoeken">
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

                        <th>Aantal bestellingen</th>
                    </tr>
                    </thead>
                @else
                    Geen klanten
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
                    </tr>
                @endforeach
            </table>

            <div>
                {{ $users->links() }}
            </div>
        </section>
    </div>
@endsection