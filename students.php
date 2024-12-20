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

                                        <th class="">Student</th>
                                        <th class="">Mobile No.</th>
                                        <th class="">Email</th>
                                        <th class="">No. of Courses</th>
                                        <th class="">Payemnt Status</th>
                                        <th class="">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td class="toggle-details">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0);" class="avatar avatar-xs avatar-rounded me-2">
                                                        <img src="https://php.spruko.com/xintra/xintra/assets/images/faces/2.jpg" alt="img">
                                                    </a>
                                                    <a href="javascript:void(0);">Studar Little </a>
                                                </div>
                                                <a href=""><i class="ri-add-line"></i></a>
                                            </div>
                                        </td>
                                        <td class="">6753535467</td>
                                        <td class="">editor@fxcareers.com</td>
                                        <td class="">2</td>
                                        <td class="">
                                            <span class="badge bg-success-transparent">Paid</span>
                                        </td>
                                        <td class="">
                                            <div class="dropdown d-inline-block" data-bs-toggle="dropdown">
                                                <a aria-label="anchor" href="javascript:void(0);" class="tx-inverse"><i class="bi bi-three-dots"></i></a>
                                                <ul class="dropdown-menu">

                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line"></i> Dowbload Invoice</a></li>
                                                    <li><a class="dropdown-item" href="view-mentor.php"><i class="ri-edit-line"></i> Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-6-line"></i> Remove</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>

                                        <td class="toggle-details">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0);" class="avatar avatar-xs avatar-rounded me-2">
                                                        <img src="https://php.spruko.com/xintra/xintra/assets/images/faces/10.jpg" alt="img">
                                                    </a>
                                                    <a href="javascript:void(0);">Stefan U </a>
                                                </div>

                                                <a href=""><i class="ri-add-line"></i></a>

                                            </div>
                                        </td>
                                        <td class="">6753535467</td>
                                        <td class="">editor@fxcareers.com</td>
                                        <td class="">4</td>
                                        <td class="">
                                            <span class="badge bg-success-transparent">Paid</span>
                                        </td>
                                        <td class="">
                                            <div class="dropdown d-inline-block" data-bs-toggle="dropdown">
                                                <a aria-label="anchor" href="javascript:void(0);" class="tx-inverse"><i class="bi bi-three-dots"></i></a>
                                                <ul class="dropdown-menu">

                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line"></i> Dowbload Invoice</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line"></i> Download Certificate</a></li>
                                                    <li><a class="dropdown-item" href="view-mentor.php"><i class="ri-edit-line"></i> Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-6-line"></i> Remove</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td class="toggle-details">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0);" class="avatar avatar-xs avatar-rounded me-2">
                                                        <img src="https://php.spruko.com/xintra/xintra/assets/images/faces/10.jpg" alt="img">
                                                    </a>
                                                    <a href="javascript:void(0);">Stefan U </a>
                                                </div>

                                                <a href=""><i class="ri-add-line"></i></a>

                                            </div>
                                        </td>
                                        <td class="">6753535467</td>
                                        <td class="">editor@fxcareers.com</td>
                                        <td class="">4</td>
                                        <td class="">
                                            <span class="badge bg-success-transparent">Paid</span>
                                        </td>
                                        <td class="">
                                            <div class="dropdown d-inline-block" data-bs-toggle="dropdown">
                                                <a aria-label="anchor" href="javascript:void(0);" class="tx-inverse"><i class="bi bi-three-dots"></i></a>
                                                <ul class="dropdown-menu">

                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line"></i> Dowbload Invoice</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line"></i> Download Certificate</a></li>
                                                    <li><a class="dropdown-item" href="view-mentor.php"><i class="ri-edit-line"></i> Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-6-line"></i> Remove</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td class="toggle-details">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0);" class="avatar avatar-xs avatar-rounded me-2">
                                                        <img src="https://php.spruko.com/xintra/xintra/assets/images/faces/10.jpg" alt="img">
                                                    </a>
                                                    <a href="javascript:void(0);">Stefan U </a>
                                                </div>

                                                <a href=""><i class="ri-add-line"></i></a>

                                            </div>
                                        </td>
                                        <td class="">6753535467</td>
                                        <td class="">editor@fxcareers.com</td>
                                        <td class="">4</td>
                                        <td class="">
                                            <span class="badge bg-success-transparent">Paid</span>
                                        </td>
                                        <td class="">
                                            <div class="dropdown d-inline-block" data-bs-toggle="dropdown">
                                                <a aria-label="anchor" href="javascript:void(0);" class="tx-inverse"><i class="bi bi-three-dots"></i></a>
                                                <ul class="dropdown-menu">

                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line"></i> Dowbload Invoice</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line"></i> Download Certificate</a></li>
                                                    <li><a class="dropdown-item" href="view-mentor.php"><i class="ri-edit-line"></i> Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-6-line"></i> Remove</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td class="toggle-details">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0);" class="avatar avatar-xs avatar-rounded me-2">
                                                        <img src="https://php.spruko.com/xintra/xintra/assets/images/faces/10.jpg" alt="img">
                                                    </a>
                                                    <a href="javascript:void(0);">Stefan U </a>
                                                </div>

                                                <a href=""><i class="ri-add-line"></i></a>

                                            </div>
                                        </td>
                                        <td class="">6753535467</td>
                                        <td class="">editor@fxcareers.com</td>
                                        <td class="">4</td>
                                        <td class="">
                                            <span class="badge bg-success-transparent">Paid</span>
                                        </td>
                                        <td class="">
                                            <div class="dropdown d-inline-block" data-bs-toggle="dropdown">
                                                <a aria-label="anchor" href="javascript:void(0);" class="tx-inverse"><i class="bi bi-three-dots"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line"></i> Dowbload Invoice</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line"></i> Download Certificate</a></li>
                                                    <li><a class="dropdown-item" href="view-mentor.php"><i class="ri-edit-line"></i> Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-6-line"></i> Remove</a></li>
                                                </ul>
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
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-3">
                    <div class="card custom-card rounded overflow-hidden p-3">
                        <div>
                            <div class="flex-fill fs-13 text-muted">Amount</div>
                            <div class="fs-21 fw-medium">87,985</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card custom-card rounded overflow-hidden p-3">
                        <div>
                            <div class="flex-fill fs-13 text-muted">Total Paid</div>
                            <div class="fs-21 fw-medium">87,985</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card custom-card rounded overflow-hidden p-3">
                        <div>
                            <div class="flex-fill fs-13 text-muted">Balance</div>
                            <div class="fs-21 fw-medium">0.00</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card custom-card rounded overflow-hidden p-3">
                        <div>
                            <div class="flex-fill fs-13 text-muted">Balance</div>
                            <div class="fs-21 fw-medium">0.00</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
    <div class="card-body">
                                    <ul class="nav nav-tabs mb-3 tab-style-6" id="myTab3" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="PurchasedCourses" data-bs-toggle="tab"
                                                data-bs-target="#PurchasedCourses-pane" type="button" role="tab"
                                                aria-controls="PurchasedCourses-pane" aria-selected="true"><i
                                                    class="ri-file-text-line me-1 align-middle d-inline-block"></i>Purchased Courses</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="PaymentHistory" data-bs-toggle="tab"
                                                data-bs-target="#PaymentHistory-pane" type="button" role="tab"
                                                aria-controls="PaymentHistory-pane" aria-selected="false"><i
                                                    class="ri-bill-line me-1 align-middle d-inline-block"></i>Payment History</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="profit-tab" data-bs-toggle="tab"
                                                data-bs-target="#profit-tab-pane" type="button" role="tab"
                                                aria-controls="profit-tab-pane" aria-selected="false"><i
                                                    class="ri-money-dollar-box-line me-1 align-middle d-inline-block"></i>Profit</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="expenses-tab" data-bs-toggle="tab"
                                                data-bs-target="#expenses-tab-pane" type="button" role="tab"
                                                aria-controls="expenses-tab-pane" aria-selected="false"><i
                                                    class="ri-exchange-box-line me-1 align-middle d-inline-block"></i>Expenses</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent2">
                                        <div class="tab-pane fade show active p-3  overflow-hidden" id="PurchasedCourses-pane"
                                            role="tabpanel" aria-labelledby="PurchasedCourses" tabindex="0">
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
                                                        <a href="javascript:void(0);" class=" d-block mb-1 fw-normal badge bg-success-transparent" title="Category"><i class="ri-price-tag-3-line "></i> Complete</a>
                                                    </div>
                                                    <a href="javascript:void(0);" class=" d-block mb-2 fw-medium">
                                                    Mastering CSS Pseudo-classes: From Basics to Advanced Techniques.</a>
                                                    <div class="d-md-flex justify-content-between align-items-center">
        
                                                    </div>
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
                                                        <a href="javascript:void(0);" class=" d-block mb-1 fw-normal badge bg-primary2-transparent" title="Category"><i class="ri-price-tag-3-line "></i> On going</a>
                                                    </div>
                                                    <a href="javascript:void(0);" class=" d-block mb-2 fw-medium">
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
                                                    <a href="javascript:void(0);" class=" d-block mb-1 fw-normal badge bg-primary3-transparent" title="Category"><i class="ri-price-tag-3-line "></i> On Hold</a>
                                                </div>
                                                <a href="javascript:void(0);" class=" d-block mb-2 fw-medium">
                                                    Python Mastery: Shallow Copy vs. Deep Copy and Practical Techniques.</a>
                                              
                                            </div>
                                        </div>
                                        </li>
                                    </ul>
                                        </div>
                                        <div class="tab-pane fade overflow-hidden" id="PaymentHistory-pane" role="tabpanel"
                                            aria-labelledby="PaymentHistory" tabindex="0">
                                           <div class="table-responsive">
        <table class="table text-nowrap">
            <thead class="table-warning">
                <tr>
                    <th scope="col">User Name</th>
                    <th scope="col">Transaction Id</th>
                    <th scope="col">Created</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Harshrath</th>
                    <td>#5182-3467</td>
                    <td>24 May 2024</td>
                    <td>
                        <button class="btn btn-sm btn-primary-light">Pending</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Zozo Hadid</th>
                    <td>#5182-3412</td>
                    <td>02 July 2024</td>
                    <td>
                        <button class="btn btn-sm btn-primary-light">Pending</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Martiana</th>
                    <td>#5182-3423</td>
                    <td>15 April 2024</td>
                    <td>
                        <button class="btn btn-sm btn-danger-light">Rejected</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Phillip John</th>
                    <td>#5182-3456</td>
                    <td>17 March 2024</td>
                    <td>
                        <button class="btn btn-sm btn-success-light">Processed</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
                                        </div>
                                        <div class="tab-pane fade overflow-hidden" id="profit-tab-pane" role="tabpanel"
                                            aria-labelledby="profit-tab" tabindex="0">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-3">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            Clothing
                                                        </div>
                                                        <div class="fs-14 fw-medium text-success"><i
                                                                class="ri-arrow-up-s-fill me-1 align-middle"></i>22.75%
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mb-3">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            electronics
                                                        </div>
                                                        <div class="fs-14 fw-medium text-success"><i
                                                                class="ri-arrow-up-s-fill me-1 align-middle"></i>42.24%
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mb-3">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            Furniture
                                                        </div>
                                                        <div class="fs-14 fw-medium text-success"><i
                                                                class="ri-arrow-up-s-fill me-1 align-middle"></i>15.23%
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mb-3">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            Home Appliances
                                                        </div>
                                                        <div class="fs-14 fw-medium text-success"><i
                                                                class="ri-arrow-up-s-fill me-1 align-middle"></i>15.14%
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mb-0">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            food Products
                                                        </div>
                                                        <div class="fs-14 fw-medium text-success"><i
                                                                class="ri-arrow-up-s-fill me-1 align-middle"></i>31.64%
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade overflow-hidden" id="expenses-tab-pane" role="tabpanel"
                                            aria-labelledby="expenses-tab" tabindex="0">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-3">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            Clothing
                                                        </div>
                                                        <div class="fs-14 fw-medium text-danger">-$31,134</div>
                                                    </div>
                                                </li>
                                                <li class="mb-3">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            electronics
                                                        </div>
                                                        <div class="fs-14 fw-medium text-danger">-$15,256</div>
                                                    </div>
                                                </li>
                                                <li class="mb-3">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            Furniture
                                                        </div>
                                                        <div class="fs-14 fw-medium text-danger">-$24,156</div>
                                                    </div>
                                                </li>
                                                <li class="mb-3">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            Home Appliances
                                                        </div>
                                                        <div class="fs-14 fw-medium text-danger">-$18,245</div>
                                                    </div>
                                                </li>
                                                <li class="mb-0">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            food Products
                                                        </div>
                                                        <div class="fs-14 fw-medium text-danger">-$18,478</div>
                                                    </div>
                                                </li>
                                            </ul>
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