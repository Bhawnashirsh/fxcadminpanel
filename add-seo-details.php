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
                        <li class="breadcrumb-item active" aria-current="page">Courses</li>
                    </ol>
                </nav>
                <h1 class="page-title fw-medium fs-18 mb-0">Add SEO Details</h1>
            </div>

        </div>
        <!-- Page Header Close -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                          Add SEO Details
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row gy-4">

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <label for="CourseCategory" class="form-label">Pages</label>                               
                                <select class="form-control frm-select" data-trigger name="choices-single-default" id="choices-single-default">
                                    <option value="">Select Page</option>
                                    <option value="Choice 1">Home</option>
                                    <option value="Choice 2">About</option>
                                    <option value="Choice 3">Blog</option>
                                    <option value="Choice 4">Franchise</option>
                                    <option value="Choice 5">Contact Us</option>
                                </select>
                            </div>  
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <label for="SeoTitle" class="form-label">SEO Title</label>
                                <input type="text" class="form-control" id="SeoTitle">
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <label for="CourseDuration" class="form-label">SEO Keywords</label>
                                <input type="text" class="form-control" id="">
                            </div>    
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <label for="CourseDuration" class="form-label">SEO Description</label>
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