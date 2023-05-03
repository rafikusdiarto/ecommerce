@extends("admin.layout.template")
@section('page_title')
    Add Product | Rawon E-Commerce
@endsection
@section('content')
<div class="container mt-5">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Add Product</h4>
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Add New Product</h5>
            </div>
            <div class="card-body">
              <form action="{{route('storeproduct')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Product Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_name" placeholder="Electronics" name="product_name" />
                    @error('product_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>&nbsp; &nbsp; &nbsp;{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Product Price</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="price" placeholder="12" name="price" />
                    @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>&nbsp; &nbsp; &nbsp;{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Product Quantity</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="quantity" name="quantity" placeholder="1000"/>
                    @error('quantity')
                    <span class="invalid-feedback" role="alert">
                        <strong>&nbsp; &nbsp; &nbsp;{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Product Short Description</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_short_des" name="product_short_des" />
                    @error('product_short_des')
                    <span class="invalid-feedback" role="alert">
                        <strong>&nbsp; &nbsp; &nbsp;{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Product Long Description</label>
                  <div class="col-sm-10">
                      <textarea class="form-control" id="product_long_des" name="product_long_des" cols="20" rows="10"></textarea>
                        @error('product_long_des')
                        <span class="invalid-feedback" role="alert">
                            <strong>&nbsp; &nbsp; &nbsp;{{ $message }}</strong>
                        </span>
                        @enderror
                  </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Select Category</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" id="product_category_id" name="product_category_id">
                            <option selected>Select Product Category</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                        @error('product_category_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>&nbsp; &nbsp; &nbsp;{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Select Sub Category</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" id="product_subcategory_id" name="product_subcategory_id">
                            <option selected>Select Product Sub Category</option>
                            @foreach ($subcategories as $subcat)
                                <option value="{{$subcat->id}}">{{$subcat->subcategory_name}}</option>
                            @endforeach
                        </select>
                        @error('product_subcategory_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>&nbsp; &nbsp; &nbsp;{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Upload Product Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="product_img" name="product_img" />
                        @error('product_img')
                        <span class="invalid-feedback" role="alert">
                            <strong>&nbsp; &nbsp; &nbsp;{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row justify-content-end">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Add Product</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Basic with Icons -->

      </div>
</div>@endsection
