@extends('admin.templates.template-admin')

@section('titulo')
Admin Management
@endsection

@section('admin-management-active')
active
@endsection

@section('admin-management-section')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{URL::asset('/img/dashboard/adminList.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Nombre Admin</h4>
                        <span class="badge bg-danger">Super-Admin</span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <a href="">
                            <li class="list-group-item">An item</li>
                        </a>
                        
                        <a href="">
                            <li class="list-group-item">An item</li>
                        </a>
                        <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
</main>
@endsection
