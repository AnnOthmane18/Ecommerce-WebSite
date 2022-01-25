@extends('Dashboard.admin')

@section('NewProduct')
<div class="create-product">
    <h2>Create a new product</h2>
    <div class="product-data">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Product name">
            <label for="floatingInput">Product Name</label>
        </div>
        <div class="age-color-material-size d-inline-flex">
            <div class="color">
                <label for="">Color</label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Color</option>
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
            <div class="material ">
                <label for="">Material</label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Material</option>
                    <option value="Plastic">Plastic</option>
                    <option value="Metal">Metal</option>
                  </select>
            </div>
            <div class="size ">
                <label for="">Size</label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Size</option>
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
                    <input type="text" class="form-control" id="floatingInput" placeholder="regular price">
                    <label for="floatingInput">Regular Price</label>
                  </div>
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="sales price">
                    <label for="floatingPassword">Sales Price</label>
                  </div>
            </div>
            <div class="quantity ">
                <label for="floatingInput">Quantity</label>
                <input type="number" class ="form-control mb-3" min="1" value="1"name="quantity" >

            </div>
        </div>

        <div class="form-floating">
            <textarea class="form-control" placeholder="Description" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Description</label>
          </div>
    </div>
</div>
@endsection