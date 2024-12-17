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
                        <li class="breadcrumb-item active" aria-current="page">eBooks</li>
                    </ol>
                </nav>
                <h1 class="page-title fw-medium fs-18 mb-0">Add eBook Details</h1>
            </div>

        </div>
        <!-- Page Header Close -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                          Add eBook Details
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row gy-4">         
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="BookTitle" class="form-label">eBook Title</label>
                                <input type="text" class="form-control" id="BookTitle" placeholder="eBook Title">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="BookType" class="form-label">eBook Type</label>                               
                                <select class="form-control frm-select" data-trigger name="choices-single-default" id="choices-single-default">
                                    <option value="">Select Type</option>
                                    <option value="Choice 1">Beginner</option>
                                    <option value="Choice 2">Intermediate</option>

                                </select>
                            </div> 
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <label for="bookImage" class="form-label">eBook Image</label>
                            <input type="file" class="form-control" id="bookImage" value="" accept="image/*">
                            </div> 
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <label for="bookImage" class="form-label">Upload eBook</label>
                            <input type="file" class="form-control" id="bookImage" value="" accept="image/*">
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <label for="CourseDuration" class="form-label">eBook short Description</label>
                                <textarea class="form-control" id="text-area" rows="3"></textarea>
                            </div>  
                              
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            
                                <button type="submit" class="btn btn-primary fs-6 ">
                                Save 
                                </button>
                            </div>                         
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include('include/footer.php'); ?>