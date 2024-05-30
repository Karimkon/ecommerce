@extends('admin.layouts.app')
@section('style')
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>System Settings</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            @include('admin.layouts._message')
            <!-- general form elements -->
            <div class="card card-primary">
              <form method="post" action="" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">

                <div class="form-group">
                    <label>Website Name <span style="color: red">*</span></label>
                    <input type="text" class="form-control" value="{{ $getRecord->website_name }}" name="website_name">
                </div>

                  <div class="form-group">
                    <label>Logo <span style="color: red">*</span></label>
                    <input type="file" class="form-control" name="logo">
                    @if(!empty($getRecord->getLogo()))
                    <img src="{{ $getRecord->getLogo() }}" style="width: 100px;">
                    @endif
                  </div>

                  <div class="form-group">
                    <label>Fevicon <span style="color: red">*</span></label>
                    <input type="file" class="form-control" name="fevicon">
                    @if(!empty($getRecord->getFevicon()))
                    <img src="{{ $getRecord->getFevicon() }}" style="width: 50px;">
                    @endif
                  </div>

                  <div class="form-group">
                    <label>Footer Description <span style="color: red">*</span></label>
                    <input value="{{ $getRecord->footer_description }}" name="footer_description" class="form-control">
                  </div>

                  
                  <div class="form-group">
                    <label>Footer Payment Icon <span style="color: red">*</span></label>
                    <input type="file" class="form-control" name="footer_payment_icon">
                    @if(!empty($getRecord->getFooterPayment()))
                    <img src="{{ $getRecord->getFooterPayment() }}" style="width: 100px;">
                    @endif
                  </div>

                  <hr />

                  <div class="form-group">
                    <label>Address <span style="color: red">*</span></label>
                    <input value="{{ $getRecord->address }}" name="address" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Phone (Airtel)<span style="color: red">*</span></label>
                    <input value="{{ $getRecord->phone }}" type="text" name="phone" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Phone (MTN) <span style="color: red">*</span></label>
                    <input value="{{ $getRecord->phone_two }}" type="text" name="phone_two" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Admin Email<span style="color: red">*</span></label>
                    <input type="text" name="submit_email" value="{{ $getRecord->submit_email }}" class="form-control">
                  </div>


                  <div class="form-group">
                    <label>Email One<span style="color: red">*</span></label>
                    <input type="text" name="email" value="{{ $getRecord->email }}" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Email Two<span style="color: red"></span></label>
                    <input type="text" name="email_two" value="{{ $getRecord->email_two }}" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Working Hours<span style="color: red"></span></label>
                    <input type="text" name="working_hours" value="{{ $getRecord->working_hours }}" class="form-control">
                  </div>

                  <hr />

                  <div class="form-group">
                    <label>Facebook Link<span style="color: red"></span></label>
                    <input type="text" name="facebook_link" value="{{ $getRecord->facebook_link }}" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Twiter Link<span style="color: red"></span></label>
                    <input type="text" name="twiter_link" value="{{ $getRecord->twiter_link }}" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Instagram Link<span style="color: red"></span></label>
                    <input type="text" name="instagram_link" value="{{ $getRecord->instagram_link }}" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Youtube Link<span style="color: red"></span></label>
                    <input type="text" name="youtube_link" value="{{ $getRecord->youtube_link }}" class="form-control">
                  </div>


                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->



          </div>
          <!--/.col (left) -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('script')

@endsection
