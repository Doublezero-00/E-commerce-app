@extends('layouts.app')

@section('header')
    <div class="bread-crumb-header d-flex justify-content-between align-items-center mb-3">
        <div>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Categories</li>
                </ol>
            </nav>
        </div>
        <div>
            <a href="{{ route('categories.create') }}">
                <button class="btn btn-primary">Add New</button>
            </a>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <table id="categories-table" class="table table-bordered table-striped table-hover align-middle">
            <thead class="table-primary">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th colspan="2" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            <a href="{{ route('categories.status', $category->id) }}">
                                <button class="btn btn-sm {{ $category->status == 1 ? 'btn-success' : 'btn-danger' }}">
                                    {{ $category->status == 1 ? 'Active' : 'Inactive' }}
                                </button>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="{{ route('categories.edit', $category->id) }}">
                                <button class="btn btn-sm btn-primary">Edit</button>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="{{ route('categories.delete', $category->id) }}">
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
           $('#categories-table').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true
           });
        });
    </script>
@endpush