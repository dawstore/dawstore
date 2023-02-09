@extends('admin.templates.template-admin')

@section('titulo')
Edit Product
@endsection

@section('admin-panel-active')
active
@endsection

@section('edit-product-section')
<main class="content">
    <div class="container-fluid p-0">
        <form action="{{ route('edit-product', $product->id) }}" method="POST" enctype="multipart/form-data"> 
            @method('PUT')
            @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">{{ $product->name }}</h1>
                <a class="badge bg-dark text-white ms-2" href="#">
                    Product Manager/Edit
                </a>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">General Settings</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" name="sku" class="form-control" placeholder="Sku" value="{{ $product->sku }}" required>
                        </div>
                        <div class="card-body">
                            <input type="text"  name="name" class="form-control" placeholder="Name" value="{{ $product->name }}" required>
                        </div>
                        <div class="card-body">
                            <input type="text"  name="description" class="form-control" placeholder="Description" value="{{ $product->description }}" required>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Price</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}" required>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Stock</h5>
                        </div>
                        <div class="card-body">
                            <input class="form-control" type="number" name="stock" placeholder="Product Stock" value="{{ $product->stock }}" required>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Genre</h5>
                        </div>
                        <div class="card-body">
                            <div>
                                <label class="form-check">
                                    @if ($product->genre == 'Male')
                                    <input class="form-check-input" type="radio" value="Male" checked="checked" name="genre">
                                    <span class="form-check-label">
                                        Male
                                    </span>
                                    @else
                                    <input class="form-check-input" type="radio" value="Male" name="genre">
                                    <span class="form-check-label">
                                        Male
                                    </span>
                                    @endif
                                </label>
                                <label class="form-check">
                                    @if ($product->genre == 'Female')
                                    <input class="form-check-input" type="radio" value="Female" checked="checked" name="genre">
                                    <span class="form-check-label">
                                        Female
                                    </span>
                                    @else
                                    <input class="form-check-input" type="radio" value="Female" name="genre">
                                    <span class="form-check-label">
                                        Female
                                    </span>
                                    @endif
                                </label>
                                <label class="form-check">
                                    @if ($product->genre == 'Unisex')
                                    <input class="form-check-input" type="radio" value="Unisex" checked="checked" name="genre">
                                    <span class="form-check-label">
                                        Unisex
                                    </span>
                                    @else
                                    <input class="form-check-input" type="radio" value="Unisex" name="genre">
                                    <span class="form-check-label">
                                        Unisex
                                    </span>
                                    @endif
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Images</h5>
                        </div>
                        <div class="card-body">
                            <input class="form-control form-control-sm" id="formFileSm" name="images" type="file" value="{{ $product->images }}" multiple>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Edit Products</h5>
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
