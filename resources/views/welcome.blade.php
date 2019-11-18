@extends("layout/master")

@section("title", "Duodent | Početna")

@section('style')

    <style>
        
        #naslovna{
            background-color: #f498c0;
            color: #fff;
        }
        
    </style>

@endsection

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
                        </p><br>


                        <div class="row ponuda_item">
                            <div class="col-12 col-md-10 align-self-center" style="border-right: 1px solid #c8d2d9;">
                                <div style="display: inline-block; vertical-align: middle;">
                                    <img class="img-fluid" src="{{ asset('images/web/zub.png') }}">
                                </div>
                                <div style="display: inline-block; vertical-align: middle; padding-left: 10px;">
                                    <p>PAKET USLUGA</p>
                                    <h4>IMPLANTI 4+1 GRATIS</h4>
                                </div>
                            </div>
                            <div class="col-12 col-md-2 text-center align-self-center">
                                <p><b>1450,00</b></p>
                            </div>
                        </div>

                        <div class="row ponuda_item">
                            <div class="col-12 col-md-10 align-self-center" style="border-right: 1px solid #c8d2d9;">
                                <div style="display: inline-block; vertical-align: middle;">
                                    <img class="img-fluid" src="{{ asset('images/web/zub1.png') }}">
                                </div>
                                <div style="display: inline-block; vertical-align: middle; padding-left: 10px;">
                                    <p>PAKET USLUGA</p>
                                    <h4>METAL KERAMIČKE KRUNE 60% POPUSTA</h4>
                                </div>
                            </div>
                            <div class="col-12 col-md-2 text-center align-self-center">
                                <P>200,00</P>
                                <p><b>90,00</b></p>
                            </div>
                        </div>

                        <div class="row ponuda_item">
                            <div class="col-12 col-md-10 align-self-center" style="border-right: 1px solid #c8d2d9;">
                                <div style="display: inline-block; vertical-align: middle;">
                                    <img class="img-fluid" src="{{ asset('images/web/lips.png') }}">
                                </div>
                                <div style="display: inline-block; vertical-align: middle; padding-left: 10px;">
                                    <p>USLUGA</p>
                                    <h4>HIJALURONSKI FILTERI 1ml 40% POPUSTA</h4>
                                </div>
                            </div>
                            <div class="col-12 col-md-2 text-center align-self-center">
                                <p>140,00</p>
                                <p><b>75,00</b></p>
                            </div>
                        </div>
                        
                        <br>
                        <a href="#">POGLEDAJTE KOMPLETAN CENOVNIK</a>

                    </div>

                    <div class="col-12 col-md-4 reservation_position">

                        <div class="reservation_section">
                            <div class="gray_section text-center">
                                <h3><b>ZAKAŽITE</b> TERMIN</h3>
                            </div>
                            <div class="transparent_section">
                                <p>
                                    Naš tim pružiti će Vam ljubaznost, prevazilaženje straga od stomatologa i najsavremenije stomatološke zahvate.
                                </p><br>

                                <div class="form-group form_section">

                                    <input class="form-control" type="text" name="name" placeholder="Vaše ime i prezime">
                                    <input class="form-control" type="email" name="email" placeholder="Email adresa">
                                    <input class="form-control" type="number" name="phone" placeholder="Kontakt telefon">

                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <input class="form-control" type="number" name="datum" placeholder="Željeni datum">
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <input class="form-control" type="number" name="vreme" placeholder="Željeno vreme">
                                        </div>
                                    </div>

                                    <textarea class="form-control" cols="20" rows="5" placeholder="Tekst poruke"></textarea>

                                    <button class="btn btn-default">POŠALJITE PORUKU</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container review_section">
        <div class="row">
            <div class="col-12 col-md-8">
                <h3>REKLI SU O NAŠEM STOMATOLOŠKOM CENTRU</h3>
                <p>
                    Naš tim pružiti će Vam ljubaznost, prevazilaženje straha od stomatologa i najsavremenje stomatološke zahvate.
                </p><br>

                
                <div id="carouselExampleIndicators" class="carousel slide review_slider" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-12 col-md-3 align-self-center">
                                    <img class="img-fluid" class="d-block w-100" src="{{ asset('images/web/review.png') }}" alt="First slide">
                                </div>
                                <div class="col-12 col-md-9 align-self-center">
                                    <h4>Ana Vukočević</h4>
                                    <p>
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. 
                                        It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
                                        Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-12 col-md-3 align-self-center">
                                    <img class="img-fluid" class="d-block w-100" src="{{ asset('images/web/review.png') }}" alt="First slide">
                                </div>
                                <div class="col-12 col-md-9 align-self-center">
                                    <h4>Ana Vukočević</h4>
                                    <p>
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. 
                                        It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
                                        Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>-->
                </div>

            </div>
            <div class="col-12 col-md-4" style="padding-right: 0px;">
                <div class="form'group reservation_section1">
                    <div class="text-center gray_section">
                        <h4><b>NEWSLETTER</b> BLOG</h4>
                    </div>

                    <div class="transparent_section">
                        <p>Prijavite se na naš newsletter i pratite akcije i članke iz sekcije BLOG</p><br>

                        <input class="form-control" type="email" name="email" placeholder="Unesite vašu email adresu">

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include("inc/gallery")

    @include("inc/footer")


@endsection 