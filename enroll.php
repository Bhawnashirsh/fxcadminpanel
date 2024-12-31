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
                        <li class="breadcrumb-item active" aria-current="page">Enroll</li>
                    </ol>
                </nav>
                <h1 class="page-title fw-medium fs-18 mb-0">Enroll </h1>
            </div>

        </div>
        <!-- Page Header Close -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body">
                        <div class="row gy-4">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="CourseCategory" class="form-label"> Course Name</label>
                                <select class="form-control frm-select" data-trigger name="choices-single-default" id="choices-single-default">                                                                    
                                    <option selected="">Select Course</option>
                                    <option value="320">Masterclass on Winning Strategies </option>
                                    <option value="321">Basic Financial Market Training </option>
                                    <option value="322">Basic Financial Market Training </option>
                                    <option value="324">Financial Market Training for Intermediate </option>
                                    <option value="325">Advanced Financial Market Analysis </option>
                                    <option value="326">Financial Market Training for Intermediate </option>
                                    <option value="327">Advanced Financial Market Analysis </option>
                                    <option value="328">Training Course in Currency Market </option>
                                    <option value="329">Training Course in Currency Market </option>
                                    <option value="332">Financial Consultant 1 </option>
                                    <option value="333">Financial Consultant 1 </option>
                                    <option value="334">MQ Administration Course </option>
                                    <option value="335">MQ Administration Course </option>
                                    <option value="336">Financial Career Training Course </option>
                                    <option value="337">Financial Career Training Course </option>
                                </select>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="CourseFee" class="form-label">Course Fee</label>
                                <input type="text" class="form-control" id="CourseFee">
                            </div>
                            <div class="col-xl-6 col-lg-6-md-6 col-sm-12">
                                <label for="CourseDiscount" class="form-label">Course Discount</label>
                                <input class="form-control" type="text" id="CourseDiscount">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="FinalAmount" class="form-label">Final Amount</label>
                                <input type="text" class="form-control" id="FinalAmount">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="TransactionId" class="form-label">Transaction Id</label>
                                <input type="text" class="form-control" id="TransactionId">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="PaymentMode" class="form-label">Payment Mode</label>
                                <select class="form-control frm-select" data-trigger name="choices-single-default" id="choices-single-default"> 
                                    <option selected="">Select Payment Mode</option>
                                    <option value="1">UPI</option>
                                    <option value="2">Card </option>
                                    <option value="3">Bank Transfer</option>
                                    <option value="4">Cash</option>
                                    <option value="5">Razorpay</option>
                                    
                                    </select>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="TransactionDate" class="form-label">Transaction Date</label>
                                <input type="date" class="form-control" id="TransactionDate">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="PaymentStatus" class="form-label">Payment Status</label>
                                <input type="date" class="form-control" id="PaymentStatus">
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="Left Amount" class="form-label">Left Amount</label>
                                <input type="date" class="form-control" id="Left Amount">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="PaidAmount" class="form-label">Paid Amount</label>
                                <input type="date" class="form-control" id="PaidAmount">
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <button type="submit" class="btn btn-primary fs-6 ">
                                    Add
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