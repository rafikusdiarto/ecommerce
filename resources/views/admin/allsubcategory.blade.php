@extends("admin.layout.template")
@section('page_title')
All Sub Category | Rawon E-Commerce
@endsection
@section('content')
<div class="container mt-5">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page /</span> All Sub Category</h4>

    <div class="card">
        <h5 class="card-header">Available Sub Category Information</h5>
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
                <th>Sub Category Name</th>
                <th>Category Id</th>
                <th>Category Name</th>
                <th>Sub Category Product</th>
                <th>Slug</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($allsubcategories as $allsubcat)
                <tr>
                    <td>{{$allsubcat->id}}</td>
                    <td>{{$allsubcat->subcategory_name}}</td>
                    <td>{{$allsubcat->category_id}}</td>
                    <td>{{$allsubcat->category_name}}</td>
                    <td>{{$allsubcat->product_count}}</td>
                    <td>{{$allsubcat->slug}}</td>
                    <td>
                        <a href="{{route('editsubcategory', $allsubcat->id)}}" class="btn btn-warning">Edit</a>
                        <a href="{{route('deletesubcategory', $allsubcat->id, $allsubcat->category_id)}}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data?')">Delete</a>
                    </td>
                </tr>

                @endforeach
            </tbody>
          </table>
        </div>
      </div>
</div>
@endsection
