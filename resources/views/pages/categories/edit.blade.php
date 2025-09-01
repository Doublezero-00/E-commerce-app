@extends('layouts.app')

@section('header')
    <div class="bread-crumb-header">
        <div class="col-md-8">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{route('categories.index')}}">Categories</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-4 text-end">
            <a href="{{route('categories.create')}}">
                <button class="btn btn-primary">Add new</button>
            </a>
        </div>
    </div>
@endsection

@section('content')
    <div>
        <form class="categorycreateform" action={{ route('categories.update', $category->id)}} method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" value="{{ $category->name }}" name="name" placeholder="">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" value="{{ $category->description }}" name="description" ></textarea>
            </div>
            <button class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection