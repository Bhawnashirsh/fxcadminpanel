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
                        <li class="breadcrumb-item active" aria-current="page">Enquiries</li>
                    </ol>
                </nav>
                <h1 class="page-title fw-medium fs-18 mb-0">Enquiries</h1>
            </div>

        </div>
        <!-- Page Header Close -->

        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="EnquiriesTable" class="table table-bordered table-striped text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Full Name</th>
                                        <th>Mobile No.</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>Follow Up</th>
                                        <th>Actions</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="toggle-details">
                                            Studar Little
                                        </td>
                                        <td>6753535467</td>
                                        <td>editor@fxcareers.com</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, quis.
                                        </td>
                                        <td>
                                            <button data-bs-effect="effect-scale" data-bs-toggle="modal"
                                                href="#modaldemo8"
                                                class="btn btn-sm btn-warning btn-wave waves-effect waves-light">Follow
                                                Up</button>
                                        </td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="enroll.php"
                                                    class="btn btn-sm btn-success btn-wave waves-effect waves-light">Enroll</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-icon btn-sm btn-danger-transparent dlt rounded-pill"><i
                                                        class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td class="toggle-details">
                                            Ion Somer
                                        </td>
                                        <td>6753535467</td>
                                        <td>editor@fxcareers.com</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, quis.
                                        </td>
                                        <td><button data-bs-effect="effect-scale" data-bs-toggle="modal"
                                                href="#modaldemo8"
                                                class="btn btn-sm btn-warning btn-wave waves-effect waves-light">Follow
                                                Up</button></td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="enroll.php"   class="btn btn-sm btn-success btn-wave waves-effect waves-light">Enroll</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-icon btn-sm btn-danger-transparent dlt rounded-pill"><i
                                                        class="ri-delete-bin-line"></i></a>
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
<div class="modal effect-scale fade" id="modaldemo8">
    <div class="modal-dialog modal-dialog-centered text-center" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Add Follow Up Remark </h6><button aria-label="Close" class="btn-close"
                    data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-start">
                <div class="row">
                    <div class="col-md-6">
                        <label for="Remark" class="form-label">Remark</label>
                        <input type="text" class="form-control" id="remark">
                    </div>
                    <div class="col-md-6">
                        <label for="RemarkDate" class="form-label">Date</label>
                        <input type="date" class="form-control" id="RemarkDate">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#EnquiriesTable').DataTable({
                columnDefs: [
                    {
                        targets: [4], // Columns: SEO Title, SEO Keywords, SEO Description
                        render: function (data, type, row) {
                            if (type === 'display' && data) {
                                const wordLimit = 8; // Adjust the word limit
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