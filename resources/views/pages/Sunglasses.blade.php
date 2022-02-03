@include('layouts.includes.header')

<div class="blue-light-header">
    <h1>Sun Glasses</h1>
    <p>Having fun has never been safer. Discover super light and flexible blue
         light glasses in different colors and shapes, all specially designed for children.</p>
</div>

<div class="filter">
    <div class="filter-btns">
        <button id="blue-btn" class="btn btn-outline-dark filter-btn">Blue</button>
        <button id="red-btn" class="btn btn-outline-dark filter-btn">Red</button>
        <button id="black-btn" class="btn btn-outline-dark filter-btn">Black</button>
        <button id="others" class="btn btn-outline-dark filter-btn">others</button>
    </div>
</div>

<div class="shop-products" id="products">   
   @foreach ($products as $product)
    <div class="shop-product-1">
        <a href="/shop/{{$product->id}}">
            <img src="{{ asset($product->image_path) }}" alt="">
            <!-- <img src="{{URL::asset('imgs/black/black_model_man.jpg')}}" class="img-model" alt=""> -->
            <h3 id="product-name">{{$product->name }}</h3>
        </a>
        <p>${{$product->price }}</p>
        <div class="shop-product-buttons">
            <a href="{{route('add.to.cart',$product->id)}}">
                <button class="shop-addToCart">ADD TO CART</button>
            </a>
            <button class="shop-BuyNow">BUY NOW</button>
        </div>
    </div>
   @endforeach

   <script type="text/javascript" src="{{asset('js/filter.js')}}"></script>

    <!-- <div class="shop-product-1">
        <a href="product">
            <img src="{{URL::asset('imgs/blue/blue_main.webp')}}" alt="">
       
            <h3>Blue Glasses</h3> 
        </a>
        <p>$49</p>
        <div class="shop-product-buttons">
            <button class="shop-addToCart">ADD TO CART</button>
            <button class="shop-BuyNow">BUY NOW</button>
        </div>
    </div>

    <div class="shop-product-1">
        <a href="product">
            <img src="{{URL::asset('imgs/Darkblue/dark_blue_main.webp')}}" alt="">
            <h3>DarkBlue Glasses</h3>
        </a>
        <p>$59</p>
        <div class="shop-product-buttons">
            <button class="shop-addToCart">ADD TO CART</button>
            <button class="shop-BuyNow">BUY NOW</button>
        </div>
    </div>

    <div class="shop-product-1">
        <a href="product">
            <img src="{{URL::asset('imgs/Darkgreen/dark_green_main.webp')}}" alt="">
            <h3>DarkGreen Glasses</h3>
        </a>
        <p>$59</p>
        <div class="shop-product-buttons">
            <button class="shop-addToCart">ADD TO CART</button>
            <button class="shop-BuyNow">BUY NOW</button>
        </div>
    </div>

    <div class="shop-product-1">
        <a href="product">
            <img src="{{URL::asset('imgs/Darkgreen/dark_green_main.webp')}}" alt="">
            <h3>DarkGreen Glasses</h3>
        </a>
        <p>$59</p>
        <div class="shop-product-buttons">
            <button class="shop-addToCart">ADD TO CART</button>
            <button class="shop-BuyNow">BUY NOW</button>
        </div>
    </div>

    <div class="shop-product-1">
        <a href="product">
            <img src="{{URL::asset('imgs/Darkgreen/dark_green_main.webp')}}" alt="">
            <h3>DarkGreen Glasses</h3>
        </a>
        <p>$59</p>
        <div class="shop-product-buttons">
            <button class="shop-addToCart">ADD TO CART</button>
            <button class="shop-BuyNow">BUY NOW</button>
        </div>
    </div>

    <div class="shop-product-1">
        <a href="product">
            <img src="{{URL::asset('imgs/Darkgreen/dark_green_main.webp')}}" alt="">
            <h3>DarkGreen Glasses</h3>
        </a>
        <p>$59</p>
        <div class="shop-product-buttons">
            <button class="shop-addToCart">ADD TO CART</button>
            <button class="shop-BuyNow">BUY NOW</button>
        </div>
    </div>

    <div class="shop-product-1">
        <a href="product">
            <img src="{{URL::asset('imgs/Darkgreen/dark_green_main.webp')}}" alt="">
            <h3>DarkGreen Glasses</h3>
        </a>
        <p>$59</p>
        <div class="shop-product-buttons">
            <button class="shop-addToCart">ADD TO CART</button>
            <button class="shop-BuyNow">BUY NOW</button>
        </div>
    </div>

    <div class="shop-product-1">
        <a href="product">
            <img src="{{URL::asset('imgs/Darkgreen/dark_green_main.webp')}}" alt="">
            <h3>DarkGreen Glasses</h3>
        </a>
        <p>$59</p>
        <div class="shop-product-buttons">
            <button class="shop-addToCart">ADD TO CART</button>
            <button class="shop-BuyNow">BUY NOW</button>
        </div>
    </div>

    <div class="shop-product-1">
        <a href="product">
            <img src="{{URL::asset('imgs/Darkgreen/dark_green_main.webp')}}" alt="">
            <h3>DarkGreen Glasses</h3>
        </a>
        <p>$59</p>
        <div class="shop-product-buttons">
            <button class="shop-addToCart">ADD TO CART</button>
            <button class="shop-BuyNow">BUY NOW</button>
        </div>
    </div>

    <div class="shop-product-1">
        <a href="product">
            <img src="{{URL::asset('imgs/Darkgreen/dark_green_main.webp')}}" alt="">
            <h3>DarkGreen Glasses</h3>
        </a>
        <p>$59</p>
        <div class="shop-product-buttons">
            <button class="shop-addToCart">ADD TO CART</button>
            <button class="shop-BuyNow">BUY NOW</button>
        </div>
    </div>

    <div class="shop-product-1">
        <a href="product">
            <img src="{{URL::asset('imgs/Darkgreen/dark_green_main.webp')}}" alt="">
            <h3>DarkGreen Glasses</h3>
        </a>
        <p>$59</p>
        <div class="shop-product-buttons">
            <button class="shop-addToCart">ADD TO CART</button>
            <button class="shop-BuyNow">BUY NOW</button>
        </div>
    </div> -->
</div>