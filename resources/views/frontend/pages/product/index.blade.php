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
                <h3>All Products</h3>
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-md-4">
                        <div class="card" >
                            {{-- <img class="card-img-top feature-img" src="{{asset('images/products/'.'mobile1.jpg')}}" alt="Card image cap"> --}}
                            @php  $i = 1; @endphp
                            @foreach($product->images as $image)
                                @if ($i > 0)
                                    <img class="card-img-top feature-img" src="{{asset('images/products/'.$image->image)}}" alt="Card image cap">
                                @endif
                                @php $i-- ; @endphp
                            @endforeach
                            <div class="card-body">
                                <h5 class="card-title"> {{ $product->title }}</h5>
                                <p class="card-text">Taka -  {{ $product->price }}</p>
                                <a href="#" class="btn btn-outline-warning">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Sidebar + Content -->
@endsection
