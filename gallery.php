<?php include('include/header.php'); ?>
<?php include('include/sidebar.php'); ?>
<div class="main-content app-content">
    <div class="container-fluid">


        <!-- Page Header -->
        <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <nav>
                    <ol class="breadcrumb mb-1">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                    </ol>
                </nav>
                <h1 class="page-title fw-medium fs-18 mb-0">Gallery</h1>
            </div>
            <div class="btn-list">
                <a href="add-gallery.php" class="btn btn-primary btn-wave me-0">
                    <i class="ri-menu-add-line  me-1"></i> Add Gallery </a>
            </div>
        </div>
        <!-- Page Header Close -->
        <!-- Start:: row-1 -->
        <div class="row">
      
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card custom-card position-relative">
                    <img src="https://php.spruko.com/xintra/xintra/assets/images/media/media-22.jpg" class="card-img-top" alt="...">
                    <div class="dropdown gallery-edit d-inline-block" data-bs-toggle="dropdown">
                        <a aria-label="anchor" href="javascript:void(0);" class="tx-inverse btn btn-light btn-icons btn-sm "><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="view-mentor.php"><i class="ri-eye-line"></i> View Gallery</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-6-line"></i> Remove</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title fw-medium">Exhibition</h6>
                        <span>5 Images</span>

                    </div>

                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card custom-card position-relative">
                    <img src="https://php.spruko.com/xintra/xintra/assets/images/media/media-22.jpg" class="card-img-top" alt="...">
                    <div class="dropdown gallery-edit d-inline-block" data-bs-toggle="dropdown">
                        <a aria-label="anchor" href="javascript:void(0);" class="tx-inverse btn btn-light btn-icons btn-sm "><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="view-mentor.php"><i class="ri-eye-line"></i> View Profile</a></li>
                      
                            <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-6-line"></i> Remove</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title fw-medium">Expo</h6>
                        <span>3 Images</span>


                    </div>

                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card custom-card position-relative">
                    <img src="https://php.spruko.com/xintra/xintra/assets/images/media/media-22.jpg" class="card-img-top" alt="...">
                    <div class="dropdown gallery-edit d-inline-block" data-bs-toggle="dropdown">
                        <a aria-label="anchor" href="javascript:void(0);" class="tx-inverse btn btn-light btn-icons btn-sm "><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="view-mentor.php"><i class="ri-eye-line"></i> View Profile</a></li>
                      
                            <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-6-line"></i> Remove</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title fw-medium">Sponsers</h6>
                        <span>3 Images</span>

                    </div>

                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card custom-card position-relative">
                    <img src="https://php.spruko.com/xintra/xintra/assets/images/media/media-22.jpg" class="card-img-top" alt="...">
                    <div class="dropdown gallery-edit d-inline-block" data-bs-toggle="dropdown">
                        <a aria-label="anchor" href="javascript:void(0);" class="tx-inverse btn btn-light btn-icons btn-sm "><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="view-mentor.php"><i class="ri-eye-line"></i> View Profile</a></li>
                      
                            <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-6-line"></i> Remove</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title fw-medium">Exhibition</h6>
                        <span>2 Images</span>

                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- End:: row-1 -->
</div>
<?php include('include/footer.php'); ?>