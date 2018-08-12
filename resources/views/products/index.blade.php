@extends('layouts.app')

@section('content')  
        <div class="container">
            <div class="card">
                <div class="card-header text-white bg-danger">Mercy Stores</div>
                    <div class="card-body">
                        <div class="row">
                        @foreach($products as $product)
                            <div class="card col-lg-4" style="width: 18rem;">
                                <img class="card-img-top" src="{{asset($product->image)}}" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">{{$product->name}} - ₦{{$product->price}}</h5>
                                    <p class="card-text"></p>
                                    <p class="card-text">{{$product->description}}</p>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        @endforeach    
                    </div>
                </div>
            </div>
        </div>

@endsection