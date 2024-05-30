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
            <h1>Edit New Shipping Charge</h1>
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
                    <label> Name <span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="name" value="{{ old('name', $getRecord->name) }}" required placeholder="Enter Name">
                  </div>

                  <div class="form-group">
                    <label> Description <span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="description" value="{{ old('description', $getRecord->description) }}" required placeholder="Modify Description">
                  </div>

                  <div class="form-group">
                    <label> Amount <span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="price" value="{{ old('price', $getRecord->price) }}" required placeholder="Enter amount">
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
                  <button type="submit" class="btn btn-primary">Update</button>
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
