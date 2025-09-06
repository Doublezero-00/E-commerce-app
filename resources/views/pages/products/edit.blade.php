@extends('layouts.app')

@section('header')
    <div class="bread-crumb-header mt-2">
        <div class="col-md-8">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{route('products.index')}}">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-4 text-end">
            <a href="{{route('products.create')}}">
                <button class="btn btn-primary">Add new</button>
            </a>
        </div>
    </div>
@endsection

@section('content')
    <div class="">
        <form class="categorycreateform w-4 mt-1" action={{ route('products.update', $product->id)}} method="POST">
            @csrf
            <div class="mb-2">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}" placeholder="Enter item name">
            </div>
            <div class="mb-2">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{$product->price}}" placeholder="Enter item price">
            </div>
            <div class="mb-2">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="{{$product->quantity}}" placeholder="Enter item quantity">
            </div>
            <div class="mb-2">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{$product->description}}" placeholder="Enter item description">
            </div>
            <div class="mb-2">
                <label for="image" class="form-label">Image</label>
                <input type="text" class="form-control" id="image" name="image" value="{{$product->image}}" placeholder="Enter item image url">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Category</label>
                <select id="inputState" class="form-control" name="category">
                    <option value="mobile_accessories" {{ $product->category == 'mobile_accessories' ? 'selected' : '' }}>Mobile Phone Accessories</option>
                    <option value="smartwatches" {{ $product->category == 'smartwatches' ? 'selected' : ''}}>Smartwatches</option>
                    <option value="earphones" {{ $product->category == 'earphones' ? 'selected' : ''}}>Earphones And Headphones</option>
                    <option value="powerbanks" {{ $product->category == 'powerbanks' ? 'selected' : ''}}>Power Banks</option>
                    <option value="smart_devices" {{ $product->category == 'smart_devices' ? 'selected' : ''}}>Smart Devices</option>
                    <option value="computer_accessories" {{ $product->category == 'computer_accessories' ? 'selected' : ''}}>Computer Accessories</option>
                    <option value="tools" {{ $product->category == 'tools' ? 'selected' : ''}}>Tools</option>
                </select>
            </div>

            <button class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection