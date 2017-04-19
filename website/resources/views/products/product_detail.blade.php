@extends('layouts.master')

@section('title')
    OCPS Product: {{ $spec->Name }}
@endsection

@section('content')
    <div class="row">
        {{--<div class="col-1 pic">--}}
            {{--<img src={{ $product->imageLoc }}>--}}
        {{--</div>--}}
        <div class="col-3 info-box">
            <p class="store">{{ $spec->Name }}</p>
            <h2 class="product-name">{{ $product->Price }}</h2>
            <p class="">{{ $product->ProductKind }}</p>
            <form class="actions">
                <p class="amount"></p>
                <input type="submit" title="Purchase">
            </form>
        </div>
    </div>
    <div class="row specs">
        <h4>Specs</h4>
        {{--@foreach ($specs as $spec)--}}
        <div class="col-6">
            <p><span class="spec-name">{{ $spec->Name }}</span>: <span class="spec-value">{{ $spec->Cores }}</span></p>
        </div>
        {{--@endforeach--}}
    </div>
@endsection