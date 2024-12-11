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
            <div class="btn-list">

                <a class="btn btn-primary btn-wave me-0">
                    <i class="ri-user-add-line  me-1"></i> Add Students
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
                            <table id="studentTable" class="table table-bordered table-striped text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th class="">S. No.</th>
                                        <th class="">Student</th>
                                        <th class="">Mobile No.</th>
                                        <th class="">Email</th>
                                        <th class="">No. of Courses</th>
                                        <th class="">Fee Status</th>
                                        <th class="">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" class="avatar avatar-xs avatar-rounded me-2">
                                                    <img src="https://php.spruko.com/xintra/xintra/assets/images/faces/2.jpg" alt="img">
                                                </a>
                                                <a href="javascript:void(0);">Studar Little </a>

                                            </div>
                                        </td>
                                        <td class="">6753535467</td>
                                        <td class="">editor@fxcareers.com</td>
                                        <td class="">2</td>
                                        <td class="">
                                            <span class="text-success fw-medium">Paid</span>
                                        </td>
                                        <td class="">
                                            <div class="hstack gap-2 fs-15">
                                                <a class="btn  btn-sm rounded-pill btn-primary-light mb-0 toggle-details"><i class="ti ti-eye"></i></a>
                                                <a href="" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-edit-line"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent dlt rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" class="avatar avatar-xs avatar-rounded me-2">
                                                    <img src="https://php.spruko.com/xintra/xintra/assets/images/faces/4.jpg" alt="img">
                                                </a>
                                                <a href="javascript:void(0);">Ion Somer</a>

                                            </div>
                                        </td>
                                        <td class="">6753535467</td>
                                        <td class="">editor@fxcareers.com</td>
                                        <td class="">1</td>
                                        <td class="">
                                            <span class="text-success fw-medium">Paid</span>
                                        </td>
                                        <td class="">
                                            <div class="hstack gap-2 fs-15">
                                                <a class="btn  btn-sm rounded-pill btn-primary-light mb-0 toggle-details"><i class="ti ti-eye"></i></a>
                                                <a href="" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-edit-line"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent dlt rounded-pill"> <i class="ri-delete-bin-line"></i></a>

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" class="avatar avatar-xs avatar-rounded me-2">
                                                    <img src="https://php.spruko.com/xintra/xintra/assets/images/faces/6.jpg" alt="img">
                                                </a>
                                                <a href="javascript:void(0);">Shakira </a>

                                            </div>
                                        </td>
                                        <td class="">6753535467</td>
                                        <td class="">editor@fxcareers.com</td>
                                        <td class="">2</td>
                                        <td class="">
                                            <span class="text-danger fw-medium">Unpaid</span>
                                        </td>
                                        <td class="">
                                            <div class="hstack gap-2 fs-15">
                                                <a class="btn  btn-sm rounded-pill btn-primary-light mb-0 toggle-details"><i class="ti ti-eye"></i></a>
                                                <a href="" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-edit-line"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent dlt rounded-pill"> <i class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" class="avatar avatar-xs avatar-rounded me-2">
                                                    <img src="https://php.spruko.com/xintra/xintra/assets/images/faces/8.jpg" alt="img">
                                                </a>
                                                <a href="javascript:void(0);">Thomas Shelby </a>
                                            </div>
                                        </td>
                                        <td class="">6753535467</td>
                                        <td class="">editor@fxcareers.com</td>
                                        <td class="">2</td>
                                        <td class="">
                                            <span class="text-success fw-medium">Paid</span>
                                        </td>
                                        <td class="">
                                            <div class="hstack gap-2 fs-15">
                                                <a class="btn  btn-sm rounded-pill btn-primary-light mb-0 toggle-details"><i class="ti ti-eye"></i></a>
                                                <a href="" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-edit-line"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent dlt rounded-pill"> <i class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" class="avatar avatar-xs avatar-rounded me-2">
                                                    <img src="https://php.spruko.com/xintra/xintra/assets/images/faces/10.jpg" alt="img">
                                                </a>
                                                <a href="javascript:void(0);">Stefan U </a>

                                            </div>
                                        </td>
                                        <td class="">6753535467</td>
                                        <td class="">editor@fxcareers.com</td>
                                        <td class="">4</td>
                                        <td class="">
                                            <span class="text-success fw-medium">Paid</span>
                                        </td>
                                        <td class="">
                                            <div class="hstack gap-2 fs-15">
                                                <a class="btn  btn-sm rounded-pill btn-primary-light mb-0 toggle-details"><i class="ti ti-eye"></i></a>
                                                <a href="" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-edit-line"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent dlt rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 6</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" class="avatar avatar-xs avatar-rounded me-2">
                                                    <img src="https://php.spruko.com/xintra/xintra/assets/images/faces/12.jpg" alt="img">
                                                </a>
                                                <a href="javascript:void(0);">Michael Shreff</a>

                                            </div>
                                        </td>
                                        <td class="">6753535467</td>
                                        <td class="">editor@fxcareers.com</td>
                                        <td class="">5</td>
                                        <td class="">
                                            <span class="text-danger fw-medium">Unpaid</span>
                                        </td>
                                        <td class="">
                                            <div class="hstack gap-2 fs-15">
                                                <a class="btn  btn-sm rounded-pill btn-primary-light mb-0 toggle-details"><i class="ti ti-eye"></i></a>
                                                <a href="" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-edit-line"></i></a>
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
        const table = $('#studentTable').DataTable({
            responsive: true,



        });

        let currentlyOpenRow = null; // Track the currently open detail row

        // Add event listener for toggle-details
        $('#studentTable tbody').on('click', '.toggle-details', function() {
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
                            <div class="col-lg-4">
                                <div class="card custom-card">
                                <div class="card-body">
                                    <ul class="d-flex flex-column list-unstyled mb-0 popular-course">
                                        <li class="text-muted mb-3">
                                            <div class="d-sm-flex align-items-start w-100">
                                                <a href="javascript:void(0);" class="pe-4 inline-block">
                                                <img src="https://php.spruko.com/xintra/xintra/assets/images/media/media-13.jpg" alt="img" class="avatar avatar-xl rounded-2">
                                                </a>
                                                <div class="flex-grow-1 fw-medium">
                                                    <div class="d-flex align-items-center" title="Instructor">
                                                        <a href="javascript:void(0);" class="pe-2">
                                                        <img src="https://php.spruko.com/xintra/xintra/assets/images/faces/1.jpg" alt="img" class="avatar avatar-xs rounded-pill">
                                                        </a>
                                                        <a href="javascript:void(0);" class="flex-grow-1 text-default op-8">Natasha
                                                        Sil</a>
                                                        <a href="javascript:void(0);" class=" d-block mb-1 fw-normal badge bg-primary3-transparent" title="Category"><i class="ri-price-tag-3-line "></i> UI/UX</a>
                                                    </div>
                                                    <a href="javascript:void(0);" class=" d-block mb-2 fw-medium text-wrap line-clamp-2">
                                                    Mastering CSS Pseudo-classes: From Basics to Advanced Techniques.</a>

                                                </div>
                                            </div>
                                        </li>
                                        <li class=" text-muted mb-3">
                                            <div class="d-sm-flex align-items-start w-100">
                                                <a href="javascript:void(0);" class="pe-4 inline-block">
                                                <img src="https://php.spruko.com/xintra/xintra/assets/images/media/media-14.jpg" alt="img" class="avatar avatar-xl rounded-2">
                                                </a>
                                                <div class="flex-grow-1 fw-medium">
                                                    <div class="d-flex align-items-center" title="Instructor">
                                                        <a href="javascript:void(0);" class="pe-2">
                                                        <img src="https://php.spruko.com/xintra/xintra/assets/images/faces/6.jpg" alt="img" class="avatar avatar-xs rounded-pill">
                                                        </a>
                                                        <a href="javascript:void(0);" class="flex-grow-1 text-default op-8">Catalina Keira
                                                        </a>
                                                        <a href="javascript:void(0);" class=" d-block mb-1 fw-normal badge bg-primary2-transparent" title="Category"><i class="ri-price-tag-3-line "></i> Marketing</a>
                                                    </div>
                                                    <a href="javascript:void(0);" class=" d-block mb-2 fw-medium text-wrap line-clamp-2">
                                                        Marketing Essentials: Understanding its Role in Business Success.</a>
                               
                                                </div>
                                            </div>
                                        </li>
                                        <li class=" text-muted mb-1">
                                        <div class="d-sm-flex align-items-start w-100">
                                            <a href="javascript:void(0);" class="pe-4 inline-block">
                                            <img src="https://php.spruko.com/xintra/xintra/assets/images/media/media-12.jpg" alt="img" class="avatar avatar-xl rounded-2">
                                            </a>
                                            <div class="flex-grow-1 fw-medium">
                                                <div class="d-flex align-items-center" title="Instructor">
                                                    <a href="javascript:void(0);" class="pe-2">
                                                    <img src="https://php.spruko.com/xintra/xintra/assets/images/faces/11.jpg" alt="img" class="avatar avatar-xs rounded-pill">
                                                    </a>
                                                    <a href="javascript:void(0);" class="flex-grow-1 text-default op-8">Telsko 
                                                        William</a>
                                                    <a href="javascript:void(0);" class=" d-block mb-1 fw-normal badge bg-primary1-transparent" title="Category"><i class="ri-price-tag-3-line "></i> Python</a>
                                                </div>
                                                <a href="javascript:void(0);" class=" d-block mb-2 fw-medium text-wrap line-clamp-2">
                                                    Python Mastery: Shallow Copy vs. Deep Copy and Practical Techniques.</a>

                                            </div>
                                        </div>
                                        </li>
                                    </ul>
                                    <div class="btn btn-primary-light mt-3 d-grid"> View All Courses</div>
                                </div>
                            </div>
                            </div>


                            <div class="col-lg-6">
                                
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