<div class="modal modal-blur fade" id="modal-contato" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">New Order</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-body">
              <form method="POST" action="{{ route('contatos.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <div class="form-label">Funcionario</div>
                  <select class="form-select" name="funcionario">
                    @isset($funcionarios)
                      @foreach ($funcionarios as $funcionario)
                      <option value="{{ $funcionario->id }}">{{ $funcionario->nome }}</option>
                      @endforeach
                    @endisset
                  </select>
                </div>
                <div class="form-group mb-3 ">
                  <label class="form-label">Telefone</label>
                  <div >
                    <input type="text" class="form-control"  name="telefone" required>
                  </div>
                </div>
                <div class="modal-footer">
                  <a href="#" class="btn btn-primary" data-bs-dismiss="modal">
                    Cancelar
                  </a>
                  <button type="submit" class="btn btn-primary ms-auto">
                    Criar Novo Contato
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
  
