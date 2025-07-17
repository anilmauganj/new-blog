<?= $this->extend('admin/layouts/layout') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-sm-6">
              <h3>Categories</h3>
            </div>

            <div class="col-sm-6 text-end">
              <button id="createBtn" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#categoryModal">Create
                Category</button>
            </div>
          </div>
        </div>
        <div class="card-body">
          <table id="categoryTable" class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Description</th>
                <th>Added On</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

              <!-- Dynamic data will display -->

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?= view('admin/category/_create_model') ?>
<?= $this->endSection(); ?>

<?= $this->section('scripts'); ?>
<script>
const categoryListURL = "<?= route_to('post.category.list') ?>";
const saveCategoryURL = "<?= route_to('post.category.save') ?>";
const updateCategoryURL = "<?= route_to('post.category.update') ?>";
const deleteCategoryURL = "<?= route_to('post.category.delete', 0) ?>";
</script>
<script src="<?= base_url('adminlte/assets/js/category.js') ?>"></script>

<?= $this->endSection(); ?>