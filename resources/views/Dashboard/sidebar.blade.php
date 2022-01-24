@extends('Dashboard.dashboard')


@section('sidebar')
    <div class="sidebar">
        <div class="sidebar-header">
            <div class="logo-close">
                <img src="{{asset('imgs/logo.png')}}" alt="">
                <i class="fas fa-angle-double-left fa-2x"></i>
                {{-- <h3>Barner Glasses</h3> --}}
            </div>
            <div class="admin-profile">
                <img src="{{asset('imgs/admin-pic.jpg')}}" alt="">
                <div class="txt">
                    <h2>NAME</h2>
                    <h4>Admin</h4>
                </div>
            </div>
        </div>
        <div class="sidebar-content">
            <ul>
                <li>
                    <a href="#" class="sidebar-link">
                        <i class="fas fa-th-large"></i>
                        <h3>Dashboard</h3>
                    </a>
                </li>
                <li>
                    <a href="#" class="sidebar-link">
                        <i class="fas fa-tshirt"></i>
                        <h3>Products</h3>
                    </a>
                </li>
                <li>
                    <a href="#" class="sidebar-link">
                        <i class="fas fa-th-list"></i>
                        <h3>Orders</h3>
                    </a>
                </li>
                <li>
                    <a href="#" class="sidebar-link">
                        <i class="fas fa-store-alt"></i>
                        <h3>Shop</h3>
                    </a>
                </li>
                <li>
                    <a href="#" class="sidebar-link">
                        <h3>Log out</h3>
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
@endsection