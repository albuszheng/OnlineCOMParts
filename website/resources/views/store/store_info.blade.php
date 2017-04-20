@extends('layouts.master')

@section('title')
    OCPS Store: {{ $store->Name }}
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <h1 class="store-name">{{ $store->Name }}</h1>
        </div>
        <div class="col-4">
            <h4 class="store-address">{{ $store->Address }}</h4>
        </div>
        <div class="col-4">
            <h4 class="store-address">{{ $store->Manager->FullName }}</h4>
        </div>
        <div class="col-4">
            <h4 class="store-address">{{ $store->Region->RegionName }}</h4>
        </div>
    </div>
    <hr>
    <section>
        <h3>Products</h3>
        <div class="row">
            <div class="col-6"><h5>Product Name</h5></div>
            <div class="col-2"><h5>Kind</h5></div>
            <div class="col-2"><h5>Inventory</h5></div>
            <div class="col-2"><h5>Price</h5></div>
        </div>
        @foreach($store->Inventory as $inventory)
            <div class="row">
                <div class="col-6"><h6><a href="/products/{{ $inventory->ProductID }}">{{ $inventory->Product->ProductName }}</a></h6></div>
                <div class="col-2"><h6>{{ $inventory->Product->ProductKind }}</h6></div>
                <div class="col-2"><h6>{{ $inventory->InventoryNum }}</h6></div>
                <div class="col-2"><h6>${{ $inventory->Product->Price }}</h6></div>
            </div>
        @endforeach
    </section>
@endsection