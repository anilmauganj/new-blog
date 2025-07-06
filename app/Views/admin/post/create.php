<?= $this->extend('admin/layouts/layout') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3>Create New Post</h3>
        </div>
        <div class="card-body">
          <div class="container">
            <form action="" method="POST">
              <div class="row">
                <div class="col-md-8">

                  <div class="mb-3">
                    <label for="title">Post Title</label>
                    <input type="text" name="title" placeholder="Enter title" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="content">Post Content</label>
                    <textarea name="content" id="content" class="form-control" cols="10" rows="10"
                      placeholder="Enter content..."></textarea>
                  </div>
                  <div class="mb-3 text-end">
                    <input type="submit" name="create" value="Create Post" class="btn btn-primary">
                  </div>
                </div>

                <div class="col-md-4 p-4" style="background-color:#eee">
                  <div class="mb-3">
                    <label for="category">Choose Category</label>
                    <select name="category" id="category" class="form-control">
                      <option value="">Select Option</option>
                      <option value="">Cat1</option>
                      <option value="">Cat2</option>
                      <option value="">Cat3</option>
                    </select>
                  </div>

                  <div class="mb-3">
                    <label for="status">Choose Status</label>
                    <select name="status" id="status" class="form-control">
                      <option value="">Select Option</option>
                      <option value="">Published</option>
                      <option value="">Draft</option>
                    </select>
                  </div>

                  <div class="mb-3">
                    <label for="status">Upload Thumbnail</label>
                    <input type="file" name="image" class="form-control">
                  </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<?= $this->endSection(); ?>