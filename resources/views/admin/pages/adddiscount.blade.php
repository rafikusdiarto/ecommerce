@extends('admin.layout.template')
@section('page_title')
    Add Discount | E-Commerce
@endsection
@section('content')
    <div class="container mt-5">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Add Discount</h4>
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Add Discount</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('storediscount')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Select Product</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" id="select_product"
                                        name="select_product">
                                        <option selected>Select Product</option>
                                        @foreach ($getProduct as $item)
                                            <option value="{{ $item->id }}">{{ $item->product_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('select_product')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>&nbsp; &nbsp; &nbsp;{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Percent Discount (%)</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="percent_discount"
                                        name="percent_discount" placeholder="50" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Active Period</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="active_period"
                                        name="active_period" />
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                  <button type="submit" class="btn btn-primary">Add Discount</button>
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
