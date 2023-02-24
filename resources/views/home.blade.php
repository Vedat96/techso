@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0"> -->
<!--             @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div><img src="{{asset('images/banner3.jpg')}}" style="width:100%;"></div>

            <!-- text als wij repareren cv bla bla en mooie banner -->

            <div class="container" id="container">

            <div class="banner">
                    

                <div class="row" id="row1">
                    <div class="col-sm" >
                        <div> <img src="{{asset('images/CV-service.jpg')}}" style="width:100%;"></div>
                    </div>
                    <div class="col-sm" style="padding-top: 15px;">
                    <h2>De service van Tech solution</h2>
                        <h6>
                        <div id="servicelist">
                        <ul class="list-group list-group-flush">
                            <a href="#section1"><li class="list-group-item list-group-item-action"> Cv ketel instalatie. onderhoud en storing</li></a>
                            <a href="#section2"><li class="list-group-item list-group-item-action">Kachel, geiser en boiler installatie, onderhoud en storing</li></a>
                            <a href="#section3"><li class="list-group-item list-group-item-action">Sanitair(kranen leidingen)</li></a>
                            <a href="#section4"><li class="list-group-item list-group-item-action">Leggen van waterleidingen</li></a>
                            <a href="#section5"><li class="list-group-item list-group-item-action">Leggen van gasleidingen</li></a>
                            <a href="#section6"><li class="list-group-item list-group-item-action">Leggen van afvoer</li></a>
                            <a href="#section7"><li class="list-group-item list-group-item-action">Bouwwerkzaamheden</li></a>
                        </div>
                    </h6>
                    </div>
                </div>
                    <!-- CV onderhoud nodig? -->
                    <!-- KvK nummer - 56402538 -->
            </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="row2">

                    <div class="card" id="section1" style="width: 30rem;">
                        <img class="card-img-top" src="{{asset('images/cv ketel.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">CV ketel</h5>
                            <p class="card-text">Wij installeren veilig CV ketels. Regelmatige onderhoud voor uw CV ketel voorkomt storingen. Daar zijn wij in gespecialeerd. </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Installatie</li>
                            <li class="list-group-item">Onderhoud</li>
                            <li class="list-group-item">Storingen</li>
                        </ul>
        <!--                 <div class="card-body">
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div> -->
                    </div>

                    <div class="card" id="section2" style="width: 25rem;">
                        <img class="card-img-top" src="{{asset('images/cv ketel.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Kachel, geiser en boiler</h5>
                            <p class="card-text">Wilt u kakchels, geisers of boilers installeren? Is het tijd voor een onderhoud of heeft u storingen? Maak nu een afspraak! </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Installatie</li>
                            <li class="list-group-item">Onderhoud</li>
                            <li class="list-group-item">Storingen</li>
                        </ul>
        <!--                 <div class="card-body">
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div> -->
                    </div> 

                    <div class="card" id="section3" style="width: 20rem;">
                        <img class="card-img-top" src="{{asset('images/cv ketel.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Sanitair</h5>
                            <p class="card-text">Alle soorten instalaties voor badkamers en wc's</p>
                        </div>

        <!--                 <div class="card-body">
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div> -->
                    </div>

                    <div class="card" id="section4" style="width: 25rem;">
                        <img class="card-img-top" src="{{asset('images/cv ketel.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Leggen van waterleidingen</h5>
                            <p class="card-text">U wilt vast geen lekkende waterleiding op lange termijn. Wij zorgen voor een gegarandeerd resultaat met de loodgieter.</p>
                        </div>

        <!--                 <div class="card-body">
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div> -->
                    </div>

                    <div class="card" id="section5" style="width: 25rem;">
                        <img class="card-img-top" src="{{asset('images/cv ketel.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Leggen van gasleidingen</h5>
                            <p class="card-text">Het ontstaan van gaslekkage kan erg gevaarlijk zijn. Het is belangrijk om op de juiste manier wordt opgelost.</p>
                        </div>

        <!--                 <div class="card-body">
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div> -->
                    </div>

                    <div class="card" id="section6" style="width: 25rem;">
                        <img class="card-img-top" src="{{asset('images/cv ketel.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Leggen van afvoer</h5>
                            <p class="card-text">Last van verstopping of geurtjes? Laten we dat zo snel mogelijk oplossen.</p>
                        </div>

        <!--                 <div class="card-body">
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div> -->
                    </div>

                    <div class="card" id="section7" style="width: 80rem;">
                        <img class="card-img-top" src="{{asset('images/cv ketel.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Bouwwerkzaamheden</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>

        <!--                 <div class="card-body">
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div> -->
                    </div>
                    <p>
        <!--             <div class="col">
                        <div class="card shadow-sm">
                            <img class="card-img-top" src="images/cv ketel.jpg" alt="Card image cap">
                            <div class="card-header">CV KETEL</div>
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                          <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                          <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                         </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm text-white bg-dark">
                            <img class="card-img-top" src="images/cv ketel.jpg" alt="Card image cap">
                            <div class="card-header">CV KETEL</div>
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                          <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                          <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                         </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="card-img-top" src="images/cv ketel.jpg" alt="Card image cap">
                            <div class="card-header">CV KETEL</div>
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                          <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                          <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                         </div>
                    </div> -->

                </div>


                <!-- <h2>Portofolio</h2> -->
            <div class="portofolio">
                <img src="images/intergas.png" id="portofolio"> 
                <!-- <img src="images/Nefit-logo.png" id="portofolio"> -->
                <img src="images/nefit.png" id="portofolio">
                <img src="images/remeha2.png" id="portofolio">
                <!-- <img src="images/remeha-logo.png" id="portofolio"> -->
                <img src="images/valliant-logo.png" id="portofolio">
            </div>

             <!-- <h2>Reviews</h2> -->
            <div class="reviews">
                <div class="w3-content w3-section" style="max-width:1000px;">
                    <img class="mySlides" src="{{asset('images/reviews/review1.png')}}" style="width:100%">
                    <img class="mySlides" src="{{asset('images/reviews/review2.png')}}" style="width:100%">
                    <img class="mySlides" src="{{asset('images/reviews/review3.png')}}" style="width:100%">
                    <img class="mySlides" src="{{asset('images/reviews/review4.png')}}" style="width:100%">
                    <img class="mySlides" src="{{asset('images/reviews/review5.png')}}" style="width:100%">
                </div>
            </div>
            <p>--Nieuwe reviews?</p>
            <!-- <script src="script.js"></script> -->
            <script src="{{ asset('js/script.js') }}"> </script>

            <h2>Certificaten</h2>

            vca enz?

        </div>
    </div>
@endsection