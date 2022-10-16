<div class="modal modal-blur fade" id="create-category-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">New Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-body">
              <form>
                <div class="form-group mb-3 ">
                  <label class="form-label">Tittle</label>
                  <div >
                    <input type="text" class="form-control"  placeholder="Enter tittle">
                    {{-- <small class="form-hint">please follow the pattern (2,500 | 1,000 | 500.00).</small> --}}
                  </div>
                </div>
                <div class="form-group mb-3 ">
                  <label class="form-label">Slug</label>
                  <div >
                    <input type="text" class="form-control"  placeholder="Enter slug">
                    {{-- <small class="form-hint">please follow the pattern (2,500 | 1,000 | 500.00).</small> --}}
                  </div>
                </div>
                  
                  <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" data-bs-toggle="autosize" placeholder="Describle your Product…"></textarea>
                  </div>
              </form>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
            Cancel
          </a>
          <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
            Create New Category
          </a>
        </div>
      </div>
    </div>
  </div>
 
  
