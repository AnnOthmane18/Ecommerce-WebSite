@extends('Dashboard.admin')

@section('dashboard')
<div class="dashboard-cards">
    <h1>Dashboard</h1>
    <div class="dashboard">
        <div class="card-1 Card">
            <div class="total-sales">
                <p>Total-Products</p>
                <h1>{{$nbr_Products}}</h1>
            </div>
            <div class="sales-icon">
                <i class="fas fa-tshirt fa-3x"></i>
            </div>
        </div>
        <div class="Sales Card">
            <div class="total-sales">
                <p>Total-sales</p>
                <h1>$1,253,203</h1>
            </div>
            <div class="sales-icon">
                <i class="fas fa-3x fa-dollar-sign"></i>
            </div>
        </div>
        <div class="card-1 Card">
            <div class="total-sales">
                <p>Total-Orders</p>
                <h1>2 203</h1>
            </div>
            <div class="sales-icon">
                <i class="fas fa-cart-plus fa-3x"></i>
            </div>
        </div>
        
    </div>
</div>
@endsection