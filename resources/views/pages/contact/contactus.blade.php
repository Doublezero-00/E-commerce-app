@extends('layouts.publichome')

@section('content')
    <div class="contact-container">
        <div class="contact-form">
            <form action="{{route('contact.store')}}" method="POST">
                @csrf
                <h2 class="form-title">Contact Us</h2>
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                </div>
                <div class="form-group mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-custom">Send Message</button>
            </form>
        </div>
    </div>

    <style>
        .contact-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 50px 15px;
            background: #f8f9fa;
        }

        .contact-form {
            width: 100%;
            max-width: 600px;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .form-title {
            text-align: center;
            margin-bottom: 25px;
            font-size: 1.5rem;
            font-weight: 600;
            color: #0d6efd;
        }

        .form-label {
            font-weight: 500;
            margin-bottom: 6px;
        }

        .form-control {
            border-radius: 8px;
            padding: 10px;
        }

        .btn-custom {
            background-color: #0d6efd;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            width: 100%;
            font-weight: 600;
            color: #fff;
        }

        .btn-custom:hover {
            background-color: #084298;
        }
    </style>
@endsection
