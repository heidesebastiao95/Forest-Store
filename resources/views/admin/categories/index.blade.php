@extends('admin.layouts.app')

@section('asside')
@include('admin.layouts.includes.asside')
@endsection

@section('header-section')
<div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <h2 class="page-title">
          Categories
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
          <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create-category-modal">
            <x-bi-plus-lg class="text-light icon"/>
            New Category
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('main')
<div class="col-lg-12 col-sm-12">
    <div class="card">
      <div  class="table-responsive">
        <div class="card-header">
          {{-- <input type="text" class="form-control search" aria-label="Text input with dropdown button" placeholder="Search…"> --}}
        </div >
        <table class="table">
          <thead>
            <tr>
              <th class="text-center">
                <label class="form-check form-check-inline mb-0">
                  <input class="form-check-input" type="checkbox" >
                </label>
              </th>
              <th><h5><button class="table-sort" data-sort="sort-id">ID</button></h5> </th>
              <th><h5><button class="table-sort" data-sort="sort-name">Name</button></h5></th>
              <th><h5><button class="table-sort" data-sort="sort-description">Description</button></h5></th>
              <th><h5><button class="table-sort" data-sort="sort-slug">slug</button></h5></th>
              <th><h5><button class="table-sort" data-sort="sort-order">Order</button></h5></th>
              <th><h5>Action</h5></th>
            </tr>
          </thead>
          <tbody class="table-tbody">
            <tr>
              <td class="text-center">
                <label class="form-check form-check-inline mb-0">
                  <input class="form-check-input" type="checkbox" >
                </label>
              </td>
              <td class="sort-name">Sort Name</td>
              <td class="sort-city">Cedar Point, United States</td>
              <td class="sort-type">RMC Hybrid</td>
              <td class="sort-score">100,0%</td>
              <td class="sort-date" data-date="1628071164">August 04, 2021</td>
              <td class="sort-quantity">
                <div class="col-auto">
                  <div class="dropdown">
                    <a href="#" class="btn-action" data-bs-toggle="dropdown" aria-expanded="false">
                      <!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="19" r="1"></circle><circle cx="12" cy="5" r="1"></circle></svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                      {{-- <span class="dropdown-header">Dropdown header</span> --}}
                      <a class="dropdown-item" href="#">
                        Action
                      </a>
                      <a class="dropdown-item" href="#">
                        Another action
                      </a>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="d-flex mt-4">
          <ul class="pagination  ms-auto">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="15 6 9 12 15 18"></polyline></svg>
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
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="9 6 15 12 9 18"></polyline></svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
</div>
@endsection

@section('scripts-chart')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
        
        const options = {
            sortClass: 'table-sort',
            listClass: 'table-tbody',
            valueNames: [ 'sort-name', 'sort-type', 'sort-city', 'sort-score','sort-progress','sort-quantity','sort-date'],
        }  
        const list = new List('table-default', options);
        })
    </script>
@endsection
