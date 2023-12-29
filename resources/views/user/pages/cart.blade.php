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

        @if (!$getOrder->isEmpty())
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
                                    <th></th>
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
                                            <a href="{{route('removecart', $item->id)}}"><i class="fa fa-trash"></i></a>
                                        </td>
                                        <td class="">
                                            <div class="form-check">
                                                <input class="form-check-input" style="height: 27px" name="selected_items[]" value="{{ $item->id }}" type="checkbox"/>
                                              </div>
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
                                <div class="cart-clear">
                                    <button type="submit" onclick="return confirm('yakin checkout?')" class="bg-info">Continue Shopping</button>
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

        @else
            <div class="empty-cart-area pb-100px pt-100px">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="empty-text-contant text-center">
                                <i class="pe-7s-shopbag"></i>
                                <h3>There are no more items in your cart</h3>
                                <a class="empty-cart-btn" href="{{url('/user')}}">
                                    <i class="fa fa-arrow-left"> </i> Continue shopping
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
@if(session("success"))
<script>
    Swal.fire("Sukses", `{{ session("success") }}`, "success");
</script>
@endif
@if(session("successDelete"))
<script>
    Swal.fire("Sukses", `{{ session("successDelete") }}`, "successDelete");
</script>
@endif
@endsection
