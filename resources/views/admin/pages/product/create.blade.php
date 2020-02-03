@extends('admin.layouts.master')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                Add Product
            </div>
            <div class="card-body">
                @include('admin.partials.messages')
                <form action="{{route('admin.product.store')}}"  method="POST" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label >Title</label>
                        <input type="text" name="title" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label >Description</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label >Price</label>
                        <input type="number" class="form-control" name="price">
                    </div>
                    <div class="form-group">
                        <label >Quantity</label>
                        <input type="text" class="form-control" name="quantity" >
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

                    <button type="submit" class="btn btn-primary">Add Product</button>
                </form>
            </div>
        </div>

    </div>
  </div>

@endsection
