@extends('layouts.app')

@section('header')
    <div class="bread-crumb-header d-flex justify-content-between align-items-center mb-3">
        <div>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
        <div>
            <a href="{{ route('products.create') }}">
                <button class="btn btn-primary">Add Product</button>
            </a>
        </div>
    </div>
@endsection

@section('content')
    <div class="container d-flex flex-row gap-3">
    @foreach($products as $product)
        <div class="card product-card">
            <img class="card-img-top w-[400px] h-[400px]" src="{{ $product->image }}" alt="Product image">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">{{ $product->name }}</h5>
                <h3 class="mb-1 text-primary">Rs.{{ $product->price }}</h3>
                <p class="card-text flex-grow-1 overflow-hidden text-truncate" style="max-height: 60px;">
                    {{ $product->description }}
                </p>
                <p>Quanity: {{ $product->quantity }}</p>
                <div class="mt-auto">
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{ route('products.delete', $product->id) }}" class="btn btn-danger btn-sm">Delete</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

    </div>
@endsection
