@extends('frontend.app')

@section('css')
@endsection

@section('content')
    <main>
        <div class="container_div">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <h2>Əlaqə</h2>
                    <div class="col-lg-6 mt-5">
                        <div class="contact">
                            <form>
                                <input type="text" placeholder="Ad,Soyad" />
                                <input type="text" placeholder="E-mail" />
                                <textarea name="" id=""  placeholder="Mesaj"></textarea>
                            </form>
                        </div>
                        <button>Göndər</button>
                    </div>
                    <div class="col-lg-5">
                        <img  class="contact_img" src="{{asset('frontendCssJs/asset/images/image 33.png')}}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('js')
@endsection
