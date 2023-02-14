@extends('admin.templates.template-admin')

@section('titulo')
Category Management
@endsection

@section('category-manager-active')
active
@endsection

@section('admin-management-section')
<main class="content">

    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Category Manager</h1>
            <a class="badge bg-dark text-white ms-2" href="#">
                Edit, create and remove items
            </a>
        </div>

        <form action="{{ route('insert-category') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">General Settings</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="card-body">
                            <input type="text" name="desc" class="form-control" placeholder="Description" required>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Edit Category</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                            <button class="btn btn-success text-dark fw-bold" type="submit">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        @if (session('mensaje'))
            <div class="alert alert-success" role="alert">
                {{ session('mensaje') }}
            </div>
        @endif
    </div>
    <div class="row">
        <div class="col-12 col-lg-8 col-xxl-9 d-flex" data-aos="flip-down" data-aos-duration="1000">
            <div class="card flex-fill">
                <div class="card-header">
                    <h5 class="card-title mb-0">Latest categorys</h5>
                    @if (session('message'))
                        <div>
                        {{ session('message') }}
                        </div>
                    @endif
                </div>
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th class="d-none d-xl-table-cell">Name</th>
                            <th class="d-none d-xl-table-cell">Description</th>
                            <th class="d-none d-xl-table-cell">Edit</th>
                            <th class="d-none d-xl-table-cell">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td class="d-none d-xl-table-cell">{{ $category->name }}</td>
                            <td class="d-none d-xl-table-cell">{{ $category->description }}</td>
                            <td><a href="{{ route('edit-category', $category) }}" class="btn btn-success btn-sm"> <i class="bi bi-pencil-square"></i> </a></td>
                            <td><form action="{{ route('category-manager', $category) }}" method="POST" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-sm" type="submit"><i class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection