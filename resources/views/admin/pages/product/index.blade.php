@extends('admin.layouts.master')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                Manage Product
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Product Title</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($product as $product)
                        <tr>
                            <td>#</td>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td><a href="{{route('admin.product.edit', $product->id)}}" class="btn btn-success">Edit</a></td>


                        </tr>
                    @endforeach
                </table>

            </div>
        </div>

    </div>
  </div>

@endsection
