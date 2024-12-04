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
                <h1 class="page-title fw-medium fs-18 mb-0">Edit New Course</h1>
            </div>

        </div>
        <!-- Page Header Close -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                          Add New Courses
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row gy-4">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <label for="CourseName" class="form-label">Course Name</label>
                                <input type="text" class="form-control" id="CourseName" value="Online Foundation Module for Financial Markets">
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <label for="CourseCategory" class="form-label">Course Category</label>                               
                                <select class="form-control frm-select" data-trigger name="choices-single-default" id="choices-single-default">
                                    <option value="">Select Category</option>
                                    <option value="Choice 1" selected>Currency</option>
                                    <option value="Choice 2">Cryto</option>
                                    <option value="Choice 3">Stock</option>
                                </select>
                            </div>       
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <label for="CourseMode" class="form-label">Course Mode</label>
                                <input type="text" class="form-control" id="CourseMode" value="Online">
                            </div>      
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <label for="CourseAuthor" class="form-label">Course Author</label>
                                <input type="text" class="form-control" id="CourseAuthor" value="FXCareers">
                            </div>          
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <label for="CourseAuthor" class="form-label">Course Language</label>
                                <select class="form-control frm-select" data-trigger name="choices-single-default" id="choices-single-default">
                                    <option value="">Select Language</option>
                                    <option value="Choice 1" selected>Hindi</option>
                                    <option value="Choice 2">English</option>
                                    
                                </select>
                            </div>  
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">                            
                                <label for="formFile" class="form-label">Course Featured Image</label>
                                <input class="form-control" type="file" id="formFile">                                 
                            </div>  
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <label for="CourseLessons" class="form-label">Course Lessons</label>
                                <input type="text" class="form-control" id="CourseLessons" value="20">
                            </div>      
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <label for="Course Status" class="form-label">Course Status</label>
                                <input type="text" class="form-control" id="CourseStatus" value="Active">
                            </div>   
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <label for="CoursePrice" class="form-label">Course Price</label>
                                <input type="text" class="form-control" id="CoursePrice" value="19,999">
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <label for="CourseDuration" class="form-label">Course Duration</label>
                                <input type="text" class="form-control" id="CourseDuration" value="1 Week">
                            </div>     
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <label for="SeoTitle" class="form-label">SEO Title</label>
                                <input type="text" class="form-control" id="SeoTitle" value="Online Foundation Module for Financial Markets">
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <label for="CourseDuration" class="form-label">SEO Keywords</label>
                                <input type="text" class="form-control" id="" value="Financial Market, Online Financial Market Course ">
                            </div>    
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="CourseDuration" class="form-label">SEO Description</label>
                                <textarea class="form-control" id="text-area" rows="3"  placeholder="Master the financial markets in the foundation module. This online Financial Market course covers exchanges, demat accounts, strategies, and derivatives"></textarea>
                            </div>  
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="CourseDuration" class="form-label">Course Short Description </label>
                                <textarea class="form-control" id="text-area" rows="3" placeholder="The foundation module of the Online Financial Market Course offers an in-depth introduction to financial markets. This module covers key topics such as exchanges, demat accounts, and brokerage options. Learn the differences between trading and investing, explore market capitalization and indices, and understand market pricing mechanisms."></textarea>
                            </div>  
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <label for="CourseDuration" class="form-label">Course Long Description </label>
                                <div id="editor">
                                        <h4><b class="ql-size-large">Quill Snow</b> is a free, open source <a href="https://github.com/quilljs/quill/" target="_blank">Quill Editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/" target="_blank">modular architecture</a> and expressive API, it is completely customizable to fit any need.</h4>
                                        <p><br></p>
                                        <ol>
                                            <li class="ql-size-normal">Write text select and edit with multiple options.</li>
                                            <li class="">This is quill snow editor.</li>
                                            <li class="">Easy to customize and flexible.</li>
                                        </ol>
                                        <p><br></p>
                                        <h4>Quill officially supports a standard toolbar theme <a href="https://github.com/quilljs/quill/" target="_blank">"Snow"</a> and a floating tooltip theme <a href="https://github.com/quilljs/quill/" target="_blank">"Bubble"</a></h4>
                                </div>
                            </div>                             
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include('include/footer.php'); ?>