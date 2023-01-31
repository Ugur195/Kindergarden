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
                    <h4 class="page-title">Admin/Cv</h4>
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
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Cv</h3>

                            <div class="table-responsive">
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
                                <table class="table text-nowrap">
                                    <thead>
                                    <tr>

                                        <th class="border-top-0">Image</th>
                                        <th class="border-top-0">Name</th>
                                        <th class="border-top-0">Surname</th>
                                        <th class="border-top-0">FatherName</th>
                                        <th class="border-top-0">Phone</th>
                                        <th class="border-top-0">Mobile Phone</th>
                                        <th class="border-top-0">Email</th>
                                        <th class="border-top-0">Gender</th>
                                        <th class="border-top-0">Age</th>
                                        <th class="border-top-0">Education</th>
                                        <th class="border-top-0">Experience</th>
                                        <th class="border-top-0">About</th>
                                        <th class="border-top-0">Delete</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if ($cv_work)
                                        @foreach ($cv_work as $work)
                                            <tr>
                                                <td><img style="width: 80px" src="{{asset('cv_image/'.$work->image)}}"></td>
                                                <td>{{$work->name}}</td>
                                                <td>{{$work->surname}}</td>
                                                <td>{{$work->father_name}}</td>
                                                <td>{{$work->phone1}}</td>
                                                <td>{{$work->phone2}}</td>
                                                <td>{{$work->email}}</td>
                                                <td>{{$work->gender}}</td>
                                                <td>{{$work->age}}</td>
                                                <td>{{$work->education}}</td>
                                                <td>{{$work->experience}}</td>
                                                <td>{{$work->about}}</td>

                                                <td>
                                                    <a href="{{ route('cv.delete',$work->id) }}" class="btn btn-danger" type="submit">delete</a>
                                                </td>
                                                @endforeach
                                                @endif
                                            </tr>
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
