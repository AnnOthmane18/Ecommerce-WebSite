<div class="cards">
    <h1>Best Sellers</h1>
    <div class="line-carousel"></div>
    <div class="carousel-cards">
        <div class="carousel-product owl-carousel owl-theme featured-carousel">   
            @foreach ($products as $product)
                <div class="carousel-product-content item ">
                    <a href="/shop/{{$product->id}}">
                            <img src="{{ asset($product->image_path) }}" alt="">
                            <h3 id="product-name">{{$product->name }}</h3>
                    </a>
                    <p>${{$product->price}}</p>
                    <div class="carousel-product-buttons">
                        <a href="{{route('add.to.cart',$product->id)}}">
                            <button class="carousel-addToCart">ADD TO CART</button>
                        </a>
                        <a href="{{route('customer-info')}}">
                            <button class="shop-BuyNow">BUY NOW</button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<script>
    $('.featured-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        700:{
            items:2
        },
        800:{
            items:2
        },
        900:{
            items:3
        },
        1024:{
            items:3
        },
        1440:{
            items:4
        },
        2560:{
            items:5
        }
    }
})
</script>