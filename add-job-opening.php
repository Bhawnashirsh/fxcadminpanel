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
                        <li class="breadcrumb-item active" aria-current="page">Careers</li>
                    </ol>
                </nav>
                <h1 class="page-title fw-medium fs-18 mb-0">Add Job Opening</h1>
            </div>

        </div>
        <!-- Page Header Close -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                        Add Job Opening
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row gy-4"> 
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <label for="JobTitle" class="form-label">Job Title</label>
                                <input type="text" class="form-control" id="JobTitle">
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <label for="JobLocation" class="form-label">Location</label>
                                <input type="text" class="form-control" id="JobLocation">
                            </div>    
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <label for="HigherEducation" class="form-label">Higher Education</label>
                                <input type="text" class="form-control" id="HigherEducation">
                            </div>    
                             
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <label for="JobDescription" class="form-label">Job Long Description </label>
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
                              
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            
                                <button type="submit" class="btn btn-primary fs-6 ">
                                Save 
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