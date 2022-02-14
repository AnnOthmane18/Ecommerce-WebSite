<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="{{asset('css/checkout/checkout.css')}}">
    <link rel="stylesheet" href="{{asset('css/checkout/info.css')}}">
    <link rel="stylesheet" href="{{asset('css/checkout/payment.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;800&family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"> 

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>
</head>
<body>
    <div class="summary">
        <div class="summary-content">
            <h2>Smmary</h2>
            <div class="summary-products">
                <div class="summary-col1">
                    <img src="imgs/1643384628.webp" alt="">
                    <div class="summary-col1-name">
                        <p><strong> Black Glasses</strong></p>
                        <p>Color: Black</p>
                    </div>
                </div>
                <div class="summary-col2">
                    <p>$59</p>
                </div>
            </div>
            <div class="summary-line"></div>
            <div class="coupon">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Coupon or discount code" aria-label="Coupon or discount code" aria-describedby="button-addon2">
                    <button class="btn btn-outline-dark" type="button" id="button-addon2">Apply</button>
                  </div>
            </div>
            <div class="summary-line"></div>
            <div class="sub-total">
                <div class="Sub-total">
                    <p>Subtotal</p>
                    <p>$59</p>
                </div>
                <div class="Shipping">
                    <p>SHipping</p>
                    <p>$20</p>
                </div>
            </div>
            <div class="summary-line"></div>
            <div class="summary-total">
                <p><strong>Total</strong></p>
                <p>$79</p>
            </div>
        </div>
    </div>
    <div class="info-payment"></div>

    @yield('customer-info')
    @yield('payments')
</body>
</html>