@extends("layout/master")

@section("title", "Duodent | Dentalni turizam")

@section('style')

    <style>
        
        #dentalni{
            background-color: #f498c0;
            color: #fff;
        }
        
    </style>

@endsection

@section("content")

    @include("inc/header")


    <div class="container all_content_section">
        <div class="row">
            <div class="col-12 col-md-8">

                <div class="row">
                    <div class="col-12">
                        <h3>DENTALNI TURIZAM</h3>
                        <br>
                        <p>
                            DuoDent Centar pokriva različite grane stomatologije što uključuje implantologiju, 
                            oralnu hirurgiju, protetiku (zubne ljuskice, zubne krunice i zubne mostove), parodontologiju 
                            i opštu stomatologiju. Naš stručni tim vodit će vas kroz svaki proces. Počevši od prvog dolaska 
                            i pregleda, kroz svaki dolazak na tretman i samo provedbu svih potrebnih dentalnih tretmana i 
                            terapija sve do završetka radova.
                        </p><br>
                        <p>
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical 
                            Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney 
                            College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, 
                            and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum 
                            comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, 
                            written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line 
                            of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                        </p><br>
                        <p>
                            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. 
                            Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their 
                            exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                        </p>
                    </div>
                </div>
                

                <div class="row" style="margin-top: 25px;">

                    <div class="col-12 col-md-6" style="margin-top: 30px">
                        <div class="gallery_item" style="background-image: url('{{ asset('images/web/pre1.png') }}'); height: 250px;">
                            <div class="blue_shapee">
                                <h4><b>PRE</b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6" style="margin-top: 30px">
                        <div class="gallery_item" style="background-image: url('{{ asset('images/web/posle1.png') }}'); height: 250px;">
                            <div class="blue_shapee">
                                <h4><b>POSLE</b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6" style="margin-top: 30px">
                        <div class="gallery_item" style="background-image: url('{{ asset('images/web/pre2.png') }}'); height: 250px;">
                            <div class="blue_shapee">
                                <h4><b>PRE</b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6" style="margin-top: 30px">
                        <div class="gallery_item" style="background-image: url('{{ asset('images/web/posle2.png') }}'); height: 250px;">
                            <div class="blue_shapee">
                                <h4><b>POSLE</b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6" style="margin-top: 30px">
                        <div class="gallery_item" style="background-image: url('{{ asset('images/web/pre3.png') }}'); height: 250px;">
                            <div class="blue_shapee">
                                <h4><b>PRE</b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6" style="margin-top: 30px">
                        <div class="gallery_item" style="background-image: url('{{ asset('images/web/posle3.png') }}'); height: 250px;">
                            <div class="blue_shapee">
                                <h4><b>POSLE</b></h4>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-12 col-md-4" style="padding-right: 0px;">

                <div class="row">
                    <div class="col-12" style="margin-top: 30px">
                        <div class="gallery_item" style="background-image: url('{{ asset('images/web/smestaj.png') }}'); height: 230px;">
                            <div class="blue_shapee">
                                <h4><b>BESPLATAN</b> SMEŠTAJ</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-12" style="margin-top: 30px">
                        <div class="gallery_item" style="background-image: url('{{ asset('images/web/garancija.png') }}'); height: 230px;">
                            <div class="blue_shapee">
                                <h4><b>DOŽIVOTNA</b> GARANCIJA</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <br>

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


    @include("inc/gallery")

    @include("inc/footer")

@endsection