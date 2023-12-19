@extends("admin.layout.template")
@section('page_title')
    Edit Product |  E-Commerce
@endsection
@section('content')

<div class="container mt-5">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Edit Product</h4>
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Edit New Product</h5>
            </div>
            <div class="card-body">
              <form action="{{route('updateproduct')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" class="form-control" value="{{$product_info->id}}" name="id" />
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Product Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$product_info->product_name}}" id="product_name" placeholder="Electronics" name="product_name" />
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Product Price</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" value="{{$product_info->price}}" id="price" placeholder="12" name="price" />
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Product Quantity</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" value="{{$product_info->quantity}}" id="quantity" name="quantity" placeholder="1000"/>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Product Short Description</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$product_info->product_short_des}}" id="product_short_des" name="product_short_des" />
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Product Long Description</label>
                  <div class="col-sm-10">
                      <input class="form-control" id="product_long_des" value="{{$product_info->product_long_des}}" name="product_long_des" cols="20" rows="10"></input>
                  </div>
                </div>

                <div class="row justify-content-end">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Update Product</button>
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
