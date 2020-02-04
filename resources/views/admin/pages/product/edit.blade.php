@extends('admin.layouts.master')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                Edit Product
            </div>
            <div class="card-body">
                @include('admin.partials.messages')
                <form action="{{route('admin.product.update', $product->id)}}"  method="POST" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label >Title</label>
                        <input type="text" value="{{$product->title}}" name="title" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label >Description</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$product->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label >Price</label>
                        <input type="number" class="form-control" value="{{$product->price}}" name="price">
                    </div>
                    <div class="form-group">
                        <label >Quantity</label>
                        <input type="text" class="form-control" value="{{$product->quantity}}" name="quantity" >
                    </div>
                    <div class="form-group">
                        <label for="product_image">Product Image</label>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="file" class="form-control" name="product_image[]" id="product_image" >
                            </div>
                            <div class="col-md-4">
                                <input type="file" class="form-control" name="product_image[]" id="product_image" >
                            </div>
                            <div class="col-md-4">
                                <input type="file" class="form-control" name="product_image[]" id="product_image" >
                            </div>
                            <div class="col-md-4">
                                <input type="file" class="form-control" name="product_image[]" id="product_image" >
                            </div>
                            <div class="col-md-4">
                                <input type="file" class="form-control" name="product_image[]" id="product_image" >
                            </div>
                            <div class="col-md-4">
                                <input type="file" class="form-control" name="product_image[]" id="product_image" >
                            </div>
                            <div class="col-md-4">
                                <input type="file" class="form-control" name="product_image[]" id="product_image" >
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary">Update Product</button>
                </form>
            </div>
        </div>

    </div>
  </div>

@endsection
