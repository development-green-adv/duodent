@extends("layout/master")

@section("title", "Duodent | Home page")

@section("content")

    @include("inc/header")


    <div class="container-fluid main_slider_section">
        <div class="row">
            <div class="col-12" style="padding-left: 0px; padding-right: 0px;">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 slider_item">
                                        <p>DUODENT CENTAR</p>
                                        <h1><span class="slider_rose_text">NAJSAVREMENIJI</span><br> STOMATOLOŠKI<br> CENTAR</h1>
                                    </div>
                                </div>
                            </div>
                            <img class="d-block w-100" src="{{ asset('images/web/orinacija1.png') }}">
                        </div>
    
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 slider_item">
                                        <p>DUODENT CENTAR</p>
                                        <h1><span class="slider_rose_text">NAJSAVREMENIJI</span><br> STOMATOLOŠKI<br> CENTAR</h1>
                                    </div>
                                </div>
                            </div>
                            <img class="d-block w-100" src="{{ asset('images/web/orinacija1.png') }}">
                        </div>
                    </div>
                </div>
                <img class="img-fluid blue_shape" src="{{ asset('images/web/blue.png') }}">
            </div>
        </div>
    </div> 


    <div class="container offers_section">
        <div class="row">

            <div class="col-12 col-md-4 offers_item">
                <div class="offer_padding">
                    <img class="img-fluid" src="{{ asset('images/web/spec.png') }}">
                    <h3>SPECIJALNE PONUDE</h3>
                    <p>
                        DuoDent Centar pokriva različite grane stomatologije što uključuje implantologiju, 
                        oralnu hirurgiju, protetiku (zubne ljuskice, zubne krunice i zubne mostove), 
                        parodontologiju i opštu stomatologiju. 
                    </p>
                    <a href="#">POGLEDAJ SVE</a>
                </div>
            </div>
            <div class="col-12 col-md-4 offers_item">
                <div class="offer_padding">
                    <img class="img-fluid" src="{{ asset('images/web/spec.png') }}">
                    <h3>IMPLANTOLOGIJA</h3>
                    <p>
                        DuoDent Centar pokriva različite grane stomatologije što uključuje implantologiju, 
                        oralnu hirurgiju, protetiku (zubne ljuskice, zubne krunice i zubne mostove), 
                        parodontologiju i opštu stomatologiju. 
                    </p>
                    <a href="#">POGLEDAJ SVE</a>
                </div>
            </div>
            <div class="col-12 col-md-4 offers_item">
                <div class="offer_padding">
                    <img class="img-fluid" src="{{ asset('images/web/spec.png') }}">
                    <h3>DENTALNI TURIZAM</h3>
                    <p>
                        DuoDent Centar pokriva različite grane stomatologije što uključuje implantologiju, 
                        oralnu hirurgiju, protetiku (zubne ljuskice, zubne krunice i zubne mostove), 
                        parodontologiju i opštu stomatologiju. 
                    </p>
                    <a href="#">POGLEDAJ SVE</a>
                </div>
            </div>

        </div>
    </div>


    <div class="container-fluid termin_section">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <h3>TOP PONUDE U NAŠOJ ORDINACIJI ZA MJESEC DECEMBAR</h3>
                        <p>
                            Garantujemo najbolji odnos cene i lvaliteta u jugoistočnoj Evropi
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection 