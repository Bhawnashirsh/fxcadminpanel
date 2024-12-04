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
                        <li class="breadcrumb-item active" aria-current="page">SEO</li>
                    </ol>
                </nav>
                <h1 class="page-title fw-medium fs-18 mb-0">Add SEO Details</h1>
            </div>
            <div class="btn-list">
                <a href="add-seo-details.php" class="btn btn-primary btn-wave me-0">
                    <i class="ri-menu-add-line  me-1"></i> Add SEO Details
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
                            <table id="SeoTable" class="table table-bordered table-striped text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>S. No.</th>
                                        <th>Page Name</th>
                                        <th>SEO Title</th>
                                        <th>SEO Keywords</th>
                                        <th>SEO Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Index</td>
                                        <td>FxCareers|Best Stock Market Institute|Best Trading Course</td>
                                        <td>Best Stock Market Institute, Best Trading Course, Stock Market Training Institute, Trading Institute Near me, Fxcareers	</td>
                                        <td>FxCareers is the Best Stock M. . .	</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="edit-seo-details.php" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-edit-line"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent dlt rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>About</td>
                                        <td>About Us - FXCareers</td>                                        
                                        <td>top trading courses</td>
                                        <td>Take advantage of the financial bhgghjg</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="edit-seo-details.php" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-edit-line"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent dlt rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Blog</td>
                                        <td>Role of Fundamental Analysis in Market</td>
                                        <td>Role of Fundamental Analysis in Market</td>
                                        <td>Role of Fundamental Analysis in Market</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="edit-seo-details.php" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-edit-line"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent dlt rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Franchise</td>
                                        <td>Options Primer: Buying Strategies</td>
                                        <td>Options Primer: Buying Strategies</td>
                                        <td>Options Primer: Buying Strategies</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="edit-seo-details.php" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-edit-line"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent dlt rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Contact</td>
                                        <td>Best Online Stock Market Course</td>
                                        <td>Best Online Stock Market Course</td>
                                        <td>Best Online Stock Market Course</td>
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
<script>
    $(document).ready(function () {
        $('#SeoTable').DataTable({
            columnDefs: [
                {
                    targets: [2, 3, 4], // Columns: SEO Title, SEO Keywords, SEO Description
                    render: function (data, type, row) {
                        if (type === 'display' && data) {
                            const wordLimit = 6; // Adjust the word limit
                            const words = data.split(' ');
                            return words.length > wordLimit 
                                ? words.slice(0, wordLimit).join(' ') + '...' 
                                : data;
                        }
                        return data;
                    }
                }
            ]
        });
    });
</script>