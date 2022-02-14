@extends('pages.checkout.checkout')

@section('customer-info')
<div class="customer-info">
    <a href="{{route('Home')}}">
        <img src="{{ asset('imgs/logo.png') }}" alt="">
    </a>
   <div class="checkout-path">
       <a href="{{route('customer-info')}}">info ></a>
       <a href="">shipping ></a>
       <a href="">payment</a>
   </div>
   <div class="customer-info-form">
       <h2>Contact information </h2>
       <form action="">
           <div class="customer-name">
                <div class="customer-fullNme">
                    <label for="">First name</label>
                    <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="customer-fullNme">
                    <label for="">Last name</label>
                    <input type="text" class="form-control" placeholder="Last name">
                </div>
           </div>
           <div class="customer-email">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="email">
           </div>
           <div class="customer-email">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="password">
            </div>
            <div class="customer-email">
                <label>Retype password</label>
                <input type="password" class="form-control" placeholder="retype-password">
            </div>
            <button type="submit" class="btn btn-outline-dark">continue to shipping</button>       </form>
   </div>
</div>
@endsection