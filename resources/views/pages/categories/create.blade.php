@extends('layouts.app')

@section('header')
    <div class="bread-crumb-header">
        <div class="col-md-8">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{route('categories.index')}}">Categories</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </nav>
        </div>
        {{-- <div class="col-md-4 text-end">
            <a href="{{route('categories.create')}}">
                <button class="btn btn-primary">Add new</button>
            </a>
        </div> --}}
    </div>
@endsection

@section('content')
    <div>
        <form class="categorycreateform" action={{ route('categories.store')}} method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="">
            </div>
            <div class="mb-3">
                <label for="textarea1" class="form-label">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
            </div>
            <button class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection