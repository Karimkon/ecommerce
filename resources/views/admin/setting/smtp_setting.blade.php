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
            <h1>SMTP Configurations</h1>
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
                    <input type="text" class="form-control" value="{{ $getRecord->name }}" name="name" required>
                </div>

                <div class="form-group">
                    <label>Mail Mailer <span style="color: red">*</span></label>
                    <input type="text" class="form-control" value="{{ $getRecord->mail_mailer }}" name="mail_mailer" required>
                </div>

                <div class="form-group">
                    <label>Mail Host <span style="color: red">*</span></label>
                    <input type="text" class="form-control" value="{{ $getRecord->mail_host }}" name="mail_host" required>
                </div>

                <div class="form-group">
                    <label>Mail Port <span style="color: red">*</span></label>
                    <input type="text" class="form-control" value="{{ $getRecord->mail_port }}" name="mail_port" required>
                </div>

                <div class="form-group">
                    <label>Mail Username <span style="color: red">*</span></label>
                    <input type="text" class="form-control" value="{{ $getRecord->mail_username }}" name="mail_username" required>
                </div>

                <div class="form-group">
                    <label>Mail Password <span style="color: red">*</span></label>
                    <input type="text" class="form-control" value="{{ $getRecord->mail_password }}" name="mail_password" required>
                </div>

                <div class="form-group">
                    <label>Mail Encryption <span style="color: red">*</span></label>
                    <input type="text" class="form-control" value="{{ $getRecord->mail_encryption }}" name="mail_encryption" required>
                </div>


                <div class="form-group">
                    <label>Mail From Address <span style="color: red">*</span></label>
                    <input type="text" class="form-control" value="{{ $getRecord->mail_from_address }}" name="mail_from_address" required>
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
