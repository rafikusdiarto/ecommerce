@extends("admin.layout.template")
@section('page_title')
All Product | Rawon E-Commerce

@endsection
@section('content')
<div class="container mt-5">
    <div class="title d-flex justify-centent-between mb-3">
        <div class="col">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page /</span> All Product</h4>
        </div>
        <div class="col">
          <a href="{{route('addproduct')}}" type="submit" class="btn btn-primary float-end">Add Product <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
          </svg></a>
        </div>
    </div>
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{session()->get('message')}}
    </div>
    @endif
    <div class="card clearfix">
        <h5 class="card-header">Available All Product</h5>
        <div class="table-responsive text-nowrap">
          <table class="table table-light">
            <thead>
              <tr>
                <th>NO</th>
                <th>Product Name</th>
                <th>Image</th>
                <th>Price</th>
                <th>Slug</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <?php $no= 1?>
                @foreach ($products as $product)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$product->product_name}}</td>
                        <td>
                            <img style="width: 50px;height:50px" src="{{asset($product->product_img)}}" alt="">
                            <a href="{{route('editproductimg', $product->id)}}" class="btn btn-warning">Edit</a>

                        </td>
                        <td>@currency($product->price)</td>
                        <td>{{$product->slug}}</td>
                        <td>
                            <a href="{{route('editproduct', $product->id)}}" class="btn btn-warning">Edit</a>
                            <a href="{{route('deleteproduct', $product->id)}}" onclick="return confirm('apakah anda yakin menghapus data')" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
</div>@endsection
