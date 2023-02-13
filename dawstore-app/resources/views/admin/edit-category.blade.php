@extends('admin.templates.template-admin')

@section('titulo')
Edit Category
@endsection

@section('admin-panel-active')
active
@endsection

@section('edit-category-section')
<main class="content">
    <div class="container-fluid p-0">
        <form action="{{ route('edit-category', $category->id) }}" method="POST" enctype="multipart/form-data"> 
            @method('PUT')
            @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">{{ $category->name }}</h1>
                <a class="badge bg-dark text-white ms-2" href="#">
                    Category Manager/Edit
                </a>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">General Settings</h5>
                        </div>
                        <div class="card-body">
                            <input type="text"  name="name" class="form-control" placeholder="Name" value="{{ $category->name }}" required>
                        </div>
                        <div class="card-body">
                            <input type="text"  name="description" class="form-control" placeholder="Description" value="{{ $category->description }}" required>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Edit Category</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                            <button class="btn btn-success text-dark fw-bold" type="submit">Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        @if (session('mensaje'))
                <div class="alert alert-success">
                    {{ session('mensaje') }}
                </div>
        @endif
    </div>
</main>
@endsection