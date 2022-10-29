@extends('admin.layouts.app')

@section('asside')
@include('admin.layouts.includes.asside')
@endsection

@section('header-section')
<div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <h2 class="page-title">
          Products
        </h2>
        <div class="text-muted mt-1">1-12 of 241 products</div>
      </div>
      {{-- <!-- Page title actions --> --}}
      <div class="col-12 col-md-auto ms-auto d-print-none">
        <div class="d-flex">
          <div class="me-3">
            <div class="input-group">
                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Action
                </button>
                <div class="dropdown-menu" style="">
                  <a class="dropdown-item" href="#">
                    Action
                  </a>
                  <a class="dropdown-item" href="#">
                    Another action
                  </a>
                </div>
                <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search…">
              </div>
          </div>
          <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-report">
            <x-bi-plus-lg class="text-light icon"/>
            New Product
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('main')
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
    <div class="card card-sm">
      <a href="#" class="d-block"><img src="./static/products/huawei-mate.jpg" class="card-img-top"></a>
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div>
            <div>Paweł Kuna</div>
            <div class="text-muted">3 days ago</div>
          </div>
          
        </div>
      </div>
      <div class="card-footer">
        <div class="ms-auto">
            <a href="#" class="btn btn-icon bg-primary">
                <x-bi-pencil-square class="text-light icon"/>
            </a>
            <a href="#" class="btn btn-icon bg-danger" data-bs-toggle="modal" data-bs-target="#modal-danger">
              <x-bi-trash3-fill class="text-light icon"/>
            </a>
          </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
    <div class="card card-sm">
      <a href="#" class="d-block"><img src="./static/products/gopro-hero.jpg" class="card-img-top"></a>
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div>
            <div>Paweł Kuna</div>
            <div class="text-muted">3 days ago</div>
          </div>
          
        </div>
      </div>
      <div class="card-footer">
        <div class="ms-auto">
          <a href="#" class="btn btn-icon bg-primary">
              <x-bi-pencil-square class="text-light icon"/>
          </a>
          <a href="#" class="btn btn-icon bg-danger">
            <x-bi-trash3-fill class="text-light icon"/>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
    <div class="card card-sm">
      <a href="#" class="d-block"><img src="./static/products/apple-macbook-pro.jpg" class="card-img-top"></a>
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div>
            <div>Paweł Kuna</div>
            <div class="text-muted">3 days ago</div>
          </div>
          
        </div>
      </div>
      <div class="card-footer">
        <div class="ms-auto">
          <a href="#" class="btn btn-icon bg-primary">
              <x-bi-pencil-square class="text-light icon"/>
          </a>
          <a href="#" class="btn btn-icon bg-danger">
            <x-bi-trash3-fill class="text-light icon"/>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
    <div class="card card-sm">
      <a href="#" class="d-block"><img src="./static/products/apple-iphone7.jpg" class="card-img-top"></a>
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div>
            <div>Paweł Kuna</div>
            <div class="text-muted">3 days ago</div>
          </div>
          
        </div>
      </div>
      <div class="card-footer">
        <div class="ms-auto">
          <a href="#" class="btn btn-icon bg-primary">
              <x-bi-pencil-square class="text-light icon"/>
          </a>
          <a href="#" class="btn btn-icon bg-danger">
            <x-bi-trash3-fill class="text-light icon"/>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
    <div class="card card-sm">
      <a href="#" class="d-block"><img src="./static/products/lg-g6.jpg" class="card-img-top"></a>
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div>
            <div>Paweł Kuna</div>
            <div class="text-muted">3 days ago</div>
          </div>
          
        </div>
      </div>
      <div class="card-footer">
        <div class="ms-auto">
          <a href="#" class="btn btn-icon bg-primary">
              <x-bi-pencil-square class="text-light icon"/>
          </a>
          <a href="#" class="btn btn-icon bg-danger">
            <x-bi-trash3-fill class="text-light icon"/>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
    <div class="card card-sm">
      <a href="#" class="d-block"><img src="./static/products/gopro-hero.jpg" class="card-img-top"></a>
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div>
            <div>Paweł Kuna</div>
            <div class="text-muted">3 days ago</div>
          </div>
          
        </div>
      </div>
      <div class="card-footer">
        <div class="ms-auto">
          <a href="#" class="btn btn-icon bg-primary">
              <x-bi-pencil-square class="text-light icon"/>
          </a>
          <a href="#" class="btn btn-icon bg-danger">
            <x-bi-trash3-fill class="text-light icon"/>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
    <div class="card card-sm">
      <a href="#" class="d-block"><img src="./static/products/apple-macbook-pro.jpg" class="card-img-top"></a>
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div>
            <div>Paweł Kuna</div>
            <div class="text-muted">3 days ago</div>
          </div>
          
        </div>
      </div>
      <div class="card-footer">
        <div class="ms-auto">
          <a href="#" class="btn btn-icon bg-primary">
              <x-bi-pencil-square class="text-light icon"/>
          </a>
          <a href="#" class="btn btn-icon bg-danger">
            <x-bi-trash3-fill class="text-light icon"/>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
    <div class="card card-sm">
      <a href="#" class="d-block"><img src="./static/products/apple-iphone7.jpg" class="card-img-top"></a>
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div>
            <div>Paweł Kuna</div>
            <div class="text-muted">3 days ago</div>
          </div>
          
        </div>
      </div>
      <div class="card-footer">
        <div class="ms-auto">
          <a href="#" class="btn btn-icon bg-primary">
              <x-bi-pencil-square class="text-light icon"/>
          </a>
          <a href="#" class="btn btn-icon bg-danger">
            <x-bi-trash3-fill class="text-light icon"/>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
    <div class="card card-sm">
      <a href="#" class="d-block"><img src="./static/products/huawei-mate.jpg" class="card-img-top"></a>
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div>
            <div>Paweł Kuna</div>
            <div class="text-muted">3 days ago</div>
          </div>
          
        </div>
      </div>
      <div class="card-footer">
        <div class="ms-auto">
          <a href="#" class="btn btn-icon bg-primary">
              <x-bi-pencil-square class="text-light icon"/>
          </a>
          <a href="#" class="btn btn-icon bg-danger">
            <x-bi-trash3-fill class="text-light icon"/>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
    <div class="card card-sm">
      <a href="#" class="d-block"><img src="./static/products/gopro-hero.jpg" class="card-img-top"></a>
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div>
            <div>Paweł Kuna</div>
            <div class="text-muted">3 days ago</div>
          </div>
          
        </div>
      </div>
      <div class="card-footer">
        <div class="ms-auto">
          <a href="#" class="btn btn-icon bg-primary">
              <x-bi-pencil-square class="text-light icon"/>
          </a>
          <a href="#" class="btn btn-icon bg-danger">
            <x-bi-trash3-fill class="text-light icon"/>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
    <div class="card card-sm">
      <a href="#" class="d-block"><img src="./static/products/apple-macbook-pro.jpg" class="card-img-top"></a>
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div>
            <div>Paweł Kuna</div>
            <div class="text-muted">3 days ago</div>
          </div>
          
        </div>
      </div>
      <div class="card-footer">
        <div class="ms-auto">
          <a href="#" class="btn btn-icon bg-primary">
              <x-bi-pencil-square class="text-light icon"/>
          </a>
          <a href="#" class="btn btn-icon bg-danger">
            <x-bi-trash3-fill class="text-light icon"/>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
    <div class="card card-sm">
      <a href="#" class="d-block"><img src="./static/products/apple-iphone7.jpg" class="card-img-top"></a>
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div>
            <div>Paweł Kuna</div>
            <div class="text-muted">3 days ago</div>
          </div>
          
        </div>
      </div>
      <div class="card-footer">
        <div class="ms-auto">
          <a href="#" class="btn btn-icon bg-primary">
              <x-bi-pencil-square class="text-light icon"/>
          </a>
          <a href="#" class="btn btn-icon bg-danger">
            <x-bi-trash3-fill class="text-light icon"/>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
    <div class="card card-sm">
      <a href="#" class="d-block"><img src="./static/products/huawei-mate.jpg" class="card-img-top"></a>
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div>
            <div>Paweł Kuna</div>
            <div class="text-muted">3 days ago</div>
          </div>
          
        </div>
      </div>
      <div class="card-footer">
        <div class="ms-auto">
          <a href="#" class="btn btn-icon bg-primary">
              <x-bi-pencil-square class="text-light icon"/>
          </a>
          <a href="#" class="btn btn-icon bg-danger">
            <x-bi-trash3-fill class="text-light icon"/>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
    <div class="card card-sm">
      <a href="#" class="d-block"><img src="./static/products/samsung-galaxy.jpg" class="card-img-top"></a>
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div>
            <div>Paweł Kuna</div>
            <div class="text-muted">3 days ago</div>
          </div>
          
        </div>
      </div>
      <div class="card-footer">
        <div class="ms-auto">
          <a href="#" class="btn btn-icon bg-primary">
              <x-bi-pencil-square class="text-light icon"/>
          </a>
          <a href="#" class="btn btn-icon bg-danger">
            <x-bi-trash3-fill class="text-light icon"/>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
    <div class="card card-sm">
      <a href="#" class="d-block"><img src="./static/products/lenovo-tab.jpg" class="card-img-top"></a>
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div>
            <div>Paweł Kuna</div>
            <div class="text-muted">3 days ago</div>
          </div>
          
        </div>
      </div>
      <div class="card-footer">
        <div class="ms-auto">
          <a href="#" class="btn btn-icon bg-primary">
              <x-bi-pencil-square class="text-light icon"/>
          </a>
          <a href="#" class="btn btn-icon bg-danger">
            <x-bi-trash3-fill class="text-light icon"/>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
    <div class="card card-sm">
      <a href="#" class="d-block"><img src="./static/products/apple-iphone7-special.jpg" class="card-img-top"></a>
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div>
            <div>Paweł Kuna</div>
            <div class="text-muted">3 days ago</div>
          </div>
          
        </div>
      </div>
      <div class="card-footer">
        <div class="ms-auto">
          <a href="#" class="btn btn-icon bg-primary">
              <x-bi-pencil-square class="text-light icon"/>
          </a>
          <a href="#" class="btn btn-icon bg-danger">
            <x-bi-trash3-fill class="text-light icon"/>
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
@endsection
@section('scripts-chart')

@endsection