<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/dashboard/admin.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard/dashboard.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-header">
            <div class="logo-close">
                <img src="{{asset('imgs/logo.png')}}" alt="">
                <i class="fas fa-angle-double-left fa-2x"></i>
        {{-- <i class="fas fa-bars fa-2x hamburger-menu-icon"></i> --}}

                {{-- <h3>Barner Glasses</h3> --}}
            </div>
            <div class="admin-profile">
                <img src="{{asset('imgs/admin-pic.png')}}" alt="">
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
                        <h4>Dashboard</h4>
                    </a>
                </li>
                <li>
                    <a href="#" class="sidebar-link">
                        <i class="fas fa-tshirt"></i>
                        <h4>Create Product</h4>
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
    {{-- Nav Bar --}}
    <div class="main">
        <div class="dashboard-navbar">
            <div class="search-navbar">
                <form class="form-inline d-sm-inline-flex my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            <div class="admin-navbar">
                <div class="language">
                    <div class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Language
                        </a>            
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="#">English</a>
                          <a class="dropdown-item" href="#">French</a>
                        </div>
                      </div>
                </div>
                <div class="admin-profile-navbar">
                    <img src="{{asset('imgs/admin-pic.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="main-content">
            @yield('dashboard')
        </div>
    </div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="{{asset('js/dashboard/submenu-sidebar.js')}}"></script>
</body>

</html>