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
            <h1>Blog :</h1>
          </div>
          <div class="col-sm-6" style="text-align: right;">
            <a href="{{ url('admin/blog/add') }}" class="btn btn-primary">Add New Blog</a>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">     

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
                      <th>Title</th>
                      <th>Meta Title</th>
                      <th>Meta Description</th>
                      <th>Meta Keywords</th>
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
                            <img src="{{ $value->getImage() }}" style="height: 50px; width: 50px; boarder-radius: 50px;">
                        @endif
                      </td>
                      <td>{{ $value->title }}</td>
                      <td>{{ $value->meta_title }}</td>
                      <td>{{ $value->meta_description }}</td>
                      <td>{{ $value->meta_keywords }}</td>
                      <td>{{ ($value->status == 0) ? 'Active' : 'Inactive'  }}</td>
                      <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td>
                      <td>
                        <a href="{{ url('admin/blog/edit/'.$value->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ url('admin/blog/delete/'.$value->id) }}" class="btn btn-danger">Delete</a>
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
