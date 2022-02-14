@include('layouts.includes.header')
    <!-- ***************************** -->
<div class="cart-products">
    <h1>Shopping Cart</h1>
    <table class="products-table">
        <colgroup>
            <col span="1" style="width: 35%;">
            <col span="1" style="width: 25%;">
            <col span="1" style="width: 10%;">
            <col span="1" style="width: 10%;">
            <col span="1" style="width: 10%;">
            <col span="1" style="width: 10%;">
        </colgroup>
        <thead>
            <tr>
                <th>Name</th>
                <th>Details</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Delete</th>
            </tr>
        </thead>
        @if(session('cartItems'))
            @foreach(session('cartItems') as $key=>$value)
        <tbody>
            <tr >
                <td class="product-name">
                    <a href="/shop/{{$value['id']}}"><img src="{{URL :: asset($value['image_path'])}}" alt=""></a>
                    <div class="product-detail">
                        <a href="/shop/{{$value['id']}}"><h3>{{$value['name']}}</h3></a>
                        <p>barner glasses</p>
                    </div>
                </td>
                <td>{{$value['color']}} - {{$value['size']}} - {{$value['material']}}</td>
                <td>${{$value['price']}}</td>
                <td>
                    <input type="number" min="1" value="{{$value['quantity']}}">
                </td>
                <td>${{$value['price']*$value['quantity']}}</td>
                <td>
                   <a href="{{route('delete.from.cart',$key)}}">
                       <button>Delete</button>
                    </a>
                </td>
            </tr>
        </tbody>
            @endforeach
        @else
            <p style="color:red;">Shopping Cart Is Empyty!!</p>
        @endif
    </table>
    <a href="#">
        <button>Proceed to checkout</button>
    </a>
</div> 

<!-- <div class="cart-products">
        <div class="table">
            <div class="products-name">
                <h2>Name</h2>
                <div class="added-product">
                    <img src="{{URL :: asset('imgs/black/black_main.webp')}}" alt="">
                    <div class="product-detail">
                        <h4>Black BlueLight Glasses</h4>
                        <p>Barner glasses</p>
                    </div>
                </div>
            </div>
            <div class="products-details">
                <h2>Details</h2>
                <h5>Black, Metal, blue light,size:M</h5>
            </div>
            <div class="products-price">
                <h2>Price</h2>
                <h4>$49</h4>
            </div>
            <div class="products-quantity">
                <h2>Quantity</h2>
                <h4 id="quantity">2</h4>
                </div>
            <div class="products-total">
                <h2>Total</h2>
                <h4>$100</h4>
            </div>
            <div class="delete">
                <h2>Delete</h2>
                <button>Delete</button>
            </div>
        </div>
    </div>
</div> -->
<br>
@include('layouts.includes.footer')
