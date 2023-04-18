@extends("admin.layout.template")
@section('page_title')
All Category | Rawon E-Commerce

@endsection
@section('content')
<div class="container mt-5">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Category</h4>
    <div class="card">
        <h5 class="card-header">Available Category Information</h5>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{session()->get('message')}}
            </div>
        @endif
        <div class="table-responsive text-nowrap">
          <table class="table table-light">
            <thead>
              <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Sub Category</th>
                <th>Product</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($categories as $category)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$category->category_name}}</td>
                        <td>{{$category->subcategory_count}}</td>
                        <td>{{$category->slug}}</td>
                        <td class="d-flex">
                            <a href="{{route('editcategory', $category->id)}}" class="btn btn-warning me-2">Edit</a>
                            <a href="{{route('deletecategory', $category->id)}}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
</div>
@endsection
