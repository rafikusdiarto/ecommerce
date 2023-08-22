@extends('admin.layout.template')
@section('page_title')
All Discount | Rawon E-Commerce
@endsection
@section('content')
    <div class="container mt-5">
        <div class="title d-flex justify-centent-between mb-3">
            <div class="col">
                <h4 class="fw-bold"><span class="text-muted fw-light">Page/</span> All Discount</h4>
            </div>
            <div class="col">
              <a href="{{route('adddiscount')}}" type="submit" class="btn btn-primary float-end">Add Discount<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg></a></a>
            </div>
        </div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{session()->get('message')}}
            </div>
        @endif
        <div class="card mt-5">
        <h5 class="card-header">Table Discount</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
            <thead>
                <tr>
                <th>No</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Percent Discount</th>
                <th>Price Discount</th>
                <th>Active Period</th>
                <th>Status</th>
                <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <?php $no = 1 ;?>
                @foreach ($getDiscount as $item)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$item->product->product_name}}</td>
                        <td>@currency($item->product->price)</td>
                        <td>{{$item->percent_discount}}</td>
                        <td>{{$item->price_discount}}</td>
                        <td>{{$item->active_period}}</td>
                        @if ($item->status == 'active')
                            <td><span class="badge bg-label-primary me-1">Active</span></td>
                        @else
                            <td><span class="badge bg-label-danger me-1">Non Active</span></td>
                        @endif
                        <td>
                            <a href="{{route('editdiscount', $item->id)}}" class="btn btn-warning">Edit</a>
                            <a onclick="return confirm('apakah anda yakin menghapus data')" class="btn btn-danger text-white">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        </div>
        <!--/ Responsive Table -->
    </div>

@endsection


