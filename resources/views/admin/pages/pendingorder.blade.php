@extends("admin.layout.template")
@section('page_title')
Pending Order |  E-Commerce

@endsection
@section('content')
<div class="container mt-5">
    <div class="title d-flex justify-centent-between mb-3">
        <div class="col">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page /</span> All Pending Order</h4>
        </div>
    </div>
    <div class="card clearfix">
        <h5 class="card-header">All Product Order</h5>
        <div class="table-responsive text-nowrap">
          <table class="table table-light">
            <thead>
              <tr>
                <th>NO</th>
                <th>Customer Name</th>
                <th>Product Name</th>
                <th>Image</th>
                <th>Total Quantity</th>
                <th>Total Price</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <?php $no= 1?>
                @foreach ($getOrder as $item)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$item->user->name}}</td>
                        <td>{{$item->product->product_name}}</td>
                        <td>
                            <img style="width: 50px;height:50px" src="{{asset($item->product->product_img)}}" alt="">
                        </td>
                        <td>{{$item->total_quantity}}</td>
                        <td>@currency($item->total_price)</td>
                        <td>
                            <div class="d-flex">
                                <form action="{{url('/admin/pending-order/acc/'.$item->id.'')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <input type="hidden" name="id" value="{{$item->id}}">
                                    <input type="hidden" name="product_id" value="{{$item->product_id}}">
                                    <input type="hidden" name="quantity" value="{{$item->product->quantity}}">
                                    <input type="hidden" name="total_quantity" value="{{$item->total_quantity}}">
                                    <button class="btn btn-info text-white me-2" type="submit" onclick="return confirm('apakah anda yakin acc order')">Accept</button>
                                </form>
                                <form action="{{url('/admin/pending-order/reject/'.$item->id.'')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <input type="hidden" name="id" value="{{$item->id}}">
                                    <button onclick="return confirm('apakah anda yakin reject order')" type="submit" class="btn btn-danger text-white">Reject</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
    </div>

    <div class="card clearfix mt-5">
        <h5 class="card-header">Status Order</h5>
        <div class="table-responsive text-nowrap">
          <table class="table table-light">
            <thead>
              <tr>
                <th>NO</th>
                <th>Customer Name</th>
                <th>Product Name</th>
                <th>Image</th>
                <th>Total Quantity</th>
                <th>Total Price</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <?php $no= 1?>
                @foreach ($getOrderAcc as $item)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$item->user->name}}</td>
                        <td>{{$item->product->product_name}}</td>
                        <td>
                            <img style="width: 50px;height:50px" src="{{asset($item->product->product_img)}}" alt="">
                        </td>
                        <td>{{$item->total_quantity}}</td>
                        <td>@currency($item->total_price)</td>
                        <td>
                            @if ($item->status == 'paid')
                                <button class="btn btn-success text-white me-2" type="submit" disabled>Order Accepted</button>
                            @elseif ($item->status == 'reject')
                                <button class="btn btn-danger text-white me-2" type="submit" disabled>Order Reject</button>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
    </div>
</div>
@if(session("success"))
<script>
    Swal.fire("Sukses", `{{ session("success") }}`, "success");
</script>
@endif

@if(session("failed"))
<script>
    Swal.fire("Reject", `{{ session("failed") }}`, "error");
</script>
@endif
@endsection
