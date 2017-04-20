@extends('dashboard.framework')

@section('title')
    New Product
@endsection

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">New Product</li>
    </ol>
    <h2>New Product</h2>
    <br>
    <div class="col-md-10">
        <form method="POST" action="/product">
            {{ csrf_field() }}

            <div class="form-group row">
                <p class=" col-md-4"><label  for="product-name">Product Name</label></p>

                <div class="col-md-6">
                    <input id="product-name" type="text" name="product-name" class="form-control" placeholder="product name" required autofocus>
                </div>
            </div>

            <hr>

            <div class="form-group row">
                <p class="col-md-4"><label  for="Price">Product Price</label></p>

                <div class="col-md-6 input-group">
                    <span class="input-group-addon">$</span>
                    <input id="price" type="number" name="product-price" class="form-control" value="0" min="0" required>
                </div>
            </div>

            <hr>

            <div class="form-group row">
                <p class="col-md-4"><label  for="product-name">Product Kind</label></p>

                <div class="col-md-6">
                    <input id="product-kind" type="text" name="product-kind" class="form-control" placeholder="product kind" required>
                </div>
            </div>

            <hr>

            <div class="form-group row">
                <p class="col-md-4"><label  for="Price">Inventory</label></p>

                <div class="col-md-6 input-group">
                    <span class="input-group-addon">$</span>
                    <input id="price" type="number" name="product-inventory" class="form-control" value="0" min="0" required>
                </div>
            </div>

            <br>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
@endsection