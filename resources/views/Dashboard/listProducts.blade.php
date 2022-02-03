@extends('Dashboard.admin')

@section('listProducts')

<div class="products-section">
    <div class="mini-header">
        <h1>Products list</h1>
        <a href="{{route('create-product')}}"><button>+ new product</button></a>
    </div>
    {{-- @foreach($products as $product) --}}

    <div class="products-list">
        <form class="search-products form-inline my-2 my-lg-2" action="{{route('search',$product->name)}}">
            <input class="form-control " name ="products-search" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        
        <table>
            <colgroup>
                <col span="1" style="width: 5%;">
                <col span="1" style="width: 30%;">
                <col span="1" style="width: 20%;">
                <col span="1" style="width: 20%;">
                <col span="1" style="width: 20%;">
                <col span="1" style="width: 5%;">
            </colgroup>
            <thead>
                <tr>
                    <th><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> </th>
                    <th>Name</th>
                    <th>Created at</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Delete</th>
                </tr>
            </thead>
            {{-- @if(session('cartItems')) --}}
                @foreach($products as $product)
                <tbody>
                    <tr class="productX">
                        <td>  
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </td>
                        <td class="product-name">
                            <a href="{{route('product',['product',$product->id])}}">
                                <img src= "{{asset($product->image_path)}}" alt="">
                            </a>
                            <a href=""><h3>{{$product->name}}</h3></a>
                        </td>
                        <td>{{$product->created_at->format('Y-m-d')}}</td>
                        <td>${{$product->price}}</td>
                        <td class="Qte">
                            <input type="number" class="form-control " min="1" value="{{$product->quantity}}">
                        </td>
                        <td>
                            <a href="{{route('delete.from.list',$product->id)}}" >
                                <button class="delete-product">Delete</button>
                            </a>
                        </td>
                    </tr>
            </tbody>
                @endforeach
            {{-- @else
                <p style="color:red;">Shopping Cart Is Empyty!!</p>
            @endif --}}
        </table>
    </div>
    {{$products->links()}}
</div> 
@endsection