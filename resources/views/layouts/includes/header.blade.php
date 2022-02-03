<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;800&family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"> 

    <link href= "{{ URL::asset('css/style.css'); }} " rel="stylesheet">
    <link href= "{{ URL::asset('css/ProductPage.css'); }} " rel="stylesheet">
    <link href= "{{ URL::asset('css/categories.css'); }} " rel="stylesheet">
    <link href= "{{ URL::asset('css/about.css'); }} " rel="stylesheet">
    <link href= "{{ URL::asset('css/contact.css'); }} " rel="stylesheet">
    <link href= "{{ URL::asset('css/ShopPage.css'); }} " rel="stylesheet">
    <link href= "{{ URL::asset('css/lightslider.css'); }} " rel="stylesheet">
    <link href= "{{ URL::asset('css/ShoppingCart.css'); }} " rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="{{ URL::asset('js/jQuery.js'); }}"></script>
    <script type = "text/javascript" src="{{ URL::asset('js/lightslider.js'); }}"></script>
    <title>Barner Shop</title>
</head>
<body>
    <nav>
       <div class="content">
            <div class="hamburger-icon">
                <i class="fas fa-bars fa-2x" id="hamburger-icon" ></i>
            </div>
            <div class="Col-1">
                <ul class="nav-grp-links">
                    <li>
                        <a class = "nav-links" href="{{route('bluelight')}}" id="nav-link">Blue Light Glasses</a>
                    </li>
                    <li>
                        <a class = "nav-links"  href="{{route('sunglasses')}}"id="nav-link">SunGlasses</a>
                    </li>
                    <li>
                        <a class = "nav-links"  href="{{route('kids')}}" id="nav-link">Kids</a>
                    </li>
                </ul>
            </div>
            <div class="logo">
                <a href="{{route('Home')}}">
                    <img src="{{ URL::asset('imgs/logo.png') }}" alt="">
                </a>
            </div>
            <div class="Col-2">
                <ul class="nav-grp-links">
                    <li>
                        <a class = "nav-links"  href="#"id="nav-link">Accessories</a>
                    </li>
                    <li>
                        <a class = "nav-links"  href="{{route('contact')}}" id="nav-link">Contact</a>
                    </li>
                    <li>
                        <a class = "nav-links"  href="{{route('about')}}" id="nav-link">About</a>
                    </li>
                </ul>
            </div>
            @php ($items =0)
            <div class="cart-icon">
                <i class="fas fa-shopping-bag fa-2x" id="cart-icon"></i>
                <div class="cart-items-nbr">{{$items}}</div>
            </div>
       </div>
    </nav>
    <div class="hamburger-menu" id="menu">
        <i class="fas fa-arrow-left" id="close-menu"></i>
        <ul>
            <li><a href="{{route('bluelight')}}">Blue Light Glasses</a><div class="LINE"></div></li>
            <li><a href="{{route('sunglasses')}}">Sunglasses</a><div class="LINE"></div></li>
            <li><a href="">Kids Glasses</a><div class="LINE"></div></li>
            <li><a href="">Accessories</a><div class="LINE"></div></li>
            <li><a href="{{route('about')}}">About</a><div class="LINE"></div></li>
            <li><a href="{{route('contact')}}">Contact</a><div class="LINE"></div></li>
        </ul>
    </div>
   
    <div class="cart" id="cart">
        <i class="fas fa-arrow-right arrow" id="close-cart"></i>
        <div class="cart-shipping">
            <i class="fas fa-shipping-fast fa-3x"></i>
            <p>Free shipping for all orders above 50$</p>
            <div class="cart-line"></div>
        </div>
        @php ($total =0)
    @if(session('cartItems'))
       
        @foreach(session('cartItems') as $key=>$value)
        <div class="cart-content">
            <div class="prod-image">
                <img src="{{URL :: asset($value['image_path'])}}" alt="">
            </div>
            <div class="prod-info">
                <h3>{{$value['name']}}</h3>
                <p>Black color</p>
            </div>
            <div class="quantity-price">
                <input type="number" min="1" value="{{$value['quantity']}}" >
                <h4>${{$value['price']}}</h4>
            </div>
            <div class="delete-btn">
                <a href="{{route('delete.from.cart',$key)}}">
                    <button>remove</button>
                </a>
            </div>
        </div>
        @php($items = $items + 1)
        @php ($total = $total + $value['quantity']*$value['price'])
        @endforeach
    @else
        <p style="color:red;">Shopping Cart Is Empyty!!</p>
    @endif
        <div class="cart-checkout">
            <div class="cart-line"></div>
            <div class="total">
                <p>Total :</p>
                <p style="font-weight:bold;">${{$total}}</p>
            </div>
            <button class="clearAll">Clear All</button>
            <button class="Checkout">Checkout</button>
        </div>
    </div>
        
<script type="text/javascript" src="{{asset('js/cart.js')}}"></script>
