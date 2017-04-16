@extends('layouts.master')

@section('title')
    OCPS Store: {{ $store->name }}
@endsection

@section('content')
    <div class="col-3">
        <form class="filter">
            <div class="region"></div>
        </form>
    </div>
    <div class="col-9">
        @foreach ($stores as $store)
            <div class="store-item">
                <div class="store-info">
                    <h3 class="name">{{ $store->name }}</h3>
                    <p class="region">{{ $store->regionName }}</p>
                    <p class="manager">{{ $store->managerName }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection