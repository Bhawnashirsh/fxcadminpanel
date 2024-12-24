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
                        <li class="breadcrumb-item active" aria-current="page">Students</li>
                    </ol>
                </nav>
                <h1 class="page-title fw-medium fs-18 mb-0">Students</h1>
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
                                        <th>S.No.</th>
                                        <th class="">Full Name</th>
                                        <th class="">Mobile No.</th>
                                        <th class="">Email</th>
                                        <th class="">Job Title</th>
                                        <th class="">Current Salary</th>
                                        <th class="">Expected Salary</th>                                        
                                        <th class="">Total Experience</th>
                                        <th class="">Resume</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="toggle-details">Ion semer</td>
                                        <td class="">6753535467</td>
                                        <td class="">editor@fxcareers.com</td>
                                        <td class="">Backend Developer</td>                                 
                                        <td>4 LPA</td>
                                        <td>7 LPA</td>
                                        <td>2 Years</td>
                                        <td><button class="btn btn-sm btn-success btn-wave waves-effect waves-light">
                                                            <i class="ri-download-2-line align-middle me-2 d-inline-block"></i>Download
                                                        </button></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td class="toggle-details">
                                            Ion Somer
                                        </td>
                                        <td class="">6753535467</td>
                                        <td class="">editor@fxcareers.com</td>
                                        <td class="">Backend Developer</td>
                                        <td>4 LPA</td>
                                        <td>7 LPA</td>
                                        <td>2 Years</td>
                                        <td><button class="btn btn-sm btn-success btn-wave waves-effect waves-light">
                                                            <i class="ri-download-2-line align-middle me-2 d-inline-block"></i>Download
                                                        </button></td>

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