@extends('layouts.master')

@section('title')
    OCPS Store List
@endsection

@section('content')
<div class="row">
    <div class="col-3">
        <form class="filter">
            <h4>Region</h4>
            <div class="region"></div>
        </form>
    </div>
    <div class="col-9">
        @foreach ($stores as $store)
            <div class="store-item">
                <div class="store-info">
                    <h3 class="name"><a href="/store/{{ $store->id }}">{{ $store->Name }}</a></h3>
                    <p class="region">{{ $store->Region->RegionName }}</p>
                    <p class="manager">{{ $store->Manager->FullName }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection