@extends('backend.master')

@section('x')
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <a href='/teams' class="btn btn-primary">Back</a>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="#" class="fw-normal">Dasboard > Team > Edit</a></li>
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
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Edit Team Member</h3>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <form action="{{route('teams.update',$team->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name">Team Member Name</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp"
                                        name="name" placeholder="Enter Team member name" value="{{$team->name}}"
                                        required>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Team Member Designation</label>
                                    <input type="text" class="form-control" id="des" aria-describedby="emailHelp"
                                        name="des" placeholder="Enter Team member designation" value="{{$team->des}}"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Team Member Email</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                        name="email" placeholder="Enter Team member Email" value="{{$team->email}}"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="slider">Team member Image</label><br />
                                    <p>* For Best Quality image size should be 1200X695 </p>
                                    <input type="file" class="form-control-file" id="slider" name="slider">
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
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
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center"> 2021 ?? ALl Rights Reserved. <a href="https://www.yetfix.com/">yetfix.com</a>
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
@endsection