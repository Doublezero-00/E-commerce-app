@extends('layouts.app')

@section('header')
    <div class="bread-crumb-header d-flex justify-content-between align-items-center mb-3">
        <div>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                </ol>
            </nav>
        </div>
        <div>
            <a href="{{ route('users.create') }}">
                <button class="btn btn-primary">Add New User</button>
            </a>
        </div>
    </div>
@endsection

@section('content')
    <div class="container mt-3">
        <table id="categories-table" class="table table-bordered table-striped table-hover align-middle">
            <thead class="table-primary">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th colspan="2" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->password}}</td>
                        <td><a href="{{route('users.edit', $user->id)}}"><button class="btn btn-primary">Edit</button></a></td>
                        <td><a href="{{route('users.delete', $user->id)}}"><button class="btn btn-danger">Delete</button></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
