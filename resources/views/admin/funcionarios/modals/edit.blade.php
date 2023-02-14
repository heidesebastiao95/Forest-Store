<div class="modal modal-blur fade" id="modal-funcionario-editar" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Atualizar Funcionario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="card">
          <div class="card-body">
            <form method="POST" action="{{ route('funcionarios.store') }}" enctype="multipart/form-data">
              @csrf
              @method('UPDATE')
              <div class="form-group mb-3 ">
                <label class="form-label">Nome</label>
                <div >
                  <input type="text" class="form-control nome"  name="nome" required>
                  {{-- --}}
                </div>
              </div>
              <div class="form-group mb-3 ">
                <label class="form-label">Email</label>
                <div >
                  <input type="email" class="form-control email"  name="email" required>
                </div>
              </div>
              <div class="form-group mb-3 ">
                <label class="form-label">Cargo</label>
                <div >
                  <input type="text" class="form-control cargo"  name="cargo" required>
                 
                </div>
              </div>
              <div class="form-group mb-3 ">
                <label class="form-label">Salario</label>
                <div >
                  <input type="number" class="form-control salario" value="0.00" name="salario" required>
                </div>
              </div>
              <div class="form-group mb-3 ">
                <label class="form-label">CPF</label>
                <div >
                  <input type="text" class="form-control cpf"  name="cpf">
                </div>
              </div>
              <div class="form-group mb-3 ">
                <label class="form-label">Matricula</label>
                <div >
                  <input type="text" class="form-control matricula"  name="matricula" required>
                 
                </div>
              </div>
              <div class="modal-footer">
                <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                  Cancel
                </a>
                <button type="submit" class="btn btn-primary ms-auto">
                  Atualizar
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


