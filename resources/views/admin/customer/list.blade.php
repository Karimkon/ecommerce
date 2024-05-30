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
            <h1>Customers List : (  )</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">


          <!-- general form elements -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Search Customers</h3>
            </div>
            <form method="get" action="">
              <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-3">
                        <label>ID</label>
                        <input type="text" class="form-control" name="id" value="{{ Request::get('id') }}" placeholder="Enter ID">
                      </div>
                      <div class="form-group col-md-3">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="name" value="{{ Request::get('name') }}" placeholder="Enter Name">
                      </div>

                        <div class="form-group col-md-3">
                          <label>Email</label>
                          <input type="text" class="form-control" name="email" value="{{ Request::get('email') }}" placeholder="Enter Email">
                        </div>

                        <div class="form-group col-md-3">
                            <label>From Date</label>
                            <input type="date" style="padding: 6px;" class="form-control" name="from_date" value="{{ Request::get('city') }}" placeholder="Enter city">
                          </div>

                          <div class="form-group col-md-3">
                            <label>To Date</label>
                            <input type="date" style="padding: 6px;" class="form-control" name="to_date" value="{{ Request::get('city') }}" placeholder="Enter city">
                          </div>

                <div class="form-group col-md-3">
                  <button class="btn btn-primary" type="submit" style="margin-top: 30px">Search</button>
                  <a href="{{ url('admin/customer/list') }}" style="margin-top: 30px" class="btn btn-success">Reset</a>
                </div>
                </div>

            </div>
            </form>
          </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">

            @include('admin.layouts._message')

          </div>
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card">

              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Status</th>
                      <th>Created Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($getRecord as $value)
                    <tr>
                      <td>{{ $value->id }}</td>
                      <td>{{ $value->name }}</td>
                      <td>{{ $value->email }}</td>
                      <td>{{ ($value->status == 0) ? 'Active' : 'Inactive' }}</td>
                      <td>{{ date('d-m-Y H:i A', strtotime($value->created_at)) }}</td>
                      <td>
                        <a href="{{ url('admin/customer/delete/'.$value->id) }}" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>

                    @endforeach
                  </tbody>
                </table>
                <div style="padding: 10px; float:right">
                    {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
              </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


          </div>
          <!-- /.col -->
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('script')

@endsection
