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
                        <li class="breadcrumb-item active" aria-current="page">Landing Pages</li>
                    </ol>
                </nav>
                <h1 class="page-title fw-medium fs-18 mb-0">Landing Page Data</h1>
            </div>

        </div>
        <!-- Page Header Close -->

        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="LandingpageTable" class="table table-bordered table-striped text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Full Name</th>
                                        <th>Mobile No.</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>Landing Page Name </th>
                                        <th>Follow Up </th>
                                       
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
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, quis.</td>
                                        <td> FFB</td>
                                        <td>Interested</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td class="toggle-details">
                                            Ion Somer
                                        </td>
                                        <td>6753535467</td>
                                        <td>editor@fxcareers.com</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, quis.</td>
                                        <td>Clarity</td>
                                        <td>Interested</td>
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
        $('#LandingpageTable').DataTable({
            columnDefs: [
                {
                    targets: [4], 
                    render: function (data, type, row) {
                        if (type === 'display' && data) {
                            const wordLimit = 7; // Adjust the word limit
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