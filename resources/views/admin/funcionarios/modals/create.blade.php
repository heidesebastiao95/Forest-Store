<div class="modal modal-blur fade" id="modal-funcionario" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Novo Funcionario</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-body">
              <form method="POST" action="{{ route('funcionarios.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3 ">
                  <label class="form-label">Nome</label>
                  <div >
                    <input type="text" class="form-control"  name="nome" required>
                    {{-- --}}
                  </div>
                </div>
                <div class="form-group mb-3 ">
                  <label class="form-label">Email</label>
                  <div >
                    <input type="email" class="form-control"  name="email" required>
                  </div>
                </div>
                <div class="form-group mb-3 ">
                  <label class="form-label">Cargo</label>
                  <div >
                    <input type="text" class="form-control"  name="cargo" required>
                   
                  </div>
                </div>
                <div class="form-group mb-3 ">
                  <label class="form-label">Salario</label>
                  <div >
                    <input type="number" class="form-control" value="0.00" name="salario" required>
                  </div>
                </div>
                <div class="form-group mb-3 ">
                  <label class="form-label">CPF</label>
                  <div >
                    <input type="text" class="form-control"  name="cpf">
                  </div>
                </div>
                <div class="form-group mb-3 ">
                  <label class="form-label">Matricula</label>
                  <div >
                    <input type="text" class="form-control"  name="matricula" required>
                   
                  </div>
                </div>
                <div class="modal-footer">
                  <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                    Cancel
                  </a>
                  <button type="submit" class="btn btn-primary ms-auto">
                    Criar Novo Funcionario
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
  
