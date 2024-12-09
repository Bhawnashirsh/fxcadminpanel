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
                        <li class="breadcrumb-item active" aria-current="page">Mentors</li>
                    </ol>
                </nav>
                <h1 class="page-title fw-medium fs-18 mb-0">Mentor Profile</h1>
            </div>
            <div class="btn-list">
                <a href="add-course.php" class="btn btn-primary btn-wave me-0">
                    <i class="ri-menu-add-line  me-1"></i> Add New Course
                </a>
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
                                                    aria-controls="profile-about-tab-pane" aria-selected="true">About</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link w-100 text-start" id="edit-profile-tab" data-bs-toggle="tab"
                                                    data-bs-target="#edit-profile-tab-pane" type="button" role="tab"
                                                    aria-controls="edit-profile-tab-pane" aria-selected="true">Edit Profile</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link w-100 text-start" id="mentorCourses" data-bs-toggle="tab"
                                                    data-bs-target="#mentorCourses-pane" type="button" role="tab"
                                                    aria-controls="mentorCourses-pane" aria-selected="false">Courses</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link w-100 text-start" id="batches" data-bs-toggle="tab"
                                                    data-bs-target="#batches-pane" type="button" role="tab"
                                                    aria-controls="batches-pane" aria-selected="false">Batches</button>
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
                                                <ul class="list-group list-group-flush border rounded-3">
                                                    <li class="list-group-item p-3">
                                                        <span class="fw-medium fs-15 d-block mb-3">Personal Info :</span>
                                                        <div class="row gy-3 align-items-center">
                                                            <div class="col-xl-3">
                                                                <div class="lh-1">
                                                                    <span class="fw-medium">User Name :</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-9">
                                                                <input type="text" class="form-control" placeholder="Placeholder" value="Spencer Robin">
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <div class="lh-1">
                                                                    <span class="fw-medium">First Name :</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-9">
                                                                <input type="text" class="form-control" placeholder="Placeholder" value="Spencer">
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <div class="lh-1">
                                                                    <span class="fw-medium">Last Name :</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-9">
                                                                <input type="text" class="form-control" placeholder="Placeholder" value="Robin">
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <div class="lh-1">
                                                                    <span class="fw-medium">Designation :</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-9">
                                                                <input type="text" class="form-control" placeholder="Placeholder" value="Software Development Manager">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-3">
                                                        <span class="fw-medium fs-15 d-block mb-3">Contact Info :</span>
                                                        <div class="row gy-3 align-items-center">
                                                            <div class="col-xl-3">
                                                                <div class="lh-1">
                                                                    <span class="fw-medium">Email :</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-9">
                                                                <input type="email" class="form-control" placeholder="Placeholder" value="spencer.robin22@example.com">
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <div class="lh-1">
                                                                    <span class="fw-medium">Phone :</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-9">
                                                                <input type="text" class="form-control" placeholder="Placeholder" value="+1 (222) 111 - 57840">
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <div class="lh-1">
                                                                    <span class="fw-medium">Website :</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-9">
                                                                <input type="text" class="form-control" placeholder="Placeholder" value="www.yourwebsite.com">
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <div class="lh-1">
                                                                    <span class="fw-medium">Location :</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-9">
                                                                <input type="text" class="form-control" placeholder="Placeholder" value="City, Country">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-3">
                                                        <span class="fw-medium fs-15 d-block mb-3">Social Info :</span>
                                                        <div class="row gy-3 align-items-center">

                                                            <div class="col-xl-3">
                                                                <div class="lh-1">
                                                                    <span class="fw-medium">Twitter :</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-9">
                                                                <input type="text" class="form-control" placeholder="Placeholder" value="twitter.com/spruko.html">
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <div class="lh-1">
                                                                    <span class="fw-medium">Linkedin :</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-9">
                                                                <input type="text" class="form-control" placeholder="Placeholder" value="linkedin.com/in/spruko">
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <div class="lh-1">
                                                                    <span class="fw-medium">Portfolio :</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-9">
                                                                <input type="text" class="form-control" placeholder="Placeholder" value="spruko.com/">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-3">
                                                        <span class="fw-medium fs-15 d-block mb-3">About Info :</span>
                                                        <div class="row gy-3 align-items-center">
                                                            <div class="col-xl-3">
                                                                <div class="lh-1">
                                                                    <span class="fw-medium">Biographical Info :</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-9">
                                                                <textarea class="form-control" id="text-area" rows="4">Hello, I'm [Your Name], a dedicated [Your Profession/Interest] based in [Your Location]. I have a genuine passion for [Your Hobbies/Interests] and enjoy delving into the nuances of [Your Industry/Field]. Specializing in [Your Specialization/Area of Expertise], I strive to infuse innovation into every project I undertake. With a track record of [Key Achievements] and valuable experiences, I'm committed to continual growth and eagerly anticipate the opportunities that lie ahead.
                                                        </textarea>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-3">
                                                        <span class="fw-medium fs-15 d-block mb-3">SKILLS :</span>
                                                        <div class="row gy-3 align-items-center">
                                                            <div class="col-xl-3">
                                                                <div class="lh-1">
                                                                    <span class="fw-medium">skills :</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-9 pb-4">
                                                                <input class="form-control" id="choices-text-preset-values" type="text" value="Leadership, Project Management, Technical Proficiency, Communication, Team Building, Problem-Solving, Strategic Thinking, Decision Making, Adaptability, Stakeholder Management, Conflict Resolution, Continuous Improvement" placeholder="This is a placeholder">
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane" id="mentorCourses-pane" role="tabpanel"
                                                aria-labelledby="mentorCourses" tabindex="0">
                                                <div class="row">
                                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                                        <div class="card custom-card">
                                                            <a href="javascript:void(0);" class="card-anchor"></a>
                                                            <img src="assets/images/courses/bannercourse.jpg" class="card-img-top" alt="...">
                                                            <div class="card-body">
                                                                <h6 class="card-title fw-medium">Most tropical areas are suitable</h6>
                                                                <p class="card-text line-clamp-2"> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                                        <div class="card custom-card">
                                                            <a href="javascript:void(0);" class="card-anchor"></a>
                                                            <img src="assets/images/courses/bannercourse.jpg" class="card-img-top" alt="...">
                                                            <div class="card-body">
                                                                <h6 class="card-title fw-medium line-clamp-2">Most tropical areas are suitable</h6>
                                                                <p class="card-text line-clamp-2"> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                                        <div class="card custom-card">
                                                            <a href="javascript:void(0);" class="card-anchor"></a>
                                                            <img src="assets/images/courses/bannercourse.jpg" class="card-img-top" alt="...">
                                                            <div class="card-body">
                                                                <h6 class="card-title fw-medium line-clamp-2">Most tropical areas are suitable</h6>
                                                                <p class="card-text  line-clamp-2"> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="tab-pane p-0 border-0" id="batches-pane" role="tabpanel"
                                                aria-labelledby="batches" tabindex="0">

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
        <?php include('include/footer.php'); ?>