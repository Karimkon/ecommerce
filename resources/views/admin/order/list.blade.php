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
            <h1>Customers' Orders <strong>Total: ({{ $getRecord->total() }})</strong></h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">


          <!-- general form elements -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Search Customers' Orders </h3>
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
                  <input type="text" class="form-control" name="first_name" value="{{ Request::get('first_name') }}" placeholder="Enter first name">
                </div>

                <div class="form-group col-md-3">
                    <label>Last Name</label>
                    <input type="text" class="form-control" name="last_name" value="{{ Request::get('last_name') }}" placeholder="Enter last name">
                  </div>

                  <div class="form-group col-md-3">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value="{{ Request::get('email') }}" placeholder="Enter Email">
                  </div>

                  <div class="form-group col-md-3">
                    <label>Country</label>
                    <input type="text" class="form-control" name="country" value="{{ Request::get('country') }}" placeholder="Enter Country">
                  </div>

                  <div class="form-group col-md-3">
                    <label>City</label>
                    <input type="text" class="form-control" name="city" value="{{ Request::get('city') }}" placeholder="Enter city">
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
                  <a href="{{ url('admin/order/list') }}" style="margin-top: 30px" class="btn btn-success">Reset</a>
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
                      <th>Order Number</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>City</th>
                      <th>State</th>
                      <th>PostCode</th>
                      <th>Contact</th>
                      <th>Email</th>
                      <th>Discount Code</th>
                      <th>Discount Amount</th>
                      <th>Shipping Amount</th>
                      <th>Total Amount</th>
                      <th>Payment Method</th>
                      <th>Status</th>
                      <th>Created Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($getRecord as $value)
                     <tr>
                      <td>{{ $value->id }}</td>
                      <td>{{ $value->order_number }}</td>
                      <td>{{ $value->first_name }} {{ $value->last_name }}</td>
                      <td>{{ $value->address_one }} <br /> {{ $value->address_two }}</td>
                      <td>{{ $value->city }}</td>
                      <td>{{ $value->state }}</td>
                      <td>{{ $value->postcode }}</td>
                      <td>{{ $value->phone }}</td>
                      <td>{{ $value->email }}</td>
                      <td>{{ $value->discount_code }}</td>
                      <td>{{ number_format($value->discount_amount, 2) }}</td>
                      <td>{{ number_format($value->shipping_amount, 2) }}</td>
                      <td>{{ number_format($value->total_amount, 2) }}</td>
                      <td style="text-transform:capitalize;">{{ $value->payment_method }}</td>
                      <td>
                        <select style="width: 100px;" class="form-control ChangeStatus" id="{{ $value->id }}">
                            <option {{ $value->status == 0 ? 'selected' : '' }} value="0">Pending</option>
                            <option {{ $value->status == 1 ? 'selected' : '' }} value="1">In Progress</option>
                            <option {{ $value->status == 2 ? 'selected' : '' }} value="2">Delivered </option>
                            <option {{ $value->status == 3 ? 'selected' : '' }} value="3">Completed </option>
                            <option {{ $value->status == 4 ? 'selected' : '' }} value="4">Cancelled</option>
                        </select>
                      </td>
                      <td>{{ date('d-m-Y h:i A', strtotime($value->created_at)) }}</td>
                      <td>
                        <a href="{{ url('admin/order/detail/'.$value->id) }}" class="btn btn-primary">Details</a>
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
<script type="text/javascript">
    $('body').delegate('.ChangeStatus', 'change', function(){
        var status = $(this).val();
        var order_id = $(this).attr('id');

        $.ajax({
                type: "GET",
                url: "{{ url('admin/order_status') }}",
                data: {
                    status : status,
                    order_id : order_id
                },
                dataType: "json",
                success: function(data) {
                    alert(data.message);
                }
            });
    });
</script>
@endsection
