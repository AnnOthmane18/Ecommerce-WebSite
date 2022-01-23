@include('layouts.includes.header')


<section>
    <div class="product">
        <div class="column-1">
            <div class="images">
                <div class="main-image">
                    <img src="{{ asset($product->image_path) }}" alt="">
                </div>
                <div class="sec-images">
                    <img src="{{ asset($product->product_image) }}" alt="">
                    <img src="{{ asset($product->side_image) }}" alt="">
                    <img src="{{ asset($product->man_image) }}" alt="">
                    <img src="{{ asset($product->women_image) }}" alt="">
                </div>
            </div>
        </div>
        <div class="column-2">
            <div class="txt">
                <h1 class="title">{{$product->name }}</h1>
                <p class="price">${{$product->price }}</p>
            </div>
            <div class="reviews">
               <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
               </div>
                <p>500 reviews</p>
            </div>
            <div class="quantity">
                <p>Quantity:</p>
                <input type="number" value="1" min="1" max>
            </div>
            <div class="Size">
                <p>size:</p>
                <button>small</button>
                <button>medium</button>
                <button>large</button>
                <button>x-large</button>
            </div>
            <div class="type">
                <p>type:</p>
                <button>Metal</button>
                <button>Plastic</button>
            </div>
            <div class="btns">
                <a href="{{route('add.to.cart',$product->id)}}"><button class="AddToCart" >ADD TO CART</button></a>
                <button class="BuyNow">BUY NOW</button>
            </div>
            <div class="desc">
                <p>{{$product->description }}</p>
            </div>
        </div>
    </div>
</section>

<br>
<br>
<br>
<br>
<br>
<br>
<br>

<!-- @include('layouts.includes.footer') -->
