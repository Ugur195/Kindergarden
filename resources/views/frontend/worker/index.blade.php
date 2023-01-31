@extends('frontend.app')

@section('css')
@endsection

@section('content')

    <section id="employee">
        <div class="container mt-5">

            <div class="search">
                <h2>Workers</h2>

                <div class="position">
                    <input type="text" placeholder="Axdar">

                    <img src="{{asset('frontendCssJs/asset/images/search.png')}}" alt="">
                </div>


                <div class="text">
                    <h2>
                        Məlumatları dolduraraq öz <br/>
                        CVni yerləşdir.
                    </h2>
                    <button><a href="cv.html">CV yarat</a></button>
                </div>
            </div>
            <div class="row">
                @foreach($workers as $worker)
                    <div class="col-lg-4">
                        <div class="isciler">
                            <a href="{{route('frontend.workers.edit',$worker->id)}}"><img
                                    style='display:block;width:350px;height:350px;'
                                    src="{{asset($worker->image)}}" alt=""/></a>
                            <div class="isci_info">
                                <p>{{$worker->name.' '.$worker->surname}}</p>
                                <p>{{$worker->position}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

@section('js')
@endsection


