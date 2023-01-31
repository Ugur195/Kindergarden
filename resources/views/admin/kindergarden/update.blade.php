@extends('admin.layout.master')
@section('content')

        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Admin/Kindergardens/Update</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                               <li><a href="{{route('dashboard')}}" class="fw-normal">Dashboard</a></li>
                            </ol>

                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-8 col-xlg-9 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action='{{route('kindergarden.update',$kindergarden->id)}}' enctype="multipart/form-data" class="form-horizontal form-material">
                                    @csrf
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
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Image</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <img style="width: 80px" src="{{asset($kindergarden->image)}}">
                                            <input type="file"  name="image" class="form-control p-0 border-0">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label  class="col-md-12 p-0">Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text"   value="{{$kindergarden->name}}"  class="form-control p-0 border-0" name="name" >
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label  class="col-md-12 p-0">Email</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="email"  value="{{$kindergarden->email}}" class="form-control p-0 border-0" name="email" >
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label  class="col-md-12 p-0">Location</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text"  value="{{$kindergarden->location}}"  class="form-control p-0 border-0" name="location" >
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label  class="col-md-12 p-0">Mobile Number</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="phone_number" value="{{$kindergarden->mobile}}"  class="form-control p-0 border-0" name="mobile" >
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label  class="col-md-12 p-0">Phone Number</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="phone_number" value="{{$kindergarden->phone}}"  class="form-control p-0 border-0" name="phone" >
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label  class="col-md-12 p-0">Description </label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" value="{{$kindergarden->description}}"  class="form-control p-0 border-0" name="description" >
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Districts</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <select name="district_id">
                                                @foreach($districts as $district)
                                                    @if ($kindergarden->district_id==$district->id)
                                                        <option selected  value="{{ $district->id }}">{{ $district->name }}</option>
                                                    @else
                                                        <option  value="{{ $district->id }}">{{ $district->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Languages</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <select name="language_id">
                                                @foreach($languages as $language)
                                                    @if ($kindergarden->language_id==$language->id)
                                                        <option selected  value="{{ $language->id }}">{{ $language->name }}</option>
                                                    @else
                                                        <option  value="{{ $language->id }}">{{ $language->name }}</option>
                                                    @endif
                                                @endforeach   
                                            </select>
                                    </div>
                                </div>
                                
                                    
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success">Update Kindergarden</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            @endsection