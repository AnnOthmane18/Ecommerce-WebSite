@include('layouts.includes.header')


<section>
    <div class="product">
        <div class="column-1">
            <div class="images">
                <div class="main-image">
                    <img id="main-image" src="{{ asset($product->image_path) }}" alt="">
                </div>
                <div class="sec-images">
                    <img class="thumbnail" src="{{ asset($product->product_image) }}" alt="">
                    <img class="thumbnail" src="{{ asset($product->side_image) }}" alt="">
                    <img class="thumbnail" src="{{ asset($product->man_image) }}" alt="">
                    <img class="thumbnail" src="{{ asset($product->women_image) }}" alt="">
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
                <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example">
                    <option value="1">small</option>
                    <option value="2">medium</option>
                    <option value="3">large</option>
                </select>
            </div>
            <div class="type">
                <p>type:</p>
                <button>Metal</button>
                <button>Plastic</button>
            </div>
            <div class="btns">
                <a href="{{route('add.to.cart',$product->id)}}">
                    <button class="AddToCart" >ADD TO CART</button>
                </a>
                <a href="{{route('customer-info')}}">
                    <button class="shop-BuyNow">BUY NOW</button>
                </a>
            </div>
            <div class="desc">
                <p>{{$product->description }}</p>
            </div>
        </div>
    </div>
    <div class="guaranties">
        <div class=" guaranty world-wide-shipping">
            <img src="{{asset('imgs/Quranties/freeShipping.webp')}}" alt="">
            <p>
                <strong>Free premium worldwide shipping</strong>
            </p>
        </div>
        <div class="secure-payment">
            <img src="{{asset('imgs/Quranties/securePayment.webp')}}" alt="">
            <p>
                <strong>100% secured payment</strong>
            </p>
        </div>
        <div class="shipping24">
            <img src="{{asset('imgs/Quranties/shipping24.webp')}}" alt="">
            <p>
                Shipping all orders in 24-48 hours <strong>24-48 hours</strong>
            </p>
        </div>
        <div class="return30">
            <img src="{{asset('imgs/Quranties/return.png')}}" alt="">
            <p>
                <strong>30 day return policy</strong>
            </p>
        </div>
        <div class="support">
            <img src="{{asset('imgs/Quranties/support.png')}}" alt="">
            <p>
                Expert <strong>support team</strong>
            </p>
        </div>
    </div>

    <div class="benefits">
        <h1>BENEFITS OF USING BARNER BLUE LIGHT GLASSES</h1>
        <div class="benefits-blocs">
            <div class="benefit">
                <img src="{{asset('imgs/benefits_icons/icon1.webp')}}" alt="">
                <p>Look cool <br> wherever you go</p>
            </div>
            <div class="benefit">
                <img src="{{asset('imgs/benefits_icons/icons2.webp')}}" alt="">
                <p> Reduce Eye <br> strain</p>
            </div>
            <div class="benefit">
                <img src="{{asset('imgs/benefits_icons/icons3.webp')}}" alt="">
                <p>Improve your <br> sleep</p>
            </div>
            <div class="benefit">
                <img src="{{asset('imgs/benefits_icons/icons4.webp')}}" alt="">
                <p>Enhance your <br> wellbeing</p>
            </div>
            <div class="benefit">
                <img src="{{asset('imgs/benefits_icons/icons5.webp')}}" alt="">
                <p>Super <br> comfortable</p>
            </div>
            <div class="benefit">
                <img src="{{asset('imgs/benefits_icons/icons6.webp')}}" alt="">
                <p>Practically <br> wightless</p>
            </div>
            <div class="benefit">
                <img src="{{asset('imgs/benefits_icons/icons7.webp')}}" alt="">
                <p>Cool  <br> packaging</p>
            </div>
            <div class="benefit">
                <img src="{{asset('imgs/benefits_icons/icons8.webp')}}" alt="">
                <p>Free <br> Accessories</p>
            </div>
        </div>
    </div>
</section>

{{-- <script type="text/javascript">
    var mainImage = document.getElementById('mainImage');
    var ActiveImage = document.getElementsByClassName('activeImage'); 
    var secImages = document.getElementsByClassName('thumbnail');
    // console.log(secImages)
    var temp = false;
    for(var i=0; i<secImages.length; i++){
    //    console.log(secImages[i].status);
        // if(secImages[i].src == 'http://localhost:8000/image not found'){
        //     secImages[i].addClassList('hideImage')
        // }
        console.log(secImages[i])
        // secImages[i].addEventListener('mouseover',()=>{
        //     console.log( secImages[i].src);
        // })
    }

</script> --}}
<br>

 @include('layouts.includes.footer') 
