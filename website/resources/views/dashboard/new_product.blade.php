@extends('layouts.master')

@section('title')
    OCPS Control / New Product
@endsection

@section('content')
    <div class="col-md-10">
        <form method="POST" action="/product">
            {{ csrf_field() }}

            <div class="form-group">
                <label class="form-control col-md-4" for="product-name">Product Name</label>

                <div class="col-md-6">
                    <input id="product-name" type="text" name="product-name" class="form-control" placeholder="product name" required autofocus>
                </div>
            </div>

            <div class="form-group">
                <label class="form-control col-md-4" for="Price">Product Price</label>

                <div class="col-md-6 input-group">
                    <span class="input-group-addon">$</span>
                    <input id="price" type="number" name="product-price" class="form-control" value="0" min="0" required>
                </div>
            </div>

            <div class="form-group">
                <label class="form-control col-md-4" for="product-name">Product Kind</label>

                <div class="col-md-6">
                    <input id="product-kind" type="text" name="product-kind" class="form-control" placeholder="product kind" required>
                </div>
            </div>

            <div class="form-group">
                <label class="form-control col-md-4" for="Price">Inventory</label>

                <div class="col-md-6 input-group">
                    <span class="input-group-addon">$</span>
                    <input id="price" type="number" name="product-inventory" class="form-control" value="0" min="0" required>
                </div>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
@endsection