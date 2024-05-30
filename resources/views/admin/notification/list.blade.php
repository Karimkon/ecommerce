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
            <h1>Notifications</h1>
          </div>
          <div class="col-sm-6" style="text-align: right;">
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
              <div class="card-body p-0">
                <table class="table">
                 
                  <tbody>
                   @foreach ($getRecord as $value)
                     <tr>
                      <td>
                      <a style="color: #000; {{ empty($value->is_read) ? 'font-weight: bold' : '' }}" href="{{ $value->url }}?notification_id={{ $value->id }}">
                        {{ $value->message }}
                      </a>
                      <div>
                          <small>{{ date('d-m-Y h:i A', strtotime($value->created_at)) }}</small>
                      </div>
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
