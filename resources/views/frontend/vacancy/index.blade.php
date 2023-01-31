@extends('frontend.app')

@section('css')
@endsection

@section('content')
    <main>
        <div id="vakansiyalar">
            <div class="container">
                <div class="row">
                    <div class="text">
                        <h2>
                            Məlumatları dolduraraq öz <br/>
                            CVni yerləşdir.
                        </h2>
                        <button><a href="{{route('frontend.vacancies.create')}}">CV yarat</a></button>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <div id="teacher_content">
                <div class="container mt-5">
                    <div class="row mt-5">
                        @foreach($vacancies as $vacancy)
                            <div class="col-lg-6 mt-5">
                                <div id="teacher_content">
                                    <img src="{{asset($vacancy->image)}}" alt=""/>
                                    <div>
                                        <h2>{{$vacancy->name}}</h2>

                                        <button class="btn_info">Məlumatlar</button>
                                        <button>Yukle</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </section>
    </main>

@endsection

@section('js')
@endsection

