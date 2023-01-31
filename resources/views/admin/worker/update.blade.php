@extends('admin.layout.master')
@section('content')

    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Admin/Vacancy/Update</h4>
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
            <!-- Row -->
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('worker.update',$worker->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal form-material">
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
                                    <img style="width: 80px" src="{{asset($worker->image)}}">
                                    <input type="file"  name="image" class="form-control p-0 border-0">
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Name</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input name="name" type="text" value="{{$worker->name}}"
                                           class="form-control p-0 border-0"> </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Surname</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input name="surname" type="text" value="{{$worker->surname}}"
                                           class="form-control p-0 border-0"> </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Father Name</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input name="fatherName" type="text" value="{{$worker->fatherName}}"
                                           class="form-control p-0 border-0"> </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Position</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input name="position" type="text" value="{{$worker->position}}"
                                           class="form-control p-0 border-0"> </div>
                            </div>

                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Phone</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input name="phone1" type="text" value="{{$worker->phone1}}"
                                           class="form-control p-0 border-0"> </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Mobile Phone</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input name="phone2" type="text" value="{{$worker->phone2}}"
                                           class="form-control p-0 border-0"> </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Email</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input name="email" type="text" value="{{$worker->email}}"
                                           class="form-control p-0 border-0"> </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Gender</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input name="gender" type="text" value="{{$worker->gender}}"
                                           class="form-control p-0 border-0"> </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Age</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input name="age" type="text" value="{{$worker->age}}"
                                           class="form-control p-0 border-0"> </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Education</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input name="education" type="text" value="{{$worker->education}}"
                                           class="form-control p-0 border-0"> </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Experience</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input name="experience" type="text" value="{{$worker->experience}}"
                                           class="form-control p-0 border-0"> </div>
                            </div>

                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">About</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input name="about" type="text" value="{{$worker->about}}"
                                           class="form-control p-0 border-0"> </div>
                            </div>

                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Work Days</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input name="workDays" type="text" value="{{$worker->workDays}}"
                                           class="form-control p-0 border-0"> </div>
                            </div>


                            <div class="compose pt-3">
                                <div id="compose-field" class="compose">
                                </div>
                                <div class="text-right mt-3">
                                    <a href="{{route('worker')}}"  class="btn btn-info">
                                        Back
                                    </a>
                                    <button type="submit" class="btn btn-success">
                                        Update
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->
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
@endsection

