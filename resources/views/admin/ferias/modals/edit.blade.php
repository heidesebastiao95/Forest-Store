<div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">New Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-body">
              <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group mb-3 ">
                  <label class="form-label">Tittle</label>
                  <div >
                    <input type="text" class="form-control"  placeholder="Enter tittle">
                    {{-- <small class="form-hint">please follow the pattern (2,500 | 1,000 | 500.00).</small> --}}
                  </div>
                </div>
                <div class="form-group mb-3 ">
                  <label class="form-label">Price</label>
                  <div >
                    <input type="text" class="form-control"  placeholder="Enter price">
                    <small class="form-hint">Please follow the pattern (2,500 | 1,000 | 500.00).</small>
                  </div>
                </div>
                <div class="form-group mb-3 ">
                  <label class="form-label">Descount</label>
                  <div >
                    <input type="text" class="form-control" value="0.00">
                    <small class="form-hint">Please follow the pattern (2,500 | 1,000 | 500.00).</small>
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label">Description</label>
                  <textarea class="form-control" data-bs-toggle="autosize" placeholder="Describle your Product…"></textarea>
                </div>
                <div class="mb-3">
                  <div class="form-label">
                    Image <span class="form-help bg-primary text-light" data-bs-toggle="popover" data-bs-placement="top" data-bs-html="true" 
                    data-bs-content="<p class='text-primary'>Image must be (450x350).If you percist and send a diferente image size we'll ajuste the image, it may have unnexpected alteration.</p>
                      ">?
                    </span>
                  </div>
                  <input type="file" class="form-control">
                  <small class="form-hint">Image Must be  (420x350).</small>
                </div>
                
                <div class="form-group mb-3">
                  <label class="form-label">Categories</label>
                  <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                      <label class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <span class="form-check-label">Option 1</span>
                      </label>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                      <label class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <span class="form-check-label">Option 1</span>
                      </label>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                      <label class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <span class="form-check-label">Option 1</span>
                      </label>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                      <label class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <span class="form-check-label">Option 1</span>
                      </label>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                      <label class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <span class="form-check-label">Option 1</span>
                      </label>
                    </div>
                    
                  </div>
                </div>

                <div class="mb-3">
                  <div>
                    <label class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" checked>
                      <span class="form-check-label">Publish On Site</span>
                    </label>
                  </div>
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
            Create New Product
          </a>
        </div>
      </div>
    </div>
  </div>
 
  
