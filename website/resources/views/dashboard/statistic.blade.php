@extends('dashboard.framework)

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Statistic</li>
    </ol>
    <div class="info-box real-time-best-seller">
        <h5><span>Daily BestSeller: </span>{{ $daily_bs->ProductName }}</h5>
        <h5><span>Monthly BestSeller: </span>{{ $monthly_bs->ProductName }}</h5>
    </div>
    <div class="info-box real-time-best-seller">
        <h5><span>Daily BestSeller: </span>{{ $daily_bs->ProductName }}</h5>
        <h5><span>Monthly BestSeller: </span>{{ $monthly_bs->ProductName }}</h5>
    </div>
@endsection