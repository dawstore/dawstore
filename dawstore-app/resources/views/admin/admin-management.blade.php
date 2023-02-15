@extends('admin.templates.template-admin')

@section('titulo')
Admin Management
@endsection

@section('admin-management-active')
active
@endsection

@section('admin-management-section')
<main class="content">
<div class="card" id="card1">
    <div class="card-top"><img class="card-image" alt="" src=""/></div>
    <div class="card-mid">
      <h4 class="card-title">Titre</h4>
      <label class="card-desc">Description</label>
      <div class="card-blur-zone"></div>
    </div>
  </div>
  <div class="card" id="card2">
    <div class="card-top"><img class="card-image" alt="" src="" /></div>
    <div class="card-mid">
      <h4 class="card-title">Titre</h4>
      <label class="card-desc">Description</label>
      <div class="card-blur-zone"></div>
    </div>
  </div>
  <div class="card" id="card3">
    <div class="card-top"><img class="card-image" alt="" src="" /></div>
    <div class="card-mid">
      <h4 class="card-title">Titre</h4>
      <label class="card-desc">Description</label>
      <div class="card-blur-zone"></div>
    </div>
  </div>
</main>
@endsection
