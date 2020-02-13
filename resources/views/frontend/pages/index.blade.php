@extends('frontend.layouts.master')
@section('content')
<!-- Start Sidebar + Content -->
<div class="container margin-top-20">
    <div class="row">
        <div class="col-md-4">

            @include('frontend.partials.product-sidebar')

        </div>
        <div class="col-md-8">
            <div class="widget">
                <h3>Featured Products</h3>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card" >
                            <img class="card-img-top feature-img" src="{{asset('images/products/'.'mobile1.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Samsung</h5>
                                <p class="card-text">Taka - 5000</p>
                                <a href="#" class="btn btn-outline-warning">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" >
                            <img class="card-img-top feature-img" src="{{asset('images/products/'.'mobile1.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Samsung</h5>
                                <p class="card-text">Taka - 5000</p>
                                <a href="#" class="btn btn-outline-warning">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" >
                            <img class="card-img-top feature-img" src="{{asset('images/products/'.'mobile1.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Samsung</h5>
                                <p class="card-text">Taka - 5000</p>
                                <a href="#" class="btn btn-outline-warning">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" >
                            <img class="card-img-top feature-img" src="{{asset('images/products/'.'mobile1.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Samsung</h5>
                                <p class="card-text">Taka - 5000</p>
                                <a href="#" class="btn btn-outline-warning">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" >
                            <img class="card-img-top feature-img" src="{{asset('images/products/'.'mobile1.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Samsung</h5>
                                <p class="card-text">Taka - 5000</p>
                                <a href="#" class="btn btn-outline-warning">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" >
                            <img class="card-img-top feature-img" src="{{asset('images/products/'.'mobile1.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Samsung</h5>
                                <p class="card-text">Taka - 5000</p>
                                <a href="#" class="btn btn-outline-warning">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Sidebar + Content -->

@endsection
