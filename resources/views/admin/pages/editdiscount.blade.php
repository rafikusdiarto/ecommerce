@extends('admin.layout.template')
@section('page_title')
Edit Discount | Rawon E-Commerce
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
              <form method="POST" enctype="multipart/form-data">
                <input type="hidden" class="form-control" value="" name="id" />

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Percent Discount (%)</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" value="" id="quantity" name="quantity" placeholder="50"/>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Active Period</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" value="" id="product_short_des" name="product_short_des" />
                  </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Status</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" id="category_id" name="category_id">
                            <option selected>Open this select menu</option>
                                <option value="active">Active</option>
                                <option value="nonactive">Non Active</option>
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
