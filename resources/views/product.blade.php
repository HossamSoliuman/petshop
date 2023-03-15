@extends('layouts.app')
@section('content')
     <!-- Products Start -->
     <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Products</h6>
                <h1 class="display-5 text-uppercase mb-0">Products For Your Best Friends</h1>
            </div>
            <div class="owl-carousel product-carousel">
                @foreach ($products as $product)
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/products/{{$product->photo}}" alt="">
                        <h6 class="text-uppercase">{{$product->name}}</h6>
                        <h5 class="text-primary mb-0">${{$product->price}}</h5>
                    </div>
                </div>
                @endforeach
               
           
            </div>
        </div>
    </div>
    <!-- Products End -->

@endsection