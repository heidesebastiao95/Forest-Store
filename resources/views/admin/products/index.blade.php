@extends('admin.layouts.app')

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
            {{-- <div class="input-icon">
              <input type="text" value="" class="form-control" placeholder="Search…">
              <span class="input-icon-addon">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="10" cy="10" r="7" /><line x1="21" y1="21" x2="15" y2="15" /></svg>
              </span>
            </div> --}}
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
            {{-- <!-- Download SVG icon from http://tabler-icons.io/i/plus --> --}}
            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg> --}}
            
            
            {{-- <svg class="bi" width="24" height="24" fill="red">
              <use xlink:href="{{ url('icons.svg#1-square-fill') }}"/>
            </svg> --}}
            
            
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
            <a href="#" class="btn btn-facebook btn-icon" aria-label="Facebook">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
            </a>
            <a href="#" class="btn btn-youtube btn-icon" aria-label="Youtube">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-youtube -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="5" width="18" height="14" rx="4" /><path d="M10 9l5 3l-5 3z" /></svg>
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
            <a href="#" class="btn btn-facebook btn-icon" aria-label="Facebook">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
            </a>
            <a href="#" class="btn btn-youtube btn-icon" aria-label="Youtube">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-youtube -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="5" width="18" height="14" rx="4" /><path d="M10 9l5 3l-5 3z" /></svg>
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
            <a href="#" class="btn btn-facebook btn-icon" aria-label="Facebook">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
            </a>
            <a href="#" class="btn btn-youtube btn-icon" aria-label="Youtube">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-youtube -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="5" width="18" height="14" rx="4" /><path d="M10 9l5 3l-5 3z" /></svg>
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
            <a href="#" class="btn btn-facebook btn-icon" aria-label="Facebook">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
            </a>
            <a href="#" class="btn btn-youtube btn-icon" aria-label="Youtube">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-youtube -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="5" width="18" height="14" rx="4" /><path d="M10 9l5 3l-5 3z" /></svg>
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
            <a href="#" class="btn btn-facebook btn-icon" aria-label="Facebook">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
            </a>
            <a href="#" class="btn btn-youtube btn-icon" aria-label="Youtube">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-youtube -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="5" width="18" height="14" rx="4" /><path d="M10 9l5 3l-5 3z" /></svg>
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
            <a href="#" class="btn btn-facebook btn-icon" aria-label="Facebook">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
            </a>
            <a href="#" class="btn btn-youtube btn-icon" aria-label="Youtube">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-youtube -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="5" width="18" height="14" rx="4" /><path d="M10 9l5 3l-5 3z" /></svg>
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
            <a href="#" class="btn btn-facebook btn-icon" aria-label="Facebook">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
            </a>
            <a href="#" class="btn btn-youtube btn-icon" aria-label="Youtube">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-youtube -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="5" width="18" height="14" rx="4" /><path d="M10 9l5 3l-5 3z" /></svg>
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
            <a href="#" class="btn btn-facebook btn-icon" aria-label="Facebook">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
            </a>
            <a href="#" class="btn btn-youtube btn-icon" aria-label="Youtube">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-youtube -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="5" width="18" height="14" rx="4" /><path d="M10 9l5 3l-5 3z" /></svg>
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
            <a href="#" class="btn btn-facebook btn-icon" aria-label="Facebook">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
            </a>
            <a href="#" class="btn btn-youtube btn-icon" aria-label="Youtube">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-youtube -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="5" width="18" height="14" rx="4" /><path d="M10 9l5 3l-5 3z" /></svg>
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
            <a href="#" class="btn btn-facebook btn-icon" aria-label="Facebook">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
            </a>
            <a href="#" class="btn btn-youtube btn-icon" aria-label="Youtube">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-youtube -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="5" width="18" height="14" rx="4" /><path d="M10 9l5 3l-5 3z" /></svg>
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
            <a href="#" class="btn btn-facebook btn-icon" aria-label="Facebook">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
            </a>
            <a href="#" class="btn btn-youtube btn-icon" aria-label="Youtube">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-youtube -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="5" width="18" height="14" rx="4" /><path d="M10 9l5 3l-5 3z" /></svg>
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
            <a href="#" class="btn btn-facebook btn-icon" aria-label="Facebook">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
            </a>
            <a href="#" class="btn btn-youtube btn-icon" aria-label="Youtube">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-youtube -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="5" width="18" height="14" rx="4" /><path d="M10 9l5 3l-5 3z" /></svg>
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
            <a href="#" class="btn btn-facebook btn-icon" aria-label="Facebook">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
            </a>
            <a href="#" class="btn btn-youtube btn-icon" aria-label="Youtube">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-youtube -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="5" width="18" height="14" rx="4" /><path d="M10 9l5 3l-5 3z" /></svg>
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
            <a href="#" class="btn btn-facebook btn-icon" aria-label="Facebook">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
            </a>
            <a href="#" class="btn btn-youtube btn-icon" aria-label="Youtube">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-youtube -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="5" width="18" height="14" rx="4" /><path d="M10 9l5 3l-5 3z" /></svg>
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
            <a href="#" class="btn btn-facebook btn-icon" aria-label="Facebook">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
            </a>
            <a href="#" class="btn btn-youtube btn-icon" aria-label="Youtube">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-youtube -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="5" width="18" height="14" rx="4" /><path d="M10 9l5 3l-5 3z" /></svg>
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
            <a href="#" class="btn btn-facebook btn-icon" aria-label="Facebook">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
            </a>
            <a href="#" class="btn btn-youtube btn-icon" aria-label="Youtube">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-youtube -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="5" width="18" height="14" rx="4" /><path d="M10 9l5 3l-5 3z" /></svg>
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
@endsection
@section('scripts-chart')

@endsection