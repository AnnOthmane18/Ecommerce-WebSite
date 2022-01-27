@extends('Dashboard.admin')

@section('NewProduct')
<div class="create-product">
    <h2>Create a new product</h2>
    <div class="product-data">

        <form action="create-product" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" name="productName" class="form-control" id="floatingInput" placeholder="Product name">
                <label for="floatingInput">Product Name</label>
            </div>
            <div class="age-color-material-size d-inline-flex">
                <div class="color">
                    <label for="">Color</label>
                    <select name="color" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        {{-- <option selected>Color</option> --}}
                        <option value="Blue">Blue</option>
                        <option value="Red">Red</option>
                        <option value="yellow">yellow</option>
                        <option value="green">green</option>
                        <option value="black">black</option>
                        <option value="white">white</option>
                        <option value="brown">brown</option>
                        <option value="magenta">magenta</option>
                        <option value="pink">pink</option>
                        <option value="purple">purple</option>
                    </select>
                </div>
                <div class="material">
                    <label for="">Material</label>
                    <select mame="Material" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option value="Plastic">Plastic</option>
                        <option value="Metal">Metal</option>
                    </select>
                </div>
                <div class="size ">
                    <label for="">Size</label>
                    <select name="size" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        {{-- <option selected>Size</option> --}}
                        <option value="Small">Small</option>
                        <option value="Medium">Medium</option>
                        <option value="Large">Large</option>
                    </select>
                </div>
                <div class="ages-radio ">
                    <label for="">Age</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">Adults </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2"> Kids </label>
                    </div>
                </div>
            </div>

            <div class="price-quantity">
                <div class="price">
                    <label for="">Price</label>
                    <div class="form-floating mb-3">
                        <input type="text" name = "regularPrice"class="form-control" id="floatingInput" placeholder="regular price">
                        <label for="floatingInput">Regular Price</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" name="salesPrice"class="form-control" id="floatingPassword" placeholder="sales price">
                        <label for="floatingPassword">Sales Price</label>
                    </div>
                </div>
                <div class="category">
                    <label for="">Category</label>
                    <select name="category" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        {{-- <option selected>Category</option> --}}
                        <option value="Eyewear">Eyewear Glasses</option>
                        <option value="Bluelight">Bluelight Glasses</option>
                        <option value="SunGlasses">SunGlasses</option>
                    </select>
                </div>    
                <div class="quantity ">
                    <label for="floatingInput">Quantity</label>
                    <input type="number" name="quantity"class ="form-control mb-3" min="1" value="1"name="quantity" >

                </div>
            </div>

            <div class="form-floating">
                <textarea class="form-control" name="description" placeholder="Description" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Description</label>
            </div>
            
            <div class="product-images">
                <label for="">Images</label>
                <div class="product-images-content">
                    <div class="main-product-image">
                        <label for="">Main Image</label>
                        <input type="file" name="mainImage" class="form-control" >
                    </div>
                    <div class="second-product-images">
                        <div class="second-image">
                            <label for="">Product Image</label>
                            <input type="file" name="productImage" class="form-control" >
                        </div>
                        <div class="second-image">
                            <label for="">Side Image</label>
                            <input type="file" name="sideImage" class="form-control" >
                        </div>
                        <div class="second-image">
                            <label for="">Women Image</label>
                            <input type="file" name="womanImage" class="form-control" >
                        </div>
                        <div class="second-image">
                            <label for="">Man Image</label>
                            <input type="file" name="manImage" class="form-control" >
                        </div>
                    </div>
                </div>
            </div>
            <!--
            <div class="product-images">
                <label for="">Images</label>
                <div class="product-images-content">
                    <div class="main-product-image">
                        <i class="fas fa-cloud-upload-alt fa-5x"></i>
                        <h4 class="dragText">Drop your file here</h4>
                        {{-- <h5>OR</h5> --}}
                        <p>OR</p>
                        {{-- <button class="Browse-File">Browse File</button> --}}
                        <input name ="mainImage" type="file" >
                    </div>
                    <div class="second-product-images">
                        <div class="second-image"> 
                            <i class="fas fa-cloud-upload-alt fa-2x"></i>
                            <h5>Drop your file here</h5>
                            {{-- <h5>OR</h5> --}}
                            <p>OR</p>
                            <button class="Browse-File">Browse File</button>
                            <input name ="sideImage" type="file" hidden>
                        </div>
                        <div class="second-image"> 
                            <i class="fas fa-cloud-upload-alt fa-2x"></i>
                            <h5>Drop your file here</h5>
                            {{-- <h5>OR</h5> --}}
                            <p>OR</p>
                            <button class="Browse-File">Browse File</button>
                            <input name ="productImage" type="file" hidden>
                        </div>
                        <div class="second-image"> 
                            <i class="fas fa-cloud-upload-alt fa-2x"></i>
                            <h5>Drop your file here</h5>
                            {{-- <h5>OR</h5> --}}
                            <p>OR</p>
                            <button class="Browse-File">Browse File</button>
                            <input name ="womenImage" type="file" hidden>
                        </div>
                        <div class="second-image"> 
                            <i class="fas fa-cloud-upload-alt fa-2x"></i>
                            <h5>Drop your file here</h5>
                            {{-- <h5>OR</h5> --}}
                            <p>OR</p>
                            <button class="Browse-File">Browse File</button>
                            <input name ="manImage" type="file" hidden>
                        </div>
                    </div>
                </div>
            </div>-->
            <button type="submit" >Create Product</button>
        </form>
    </div>
</div>
<script type = "text/javascript" src="{{ asset('js/dashboard/drag_drop_images.js')}}"></script>
@endsection