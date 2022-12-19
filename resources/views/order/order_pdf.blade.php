<!DOCTYPE html>
<html lang="en">
<head>
   @include('includes.head')
</head>
<body>
    <h2>Elisabeth Cookies</h2>
    <div class="container mt-5 mb-5">
        @if (session()->has('success'))
            <div class="alert alert-success">
                <p>{{ session()->get('success') }}</p>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow p-3 mb-5 bg-body rounded" style="max-width: 100%">
                    <div class="card-body">
                        <div class="row gy-5">
                            <div class="col-6">
                                <label for="user_name" class="font-weight-bold">User Name</label>
                                <p>{{ $user_name }}</p>
                            </div>
                            <div class="col-6">
                                <label for="user_email" class="font-weight-bold">User Email</label>
                                <p>{{ $user_email }}</p>
                            </div>
                            <div class="col-6">
                                <label for="user_mobile" class="font-weight-bold">User Mobile Phone</label>
                                <p>{{ $user_mobile }}</p>
                            </div>
                            <div class="col-6">
                                <label for="product_name" class="font-weight-bold">Product</label>
                                <p>{{ $product_name }}</p>
                            </div>
                            <div class="col-6">
                                <label for="product_price" class="font-weight-bold">Product Price</label>
                                <p>Rp. {{ $product_price }},00</p>
                            </div>
                            <div class="col-6">
                                <label for="order_quantity" class="font-weight-bold">Order Quantity</label>
                                <p>{{ $quantity }} pcs</p>
                            </div>
                            <div class="col-6">
                                <label for="sub_total" class="font-weight-bold">Sub Total</label>
                                <p>Rp. {{ $sub_total }},00</p>
                            </div>
                            <div class="col-6">
                                <label for="created_at" class="font-weight-bold">Created At</label>
                                <p>{{ $created_at }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>