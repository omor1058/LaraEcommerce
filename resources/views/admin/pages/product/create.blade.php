@extends('admin.layouts.master')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                Add Product
            </div>
            <div class="card-body">
                <form action="{{route('admin.product.store')}}"  method="POST" >
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

                    <button type="submit" class="btn btn-primary">Add Product</button>
                </form>
            </div>
        </div>

    </div>
  </div>

@endsection
