@extends('admin.layouts.app')
@section('style')
<style type="text/css">
    .form-group {
        margin-bottom: 3px;
    }
</style>
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Order Details</h1>
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

                <div class="card-body">
                    <div class="form-group">
                    <label># : <span style="font-weight: normal;">{{ $getRecord->id }}</span> </label>
                    </div>

                    <div class="form-group">
                    <label>Order Number: <span style="font-weight: normal;">{{ $getRecord->order_number }}</span> </label>
                    </div>


                    <div class="form-group">
                    <label>Transaction ID : <span style="font-weight: normal;"> {{ $getRecord->transaction_id }} </span></label>
                    </div>
                  <div class="form-group">
                    <label>Name : <span style="font-weight: normal;"> {{ $getRecord->first_name }} {{ $getRecord->last_name }}</span></label>
                  </div>

                  <div class="form-group">
                    <label>Company Name :  <span style="font-weight: normal;"> {{ $getRecord->company_name }} </span> </label>
                  </div>

                  <div class="form-group">
                    <label>Country : <span style="font-weight: normal;"> {{ $getRecord->country }} </span> </label>
                  </div>

                  <div class="form-group">
                    <label>Address : <span style="font-weight: normal;"> {{ $getRecord->address_one }} <br /> {{ $getRecord->address_two }} </span></label>
                  </div>

                  <div class="form-group">
                    <label>City : <span style="font-weight: normal;"> {{ $getRecord->city }} </span></label>
                  </div>

                  <div class="form-group">
                    <label>State : <span style="font-weight: normal;"> {{ $getRecord->state }}</span></label>
                  </div>

                  <div class="form-group">
                    <label>PostCode : <span style="font-weight: normal;"> {{ $getRecord->postcode }}  </span></label>
                  </div>

                  <div class="form-group">
                    <label>Contact : <span style="font-weight: normal;"> {{ $getRecord->phone }} </span></label>
                  </div>

                  <div class="form-group">
                    <label>Email : <span style="font-weight: normal;"> {{ $getRecord->email }} </span></label>
                  </div>

                  <div class="form-group">
                    <label>Discount Code : <span style="font-weight: normal;"> {{ $getRecord->discount_code }} </span></label>
                  </div>

                  <div class="form-group">
                    <label>Discount Amount : <span style="font-weight: normal;"> {{ number_format($getRecord->discount_amount, 2) }} </span></label>
                  </div>

                  <div class="form-group">
                    <label>Shipping : <span style="font-weight: normal;"> {{$getRecord->getShipping->name  }} </span></label>
                  </div>

                  <div class="form-group">
                    <label>Shipping Amount : <span style="font-weight: normal;"> {{ number_format($getRecord->shipping_amount, 2) }} </span></label>
                  </div>

                  <div class="form-group">
                    <label>Total Amount : <span style="font-weight: normal;"> {{ number_format($getRecord->total_amount, 2) }} </span></label>
                  </div>

                  <div class="form-group">
                    <label>Payment Method : <span style="font-weight: normal;"> {{ $getRecord->payment_method }} </span></label>
                  </div>

                  <div class="form-group">
                    <label>Note : <span style="font-weight: normal;"> {{ $getRecord->note }} </span></label>
                  </div>

                  <div class="form-group">
                    <label>Status :
                        @if($getRecord->status == 0)
                        Pending
                        @elseif($getRecord->status == 1)
                        In Progress
                        @elseif($getRecord->status == 2)
                        Delivered
                        @elseif($getRecord->status == 3)
                        Completed
                        @elseif($getRecord->status == 4)
                        Cancelled
                        @endif
                    </span></label>
                  </div>

                  <div class="form-group">
                    <label>Ordered On : <span style="font-weight: normal;"> {{ date('d-m-Y h:i A', strtotime($getRecord->created_at)) }} </span></label>
                  </div>



                </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
                <center>  <h3 class="card-title">Product Details List</h3></center>
            </div>

            <!-- /.card-header -->
            <div class="card-body p-0" style="overflow: auto;">
              <table class="table">
                <thead>
                  <tr>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>QTY</th>
                    <th>Price</th>
                    <th>Color Name</th>
                    <th>Size Name</th>
                    <th>Size Amount </th>
                    <th>Total Amount</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($getRecord->getItem as $item)

                    @php
                    $getProductImage = $item->getProduct->getImageSingle($item->getProduct->id);
                    @endphp

                        <tr>
                            <td>
                                <img style="width: 100px; height: 100px;" src="{{ $getProductImage->getLogo() }}" alt="">
                            </td>
                            <td>
                                <a target="_blank" href="{{ url($item->getProduct->slug) }}">{{ $item->getProduct->title }}</a>
                            </td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->color_name }}</td>
                            <td>{{ $item->size_name }}</td>
                            <td>{{ number_format($item->size_amount, 2) }}</td>
                            <td>{{ number_format($item->total_price, 2) }}</td>

                        </tr>
                    @endforeach
                </tbody>
              </table>
              <div style="padding: 10px; float:right">
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

@section('script')

@endsection
