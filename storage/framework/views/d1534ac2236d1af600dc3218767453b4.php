 <?php $__env->startSection('admin'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Update Website</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item">
                            <a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Update About Us Content
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <form action="<?php echo e(route('update.aboutus.details')); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
                                <div class="card-body">
                                  
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">About Us</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <textarea name="aboutus" id="" rows="3" class="form-control"><?php echo e($data->aboutus); ?></textarea>

                                        </div>
                                    </div>
                                 
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Message</h6>

                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <textarea name="message" id="" rows="3" class="form-control"><?php echo e($data->message); ?></textarea>

                                        </div>
                                    </div>
                                  
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="submit" class="btn btn-primary px-4" value="Save Changes" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\new startup\newstartup\resources\views/backend/aboutus/editaboutus.blade.php ENDPATH**/ ?>