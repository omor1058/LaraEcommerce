@extends('backend.layouts.master')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                Add Category
            </div>
            <div class="card-body">
                @include('backend.partials.messages')
                <form action="{{route('admin.category.store')}}"  method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group">
                        <label >Name</label>
                        <input type="text" name="name" class="form-control" >
                    </div>
                    <div class ="form-group">
                        <label >Description</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class ="form-group">
                        <label >Description</label>
                        <select name="parent_id" class="form-control">
                            <option value="">Select a Category</option>
                            @foreach($main_categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="product_image">Category Image</label>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="file" class="form-control" name="image" id="product_image" >
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
