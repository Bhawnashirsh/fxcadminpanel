<?php include('include/header.php'); ?>
<?php include('include/sidebar.php'); ?>
<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">


        <!-- Page Header -->
        <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <nav>
                    <ol class="breadcrumb mb-1">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">App slider</li>
                    </ol>
                </nav>
                <h1 class="page-title fw-medium fs-18 mb-0">App slider</h1>
            </div>
            <div class="btn-list">

                <a class="btn btn-primary btn-wave me-0">
                <i class="ri-image-add-line  me-1"></i> Add app slider
                </a>
            </div>
        </div>
        <!-- Page Header Close -->

    <!-- Start::row-1 -->
    <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable-basic" class="table table-bordered table-striped text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>S. No.</th>                                                                             
                                        <th>Slider Image</th>
                                        <th>Order </th>  
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="gallery-img"><img src="assets/images/gallery/gallery1.png" alt=""></td>
                                        <td>2</td>                                       
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="edit-app-slider.php" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-edit-line"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent dlt rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>    
                                        <td class="gallery-img"><img src="assets/images/gallery/gallery2.jfif" alt=""></td> 
                                        <td>2</td>   
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="edit-app-slider.php" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-edit-line"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent dlt rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td class="gallery-img"><img src="assets/images/gallery/gallery1.png" alt=""></td>
                                        <td>4</td>                                       
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="edit-app-slider.php" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-edit-line"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent dlt rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td class="gallery-img"><img src="assets/images/gallery/gallery2.jfif" alt=""></td>
                                        <td>5</td>
                                        
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="edit-app-slider.php" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-edit-line"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent dlt rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td class="gallery-img"><img src="assets/images/gallery/gallery2.jfif" alt=""></td>
                                        <td>6</td>
                                        
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="edit-app-slider.php" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-edit-line"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent dlt rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End::row-1 -->
<?php include('include/footer.php'); ?>