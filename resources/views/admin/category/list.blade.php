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
            <h1>Category :</h1>
          </div>
          <div class="col-sm-6" style="text-align: right;">
            <a href="{{ url('admin/category/add') }}" class="btn btn-primary">Add New Category</a>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      
          <!-- general form elements -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Search Category</h3>
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
                  <a href="{{ url('admin/admin/list') }}" style="margin-top: 30px" class="btn btn-success">Reset</a>
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
                      <th>Image</th>
                      <th>Name</th>
                      <th>Slug</th>
                      <th>Meta Title</th>
                      <th>Meta Description</th>
                      <th>Meta Keywords</th>
                      <th>Created by</th>
                      <th>Home Page</th>
                      <th>Nav Menu</th>
                      <th>Status</th>
                      <th>Created Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($getRecord as $value)
                     <tr>
                      <td>{{ $value->id }}</td>
                      <td>  
                        @if(!empty($value->getImage()))
                        <img src="{{ $value->getImage() }}" style="height: 40px;">
                        @endif
                      </td>
                      <td>{{ $value->name }}</td>
                      <td>{{ $value->slug }}</td>
                      <td>{{ $value->meta_title }}</td>
                      <td>{{ $value->meta_description }}</td>
                      <td>{{ $value->meta_keywords }}</td>
                      <td>{{ $value->created_by_name }}</td>
                      <td>{{ ($value->is_home == 1) ? 'Yes' : 'No'  }}</td>
                      <td>{{ ($value->is_menu == 1) ? 'Yes' : 'No'  }}</td>
                      <td>{{ ($value->status == 0) ? 'Active' : 'Inactive'  }}</td>
                      <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td>
                      <td>
                        <a href="{{ url('admin/category/edit/'.$value->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ url('admin/category/delete/'.$value->id) }}" class="btn btn-danger">Delete</a>
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
