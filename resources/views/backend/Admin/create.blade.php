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
                <a href="{{route('admins.index')}}" class="btn btn-primary">Back</a>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="#" class="fw-normal">Dasboard > Admin > Create</a></li>
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
                    <h3 class="box-title">New Admin</h3>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <form action="{{route('admins.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Admin Name</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp"
                                        name="name" placeholder="Enter admin name" required>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Admin Email</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                        name="email" placeholder="Enter admin email" required>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Admin Password</label>
                                    <input type="password" class="form-control" id="name" aria-describedby="emailHelp"
                                        name="password" placeholder="Enter admin password" required>

                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
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