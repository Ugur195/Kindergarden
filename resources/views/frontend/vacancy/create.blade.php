@extends('frontend.app')

@section('css')
@endsection

@section('content')
    <main>
        <div class="container ">
            <div class="row justify-content-center align-items-start mt-5">
                <div class="col-lg-3 ">
                    <div class="box">
                        <img height="100" src="" id="vacancyImage" alt="Vakansiya şəkli">
                        <p>Foto</p>
                        <button id="uploadImage">Yüklə</button>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="id">
                        <form method="post" action="{{route('frontend.vacancies.store')}}" enctype="multipart/form-data">
                            @csrf
                            <input id="fileInput" type="file" name="image" style="display: none">

                            <div class="row mb-3">
                                <div class="col-4">
                                    <label for="">Ad</label>
                                    <input class="form-control" type="text" name="name" id="name" required/>
                                </div>

                                <div class="col-4">
                                    <label for="">Soyad</label>
                                    <input class="form-control" type="text" name="surname" id="surname" required/>
                                </div>

                                <div class="col-4">
                                    <label for="">Ata adı</label>
                                    <input class="form-control" type="text" name="father_name" id="father_name"
                                           required/>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-6">
                                    <label for="">Mobile</label>
                                    <input type="tel" class="form-control" name="phone1" id="tel"/>
                                </div>
                                <div class="col-6">
                                    <label for="">Mobile 2</label>
                                    <input type="tel" class="form-control" name="phone2" id="tel2"/>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-6">
                                    <label for="">Email</label>
                                    <input class="form-control" type="email" name="email" id="email" required/>
                                </div>
                            </div>

                            <div class=" row">
                                <div class="col-6">
                                    <label for="">Cins</label>
                                    <select name="gender" class="form-control" id="gender">
                                        <option value="">Select Gender</option>
                                        <option value="M" @if (old('gender') == "M")
                                            {{ 'selected' }}
                                            @endif>Male
                                        </option>
                                        <option value="F" @if (old('gender') == "F")
                                            {{ 'selected' }}
                                            @endif>Female
                                        </option>
                                    </select>
                                </div>

                                <div class="col-6">
                                    <label for="">Yaş</label>
                                    <input class="form-control" type="number" name="age" id="age" required/>
                                </div>
                            </div>

                            <div  class="row mb-6">
                                <div class="col-6">
                                    <label for="">Təhsil</label>
                                    <input class="form-control" type="text" name="education" id="education" required>
                                </div>
                            </div>

                            <div class="work">
                                <label for="">İş təcrübəsi</label>
                                <textarea class="form-control" name="experience" id="experience" cols="10" rows="6"
                                          required></textarea>
                            </div>

                            <div class="work">
                                <label for="">Haqqında</label>
                                <textarea class="form-control" name="about" id="about" cols="10" rows="6"
                                          required></textarea>
                            </div>
                            <div class="work">
                                <button id="cv_btn">Cv yarat</button>
                            </div>
                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            @if(session()->has('errors'))
                                <div class="alert alert-danger">
                                    {{ session()->get('errors') }}
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('js')
    <script>
        $('#uploadImage').on('click', function () {
            $('#fileInput').click();
        })

        $('#fileInput').on('change', function () {
            console.log($(this))
            const file = $(this)[0].files[0];
            const src = URL.createObjectURL(file)
            $('#vacancyImage').attr('src', src)
        })
    </script>


    <script type="text/javascript">
        //Phone
        $(document).ready(function () {
            $("#tel").mask("+994(88) 888-88-88");
            $('#tel2').mask("+994(88) 888-88-88");
        });
    </script>

@endsection


