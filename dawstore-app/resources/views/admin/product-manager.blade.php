@extends('admin.templates.template-admin')

@section('titulo')
Product Manager
@endsection

@section('product-manager-active')
active
@endsection

@section('product-manager-section')
<main class="content">

    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Product Manager</h1>
            <a class="badge bg-dark text-white ms-2" href="#">
                Edit, create and remove items
            </a>
        </div>

        <form action="{{ route('insert-product') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">General Settings</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" name="sku" class="form-control" placeholder="SKU" required>
                        </div>
                        <div class="card-body">
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="card-body">
                            <input type="text" name="desc" class="form-control" placeholder="Description" required>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Price</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" name="price" class="form-control" placeholder="Price" required>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Stock</h5>
                        </div>
                        <div class="card-body">
                            <input class="form-control" type="text" name="stock" placeholder="Product Stock" required>
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
                                    <input class="form-check-input" type="radio" value="Male" name="genre">
                                    <span class="form-check-label">
                                        Male
                                    </span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" value="Female" name="genre">
                                    <span class="form-check-label">
                                        Female
                                    </span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" value="Unisex" name="genre">
                                    <span class="form-check-label">
                                        Unisex
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Images</h5>
                        </div>
                        <div class="card-body">
                            <p>You have to upload 4 images to create the product.</p>
                            <br>
                            <input class="form-control form-control-sm" id="formFileSm" name="images[]" type="file" multiple>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Brand</h5>
                        </div>
                        <div class="card-body">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-sm" name="brand">
                                <option selected disabled>Brand</option>
                               
                                @foreach ($brands as $brand)

                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                    
                                @endforeach
                              </select>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Edit Products</h5>
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
        </tbody>
    </table>
</main>
@endsection