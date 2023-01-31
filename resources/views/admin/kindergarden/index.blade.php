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
                        <h4 class="page-title">Admin/Kindergardens</h4>
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
                    <div class="col-lg-16 col-xlg-9 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{route('kindergarden.submit')}}" enctype="multipart/form-data" class="form-horizontal form-material">
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
                                            <label class="col-md-4 p-0">Image</label>
                                            <div class="col-md-12 border-bottom p-0">
                                            <input type="file" name="image"  class="form-control p-0 border-">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label  class="col-md-12 p-0">Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text"  class="form-control p-0 border-0" name="name" >
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label  class="col-md-12 p-0">Email</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="email"  class="form-control p-0 border-0" name="email" >
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label  class="col-md-12 p-0">Location</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text"  class="form-control p-0 border-0" name="location" >
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label  class="col-md-12 p-0">Phone number</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="phone_number"  class="form-control p-0 border-0" name="phone" >
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label  class="col-md-12 p-0">Mobile number</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="phone_number"  class="form-control p-0 border-0" name="mobile" >
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label  class="col-md-12 p-0">Description</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <textarea name="description" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">District</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <select name="district_id">
                                                @if (@isset($districts))
                                                    @foreach($districts as $district)
                                                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                                                @endforeach
                                                @endif
                                            </select>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Languages</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <select name="language_id">
                                                @if (@isset($languages))
                                                    @foreach($languages as $language)
                                                    <option value="{{ $language->id }}">{{ $language->name }}</option>
                                                @endforeach
                                                @endif
                                            </select>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success">Add Kindergarden</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Kindergardens</h3>
                            <p class="text-muted">Add class <code>.table</code></p>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Image</th>
                                            <th class="border-top-0">Name</th>
                                            <th class="border-top-0">Location</th>
                                            <th class="border-top-0">Mobile</th>
                                            <th class="border-top-0">Phone</th>
                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">Language</th>
                                            <th class="border-top-0">District</th>
                                            <th class="border-top-0">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                            @foreach ($kindergardens as $kindergarden)
                                             <tr>

                                            <td><img style="width: 80px" src="{{asset($kindergarden->image)}}"></td>
                                            <td>{{$kindergarden->name}}</td>
                                            <td>{{$kindergarden->location}}</td>
                                            <td>{{$kindergarden->mobile}}</td>
                                            <td>{{$kindergarden->phone}}</td>
                                            <td>{{$kindergarden->email}}</td>
                                            @if ($kindergarden->language_id!=0)
                                              <td>{{$kindergarden->language?->name}}</td>
                                            @else
                                                <td>null</td>
                                            @endif
                                            @if ($kindergarden->district_id!=0)
                                              <td>{{$kindergarden->district->name}}</td>
                                            @else
                                                <td>null</td>
                                            @endif
                                            <td>
                                                <form action="{{ route('kindergarden.edit',$kindergarden->id) }}">
                                                    <button type="submit" class="btn btn-primary">Edit</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{ route('kindergarden.delete',$kindergarden->id) }}">
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                            </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
@endsection
