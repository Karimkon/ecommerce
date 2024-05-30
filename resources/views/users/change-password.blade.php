@extends('layouts.app')
@section('style')

@endsection
@section('content')

<main class="main">
    <div class="page-header text-center">
        <div class="container">
            <h1 class="page-title">Update Password</span></h1>
        </div>
    </div>

    <div class="page-content">
        <div class="dashboard">
            <div class="container">
                <br>
                <div class="row">
                   @include('users._sidebar')

                    <div class="col-md-8 col-lg-9">
                        <div class="tab-content">

                            @include('layouts._message')
                            <form action="" method="POST">
                                {{ csrf_field() }}


                                        <label>Old Password *</label>
                                        <input type="password" name="old_password" class="form-control" required>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>New Password *</label>
                                                <input type="password" name="password" class="form-control" required>
                                            </div><!-- End .col-sm-6 -->

                                            <div class="col-sm-6">
                                                <label>Confirm Password *</label>
                                                <input type="password" name="cpassword" class="form-control" required>
                                            </div><!-- End .col-sm-6 -->
                                        </div><!-- End .row -->

                                        <center>
                                        <button type="submit" style="width: 180px;" class="btn btn-outline-primary-2 btn-order btn-block">
                                            Update Password
                                        </button>
                                    </center>
                                </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection

@section('script')

@endsection
