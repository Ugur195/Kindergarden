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
                    <h4 class="page-title">Admin/Workers</h4>
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
                            <form method="POST" action="{{route('worker.submit')}}"
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
                                    <label class="col-md-12 p-0">Surname</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" class="form-control p-0 border-0" name="surname">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Father Name</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" class="form-control p-0 border-0" name="fatherName">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Position</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" class="form-control p-0 border-0" name="position">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Phone</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="number" class="form-control p-0 border-0" name="phone1">
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Mobile Phone</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="number" class="form-control p-0 border-0" name="phone2">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Email</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="email" class="form-control p-0 border-0" name="email">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Gender</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" class="form-control p-0 border-0" name="gender">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Age</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" class="form-control p-0 border-0" name="age">
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Education</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" class="form-control p-0 border-0" name="education">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Experience</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" class="form-control p-0 border-0" name="experience">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">About</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" class="form-control p-0 border-0" name="about">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Work Days</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" class="form-control p-0 border-0" name="workDays">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success">Add Worker</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title">Workers</h3>
                        <p class="text-muted">Add class <code>.table</code></p>
                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                <tr>
                                    <th class="border-top-0">Image</th>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Surname</th>
                                    <th class="border-top-0">Father Name</th>
                                    <th class="border-top-0">Experience</th>
                                    <th class="border-top-0">Position</th>
                                    <th class="border-top-0">Phone</th>
                                    <th class="border-top-0">Mobile Phone</th>
                                    <th class="border-top-0">Email</th>
                                    <th class="border-top-0">Gender</th>
                                    <th class="border-top-0">Age</th>
                                    <th class="border-top-0">Education</th>
                                    <th class="border-top-0">About</th>
                                    <th class="border-top-0">Work Days</th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($workers as $worker)
                                    <tr>
                                        <td><img style="width: 80px" src="{{asset($worker->image)}}"></td>
                                        <td>{{$worker->name}}</td>
                                        <td>{{$worker->surname}}</td>
                                        <td>{{$worker->fatherName}}</td>
                                        <td>{{$worker->experience}}</td>
                                        <td>{{$worker->position}}</td>
                                        <td>{{$worker->phone1}}</td>
                                        <td>{{$worker->phone2}}</td>
                                        <td>{{$worker->email}}</td>
                                        <td>{{$worker->gender}}</td>
                                        <td>{{$worker->age}}</td>
                                        <td>{{$worker->education}}</td>
                                        <td>{{$worker->about}}</td>
                                        <td>{{$worker->workDays}}</td>


                                        <td>
                                            <form action="{{ route('worker.edit',$worker->id) }}">
                                                <button type="submit" class="btn btn-primary">Edit</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{ route('worker.delete',$worker->id) }}">
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

