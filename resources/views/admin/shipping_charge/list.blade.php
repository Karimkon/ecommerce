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
            <h1>Shipping Charge List</h1>
          </div>
          <div class="col-sm-6" style="text-align: right;">
            <a href="{{ url('admin/shipping_charge/add') }}" class="btn btn-primary">Add New Shipping Charge</a>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">


          <!-- general form elements -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Search Shipping Charge</h3>
            </div>
            <form method="get" action="">
              <div class="card-body">
                <div class="row">
                <div class="form-group col-md-3">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" value="{{ Request::get('name') }}" placeholder="Enter Name">
                </div>

                <div class="form-group col-md-3">
                  <button class="btn btn-primary" type="submit" style="margin-top: 30px">Search</button>
                  <a href="{{ url('admin/shipping_charge/list') }}" style="margin-top: 30px" class="btn btn-success">Reset</a>
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
              <div class="card-body p-0" style="overflow: auto;">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                       <th>Name</th>
                       <th>Description</th>
                       <th>Amount</th>
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
                      <td>{{ $value->description }}</td>
                     <td>{{ $value->price }}</td>
                     <td>{{ ($value->status == 0) ? 'Active' : 'Inactive'  }}</td>
                      <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td>
                      <td>
                        <a href="{{ url('admin/shipping_charge/edit/'.$value->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ url('admin/shipping_charge/delete/'.$value->id) }}" class="btn btn-danger">Delete</a>
                      </td>
                     </tr>
                   @endforeach
                  </tbody>
                </table>
                <div style="padding: 10px; float:right">
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
