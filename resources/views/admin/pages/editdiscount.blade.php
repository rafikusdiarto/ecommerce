@extends('admin.layout.template')
@section('page_title')
Edit Discount |  E-Commerce
@endsection
@section('content')
<div class="container mt-5">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Edit Discount</h4>
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Edit Discount</h5>
            </div>
            <div class="card-body">
              <form method="POST" action="{{route('updatediscount', $discountInfo->id)}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" class="form-control" value="{{$discountInfo->id}}" name="discount_id" />

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Product Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$discountInfo->product->product_name}}" id="product_name" name="product_name" placeholder="50" readonly/>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Product Price</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" value="{{$discountInfo->product->price}}" id="price" name="price" placeholder="50" readonly/>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Price Discount</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" value="{{$discountInfo->price_discount}}" id="price_discount" name="price_discount" placeholder="50" readonly/>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Percent Discount (%)</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" value="{{$discountInfo->percent_discount}}" id="percent_discount" name="percent_discount" placeholder="50"/>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Active Period</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" value="{{$discountInfo->active_period}}" id="active_period" name="active_period" />
                  </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Status</label>
                    <div class="col-sm-10">
                        <select class="form-select text-uppercase" aria-label="Default select example" id="status" name="status">
                            <option selected>{{$discountInfo->status}}</option>
                                <option>Active</option>
                                <option>Non Active</option>
                          </select>
                    </div>
                </div>

                <div class="row justify-content-end">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Update Discount</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Basic with Icons -->

      </div>
</div>
@endsection
