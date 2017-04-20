@extends('layouts.master')

@section('title')
    OCPS Store List
@endsection

@section('content')
<div class="row">
    <div class="col-3">
        <form class="filter">
            <br>
            <h4>Region</h4>
            <div class="region"></div>
        </form>
    </div>
    <div class="col-9">
        <br>
            <div class="store-info-head row">
                <h3 class="name col-5">Store</h3>
                <p class="region col-3">Name</p>
                <p class="manager col-4">Manager</p>
            </div>
        <br>
        @foreach ($stores as $store)
            <div class="store-item">
                <div class="store-info row">
                    <h4 class="name col-5"><a href="/store/{{ $store->id }}">{{ $store->Name }}</a></h4>
                    <p class="region col-3">{{ $store->Region->RegionName }}</p>
                    <p class="manager col-4">{{ $store->Manager->FullName }}</p>
                </div>
            </div>
            <br>
        @endforeach
    </div>
</div>
@endsection