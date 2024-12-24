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
                <h1 class="page-title fw-medium fs-18 mb-0">All Courses</h1>
            </div>
            <div class="btn-list">
                <a href="add-course.php" class="btn btn-primary btn-wave me-0">
                    <i class="ri-menu-add-line  me-1"></i> Add New Course
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
                            <table id="coursesTable" class="table table-bordered table-striped text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Course Name</th>
                                        <th>Course Author</th>
                                        <th>Course Category</th>
                                        <th>Course Lessons</th>
                                        <th>Course Mode</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="toggle-details"><i class="ri-add-line fnt-20"></i> Foundation Module for Financial Markets</td>
                                        <td>FXCareers</td>
                                        <td>Currency</td>
                                        <td>34</td>
                                        <td>Online</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="edit-course.php" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-edit-line"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent dlt rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="toggle-details"><i class="ri-add-line fnt-20"></i> Technical Analysis Mastery Programme</td>
                                        <td>FXCareers</td>
                                        <td>Currency</td>
                                        <td>34</td>
                                        <td>Online</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="edit-course.php" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-edit-line"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent dlt rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="toggle-details"><i class="ri-add-line fnt-20"></i> Role of Fundamental Analysis in Market</td>
                                        <td>FXCareers</td>
                                        <td>Currency</td>
                                        <td>34</td>
                                        <td>Online</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="edit-course.php" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-edit-line"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent dlt rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="toggle-details">
                                            <div class="p-length"><i class="ri-add-line fnt-20"></i> Options Primer: Buying Strategies</div>
                                        </td>
                                        <td>FXCareers</td>
                                        <td>Currency</td>
                                        <td>34</td>
                                        <td>Online</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="edit-course.php" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-edit-line"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent dlt rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="toggle-details"><i class="ri-add-line fnt-20"></i> Trading Psychology Risk and Money Management</td>
                                        <td>FXCareers</td>
                                        <td>Currency</td>
                                        <td>34</td>
                                        <td>Online</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="edit-course.php" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-edit-line"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent dlt rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="toggle-details"><i class="ri-add-line fnt-20"></i> Options Mastery: Selling and Hedging </td>
                                        <td>FXCareers</td>
                                        <td>Currency</td>
                                        <td>34</td>
                                        <td>Online</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="edit-course.php" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-edit-line"></i></a>
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
    $(document).ready(function() {
        // Initialize DataTable
        const table = $('#coursesTable').DataTable({
            responsive: true,

        });

        let currentlyOpenRow = null; // Track the currently open detail row

        // Add event listener for toggle-details
        $('#coursesTable tbody').on('click', 'td.toggle-details', function() {
            const tr = $(this).closest('tr');
            const row = table.row(tr);

            if (row.child.isShown()) {
                // If the clicked row is already open, toggle it closed
                row.child.hide();
                tr.removeClass('details-shown');
                currentlyOpenRow = null; // Clear the reference
            } else {
                // If another row is open, close it
                if (currentlyOpenRow) {
                    currentlyOpenRow.child.hide();
                    $(currentlyOpenRow.node()).removeClass('details-shown');
                }

                // Show the new detail row
                row.child(formatDetails(row.data())).show();
                tr.addClass('details-shown');
                currentlyOpenRow = row; // Update the reference
            }
        });

        // Function to format the details row
        function formatDetails() {
            // Customize this content based on your data
            return `
                    <div class="details-content  bg-light rounded border p-3">
                        <div class="row ">
                            <div class="col-lg-3">
                                <div class="bg-white rounded p-2 pb-0">
                                    <img src="assets/images/courses/bannercourse.jpg" alt="" class="img-fluid rounded">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item p-2 ">
                                            <div class="d-flex align-items-center gap-3">
                                                <div>
                                                    <span class="avatar avatar-rounded bg-primary3-transparent text-primary3"><i class="ti ti-tag fs-22"></i></span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="mb-0 fw-semibold fs-6 d-block ">Course Price</span>


                                                </div>
                                                <div class="text-end">
                                                    <span class="fs-6 text-primary3">₹ 19,999</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item p-2">
                                            <div class="d-flex align-items-center gap-3">
                                                <div>
                                                    <span class="avatar avatar-rounded bg-primary1-transparent text-primary1"> <i class="ti ti-language fs-22"></i></span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="mb-0 fw-semibold fs-6 d-block">Course Language</span>


                                                </div>
                                                <div class="text-end">
                                                    <span class="fs-6 text-primary1">Hindi</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item p-2 ">
                                            <div class="d-flex align-items-center gap-3">
                                                <div>
                                                    <span class="avatar avatar-rounded bg-primary2-transparent text-primary2"><i class="ti ti-hourglass fs-22"></i></span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="mb-0 fw-semibold fs-6 d-block">Course Duration</span>


                                                </div>
                                                <div class="text-end">
                                                    <span class="fs-6 text-primary2">1 Week</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item p-2 ">
                                            <div class="d-flex align-items-center gap-3">
                                                <div>
                                                    <span class="avatar avatar-rounded bg-secondary-transparent text-secondary"><i class="ti ti-bulb fs-22"></i></span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="mb-0 fw-semibold fs-6 d-block ">Course Status</span>


                                                </div>
                                                <div class="text-end">
                                                    <span class="fs-6 text-secondary">Active</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                            <div class="col-lg-9">
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h6 class="fw-semibold fs-6">Course Short Description</h6>
                                        <div class="p-3 bg-white overflow-scroll" style="max-height: 100px;">
                                            <p class="text-wrap mb-0">This is an example of using on an element with set width and height dimensions.This is an example of using on an element with set width and height dimensions.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h6 class="fw-semibold fs-6">Course Long Description</h6>
                                        <div class="p-3 bg-white overflow-scroll" style="max-height: 100px;">
                                            <p class="text-wrap mb-0">This is an example of using on an element with set width and height dimensions.This is an example of using on an element with set width and height dimensions.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h6 class="fw-semibold fs-6">SEO Title</h6>
                                        <div class="p-3 bg-white overflow-scroll" style="max-height: 100px;">
                                            <p class="text-wrap mb-0">This is an example of using on an element with set width and height dimensions.This is an example of using on an element with set width and height dimensions.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h6 class="fw-semibold fs-6">SEO Keywords</h6>
                                        <div class="p-3 bg-white overflow-scroll" style="max-height: 100px;">
                                            <p class="text-wrap mb-0">This is an example of using on an element with set width and height dimensions.This is an example of using on an element with set width and height dimensions.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <h6 class="fw-semibold fs-6">SEO Description</h6>
                                        <div class="p-3 bg-white overflow-scroll" style="max-height: 100px;">
                                            <p class="text-wrap mb-0">This is an example of using on an element with set width and height dimensions.This is an example of using on an element with set width and height dimensions.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                     <a href="edit-course.php" class="btn btn-primary btn-wave me-0 waves-effect waves-light"><i class="ri-file-edit-line"></i> Edit Course</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>                    
            `;
        }
        $('#coursesTable tbody').on('click', '.dlt', function() {
            const tr = $(this).closest('tr'); // Find the closest row
            const row = table.row(tr); // Get the DataTable row instance

            // Confirmation dialog before deleting
            if (confirm('Are you sure you want to delete this record?')) {
                row.remove().draw(); // Remove the row and redraw the table
            }
        });
    });
</script>
