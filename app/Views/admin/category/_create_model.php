<!-- Modal -->
<div class="modal fade" id="categoryModal" data-backdrop="static" tabindex="-1" role="dialog"
  aria-labelledby="categoryModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="modalTitle">Create Category</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="categoryForm">
        <div class="modal-body">
          <div class="container">
            <div class="row mb-3">
              <div class="col-md-6 mb-3">
                <label for="categoryName">Name</label>
                <input class="form-control" id="categoryName" type="text" name="name" placeholder="Enter category name">
                <div class="invalid-feedback error-name"></div>
              </div>

              <div class="col-md-6 mb-3">
                <label for="categorySlug">Slug</label>
                <input class='form-control' id="categorySlug" type="text" name="slug" placeholder="Enter category slug">
                <div class="invalid-feedback error-slug"></div>

              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label for="categoryDesc">Description</label>
                <textarea class="form-control" id="categoryDesc" name="description" cols="5" rows="5"
                  placeholder="Enter category description"></textarea>
              </div>
            </div>
            <input type="hidden" name="id" id="categoryId">
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" id="submitBtn">Create Category</button>
        </div>
      </form>

    </div>
    <!-- /.modal-content -->
  </div>
</div>