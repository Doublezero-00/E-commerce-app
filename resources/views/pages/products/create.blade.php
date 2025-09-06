@extends('layouts.app')

@section('header')
    <div class="bread-crumb-header mt-2">
        <div class="col-md-8">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{route('products.index')}}">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </nav>
        </div>
        {{-- <div class="col-md-4 text-end">
            <a href="{{route('products.create')}}">
                <button class="btn btn-primary">Add new</button>
            </a>
        </div> --}}
    </div>
@endsection

@section('content')
    <div class="">
        <form class="categorycreateform w-4 mt-1" action={{ route('products.store')}} method="POST">
            @csrf
            <div class="mb-1">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter item name">
            </div>
            <div class="mb-1">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Enter item price">
            </div>
            <div class="mb-1">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter item quantity">
            </div>
            <div class="mb-1">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Enter item description">
            </div>
            <div class="mb-1">
                <label for="image" class="form-label">Image</label>
                <input type="text" class="form-control" id="image" name="image" placeholder="Enter item image url">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Category</label>
                <select id="inputState" class="form-control" name="category">
                    <option value="mobile_accessories">Mobile Phone Accessories</option>
                    <option value="smartwatches">Smartwatches</option>
                    <option value="earphones">Earphones And Headphones</option>
                    <option value="powerbanks">Power Banks</option>
                    <option value="smart_devices">Smart Devices</option>
                    <option value="computer_accessories">Computer Accessories</option>
                    <option value="tools">Tools</option>
                </select>
            </div>

            <button class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection