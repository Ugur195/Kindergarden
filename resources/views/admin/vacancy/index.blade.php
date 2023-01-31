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
                    <h4 class="page-title">Admin/Vacancies</h4>
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
                            <form method="POST" action="{{route('vacancy.submit')}}"
                                  enctype="multipart/form-data" class="form-horizontal form-material">
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
                                        <input type="file" name="image" class="form-control p-0 border-">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Name</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" class="form-control p-0 border-0" name="name">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">City</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" class="form-control p-0 border-0" name="city">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Field</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" class="form-control p-0 border-0" name="field">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Qualification</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" class="form-control p-0 border-0" name="qualification">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Work Graphic</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" class="form-control p-0 border-0" name="work_graphic">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Experience</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" class="form-control p-0 border-0" name="experience">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Education</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" class="form-control p-0 border-0" name="education">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Salary</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" class="form-control p-0 border-0" name="salary">
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">About</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" class="form-control p-0 border-0" name="about">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Requirement</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" class="form-control p-0 border-0" name="requirement">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Note</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" class="form-control p-0 border-0" name="note">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success">Add Vacancy</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title">Vacancies</h3>
                        <p class="text-muted">Add class <code>.table</code></p>
                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                <tr>
                                    <th class="border-top-0">Image</th>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">City</th>
                                    <th class="border-top-0">Field</th>
                                    <th class="border-top-0">Qualification</th>
                                    <th class="border-top-0">Work Graphic</th>
                                    <th class="border-top-0">Experience</th>
                                    <th class="border-top-0">Education</th>
                                    <th class="border-top-0">Salary</th>
                                    <th class="border-top-0">About</th>
                                    <th class="border-top-0">Requirement</th>
                                    <th class="border-top-0">Note</th>
                                    <th class="border-top-0">Action</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($vacancies as $vacancy)
                                    <tr>
                                        <td><img style="width: px" src="{{asset($vacancy->image)}}"></td>
                                        <td>{{$vacancy->name}}</td>
                                        <td>{{$vacancy->city}}</td>
                                        <td>{{$vacancy->field}}</td>
                                        <td>{{$vacancy->qualification}}</td>
                                        <td>{{$vacancy->work_graphic}}</td>
                                        <td>{{$vacancy->experience}}</td>
                                        <td>{{$vacancy->education}}</td>
                                        <td>{{$vacancy->salary}}</td>
                                        <td>{{$vacancy->about}}</td>
                                        <td>{{$vacancy->requirement}}</td>
                                        <td>{{$vacancy->note}}</td>

                                        <td>
                                            <form action="{{ route('vacancy.edit',$vacancy->id) }}">
                                                <button type="submit" class="btn btn-primary">Edit</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{ route('vacancy.delete',$vacancy->id) }}">
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
