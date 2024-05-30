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
            <h1>Edit Page</h1>
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
                    <label>Name<span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="name" value="{{ $getRecord->name }}" placeholder="Enter Page Name">
                  </div>

                  <hr>

                  <div class="form-group">
                    <label>Title<span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="title" value="{{ $getRecord->title }}" placeholder="Enter Title">
                  </div>

                  <div class="form-group">
                    <label>Image<span style="color: red">*</span></label>
                    <input type="file" class="form-control" name="image">
                    @if (!empty($getRecord->getImage()))
                    <img style="width: 200px;" src="{{ $getRecord->getImage() }}">
                    @endif
                  </div>

                  <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control editor">{{ $getRecord->description }}</textarea>
                  </div>

                  <div class="form-group">
                    <label>Meta Title</label>
                    <input type="text" class="form-control" name="meta_title" value="{{ old('meta_title', $getRecord->meta_title) }}" placeholder="Enter Meta title ">
                  </div>

                  <div class="form-group">
                    <label>Meta Description</label>
                    <textarea name="meta_description" class="form-control editor" placeholder="Meta Description">{{ $getRecord->meta_description }}</textarea>
                  </div>

                  <div class="form-group">
                    <label>Meta Keywords</label>
                    <input type="text" class="form-control" name="meta_keywords" value="{{ old('meta_keywords', $getRecord->meta_keywords) }}" required placeholder="Enter Meta Keywords ">
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
