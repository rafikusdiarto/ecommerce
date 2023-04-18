@extends("admin.layout.template")
@section('page_title')
    Edit Product Image | Rawon E-Commerce
@endsection
@section('content')
<div class="container mt-5">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Edit Image</h4>
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Edit Product Image</h5>
            </div>
            <div class="card-body">
              <form action="{{route('updateproductimg')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{$product_info->id}}" name="id">
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Upload Product Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="product_img" name="product_img" />
                      </div>
                </div>

                <div class="row justify-content-end">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Update Image</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Basic with Icons -->

      </div>
</div>@endsection
