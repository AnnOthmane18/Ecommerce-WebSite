@include('layouts.includes.header')

<div class="kids-header">
    <h1>Blue Light glasses for Kids</h1>
    <p>Having fun has never been safer. Discover super light and flexible blue
         light glasses in different colors and shapes, all specially designed for children.</p>
</div>
<div class="shop-products">
   
   @foreach ($products as $product)
        @if($product->age== 'kids')
            <div class="shop-product-1">
                    <a href="/shop/{{$product->id}}">
                        <img src="{{ asset($product->image_path) }}" alt="">
                    <!-- <img src="{{URL::asset('imgs/black/black_model_man.jpg')}}" class="img-model" alt=""> -->
                        <h3>{{URL::asset($product->name) }}</h3>
                    </a>
                    <p>{{asset($product->price)}}</p>
                    <div class="shop-product-buttons">
                        <a href="{{route('add.to.cart',$product->id)}}">
                            <button class="shop-addToCart">ADD TO CART</button>
                        </a>
                        <button class="shop-BuyNow">BUY NOW</button>
                    </div>
            </div>
        @endif
   @endforeach
</div>

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