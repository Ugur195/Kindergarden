@extends('frontend.app')

@section('css')
@endsection

@section('content')
    <main>
        <section>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-6">
                        <div id="left_item">
                            <img src="{{asset($kindergardens->image)}}" alt="" />

                            <div id="left_text">
                                <h1>{{$kindergardens->name}}</h1>
                                <p>{{$kindergardens->location}}</p>
                                <p>{{$kindergardens->mobile}}</p>
                                <p>{{$kindergardens->phone}}</p>
                                <p>{{$kindergardens->email}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="img_item">
                                        <img class="img_1" src="{{asset('frontendCssJs/asset/images/Rectangle 233.png')}}" alt="" />
                                        <img class="img_2" src="{{asset('frontendCssJs/asset/images/Rectangle 235.png')}}" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 mt-5">
                                    <div class="img_item">
                                        <img class="img_3" src="{{asset('frontendCssJs/asset/images/Rectangle 233.png')}}" alt="" />
                                        <img class="img_3" id="img_3" src="{{asset('frontendCssJs/asset/images/Rectangle 235.png')}}" alt="" />
                                    </div>

                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <p class="bagca_content">
                            {{$kindergardens->description}}
                        <p class="bagca_content"> Ba????alar??m??z??n ??sas m??qs??di
                            u??aqlar??n fiziki v?? psixoloji, h??m??inin intelektual inki??af??n??
                            t??min ed??c??k t??dris proqramlar??n?? t??tbiq etm??k, sa??lam v??
                            intelektual g??l??c??k n??sil formala??d??rmaqd??r.</p>
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <section id="skewbox">

            <div class="skew">
                <div class="content">
                    <h2>??ndigo Special <br>
                        U??aq Ba????as??nda</h2>

                    <p>30<span>%endirim</span></p>

                    <button id="endirim_al">Endirimi al</button>
                </div>

                <div class="imgbox" style="background-image: url(.frontendCssJs/asset/images/image\ 52.png); ">
                </div>
            </div>

        </section>
    </main>
@endsection

@section('js')
@endsection


