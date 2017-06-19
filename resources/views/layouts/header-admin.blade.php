<div class="navbar span12">
    <div class="navbar-inner">
        <button type="button" class="btn btn-navbar"></button>
        <a style="text-decoration: none"  class="brand" href="{{ url('/') }}">
            <img src="{{ asset ('assets/logo.PNG')}}" width="50" height="50" alt="">
            The Coffee Project
            <div></div>
        </a>
        <div class="nav-collapse collapse pull-right">
            <ul class="nav">
                <li class="active"><a href="{{ url('/') }}"><b>HOME</b></a></li>
                <li><a href="#"><b>BESTELLINGEN</b></a></li>
                <li><a href="{{ url('/products') }}"><b>PRODUCTEN</b></a></li>
                <li><a class="fa fa-shopping-cart" style="font-size: 1.2em" href="{{ url('/cart') }}"></a></li>
            </ul>
            <form class="navbar-form pull-left">
                <a class="btn btn-primary" href="{{ url('/profile') }}">{{ Auth::user()->name }}</a>
                <a class="btn btn-login" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">Uitloggen</a>
            </form>
            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                  style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>

