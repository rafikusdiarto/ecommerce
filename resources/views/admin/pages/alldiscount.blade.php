@extends('admin.layout.template')
@section('page_title')
All Discount | Rawon E-Commerce
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

        <div class="card">
        <h5 class="card-header">Table Basic</h5>
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
                <tr>
                    <td>1</td>
                    <td>Laptop</td>
                    <td>Rp. 1000.0000</td>
                    <td>20%</td>
                    <td>Rp. 800.000</td>
                    <td>09/08/2023</td>
                    <td><span class="badge bg-label-primary me-1">Active</span></td>
                    <td>
                        <a href="{{route('editdiscount')}}" class="btn btn-warning">Edit</a>
                        <a onclick="return confirm('apakah anda yakin menghapus data')" class="btn btn-danger text-white">Delete</a>
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
        </div>
        <!--/ Responsive Table -->
    </div>

@endsection


