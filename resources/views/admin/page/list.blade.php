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
            <h1>Page List</h1>
          </div>
          <div class="col-sm-6" style="text-align: right;">
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">


          <!-- general form elements -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Search Discount Code</h3>
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
                  <a href="{{ url('admin/discount_code/list') }}" style="margin-top: 30px" class="btn btn-success">Reset</a>
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
                       <th>Title</th>
                       <th>Date updated</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($getRecord as $value)
                     <tr>
                      <td>{{ $value->id }}</td>
                      <td>{{ $value->name }}</td>
                      <td>{{ $value->title }}</td>
                      <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td>
                      <td>
                        <a href="{{ url('admin/page/edit/'.$value->id) }}" class="btn btn-primary">Edit</a>
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
