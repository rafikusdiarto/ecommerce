@extends('user.layouts.app')
@section('content')
@if (session()->has('message'))
        <div class="alert alert-success">
            {{session()->get('message')}}
        </div>
    @endif
<div class="cart-main-area pt-100px pb-100px">
    <div class="container">
        <h3 class="cart-page-title">Your cart items</h3>
        @if (session()->has('success'))
        <div class="alert alert-success">
            semua order sedang diproses
        </div>
        @endif
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <form action="{{url('/user/checkout-order')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="table-content table-responsive cart-table-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Total Order</th>
                                    <th>Total Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($getOrder as $item)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#"><img class="img-responsive ml-15px" src="{{asset($item->product->product_img)}}" alt="" /></a>
                                        </td>
                                        <td class="product-name"><a href="#">{{$item->product->product_name}}</a></td>
                                        <td class="product-price-cart"><span class="amount">@currency($item->product->price)</span></td>
                                        <td class="product-quantity">
                                            <span>{{$item->total_quantity}}</span>
                                        </td>
                                        <td class="product-subtotal">@currency($item->total_price)</td>
                                        <td class="product-remove">
                                            <a  href="{{route('removecart', $item->id)}}" onclick="confirm('yakin menghapus dari keranjang ?')"><i class="fa fa-trash"></i></a>
                                        </td>
                                        <div>
                                            <input type="hidden" value="{{$item->id}}" name="id">
                                        </div>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-shiping-update-wrapper">
                                <div class="cart-shiping-update">
                                    <button type="submit" onclick="confirm('yakin checkout?')" class="btn btn-primary text-black">Continue Shopping</button>
                                </div>
                                <div class="cart-clear">
                                    <a>Total Price : @currency($countPrice)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@if(session("success"))
<script>
    Swal.fire("Sukses", `{{ session("success") }}`, "success");
</script>
@endif
@endsection
