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
            <h1>Add New discount code</h1>
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
            <!-- general form elements -->
            <div class="card card-primary">
              <form method="post" action="" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label> Code <span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" required placeholder="Enter Color Name">
                  </div>

                  <div class="form-group">
                    <label>Type<span style="color: red">*</span></label>
                  <select class="form-control" name="type" id="">
                  <option {{ (old('type') == 'Amount') ? 'selected' : '' }} value="Amount">AMOUNT</option>
                  <option {{ (old('type') == 'Percent') ? 'selected' : '' }} value="Percent">Percent</option>
                  </select>
                  </div>

                  <div class="form-group">
                    <label> Amount / Percentage <span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="percent_amount" value="{{ old('percent_amount') }}" required placeholder="Enter percent amount">
                  </div>


                  <div class="form-group">
                    <label> Expiry date<span style="color: red">*</span></label>
                    <input type="date" class="form-control" name="expire_date" value="{{ old('expire_date') }}">
                  </div>



                  <div class="form-group">
                    <label>Status<span style="color: red">*</span></label>
                  <select class="form-control" name="status" id="">
                    <option {{ (old('status') == 0) ? 'selected' : '' }} value="0">Active</option>
                    <option {{ (old('status') == 1) ? 'selected' : '' }} value="1">Inactive</option>
                  </select>
                  </div>

                </div>
                <!-- /.card-body -->

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
