@extends('layouts.app')

<!-- Als de gebruiker Admin is -->
@if(Auth::user()->admin)
@section('content')

    <!-- logos -->
    <section class="logos">
        <div class="container">
            <div><a href="#"><img src="assets/koffie.jpg" width="150" alt=""><p>COFFEE</p></a></div>
            <div><a href="#"><img src="assets/espresso.jpg" width="150" alt=""><p>ESPRESSO</p></a></div>
            <div><a href="#"><img src="assets/choc.jpg" width="150" alt=""><p>CHOCOLATE</p></a></div>
            <div><a href="#"><img src="assets/cold.jpg" width="150" alt=""><p>COLD </p></a></div>
            <div><a href="#"><img src="assets/frappu.jpg" width="150" alt=""><p>FRAPPUCINO</p></a></div>
        </div>
    </section>

    <!-- price-1 -->
    <section class="price-1">
        <div class="container">
            <h3>FAVOURITE PRODUCTS</h3>
            <p class="lead"></p>
            <div class="row plans">
                <div class="span4 plan">
                    <div class="title">DARK ROAST</div>
                    <div class="image"><img src="assets/koffie.jpg"></div>
                    <div class="price">€1,90</div>
                    <div class="description">Koffiebeschrijving komt hier. Koffiebeschrijving komt hier. Koffiebeschrijving komt hier. Koffiebeschrijving komt hier.</div>
                    <a class="btn btn-primary" href="#">Add to cart</a>
                </div>
                <div class="span4 plan">
                    <div class="title">ESPRESSO</div>
                    <div class="image"><img src="assets/espresso.jpg"></div>
                    <div class="price">€1,90</div>
                    <div class="description">Koffiebeschrijving komt hier. Koffiebeschrijving komt hier. Koffiebeschrijving komt hier. Koffiebeschrijving komt hier.</div>
                    <a class="btn btn-primary" href="#">Add to cart</a>
                </div>
                <div class="span4 plan">
                    <div class="title">FRAPPUCINO</div>
                    <div class="image"><img src="assets/frappu.jpg"></div>
                    <div class="price">€1,90</div>
                    <div class="description">Koffiebeschrijving komt hier. Koffiebeschrijving komt hier. Koffiebeschrijving komt hier. Koffiebeschrijving komt hier.</div>
                    <a class="btn btn-primary" href="#">Add to cart</a>
                </div>
            </div>
        </div>
    </section>

    <!-- footer-2 -->
    <!--
  IMPORTANT: To Include this File

   Click 'Menu' button at the top and select 'Copy Link'
-->

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Bestellingen</div>
                    <div class="panel-body">
                        <i>Hier een lijst met bestellingen.</i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-2 bg-starbucks">
        <div class="container">
            &copy; The Coffee Project
        </div>
    </footer>
@endsection

@else
    @section('content')
        <section class="logos">
            <div class="container">
                <div><a href="#"><img src="assets/koffie.jpg" width="150" alt=""><p>COFFEE</p></a></div>
                <div><a href="#"><img src="assets/espresso.jpg" width="150" alt=""><p>ESPRESSO</p></a></div>
                <div><a href="#"><img src="assets/choc.jpg" width="150" alt=""><p>CHOCOLATE</p></a></div>
                <div><a href="#"><img src="assets/cold.jpg" width="150" alt=""><p>COLD </p></a></div>
                <div><a href="#"><img src="assets/frappu.jpg" width="150" alt=""><p>FRAPPUCINO</p></a></div>
            </div>
        </section>

        <!-- price-1 -->
        <section class="price-1">
            <div class="container">
                <h3>FAVOURITE PRODUCTS</h3>
                <p class="lead"></p>
                <div class="row plans">
                    <div class="span4 plan">
                        <div class="title">DARK ROAST</div>
                        <div class="image"><img src="assets/koffie.jpg"></div>
                        <div class="price">€1,90</div>
                        <div class="description">Koffiebeschrijving komt hier. Koffiebeschrijving komt hier. Koffiebeschrijving komt hier. Koffiebeschrijving komt hier.</div>
                        <a class="btn btn-primary" href="#">Add to cart</a>
                    </div>
                    <div class="span4 plan">
                        <div class="title">ESPRESSO</div>
                        <div class="image"><img src="assets/espresso.jpg"></div>
                        <div class="price">€1,90</div>
                        <div class="description">Koffiebeschrijving komt hier. Koffiebeschrijving komt hier. Koffiebeschrijving komt hier. Koffiebeschrijving komt hier.</div>
                        <a class="btn btn-primary" href="#">Add to cart</a>
                    </div>
                    <div class="span4 plan">
                        <div class="title">FRAPPUCINO</div>
                        <div class="image"><img src="assets/frappu.jpg"></div>
                        <div class="price">€1,90</div>
                        <div class="description">Koffiebeschrijving komt hier. Koffiebeschrijving komt hier. Koffiebeschrijving komt hier. Koffiebeschrijving komt hier.</div>
                        <a class="btn btn-primary" href="#">Add to cart</a>
                    </div>
                </div>
            </div>
        </section>

@endif


