<?= $this->extend('admin/layouts/layout.php'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
  <!-- Info boxes -->
  <div class="row">
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon text-bg-primary shadow-sm">
          <i class="bi bi-gear-fill"></i>
        </span>
        <div class="info-box-content">
          <span class="info-box-text">All Posts</span>
          <span class="info-box-number">
            10
            <small>%</small>
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon text-bg-danger shadow-sm">
          <i class="bi bi-hand-thumbs-up-fill"></i>
        </span>
        <div class="info-box-content">
          <span class="info-box-text">Users</span>
          <span class="info-box-number">41,410</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <!-- fix for small devices only -->
    <!-- <div class="clearfix hidden-md-up"></div> -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon text-bg-success shadow-sm">
          <i class="bi bi-cart-fill"></i>
        </span>
        <div class="info-box-content">
          <span class="info-box-text">Comments</span>
          <span class="info-box-number">760</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon text-bg-warning shadow-sm">
          <i class="bi bi-people-fill"></i>
        </span>
        <div class="info-box-content">
          <span class="info-box-text">Published</span>
          <span class="info-box-number">2,000</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
  <!--begin::Row-->
  <div class="row">
    <div class="col-md-12">

      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!--end::Row-->
  <!--begin::Row-->
  <div class="row">
    <!-- Start col -->
    <div class="col-md-12">
      <!--begin::Row-->
      <div class="row g-4 mb-4">
        <div class="col-md-6">
          <!-- DIRECT CHAT -->
          <!-- PRODUCT LIST -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Recently Added Products</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                  <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                  <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                </button>
                <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                  <i class="bi bi-x-lg"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="px-2">
                <div class="d-flex border-top py-2 px-1">
                  <div class="col-2">
                    <img src="/assets/img/default-150x150.png" alt="Product Image" class="img-size-50" />
                  </div>
                  <div class="col-10">
                    <a href="javascript:void(0)" class="fw-bold">
                      Samsung TV
                      <span class="badge text-bg-warning float-end"> $1800 </span>
                    </a>
                    <div class="text-truncate">Samsung 32" 1080p 60Hz LED Smart HDTV.</div>
                  </div>
                </div>
                <!-- /.item -->
                <div class="d-flex border-top py-2 px-1">
                  <div class="col-2">
                    <img src="/assets/img/default-150x150.png" alt="Product Image" class="img-size-50" />
                  </div>
                  <div class="col-10">
                    <a href="javascript:void(0)" class="fw-bold">
                      Bicycle
                      <span class="badge text-bg-info float-end"> $700 </span>
                    </a>
                    <div class="text-truncate">
                      26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                    </div>
                  </div>
                </div>
                <!-- /.item -->
                <div class="d-flex border-top py-2 px-1">
                  <div class="col-2">
                    <img src="/assets/img/default-150x150.png" alt="Product Image" class="img-size-50" />
                  </div>
                  <div class="col-10">
                    <a href="javascript:void(0)" class="fw-bold">
                      Xbox One
                      <span class="badge text-bg-danger float-end"> $350 </span>
                    </a>
                    <div class="text-truncate">
                      Xbox One Console Bundle with Halo Master Chief Collection.
                    </div>
                  </div>
                </div>
                <!-- /.item -->
                <div class="d-flex border-top py-2 px-1">
                  <div class="col-2">
                    <img src="/assets/img/default-150x150.png" alt="Product Image" class="img-size-50" />
                  </div>
                  <div class="col-10">
                    <a href="javascript:void(0)" class="fw-bold">
                      PlayStation 4
                      <span class="badge text-bg-success float-end"> $399 </span>
                    </a>
                    <div class="text-truncate">PlayStation 4 500GB Console (PS4)</div>
                  </div>
                </div>
                <!-- /.item -->
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-center">
              <a href="javascript:void(0)" class="uppercase"> View All Products </a>
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.direct-chat -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <!-- USERS LIST -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Latest Members</h3>
              <div class="card-tools">
                <span class="badge text-bg-danger"> 8 New Members </span>
                <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                  <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                  <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                </button>
                <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                  <i class="bi bi-x-lg"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="row text-center m-1">
                <div class="col-3 p-2">
                  <img class="img-fluid rounded-circle" src="/assets/img/user1-128x128.jpg" alt="User Image" />
                  <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                    Alexander Pierce
                  </a>
                  <div class="fs-8">Today</div>
                </div>
                <div class="col-3 p-2">
                  <img class="img-fluid rounded-circle" src="/assets/img/user1-128x128.jpg" alt="User Image" />
                  <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                    Norman
                  </a>
                  <div class="fs-8">Yesterday</div>
                </div>
                <div class="col-3 p-2">
                  <img class="img-fluid rounded-circle" src="/assets/img/user7-128x128.jpg" alt="User Image" />
                  <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                    Jane
                  </a>
                  <div class="fs-8">12 Jan</div>
                </div>
                <div class="col-3 p-2">
                  <img class="img-fluid rounded-circle" src="/assets/img/user6-128x128.jpg" alt="User Image" />
                  <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                    John
                  </a>
                  <div class="fs-8">12 Jan</div>
                </div>
                <div class="col-3 p-2">
                  <img class="img-fluid rounded-circle" src="/assets/img/user2-160x160.jpg" alt="User Image" />
                  <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                    Alexander
                  </a>
                  <div class="fs-8">13 Jan</div>
                </div>
                <div class="col-3 p-2">
                  <img class="img-fluid rounded-circle" src="/assets/img/user5-128x128.jpg" alt="User Image" />
                  <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                    Sarah
                  </a>
                  <div class="fs-8">14 Jan</div>
                </div>
                <div class="col-3 p-2">
                  <img class="img-fluid rounded-circle" src="/assets/img/user4-128x128.jpg" alt="User Image" />
                  <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                    Nora
                  </a>
                  <div class="fs-8">15 Jan</div>
                </div>
                <div class="col-3 p-2">
                  <img class="img-fluid rounded-circle" src="/assets/img/user3-128x128.jpg" alt="User Image" />
                  <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                    Nadia
                  </a>
                  <div class="fs-8">15 Jan</div>
                </div>
              </div>
              <!-- /.users-list -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-center">
              <a href="javascript:"
                class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">View
                All Users</a>
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!--end::Row-->

    </div>
    <!-- /.col -->

  </div>
  <!--end::Row-->
</div>

<?= $this->endSection(); ?>