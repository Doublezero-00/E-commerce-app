@extends('layouts.publichome')

@section('content')
    <div class="category">
        @php
            $categories = [
                (object) ['id'=> 1, 'name'=>'mobile_accessories', 'display_name'=>'Mobile Phone Accessories', 'img_url'=>'https://images.unsplash.com/photo-1573739022854-abceaeb585dc?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],
                (object) ['id'=>2, 'name'=>'smartwatches', 'display_name'=>'Smartwatches', 'img_url'=>'https://images.unsplash.com/photo-1698729616509-060e8f58e6c0?q=80&w=876&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],
                (object) ['id'=>3, 'name'=>'earphones', 'display_name'=>'Earphones And Headphones', 'img_url'=>'https://images.unsplash.com/photo-1608156639585-b3a032ef9689?q=80&w=465&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],
                (object) ['id'=>4, 'name'=>'powerbanks', 'display_name'=>'Power Banks', 'img_url'=>'https://images.unsplash.com/photo-1586253634201-819749fa2d1f?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],
                (object) ['id'=>5, 'name'=>'smart_devices', 'display_name'=>'Smart Devices', 'img_url'=>'https://images.unsplash.com/photo-1615655406736-b37c4fabf923?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],
                (object) ['id'=>6, 'name'=>'computer_accessories', 'display_name'=>'Computer Accessories', 'img_url'=>'https://images.unsplash.com/photo-1577375729078-820d5283031c?q=80&w=580&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],
                (object) ['id'=>7, 'name'=>'tools', 'display_name'=>'Tools', 'img_url'=>'https://images.unsplash.com/photo-1646376241249-f261e72c2029?q=80&w=387&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D']
            ];
        @endphp

        <div class="category-grid">
            @foreach($categories as $category)
                <a href="{{route('category.show', $category->name)}}">
                    <div class="card">
                        <img src="{{ $category->img_url }}" class="card-img-top" alt="{{ $category->display_name }}">
                        <div class="card-body">
                            <p class="card-text">{{ $category->display_name }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <style>
        .category {
            padding: 40px;
            background: #f8f9fa;
        }

        .category-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .card {
            width: 18rem;
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 6px 18px rgba(0,0,0,0.15);
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            text-align: center;
            padding: 15px;
        }

        .card-text {
            font-size: 1.1rem;
            font-weight: 500;
            color: #0d6efd;
        }

        @media (max-width: 768px) {
            .card {
                width: 100%;
                max-width: 350px;
            }
        }
    </style>
@endsection
