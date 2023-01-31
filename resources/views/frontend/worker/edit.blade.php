@extends('frontend.app')

@section('css')
@endsection

@section('content')
    <section id="logoped_mr" >
        <div class="container ">
            <div class="row">
                <h2>Məlumat lövhəsi</h2>
                <div class="col-lg-4 mt-5">
                    <div class="isciler">
                        <img src="{{asset($workers->image)}}" alt="" />
                        <div class="isci_info">
                            <p>Ad Soyad</p>
                            <p>{{$workers->name.' '.$workers->surname}}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 mt-5">
                    <ul id="logoped_info">
                        <li>Nitqin ümumi geriliyi Loqopedik masajla</li>
                        <li>Nitqin sonradan itməsi</li>
                        <li>Səslərin qüsurlu tələffüzü</li>
                        <li>Səsin olmaması</li>
                        <li>Nitqin olmaması</li>
                        <li>Oxu və yazı pozulmaları</li>
                        <li>Kəkələmə</li>
                        <li>Nitq tənəffüsünün ritm və sürətinin normallaşması</li>
                        <li>Qısa müddətdə axıcı danışıq bacarığına yiyələnmək</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="text">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <p>{{$workers->name.' '.$workers->surname}}</p>
                    <h2>Təhsil</h2>
                    <p>
                        {{$workers->education}}
                    </p>
                    <h2>İş Təcrübəsi</h2>
                    <p>
                        {{$workers->experience}}
                    </p>
                    <h2>İş günləri</h2>
                    <p>
                        {{$workers->workDays}}
                    </p>
                    <h2>Əlaqə:</h2>
                    <p>{{$workers->phone2}}</p>
                    <p>{{$workers->email}}</p>
                </div>
                <div class="col-lg-4">
                    <img class="logoped_img" src="asset/images/image 37.png" alt="" />
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
@endsection



