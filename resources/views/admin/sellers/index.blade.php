@extends('admin.layouts.app')

@section('asside')
@include('admin.layouts.includes.asside')
@endsection

@section('header-section')
<div class="container-xl">
  <div class="row g-2 align-items-center">
    <div class="col">
      <h2 class="page-title">
          <div class="col-auto">
              {{-- <div class="avatar bg-indigo-lt"><x-bi-trash/></div> --}}
            </div>
            Sellers
      </h2>
      {{-- <div class="text-muted mt-1">1-12 of 241 products</div> --}}
    </div>
    {{-- <!-- Page title actions --> --}}
    <div class="col-12 col-md-auto ms-auto d-print-none">
      <div class="d-flex">
        <div class="me-3">
          <div class="input-icon">
            <input type="text" value="" class="form-control form-control-rounded" placeholder="Search…">
            <span class="input-icon-addon">
              <x-bi-search />
            </span>
          </div>
        </div>
        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create-order-modal">
          <x-bi-plus-lg class="text-light icon"/>
          New Seller
        </a>
      </div>
    </div>
  </div>
</div>
@endsection

@section('main')
<div class="container-xl mt-3">
  <div class="row row-cards">
    <div class="col-md-6 col-lg-3">
      <div class="card">
        <div class="card-actions mt-2">
          <div class="container">
             <div class="dropdown">
            <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="19" r="1"></circle><circle cx="12" cy="5" r="1"></circle></svg>
            </a>
            <div class="dropdown-menu dropdown-menu-end" style="">
              <a class="dropdown-item" href="#">Edit user</a>
              <a class="dropdown-item" href="#">Change permissions</a>
              <a class="dropdown-item text-danger" href="#">Delete user</a>
            </div>
          </div>
          </div>
        </div>
        <div class="card-body p-4 text-center">
          <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url(./static/avatars/000m.jpg)"></span>
          <h3 class="m-0 mb-1"><a href="#">Paweł Kuna</a></h3>
          <div class="text-muted">UI Designer</div>
          <div class="mt-3">
            <span class="badge bg-purple-lt">Owner</span>
          </div>
        </div>
        <div class="d-flex">
          <a href="#" class="card-btn btn btn-ghost-success">
            Profile
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="card">
        <div class="card-actions mt-2">
          <div class="container">
             <div class="dropdown">
            <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="19" r="1"></circle><circle cx="12" cy="5" r="1"></circle></svg>
            </a>
            <div class="dropdown-menu dropdown-menu-end" style="">
              <a class="dropdown-item" href="#">Edit user</a>
              <a class="dropdown-item" href="#">Change permissions</a>
              <a class="dropdown-item text-danger" href="#">Delete user</a>
            </div>
          </div>
          </div>
        </div>
        <div class="card-body p-4 text-center">
          <span class="avatar avatar-xl mb-3 avatar-rounded">JL</span>
          <h3 class="m-0 mb-1"><a href="#">Jeffie Lewzey</a></h3>
          <div class="text-muted">Chemical Engineer</div>
          <div class="mt-3">
            <span class="badge bg-green-lt">Admin</span>
          </div>
        </div>
        <div class="d-flex">
          <a href="#" class="card-btn btn btn-ghost-success">
            Profile
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="card">
        <div class="card-actions mt-2">
          <div class="container">
             <div class="dropdown">
            <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="19" r="1"></circle><circle cx="12" cy="5" r="1"></circle></svg>
            </a>
            <div class="dropdown-menu dropdown-menu-end" style="">
              <a class="dropdown-item" href="#">Edit user</a>
              <a class="dropdown-item" href="#">Change permissions</a>
              <a class="dropdown-item text-danger" href="#">Delete user</a>
            </div>
          </div>
          </div>
        </div>
        <div class="card-body p-4 text-center">
          <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url(./static/avatars/002m.jpg)"></span>
          <h3 class="m-0 mb-1"><a href="#">Mallory Hulme</a></h3>
          <div class="text-muted">Geologist IV</div>
          <div class="mt-3">
            <span class="badge bg-green-lt">Admin</span>
          </div>
        </div>
        <div class="d-flex">
          <a href="#" class="card-btn btn btn-ghost-success">
            Profile
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="card">
      <div class="card-actions mt-2">
          <div class="container">
             <div class="dropdown">
            <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="19" r="1"></circle><circle cx="12" cy="5" r="1"></circle></svg>
            </a>
            <div class="dropdown-menu dropdown-menu-end" style="">
              <a class="dropdown-item" href="#">Edit user</a>
              <a class="dropdown-item" href="#">Change permissions</a>
              <a class="dropdown-item text-danger" href="#">Delete user</a>
            </div>
          </div>
          </div>
        </div>
        <div class="card-body p-4 text-center">
          <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url(./static/avatars/003m.jpg)"></span>
          <h3 class="m-0 mb-1"><a href="#">Dunn Slane</a></h3>
          <div class="text-muted">Research Nurse</div>
          <div class="mt-3">
            <span class="badge bg-green-lt">Admin</span>
          </div>
        </div>
        <div class="d-flex">
          <a href="#" class="card-btn btn btn-ghost-success">
            Profile
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="card">
        <div class="card-actions mt-2">
          <div class="container">
             <div class="dropdown">
            <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="19" r="1"></circle><circle cx="12" cy="5" r="1"></circle></svg>
            </a>
            <div class="dropdown-menu dropdown-menu-end" style="">
              <a class="dropdown-item" href="#">Edit user</a>
              <a class="dropdown-item" href="#">Change permissions</a>
              <a class="dropdown-item text-danger" href="#">Delete user</a>
            </div>
          </div>
          </div>
        </div>
        <div class="card-body p-4 text-center">
          <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url(./static/avatars/000f.jpg)"></span>
          <h3 class="m-0 mb-1"><a href="#">Emmy Levet</a></h3>
          <div class="text-muted">VP Product Management</div>
          <div class="mt-3">
          </div>
        </div>
        <div class="d-flex">
          <a href="#" class="card-btn btn btn-ghost-success">
            Profile
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="card">
        <div class="card-actions mt-2">
          <div class="container">
             <div class="dropdown">
            <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="19" r="1"></circle><circle cx="12" cy="5" r="1"></circle></svg>
            </a>
            <div class="dropdown-menu dropdown-menu-end" style="">
              <a class="dropdown-item" href="#">Edit user</a>
              <a class="dropdown-item" href="#">Change permissions</a>
              <a class="dropdown-item text-danger" href="#">Delete user</a>
            </div>
          </div>
          </div>
        </div>
        <div class="card-body p-4 text-center">
          <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url(./static/avatars/001f.jpg)"></span>
          <h3 class="m-0 mb-1"><a href="#">Maryjo Lebarree</a></h3>
          <div class="text-muted">Civil Engineer</div>
          <div class="mt-3">
          </div>
        </div>
        <div class="d-flex">
          <a href="#" class="card-btn btn btn-ghost-success">
            Profile
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="card">
        <div class="card-actions mt-2">
          <div class="container">
             <div class="dropdown">
            <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="19" r="1"></circle><circle cx="12" cy="5" r="1"></circle></svg>
            </a>
            <div class="dropdown-menu dropdown-menu-end" style="">
              <a class="dropdown-item" href="#">Edit user</a>
              <a class="dropdown-item" href="#">Change permissions</a>
              <a class="dropdown-item text-danger" href="#">Delete user</a>
            </div>
          </div>
          </div>
        </div>
        <div class="card-body p-4 text-center">
          <span class="avatar avatar-xl mb-3 avatar-rounded">EP</span>
          <h3 class="m-0 mb-1"><a href="#">Egan Poetz</a></h3>
          <div class="text-muted">Research Nurse</div>
          <div class="mt-3">
          </div>
        </div>
        <div class="d-flex">
          <a href="#" class="card-btn btn btn-ghost-success">
            Profile
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="card">
        <div class="card-actions mt-2">
          <div class="container">
             <div class="dropdown">
            <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="19" r="1"></circle><circle cx="12" cy="5" r="1"></circle></svg>
            </a>
            <div class="dropdown-menu dropdown-menu-end" style="">
              <a class="dropdown-item" href="#">Edit user</a>
              <a class="dropdown-item" href="#">Change permissions</a>
              <a class="dropdown-item text-danger" href="#">Delete user</a>
            </div>
          </div>
          </div>
        </div>
        <div class="card-body p-4 text-center">
          <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url(./static/avatars/002f.jpg)"></span>
          <h3 class="m-0 mb-1"><a href="#">Kellie Skingley</a></h3>
          <div class="text-muted">Teacher</div>
          <div class="mt-3">
          </div>
        </div>
        <div class="d-flex">
          <a href="#" class="card-btn btn btn-ghost-success">
            Profile
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="card">
        <div class="card-actions mt-2">
          <div class="container">
             <div class="dropdown">
            <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="19" r="1"></circle><circle cx="12" cy="5" r="1"></circle></svg>
            </a>
            <div class="dropdown-menu dropdown-menu-end" style="">
              <a class="dropdown-item" href="#">Edit user</a>
              <a class="dropdown-item" href="#">Change permissions</a>
              <a class="dropdown-item text-danger" href="#">Delete user</a>
            </div>
          </div>
          </div>
        </div>
        <div class="card-body p-4 text-center">
          <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url(./static/avatars/003f.jpg)"></span>
          <h3 class="m-0 mb-1"><a href="#">Christabel Charlwood</a></h3>
          <div class="text-muted">Tax Accountant</div>
          <div class="mt-3">
          </div>
        </div>
        <div class="d-flex">
          <a href="#" class="card-btn btn btn-ghost-success">
            Profile
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="card">
        <div class="card-actions mt-2">
          <div class="container">
             <div class="dropdown">
            <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="19" r="1"></circle><circle cx="12" cy="5" r="1"></circle></svg>
            </a>
            <div class="dropdown-menu dropdown-menu-end" style="">
              <a class="dropdown-item" href="#">Edit user</a>
              <a class="dropdown-item" href="#">Change permissions</a>
              <a class="dropdown-item text-danger" href="#">Delete user</a>
            </div>
          </div>
          </div>
        </div>
        <div class="card-body p-4 text-center">
          <span class="avatar avatar-xl mb-3 avatar-rounded">HS</span>
          <h3 class="m-0 mb-1"><a href="#">Haskel Shelper</a></h3>
          <div class="text-muted">Staff Scientist</div>
          <div class="mt-3">
          </div>
        </div>
        <div class="d-flex">
          <a href="#" class="card-btn btn btn-ghost-success">
            Profile
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="card">
        <div class="card-actions mt-2">
          <div class="container">
             <div class="dropdown">
            <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="19" r="1"></circle><circle cx="12" cy="5" r="1"></circle></svg>
            </a>
            <div class="dropdown-menu dropdown-menu-end" style="">
              <a class="dropdown-item" href="#">Edit user</a>
              <a class="dropdown-item" href="#">Change permissions</a>
              <a class="dropdown-item text-danger" href="#">Delete user</a>
            </div>
          </div>
          </div>
        </div>
        <div class="card-body p-4 text-center">
          <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url(./static/avatars/006m.jpg)"></span>
          <h3 class="m-0 mb-1"><a href="#">Lorry Mion</a></h3>
          <div class="text-muted">Automation Specialist IV</div>
          <div class="mt-3">
          </div>
        </div>
        <div class="d-flex">
          <a href="#" class="card-btn btn btn-ghost-success">
            Profile
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="card">
        <div class="card-actions mt-2">
          <div class="container">
             <div class="dropdown">
            <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="19" r="1"></circle><circle cx="12" cy="5" r="1"></circle></svg>
            </a>
            <div class="dropdown-menu dropdown-menu-end" style="">
              <a class="dropdown-item" href="#">Edit user</a>
              <a class="dropdown-item" href="#">Change permissions</a>
              <a class="dropdown-item text-danger" href="#">Delete user</a>
            </div>
          </div>
          </div>
        </div>
        <div class="card-body p-4 text-center">
          <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url(./static/avatars/004f.jpg)"></span>
          <h3 class="m-0 mb-1"><a href="#">Leesa Beaty</a></h3>
          <div class="text-muted">Editor</div>
          <div class="mt-3">
          </div>
        </div>
        <div class="d-flex">
          <a href="#" class="card-btn btn btn-ghost-success">
            Profile
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="card">
        <div class="card-actions mt-2">
          <div class="container">
             <div class="dropdown">
            <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="19" r="1"></circle><circle cx="12" cy="5" r="1"></circle></svg>
            </a>
            <div class="dropdown-menu dropdown-menu-end" style="">
              <a class="dropdown-item" href="#">Edit user</a>
              <a class="dropdown-item" href="#">Change permissions</a>
              <a class="dropdown-item text-danger" href="#">Delete user</a>
            </div>
          </div>
          </div>
        </div>
        <div class="card-body p-4 text-center">
          <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url(./static/avatars/007m.jpg)"></span>
          <h3 class="m-0 mb-1"><a href="#">Perren Keemar</a></h3>
          <div class="text-muted">Analog Circuit Design manager</div>
          <div class="mt-3">
          </div>
        </div>
        <div class="d-flex">
          <a href="#" class="card-btn btn btn-ghost-success">
            Profile
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="card">
        <div class="card-actions mt-2">
          <div class="container">
             <div class="dropdown">
            <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="19" r="1"></circle><circle cx="12" cy="5" r="1"></circle></svg>
            </a>
            <div class="dropdown-menu dropdown-menu-end" style="">
              <a class="dropdown-item" href="#">Edit user</a>
              <a class="dropdown-item" href="#">Change permissions</a>
              <a class="dropdown-item text-danger" href="#">Delete user</a>
            </div>
          </div>
          </div>
        </div>
        <div class="card-body p-4 text-center">
          <span class="avatar avatar-xl mb-3 avatar-rounded">SA</span>
          <h3 class="m-0 mb-1"><a href="#">Sunny Airey</a></h3>
          <div class="text-muted">Nuclear Power Engineer</div>
          <div class="mt-3">
          </div>
        </div>
        <div class="d-flex">
          <a href="#" class="card-btn btn btn-ghost-success">
            Profile
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="card">
        <div class="card-actions mt-2">
          <div class="container">
             <div class="dropdown">
            <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="19" r="1"></circle><circle cx="12" cy="5" r="1"></circle></svg>
            </a>
            <div class="dropdown-menu dropdown-menu-end" style="">
              <a class="dropdown-item" href="#">Edit user</a>
              <a class="dropdown-item" href="#">Change permissions</a>
              <a class="dropdown-item text-danger" href="#">Delete user</a>
            </div>
          </div>
          </div>
        </div>
        <div class="card-body p-4 text-center">
          <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url(./static/avatars/009m.jpg)"></span>
          <h3 class="m-0 mb-1"><a href="#">Geoffry Flaunders</a></h3>
          <div class="text-muted">Software Test Engineer II</div>
          <div class="mt-3">
          </div>
        </div>
        <div class="d-flex">
          <a href="#" class="card-btn btn btn-ghost-success">
            Profile
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="card">
        <div class="card-actions mt-2">
          <div class="container">
             <div class="dropdown">
            <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="19" r="1"></circle><circle cx="12" cy="5" r="1"></circle></svg>
            </a>
            <div class="dropdown-menu dropdown-menu-end" style="">
              <a class="dropdown-item" href="#">Edit user</a>
              <a class="dropdown-item" href="#">Change permissions</a>
              <a class="dropdown-item text-danger" href="#">Delete user</a>
            </div>
          </div>
          </div>
        </div>
        <div class="card-body p-4 text-center">
          <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url(./static/avatars/010m.jpg)"></span>
          <h3 class="m-0 mb-1"><a href="#">Thatcher Keel</a></h3>
          <div class="text-muted">VP Sales</div>
          <div class="mt-3">
          </div>
        </div>
        <div class="d-flex">
          <a href="#" class="card-btn btn btn-ghost-success">
            Profile
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="card">
        <div class="card-actions mt-2">
          <div class="container">
             <div class="dropdown">
            <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="19" r="1"></circle><circle cx="12" cy="5" r="1"></circle></svg>
            </a>
            <div class="dropdown-menu dropdown-menu-end" style="">
              <a class="dropdown-item" href="#">Edit user</a>
              <a class="dropdown-item" href="#">Change permissions</a>
              <a class="dropdown-item text-danger" href="#">Delete user</a>
            </div>
          </div>
          </div>
        </div>
        <div class="card-body p-4 text-center">
          <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url(./static/avatars/005f.jpg)"></span>
          <h3 class="m-0 mb-1"><a href="#">Dyann Escala</a></h3>
          <div class="text-muted">Mechanical Systems Engineer</div>
          <div class="mt-3">
          </div>
        </div>
        <div class="d-flex">
          <a href="#" class="card-btn btn btn-ghost-success">
            Profile
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="card">
        <div class="card-actions mt-2">
          <div class="container">
             <div class="dropdown">
            <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="19" r="1"></circle><circle cx="12" cy="5" r="1"></circle></svg>
            </a>
            <div class="dropdown-menu dropdown-menu-end" style="">
              <a class="dropdown-item" href="#">Edit user</a>
              <a class="dropdown-item" href="#">Change permissions</a>
              <a class="dropdown-item text-danger" href="#">Delete user</a>
            </div>
          </div>
          </div>
        </div>
        <div class="card-body p-4 text-center">
          <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url(./static/avatars/006f.jpg)"></span>
          <h3 class="m-0 mb-1"><a href="#">Avivah Mugleston</a></h3>
          <div class="text-muted">Actuary</div>
          <div class="mt-3">
          </div>
        </div>
        <div class="d-flex">
          <a href="#" class="card-btn btn btn-ghost-success">
            Profile
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="d-flex mt-4">
    <ul class="pagination ms-auto">
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
          <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="15 6 9 12 15 18" /></svg>
          prev
        </a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item active"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">4</a></li>
      <li class="page-item"><a class="page-link" href="#">5</a></li>
      <li class="page-item">
        <a class="page-link" href="#">
          next <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18" /></svg>
        </a>
      </li>
    </ul>
  </div>
</div>
@endsection
@section('scripts-chart')

@endsection