<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #fff;
            border-radius: 12px;
            padding: 20px;
            margin: 20px auto;
            max-width: 800px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .container img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 10px;
        }

        .details {
            flex: 1;
            margin-left: 20px;
        }

        .details h3 {
            margin: 0;
            font-size: 1.3rem;
            font-weight: bold;
            color: #343a40;
        }

        .details h2 {
            font-size: 1.2rem;
            margin: 5px 0 15px 0;
            color: #198754;
        }

        .qty {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }

        .qty h5 {
            margin: 0;
            font-size: 1rem;
            color: #495057;
        }

        .qty button {
            background: #0d6efd;
            color: #fff;
            border: none;
            padding: 6px 12px;
            font-size: 1rem;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.2s;
        }

        .qty button:hover {
            background: #0b5ed7;
        }

        .qty span {
            font-weight: bold;
            font-size: 1.1rem;
            min-width: 25px;
            text-align: center;
            display: inline-block;
        }

        .bi-trash3 {
            color: #dc3545;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .bi-trash3:hover {
            transform: scale(1.1);
        }

        .btn-primary {
            border-radius: 8px;
            padding: 8px 16px;
            font-weight: bold;
        }

        .trash-icon {
            fill: #dc3545; 
            cursor: pointer;
            transition: fill 0.2s ease;
        }
        .trash-icon:hover {
            fill: #a71d2a;
        }
    </style>
</head>
<body>
    <script>
        let quantities = {};

        function increaseqty(product_id) {
            if (!quantities[product_id]) {
                quantities[product_id] = 0;
            }
            quantities[product_id]++;
            document.getElementById('qty-' + product_id).innerHTML = quantities[product_id];
        }

        function decreaseqty(product_id) {
            if (!quantities[product_id]) {
                quantities[product_id] = 0;
            }
            if (quantities[product_id] > 0) {
                quantities[product_id]--;
            }
            document.getElementById('qty-' + product_id).innerHTML = quantities[product_id];
        }
    </script>

    @foreach($cart_products as $cart_product)
        <div class="container">
            <img src="{{$cart_product->image}}" alt="Product">
            <div class="details">
                <h3>{{$cart_product->name}}</h3>
                <h2>Rs. {{$cart_product->price}}</h2>

                <div class="qty">
                    <h5>Quantity</h5>
                    <button onClick="decreaseqty({{ $cart_product->id }})">-</button>
                    <span id="qty-{{ $cart_product->id }}">0</span>
                    <button onClick="increaseqty({{ $cart_product->id }})">+</button>
                </div>

                <div class="d-flex align-items-center gap-3">
                    <a href="{{route('cart.remove', $cart_product->id)}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                            fill="currentColor" class="bi bi-trash3 text-danger" viewBox="0 0 16 16">
                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5V2h2.5a.5.5 0 0 1 
                                    0 1H3a.5.5 0 0 1 0-1H5V1.5a.5.5 0 0 1 
                                    .5-.5zM4.118 4 4.39 13.478A1.5 1.5 0 0 0 
                                    5.888 15h4.224a1.5 1.5 0 0 0 
                                    1.498-1.522L11.882 4H4.118zM5.5 5a.5.5 
                                    0 0 1 .5.5v7a.5.5 0 0 1-1 
                                    0v-7a.5.5 0 0 1 .5-.5zm2.5 
                                    0a.5.5 0 0 1 .5.5v7a.5.5 
                                    0 0 1-1 0v-7a.5.5 0 0 1 
                                    .5-.5zm3 .5a.5.5 0 0 1 1 
                                    0v7a.5.5 0 0 1-1 0v-7z"/>
                        </svg>
                    </a>

                    <button class="btn btn-primary">Checkout</button>
                </div>
            </div>
        </div>
    @endforeach
</body>
</html>
