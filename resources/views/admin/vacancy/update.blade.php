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
                                <form action="{{route('vacancy.update',$vacancy->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal form-material">
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
                                            <img style="width: 80px" src="{{asset($vacancy->image)}}">
                                            <input type="file"  name="image" class="form-control p-0 border-0">
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name="name" type="text" value="{{$vacancy->name}}"
                                                   class="form-control p-0 border-0"> </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">City</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name="city" type="text" value="{{$vacancy->city}}"
                                                class="form-control p-0 border-0"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Field</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name="field" type="text" value="{{$vacancy->field}}"
                                                class="form-control p-0 border-0"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Qualification</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name="qualification" type="text" value="{{$vacancy->qualification}}"
                                                class="form-control p-0 border-0"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Work Graphic</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name="work_graphic" type="text" value="{{$vacancy->work_graphic}}"
                                                   class="form-control p-0 border-0"> </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Experience</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name="experience" type="text" value="{{$vacancy->experience}}"
                                                class="form-control p-0 border-0"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Education</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name="education" type="text" value="{{$vacancy->education}}"
                                                class="form-control p-0 border-0"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Salary</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name="salary" type="text" value="{{$vacancy->salary}}"
                                                class="form-control p-0 border-0"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">About</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name="about" type="text" value="{{$vacancy->about}}"
                                                class="form-control p-0 border-0"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Requirement</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name="requirement" type="text" value="{{$vacancy->requirement}}"
                                                class="form-control p-0 border-0"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Note</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name="note" type="text" value="{{$vacancy->note}}"
                                                class="form-control p-0 border-0"> </div>
                                    </div>

                                    <div class="compose pt-3">
                                        <div id="compose-field" class="compose">
                                        </div>
                                        <div class="text-right mt-3">
                                            <a href="{{route('vacancy')}}"  class="btn btn-info">
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
