@extends('admin.templates.template-admin')

@section('titulo')
Admin Management
@endsection

@section('admin-management-active')
active
@endsection

@section('admin-management-section')
<main class="content">
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="/img/dashboard/admin.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This.</p>
      </div>
    </div>
  </div>
</div>
</main>
@endsection
