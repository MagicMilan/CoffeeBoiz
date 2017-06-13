<div class="navbar span12">
    <div class="navbar-inner">
        <button type="button" class="btn btn-navbar"> </button>
        <a class="brand" href="#"><img src="{{ asset ('assets/logo.PNG')}}" width="50" height="50" alt="">The Coffee Project<div><br></div></a>
        <div class="nav-collapse collapse pull-right">
            <ul class="nav">
                <li class="active"><a href="#"><b>HOME</b></a></li>
                <li><a href="#"><b>PRODUCTEN</b></a></li>
            </ul>
            <form class="navbar-form pull-left">
                <a class="btn btn-primary" href="{{ route('login') }}">{{ Auth::user()->name }}</a>
                <a class="btn btn-login" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">LOG OUT</a>
            </form>
            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                  style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>

