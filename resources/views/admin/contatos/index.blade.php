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
              Contatos
        </h2>
        {{-- <div class="text-muted mt-1">1-12 of 241 products</div> --}}
      </div>
      {{-- <!-- Page title actions --> --}}
      <div class="col-12 col-md-auto ms-auto d-print-none">
        <div class="d-flex">
          <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-contato">
            <x-bi-plus-lg class="text-light icon"/>
            Novo Contato
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
              <th>
                 <h5><button class="table-sort" data-sort="sort-id">ID</button></h5> 
              </th>
              <th><h5><button class="table-sort" data-sort="sort-name">Funcionario</button></h5></th>
              <th><h5><button class="table-sort" data-sort="sort-description">Telefone</button></h5></th>
              <th><h5><button class="table-sort" data-sort="sort-email">Email</button></h5></th>
              <th><h5>Action</h5></th>
            </tr>
          </thead>
          <tbody class="table-tbody">
            @foreach ($contatos as $contato)
            <tr>
              <td class="sort-number">{{$contato->id}}</td>
              <td class="sort-city">{{ $contato->funcionario->nome }}</td>
              <td class="sort-type">{{ $contato->telefone }}</td>
              <td class="sort-email">{{ $contato->funcionario->email }}</td>
              <td class="sort-quantity">
                <div class="dropdown">
                  <a href="#" class="btn-action" data-bs-toggle="dropdown" aria-expanded="false">
                    <!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="19" r="1"></circle><circle cx="12" cy="5" r="1"></circle></svg>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    {{-- <span class="dropdown-header">Dropdown header</span> --}}
                    <a href="#" class="dropdown-item">
                      <form action="{{ route('contatos.destroy',$contato->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="dropdown-item">
                          Deletar
                        </button>
                      </form>
                    </a>
                    
                    <a class="dropdown-item" href="#">
                      Editar
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            @endforeach
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
