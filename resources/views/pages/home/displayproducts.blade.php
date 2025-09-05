@extends('layouts.publichome')

@section('content')
    <div class="products-grid">
        @if($products)
            @foreach($products as $product)
                <div class="card product-card">
                    <img class="card-img-top" src="{{ $product->image }}" alt="Product image">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <h3 class="price text-primary">Rs. {{ $product->price }}</h3>
                        <p class="card-text description">
                            {{ $product->description }}
                        </p>
                        <p class="quantity">Quantity: {{ $product->quantity }}</p>
                        <a href="#"><button class="btn btn-primary mt-auto">Add to cart</button></a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

    <style>
        .products-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            padding: 30px;
            background-color: #f8f9fa;
            margin-bottom: 150px;
        }

        .product-card {
            width: 300px;
            height: auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.15);
        }

        .product-card img.card-img-top {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .card-body {
            padding: 15px;
            display: flex;
            flex-direction: column;
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .price {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .description {
            flex-grow: 1;
            max-height: 60px;
            overflow: hidden;
            text-overflow: ellipsis;
            margin-bottom: 10px;
        }

        .quantity {
            font-weight: 500;
            color: #555;
        }

        @media (max-width: 768px) {
            .product-card {
                width: 100%;
                max-width: 350px;
            }
        }

        .btn {
            width: 270px;
        }
    </style>
@endsection
