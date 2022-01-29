@extends('Dashboard.admin')

@section('dashboard')
<div class="dashboard-cards">
    <h1>Dashboard</h1>
    <div class="dashboard">
        <div class="Sales Card">
            <div class="total-sales">
                <h2>Total-sales</h2>
                <p>$1,253,203</p>
            </div>
            <div class="sales-icon">
                <i class="fas fa-2x fa-dollar-sign"></i>
            </div>
        </div>
        <div class="card-1 Card">
            <div class="total-sales">
                <h2>Total-Orders</h2>
                <p>2 203</p>
            </div>
            <div class="sales-icon">
                <i class="fas fa-dollar-sign"></i>
            </div>
        </div>
        <div class="card-1 Card">
            <div class="total-sales">
                <h2>Total-Products</h2>
                <p>{{$nbr_Products}}</p>
            </div>
            <div class="sales-icon">
                <i class="fas fa-dollar-sign"></i>
            </div>
        </div>
    </div>
</div>
@endsection