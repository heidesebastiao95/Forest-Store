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
            Funcionarios
      </h2>
      {{-- <div class="text-muted mt-1">1-12 of 241 products</div> --}}
    </div>
    {{-- <!-- Page title actions --> --}}
    <div class="col-12 col-md-auto ms-auto d-print-none">
      <div class="d-flex">
        <a href="#" class="btn btn-primary"data-bs-toggle="modal" data-bs-target="#modal-funcionario">
          <x-bi-plus-lg class="text-light icon"/>
          Novo Funcionario
        </a>
      </div>
    </div>
  </div>
</div>
@endsection

@section('main')
<div class="container-xl mt-3">
  <div class="row row-cards">
    @isset($funcionarios)
    @foreach ($funcionarios as $funcionario)
    <div class="col-md-6 col-lg-3">
     <div class="card">
       <div class="card-actions mt-2">
         <div class="container">
            <div class="dropdown">
           <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
             <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="19" r="1"></circle><circle cx="12" cy="5" r="1"></circle></svg>
           </a>
           <div class="dropdown-menu dropdown-menu-end" style="">
             <a class="dropdown-item btn-funcionario" href="#"
             nome="{{ $funcionario->nome }}" matricula = {{ $funcionario->matricula }} 
             email = "{{ $funcionario->email }}" cpf = "{{ $funcionario->cpf }}"
             >Editar</a>
             {{-- <a class="dropdown-item" href="#">Change permissions</a> --}}
             <form action="{{ route('funcionarios.destroy',$funcionario->id) }}" method="POST">
               @csrf
               @method('DELETE')
               <button type="submit" class="dropdown-item text-danger">Deletar funcionario</a>
             </form>
           </div>
         </div>
         </div>
       </div>
       <div class="card-body p-4 text-center">
         <span class="avatar avatar-xl mb-3 avatar-rounded">{{ substr($funcionario->nome,0,1) }}</span>
         <h3 class="m-0 mb-1"><a href="#">{{ $funcionario->nome }}</a></h3>
         <div class="text-muted">{{ $funcionario->cargo }}</div>
         <div class="mt-3">
         </div>
       </div>
       <div class="d-flex">
         <a href="#" class="card-btn"><!-- Download SVG icon from http://tabler-icons.io/i/mail -->
           <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="5" width="18" height="14" rx="2" /><polyline points="3 7 12 13 21 7" /></svg>
           {{ $funcionario->email }}</a>
       </div>
     </div>
   </div>
    @endforeach
    @endisset
   
  </div>
</div>
@endsection
@section('scripts-chart')
  <script>

    var btn = document.querySelector('.btn-funcionario');

    // const nome = btn.getAttribute("nome");
    // const matricula = btn.getAttribute("matricula");
    // const email = btn.getAttribute("email");
    // const cargo = btn.getAttribute("cargo");
    // const salario = btn.getAttribute("salario");
    // const cpf = btn.getAttribute("cpf");
    
    btn.addEventListener('click', () => {

      //  document.querySelector(".nome").value(nome);
      //  document.querySelector(".matricula").value(matricula)
      //  document.querySelector(".email").value(email);
      //  document.querySelector(".cargo").value(cargo);
      //  document.querySelector(".salario").value(salario);
      //  document.querySelector(".cpf").value(cpf);

       //$("#modal-funcionario-editar").modal('show')
    })
  </script>
@endsection