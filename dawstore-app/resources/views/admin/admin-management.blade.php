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

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Add and Edit Admin Users</h1>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Admin Credentials</h5>
                    </div>
                    <div class="card-body">
                        <input type="text" class="form-control" id="admin-username" name="admin-username" placeholder="Username" required>
                    </div>
                    <div class="card-body">
                        <input type="email" class="form-control" id="admin-email" name="admin-email" placeholder="Email" required>
                    </div>
                    <div class="card-body">
                        <input type="password" class="form-control" id="admin-password" name="admin-password" placeholder="Password" required>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Profile Pic (Opcional)</h5>
                    </div>
                    <div class="card-body">
                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                    </div>
                </div>

            </div>

        <div class="col-12 col-lg-6">
            <div class="row">
                <div class="col-12 col-lg-8 col-xxl-9 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Account Actives</h5>
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ADMIN HERE</td>
                                <td><span class="badge bg-success">Done</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    </div>
</main>
@endsection