<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            margin: 0;
            padding: 20px;
        }

        .container {
            display: flex;
            gap: 30px;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            max-width: 900px;
            margin: 50px auto;
        }

        .container img {
            width: 350px;
            height: 350px;
            object-fit: cover;
            border-radius: 12px;
        }

        .details {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            gap: 15px;
        }

        .details h3 {
            font-size: 1.8rem;
            font-weight: bold;
        }

        .details h2 {
            color: #0d6efd;
            font-size: 1.6rem;
            margin-bottom: 10px;
        }

        .qty {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 15px 0;
        }

        .qty h5 {
            margin-right: 15px;
            font-size: 1.1rem;
        }

        .qty button {
            width: 40px;
            height: 40px;
            font-size: 20px;
            border: none;
            background: #0d6efd;
            color: #fff;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.2s;
        }

        .qty button:hover {
            background: #0056b3;
        }

        .qty span {
            min-width: 40px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }

        .details button {
            padding: 12px 20px;
            background: #198754;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
        }

        .details button:hover {
            background: #157347;
        }

        .details p {
            line-height: 1.5;
            color: #444;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: center;
            }

            .container img {
                width: 100%;
                max-width: 400px;
                height: auto;
            }
        }
    </style>
</head>
<body>
    <script>
        let quantity = 0;

        function increaseqty() {
            quantity++;
            document.getElementById('qty').innerHTML = quantity;
        }

        function decreaseqty() {
            if (quantity > 0) {
                quantity--;
                document.getElementById('qty').innerHTML = quantity;
            }
        }
    </script>

    <div class="container">
        <img src="{{$product->image}}" class="rounded float-left" alt="...">
        <div class="details">
            <h3>{{$product->name}}</h3>
            <h2>Rs. {{$product->price}}</h2>

            <div class="qty">
                <h5>Quantity</h5>
                <button onClick="decreaseqty()">-</button>
                <span id="qty">0</span>
                <button onClick="increaseqty()">+</button>
            </div>

            <button>Add to cart</button>

            <h4>Item description:</h4>
            <p>{{$product->description}}</p>
        </div>
    </div>
</body>
</html>
