@extends('frontend.app')

@section('css')
@endsection

@section('content')
    <main>
        <section id="kinder_garden_info">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-3">
                        <h1>Bağçalarımız</h1>
                    </div>
                    <div class="col-lg-8">
                        <div class="input">
                            <input type="search" placeholder="Axtar..." id="data_id"/>

                            <div>
                                <img src="{{asset('frontendCssJs/asset/images/search.png')}}" alt=""/>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row ">


                    <div class="col-lg-3 mt-5">
                        <h2>Rayonu seçin</h2>
                        @foreach($districts as $district)
                            <div class="check_garden mt-3">
                                <input type="checkbox" name="" id=""/>
                                <p class="bagca_p">{{$district->name}}</p>
                            </div>
                        @endforeach
                    </div>


                    <div class="col-lg-3 mt-5">
                        <h2>Tədris ediləcək dilləri seçin</h2>
                        <div id="language">
                            @foreach($langguages as $language)
                                <div class="check_garden mt-3">
                                    <input type="checkbox" name="" id=""/>
                                    <p>{{$language->name}}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div id="price">
                            <h2>Aylıq qiymət aralığı</h2>
                            <div class="check_garden mt-3">
                                <input type="checkbox" name="" id=""/>
                                <p>150-200azn</p>
                            </div>
                            <div class="check_garden mt-3">
                                <input type="checkbox" name="" id=""/>
                                <p>250-400azn</p>
                            </div>
                            <div class="check_garden mt-3">
                                <input type="checkbox" name="" id=""/>
                                <p>300-500azn</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mt-5">
                        <h2>Digər seçimlər</h2>
                        <div class="check_garden mt-3">
                            <input type="checkbox" name="" id=""/>
                            <p>Servis xidməti</p>
                        </div>
                        <div class="check_garden mt-3">
                            <input type="checkbox" name="" id=""/>
                            <p>Hovuz</p>
                        </div>
                        <div class="check_garden mt-3">
                            <input type="checkbox" name="" id=""/>
                            <p>Müşahidə kamerası</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div id="teacher_content">
                <div class="container mt-5">
                    <div class="row mt-5">
                        @foreach($kindergardens as $kindergarden)
                            <div class="col-lg-6 mt-5">
                                <div id="teacher_content">
                                    <img class="blog-card-img" style='display:block;width:400px;height:350px;'
                                         src="{{asset($kindergarden->image)}}" alt=""/>
                                    <div>
                                        <h2>{{$kindergarden->name}}</h2>
                                        <a href="{{route('frontend.kindergardens.edit',$kindergarden->id)}}"
                                           class="btn_info">Daha Ətraflı</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div id="img_div">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-lg-6">
                            <img class="img1" src="{{asset('frontendCssJs/asset/images/Rectangle 83.png')}}" alt=""/>
                        </div>
                        <div class="col-lg-3">
                            <img src="frontendCssJs/asset/images/Rectangle 84.png" alt=""/>
                        </div>
                        <div class="col-lg-3">
                            <img src="frontendCssJs/asset/images/Rectangle 84.png" alt=""/>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <img src="frontendCssJs/asset/images/Rectangle 81.png" alt=""/>
                        </div>
                        <div class="col-lg-5">
                            <img src="frontendCssJs/asset/images/Rectangle 85.png" alt=""/>
                        </div>
                        <div class="col-lg-2">
                            <div id="btn">
                                <button class="right_btn" id="bagca_duyme"><a href="eylence_merkezi.html">daha cox</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('js')
@endsection

