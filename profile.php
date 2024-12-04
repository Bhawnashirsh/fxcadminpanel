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
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>
                <h1 class="page-title fw-medium fs-18 mb-0">Profile</h1>
            </div>
            <div class="btn-list">
                <button class="btn btn-white btn-wave">
                    <i class="ri-filter-3-line align-middle me-1 lh-1"></i> Filter
                </button>
                <button class="btn btn-primary btn-wave me-0">
                    <i class="ri-share-forward-line me-1"></i> Share
                </button>
            </div>
        </div>
        <!-- Page Header Close -->

        <!-- Start:: row-1 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card profile-card">
                    <div class="profile-banner-img">
                        <img src="assets/images/media/media-3.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body pb-0 position-relative">
                        <div class="row profile-content">
                            <div class="col-xl-3">
                                <div class="card custom-card overflow-hidden border">
                                    <div class="card-body border-bottom border-block-end-dashed">
                                        <div class="text-center">
                                            <span class="avatar avatar-xxl avatar-rounded online mb-3">
                                                <img src="assets/images/faces/11.jpg" alt="">
                                            </span>
                                            <h5 class="fw-semibold mb-1">Spencer Robin</h5>
                                            <span class="d-block fw-medium text-muted mb-2">Software Development Manager</span>
                                            <p class="fs-12 mb-0 text-muted"> <span class="me-3"><i class="ri-building-line me-1 align-middle"></i>Hamburg</span> <span><i class="ri-map-pin-line me-1 align-middle"></i>Germany</span> </p>
                                        </div>
                                    </div>

                                    <div class="p-3 pb-1 d-flex flex-wrap justify-content-between">
                                        <div class="fw-medium fs-15 text-primary1">
                                            Basic Info :
                                        </div>
                                    </div>
                                    <div class="card-body border-bottom border-block-end-dashed p-0">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item pt-2 border-0">
                                                <div><span class="fw-medium me-2">Name :</span><span class="text-muted">Spencer Robin</span></div>
                                            </li>
                                            <li class="list-group-item pt-2 border-0">
                                                <div><span class="fw-medium me-2">Designation :</span><span class="text-muted">Software Development Manager</span></div>
                                            </li>
                                            <li class="list-group-item pt-2 border-0">
                                                <div><span class="fw-medium me-2">Email :</span><span class="text-muted">spencer.robin22@example.com</span></div>
                                            </li>
                                            <li class="list-group-item pt-2 border-0">
                                                <div><span class="fw-medium me-2">Phone :</span><span class="text-muted">+1 (222) 111 - 57840</span></div>
                                            </li>
                                            <li class="list-group-item pt-2 border-0">
                                                <div><span class="fw-medium me-2">Experience :</span><span class="text-muted">10 Years</span></div>
                                            </li>
                                            <li class="list-group-item pt-2 border-0">
                                                <div><span class="fw-medium me-2">Age :</span><span class="text-muted">28</span></div>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-9">
                                <div class="card custom-card overflow-hidden border">
                                    <div class="card-body">
                                        <ul class="nav nav-tabs tab-style-6 mb-3 p-0" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link w-100 text-start active" id="profile-about-tab" data-bs-toggle="tab"
                                                    data-bs-target="#profile-about-tab-pane" type="button" role="tab"
                                                    aria-controls="profile-about-tab-pane" aria-selected="true"><i class="ri-id-card-line"></i> About</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link w-100 text-start" id="edit-profile-tab" data-bs-toggle="tab"
                                                    data-bs-target="#edit-profile-tab-pane" type="button" role="tab"
                                                    aria-controls="edit-profile-tab-pane" aria-selected="true"><i class="ri-user-3-line"></i> Edit Profile</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link w-100 text-start" id="Change-tab" data-bs-toggle="tab"
                                                    data-bs-target="#Change-tab-pane" type="button" role="tab"
                                                    aria-controls="Change-tab-pane" aria-selected="false"><i class="ri-mail-send-line"></i> Change Email & Phone</button>
                                            </li>

                                        </ul>
                                        <div class="tab-content" id="profile-tabs">
                                            <div class="tab-pane show active p-0 border-0" id="profile-about-tab-pane" role="tabpanel" aria-labelledby="profile-about-tab" tabindex="0">
                                                <ul class="list-group list-group-flush border rounded-3">
                                                    <li class="list-group-item p-3">
                                                        <span class="fw-medium fs-15 d-block mb-3"><span class="me-1">&#10024;</span>About Info :</span>
                                                        <p class="text-muted mb-2">
                                                            Hello, I'm [Your Name], a dedicated [Your Profession/Interest] based in [Your Location]. I have a genuine passion for [Your Hobbies/Interests] and enjoy delving into the nuances of [Your Industry/Field].
                                                        </p>
                                                        <p class="text-muted mb-0">
                                                            Specializing in [Your Specialization/Area of Expertise], I strive to infuse innovation into every project I undertake. With a track record of [Key Achievements] and valuable experiences, I'm committed to continual growth and eagerly anticipate the opportunities that lie ahead.
                                                        </p>
                                                    </li>
                                                    <li class="list-group-item p-3">
                                                        <span class="fw-medium fs-15 d-block mb-3">Contact Info :</span>
                                                        <div class="text-muted">
                                                            <p class="mb-3">
                                                                <span class="avatar avatar-sm avatar-rounded text-primary p-1 bg-primary-transparent me-2">
                                                                    <i class="ri-mail-line align-middle fs-15"></i>
                                                                </span>
                                                                <span class="fw-medium text-default">Email : </span> spencer.robin22@example.com
                                                            </p>
                                                            <p class="mb-3">
                                                                <span class="avatar avatar-sm avatar-rounded text-primary1 p-1 bg-primary1-transparent me-2">
                                                                    <i class="ri-map-pin-line align-middle fs-15"></i>
                                                                </span>
                                                                <span class="fw-medium text-default">Website : </span> www.yourwebsite.com
                                                            </p>
                                                            <p class="mb-3">
                                                                <span class="avatar avatar-sm avatar-rounded text-primary2 p-1 bg-primary2-transparent me-2">
                                                                    <i class="ri-building-line align-middle fs-15"></i>
                                                                </span>
                                                                <span class="fw-medium text-default">Location : </span> City, Country
                                                            </p>
                                                            <p class="mb-0">
                                                                <span class="avatar avatar-sm avatar-rounded text-primary3 p-1 bg-primary3-transparent me-2">
                                                                    <i class="ri-phone-line align-middle fs-15"></i>
                                                                </span>
                                                                <span class="fw-medium text-default">Phone : </span> +1 (222) 111 - 57840
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-3">
                                                        <span class="fw-medium fs-15 d-block mb-3">Skills :</span>
                                                        <div class="w-75">
                                                            <a href="javascript:void(0);">
                                                                <span class="badge bg-light text-muted m-1 border">Leadership</span>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <span class="badge bg-light text-muted m-1 border">Project Management</span>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <span class="badge bg-light text-muted m-1 border">Technical Proficiency</span>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <span class="badge bg-light text-muted m-1 border">Communication</span>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <span class="badge bg-light text-muted m-1 border">Team Building</span>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <span class="badge bg-light text-muted m-1 border">Problem-Solving</span>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <span class="badge bg-light text-muted m-1 border">Strategic Thinking</span>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <span class="badge bg-light text-muted m-1 border">Decision Making</span>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <span class="badge bg-light text-muted m-1 border">Adaptability</span>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <span class="badge bg-light text-muted m-1 border">Stakeholder Management</span>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <span class="badge bg-light text-muted m-1 border">Conflict Resolution</span>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <span class="badge bg-light text-muted m-1 border">Continuous Improvement</span>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-3">
                                                        <span class="fw-medium fs-15 d-block mb-3">Social Media :</span>
                                                        <div class="d-flex align-items-center gap-5 flex-wrap">
                                                            <div class="d-flex align-items-center gap-3 me-2">
                                                                <div>
                                                                    <span class="avatar avatar-md bg-primary"><i class="ri-github-line fs-16"></i></span>
                                                                </div>
                                                                <div>
                                                                    <span class="d-block fw-medium text-primay">Github</span>
                                                                    <span class="text-muted fw-medium">github.com/spruko</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center gap-3 me-2">
                                                                <div>
                                                                    <span class="avatar avatar-md bg-primary1"><i class="ri-twitter-x-line fs-16"></i></span>
                                                                </div>
                                                                <div>
                                                                    <span class="d-block fw-medium text-primay1">Twitter</span>
                                                                    <span class="text-muted fw-medium">twitter.com/spruko.me</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center gap-3 me-2">
                                                                <div>
                                                                    <span class="avatar avatar-md bg-primary2"><i class="ri-linkedin-line fs-16"></i></span>
                                                                </div>
                                                                <div>
                                                                    <span class="d-block fw-medium text-primay2">Linkedin</span>
                                                                    <span class="text-muted fw-medium">linkedin.com/in/spruko</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center gap-3">
                                                                <div>
                                                                    <span class="avatar avatar-md bg-primary3"><i class="ri-briefcase-line fs-16"></i></span>
                                                                </div>
                                                                <div>
                                                                    <span class="d-block fw-medium text-primay3">My Portfolio</span>
                                                                    <span class="text-muted fw-medium">spruko.com/</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane p-0 border-0" id="edit-profile-tab-pane" role="tabpanel"
                                                aria-labelledby="edit-profile-tab" tabindex="0">
                                                <div class="border rounded-3 p-3">
                                                    <ul class="nav nav-tabs mb-3 tab-style-8 scaleX" id="myTab4" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link active" id="accountDetails" data-bs-toggle="tab"
                                                                data-bs-target="#accountDetails-pane" type="button" role="tab"
                                                                aria-controls="accountDetails-pane" aria-selected="true"> Account Details</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="personalInfo" data-bs-toggle="tab"
                                                                data-bs-target="#personalInfo-pane" type="button" role="tab"
                                                                aria-controls="personalInfo-pane" aria-selected="false">Personal Info</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="Address" data-bs-toggle="tab"
                                                                data-bs-target="#Address-pane" type="button" role="tab"
                                                                aria-controls="Address-pane" aria-selected="false">Address</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="socialLinks" data-bs-toggle="tab"
                                                                data-bs-target="#socialLinks-pane" type="button" role="tab"
                                                                aria-controls="socialLinks-pane" aria-selected="false">Social Links</button>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content" id="myTabContent3">
                                                        <div class="tab-pane show active overflow-hidden" id="accountDetails-pane"
                                                            role="tabpanel" aria-labelledby="accountDetails" tabindex="0">
                                                            <form action="">
                                                                <div class="row gy-3 align-items-center">
                                                                    <div class="col-md-6">
                                                                        <div class="lh-1 mb-2">
                                                                            <span class="fw-medium">Email :</span>
                                                                        </div>
                                                                        <input type="email" class="form-control" placeholder="Placeholder" value="superadmin@gmail.com" disabled>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="lh-1 mb-2">
                                                                            <span class="fw-medium">Phone :</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Placeholder" value="+91 1234567890" disabled>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="lh-1 mb-2">
                                                                            <span class="fw-medium">Old Password</span>
                                                                        </div>
                                                                        <input type="Password" class="form-control password-show" placeholder="Placeholder" value="Software Development Manager">
                                                                        <i class=" toggle-password ri-eye-off-line"></i>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="lh-1 mb-2">
                                                                            <span class="fw-medium">New Password</span>
                                                                        </div>
                                                                        <input type="Password" class="form-control password-show" placeholder="Placeholder" value="Software Development Manager">
                                                                        <i class=" toggle-password  ri-eye-off-line "></i>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="lh-1 mb-2">
                                                                            <span class="fw-medium">Confirm Password</span>
                                                                        </div>
                                                                        <input type="Password" class="form-control password-show" placeholder="Placeholder" value="Software Development Manager">
                                                                        <i class=" toggle-password  ri-eye-off-line "></i>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-4 justify-content-end">
                                                                    <div class="col-md-4 text-end">
                                                                        <button class="btn btn-primary font-16 "><i class="ri-save-3-line"></i> Save Change</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>

                                                        <div class="tab-pane overflow-hidden" id="personalInfo-pane" role="tabpanel"
                                                            aria-labelledby="personalInfo" tabindex="0">
                                                            <form action="">
                                                                <div class="row gy-3 align-items-center">
                                                                    <div class="col-md-6">
                                                                        <div class="lh-1 mb-2">
                                                                            <span class="fw-medium">Name :</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Placeholder" value="superadmin@gmail.com">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="lh-1 mb-2">
                                                                            <span class="fw-medium">Gender :</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Placeholder" value="+91 1234567890">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="lh-1 mb-2">
                                                                            <span class="fw-medium">DOB :</span>
                                                                        </div>
                                                                        <div class="input-group">
                                                                            <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                                            <input type="text" class="form-control flatpickr-input" id="date" placeholder="Choose date" readonly="readonly">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="lh-1 mb-2">
                                                                            <span class="fw-medium">Proffession :</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Placeholder" value="Mentor">
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="lh-1 mb-2">
                                                                            <span class="fw-medium">BIO :</span>
                                                                        </div>
                                                                        <textarea class="form-control" placeholder="Hello, I'm [Your Name], a dedicated [Your Profession/Interest] based in [Your Location]. I have a genuine passion for [Your Hobbies/Interests] and enjoy delving into the nuances of [Your Industry/Field]." value="Mentor"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-4 justify-content-end">
                                                                    <ddiv class="col-md-4 text-end">
                                                                        <button class="btn btn-primary font-16 "><i class="ri-save-3-line"></i> Save Change</button>
                                                                    </ddiv>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="tab-pane overflow-hidden" id="Address-pane" role="tabpanel"
                                                            aria-labelledby="Address" tabindex="0">
                                                            <form action="">
                                                                <div class="row gy-3 align-items-center">
                                                                    <div class="col-md-6">
                                                                        <div class="lh-1 mb-2">
                                                                            <span class="fw-medium">Country :</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Placeholder" value="India">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="lh-1 mb-2">
                                                                            <span class="fw-medium">State :</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Placeholder" value="Delhi">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="lh-1 mb-2">
                                                                            <span class="fw-medium">City :</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Placeholder" value="Delhi">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="lh-1 mb-2">
                                                                            <span class="fw-medium">Pin :</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Placeholder" value="110056">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="lh-1 mb-2">
                                                                            <span class="fw-medium">Address :</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Placeholder" value="k-290 house">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-4 justify-content-end">
                                                                    <ddiv class="col-md-4 text-end">
                                                                        <button class="btn btn-primary font-16 "><i class="ri-save-3-line"></i> Save Change</button>
                                                                    </ddiv>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="tab-pane overflow-hidden" id="socialLinks-pane" role="tabpanel"
                                                            aria-labelledby="socialLinks" tabindex="0">
                                                            <form action="">
                                                                <div class="row gy-3 align-items-center">
                                                                    <div class="col-md-6">
                                                                        <div class="lh-1 mb-2">
                                                                            <span class="fw-medium">Facebook :</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Placeholder" value="Facebook">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="lh-1 mb-2">
                                                                            <span class="fw-medium">Instagram :</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Placeholder" value="instagram">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="lh-1 mb-2">
                                                                            <span class="fw-medium">Twitter :</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Placeholder" value="twitter.com">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="lh-1 mb-2">
                                                                            <span class="fw-medium">Linkedin :</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Placeholder" value="linkedin.com">
                                                                    </div>

                                                                </div>
                                                                <div class="row mt-4 justify-content-end">
                                                                    <ddiv class="col-md-4 text-end">
                                                                        <button class="btn btn-primary font-16 "><i class="ri-save-3-line"></i> Save Change</button>
                                                                    </ddiv>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="Change-tab-pane" role="tabpanel"
                                                aria-labelledby="Change-tab" tabindex="0">
                                                <div class=" p-3">
                                                    <ul class="nav nav-tabs mb-3 tab-style-8 scaleX" id="myTab4" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link gap-2 text-start active d-flex" id="changeEmail" data-bs-toggle="tab"
                                                                data-bs-target="#changeEmail-pane" type="button" role="tab"
                                                                aria-controls="changeEmail-pane" aria-selected="true"> <i class="ri-mail-line font-22"></i>
                                                                <div>
                                                                    <p class="mb-0 font-16 fw-semibold"> Change Email </p>
                                                                    <p class="mb-0 text-muted">Request for change email</p>
                                                                </div>
                                                            </button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link gap-2  text-start d-flex" id="phoneInfo" data-bs-toggle="tab"
                                                                data-bs-target="#phoneInfo-pane" type="button" role="tab"
                                                                aria-controls="phoneInfo-pane" aria-selected="false"><i class="ri-phone-line font-22"></i>
                                                                <div>
                                                                    <p class="mb-0 font-16 fw-semibold">Change Phone </p>
                                                                    <p class="mb-0 text-muted">Request for phone change</p>
                                                                </div>
                                                            </button>
                                                        </li>

                                                    </ul>
                                                    <div class="tab-content" id="myTabContent3">
                                                        <div class="tab-pane show active overflow-hidden" id="changeEmail-pane"
                                                            role="tabpanel" aria-labelledby="changeEmail" tabindex="0">
                                                            <form action="">
                                                                <div class="row gy-3 align-items-center">
                                                                    <div class="col-md-6">
                                                                        <h5>Email Change </h5>
                                                                        <p>Email change request.</p>
                                                                        <p>We sending an otp mail for verify its you. You need to check OTP verification with this email.</p>
                                                                        <p>OTP Session should expire within 1 minutes. If OTP expired you need to resending the OTP</p>

                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="lh-1 mb-2">
                                                                            <span class="fw-medium">Email :</span>
                                                                        </div>
                                                                        <input type="email" class="form-control" placeholder="Placeholder" value="superadmin@gmail.com" disabled>
                                                                    </div>

                                                                </div>
                                                                <div class="row mt-4 justify-content-end">
                                                                    <div class="col-md-4 text-end">
                                                                        <button class="btn btn-primary font-16 "><i class="ri-save-3-line"></i> Send OTP</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>

                                                        <div class="tab-pane overflow-hidden" id="phoneInfo-pane" role="tabpanel"
                                                            aria-labelledby="personalInfo" tabindex="0">
                                                            <form action="">
                                                                <div class="row gy-3 align-items-center">
                                                                    <div class="col-md-6">
                                                                        <h5>Phone Change</h5>
                                                                        <p>Phone change request.</p>
                                                                        <p>We sending an otp mail for verify its you. You need to check OTP verification with this email.</p>
                                                                        <p>OTP Session should expire within 1 minutes. If OTP expired you need to resending the OTP</p>

                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="lh-1 mb-2">
                                                                            <span class="fw-medium">Email :</span>
                                                                        </div>
                                                                        <input type="email" class="form-control" placeholder="Placeholder" value="superadmin@gmail.com" disabled>
                                                                    </div>

                                                                </div>
                                                                <div class="row mt-4 justify-content-end">
                                                                    <div class="col-md-4 text-end">
                                                                        <button class="btn btn-primary font-16 "><i class="ri-save-3-line"></i> Send OTP</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="tab-pane overflow-hidden" id="Address-pane" role="tabpanel"
                                                            aria-labelledby="Address" tabindex="0">
                                                            <form action="">
                                                                <div class="row gy-3 align-items-center">
                                                                    <div class="col-md-6">
                                                                        <div class="lh-1 mb-2">
                                                                            <span class="fw-medium">Country :</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Placeholder" value="India">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="lh-1 mb-2">
                                                                            <span class="fw-medium">State :</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Placeholder" value="Delhi">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="lh-1 mb-2">
                                                                            <span class="fw-medium">City :</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Placeholder" value="Delhi">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="lh-1 mb-2">
                                                                            <span class="fw-medium">Pin :</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Placeholder" value="110056">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="lh-1 mb-2">
                                                                            <span class="fw-medium">Address :</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Placeholder" value="k-290 house">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-4 justify-content-end">
                                                                    <ddiv class="col-md-4 text-end">
                                                                        <button class="btn btn-primary font-16 "><i class="ri-save-3-line"></i> Save Change</button>
                                                                    </ddiv>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="tab-pane overflow-hidden" id="socialLinks-pane" role="tabpanel"
                                                            aria-labelledby="socialLinks" tabindex="0">
                                                            <form action="">
                                                                <div class="row gy-3 align-items-center">
                                                                    <div class="col-md-6">
                                                                        <div class="lh-1 mb-2">
                                                                            <span class="fw-medium">Facebook :</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Placeholder" value="Facebook">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="lh-1 mb-2">
                                                                            <span class="fw-medium">Instagram :</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Placeholder" value="instagram">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="lh-1 mb-2">
                                                                            <span class="fw-medium">Twitter :</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Placeholder" value="twitter.com">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="lh-1 mb-2">
                                                                            <span class="fw-medium">Linkedin :</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Placeholder" value="linkedin.com">
                                                                    </div>

                                                                </div>
                                                                <div class="row mt-4 justify-content-end">
                                                                    <ddiv class="col-md-4 text-end">
                                                                        <button class="btn btn-primary font-16 "><i class="ri-save-3-line"></i> Save Change</button>
                                                                    </ddiv>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-1 -->


    </div>
</div>
<!-- End::app-content -->

<?php include('include/footer.php'); ?>
<script>
    // Password show/hide
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(".toggle-password").forEach(function(toggle) {
            toggle.addEventListener("click", function() {
                let input = this.parentElement.querySelector("input");
                if (input.type === "password") {
                    input.type = "text";
                    this.className = "ri-eye-line"; // Set the class to "ri-eye-line"
                } else {
                    input.type = "password";
                    this.className = "ri-eye-off-line"; // Add another class for the "password hidden" state
                }
            });
        });
    });
</script>