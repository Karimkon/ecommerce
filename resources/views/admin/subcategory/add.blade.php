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
            <h1>Add New Sub Category</h1>
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
                        <label>Category Name <span style="color: red">*</span></label>
                        <select name="category_id" class="form-control">
                            <option value="">Select</option>
                            @foreach ($getCategory as $value)
                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                                
                            @endforeach
                        </select>
                      </div>

                  <div class="form-group">
                    <label>Sub Category Name <span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" required placeholder="Enter Category Name">
                  </div>

                  <div class="form-group">
                    <label>Slug<span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="slug" value="{{ old('slug') }}" required placeholder="Enter Slug Ex. URL">
                    <div style="color: red">{{ $errors->first('slug') }}</div>
                  </div>
                  
                  <div class="form-group">
                    <label>Status<span style="color: red">*</span></label>
                  <select class="form-control" name="status" id="">
                  <option value="0">Active</option>
                  <option value="1">Inactive</option>  
                  </select>               
                  </div> 
                 
                  <hr>

                  <div class="form-group">
                    <label>Meta Title<span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="meta_title" value="{{ old('meta_title') }}" required placeholder="Enter Meta Title">
                  </div>

                  <div class="form-group">
                    <label>Meta Description</label>
                    <textarea name="meta_description" class="form-control" placeholder="Meta Description">{{ old('meta_description') }}</textarea>
                  </div>

                  <div class="form-group">
                    <label>Meta Keywords</label>
                    <input type="text" class="form-control" name="meta_keywords" value="{{ old('meta_keywords') }}" required placeholder="Enter Meta Keywords ">
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
