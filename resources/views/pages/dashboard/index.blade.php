@extends('layouts.app')

@section('header')
    <div class="bread-crumb-header d-flex justify-content-between align-items-center mb-3">
        <div>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
        </div>
    </div>
@endsection

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 fw-bold">Admin Dashboard</h2>
    <div class="row">

        <div class="col-md-4 mb-4">
            <div class="card shadow-lg border-0 rounded-3 text-center text-white bg-primary">
                <div class="card-body">
                    <h5 class="card-title">Categories</h5>
                    <p class="display-4 fw-bold">{{ $total_categories }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow-lg border-0 rounded-3 text-center text-white bg-success">
                <div class="card-body">
                    <h5 class="card-title">Products</h5>
                    <p class="display-4 fw-bold">{{ $total_products }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow-lg border-0 rounded-3 text-center text-white bg-warning">
                <div class="card-body">
                    <h5 class="card-title">Users</h5>
                    <p class="display-4 fw-bold">{{ $total_users }}</p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
