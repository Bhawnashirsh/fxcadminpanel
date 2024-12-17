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
                        <li class="breadcrumb-item active" aria-current="page">Gallery Category</li>
                    </ol>
                </nav>
                <h1 class="page-title fw-medium fs-18 mb-0"> Add Gallery Category </h1>
            </div>
            <!-- <div class="btn-list">
                <a href="add-course.php" class="btn btn-primary btn-wave me-0">
                    <i class="ri-menu-add-line  me-1"></i> Add Gallery </a>
            </div> -->

        </div>

        <!-- Page Header Close -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Add Category
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row gy-4">

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="SeoTitle" class="form-label">Category </label>
                                <input type="text" class="form-control" id="SeoTitle" value="" accept="image/*">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="SeoTitle" class="form-label">Slug</label>
                                <input type="text" class="form-control" id="SeoTitle" value="" accept="image/*">
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <button type="submit" class="btn btn-primary fs-6 ">
                                    Add
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="studentTable" class="table table-bordered table-striped text-nowrap w-100">
                                <thead>
                                    <tr>

                                        <th>S. NO.</th>
                                        <th>Category Name </th>
                                        <th>Slug </th>
                                        <th>Gallery Images</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Exhibition</td>
                                        <td>Exhibition</td>
                                        <td>5</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="edit-seo-details.php" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-edit-line"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent dlt rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Exhibition</td>
                                        <td>Exhibition</td>
                                        <td>5</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="edit-seo-details.php" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-edit-line"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent dlt rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Exhibition</td>
                                        <td>Exhibition</td>
                                        <td>5</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="edit-seo-details.php" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-edit-line"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent dlt rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Exhibition</td>
                                        <td>Exhibition</td>
                                        <td>5</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="edit-seo-details.php" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-edit-line"></i></a>
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
    </div>
</div>

<?php include('include/footer.php'); ?>
<!-- <script>
    function previewImage(event) {
        const file = event.target.files[0];
        const previewContainer = document.getElementById("image-preview");
        previewContainer.innerHTML = ""; // Clear any existing preview

        if (file) {
            const img = document.createElement("img");
            img.src = URL.createObjectURL(file);
            img.alt = "Uploaded Image";
            img.style.maxWidth = "200px";
            img.style.maxHeight = "150px";
            img.style.objectFit = "cover" ;
            previewContainer.appendChild(img);
        }
    }
</script> -->