@extends('dashboard.framework')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Product List</li>
    </ol>
    <div class="info-box products">
        <h4>Products</h4>
        <div class="container-fluid">
            <div class="list-header row">
                <div class="col-3"><p>Product Name</p></div>
                <div class="col-3"><p>Product Kind</p></div>
                <div class="col-2"><p>Price</p></div>
                <div class="col-2"><p>Inventory</p></div>
            </div>
            @foreach( $salesperson->Store->Inventory as $inventory)
                @if ($inventory->InventoryNum < 20)
                <div class="item inventory row inventory-low" data-content="{{ $inventory->ProductID }}">
                @else
                <div class="item inventory row" data-content="{{ $inventory->ProductID }}">
                @endif
                    <div class="col-3"><p>{{ $inventory->Product->ProductName }}</p></div>
                    <div class="col-3"><p>{{ $inventory->Product->ProductKind }}</p></div>
                    <div class="col-2"><p>${{ $inventory->Product->Price }}</p></div>
                    <form class="form-inline" method="post" action="/dashboard/inventory/{{ $inventory->ProductID }}/update">
                        {{ csrf_field() }}
                        <div class="col-8">
                            <p><input name="newInventory" type="number" min="0" value="{{ $inventory->InventoryNum }}" class="form-control" /></p>
                        </div>
                        <div class="col-4">
                            <p><button class="btn btn-primary btn-sm form-control" type="submit">Update</button></p>
                        </div>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection()