<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!--favicon-->
    <!--plugins-->
    <link href="<?php echo e(asset('backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('backend/assets/plugins/simplebar/css/simplebar.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('backend/assets/plugins/metismenu/css/metisMenu.min.css')); ?>" rel="stylesheet" />
    <!-- loader-->
    <link href="<?php echo e(asset('backend/assets/css/pace.min.css')); ?>" rel="stylesheet" />
    <script src="<?php echo e(asset('backend/assets/js/pace.min.js')); ?>"></script>
    <!-- Bootstrap CSS -->
    <link href="<?php echo e(asset('backend/assets/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('backend/assets/css/bootstrap-extended.css')); ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="<?php echo e(asset('backend/assets/css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('backend/assets/css/icons.css')); ?>" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/dark-theme.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/semi-dark.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/header-colors.css')); ?>" />
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    
    
    <link href="<?php echo e(asset('backend/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet')); ?>" />
    

    <title>Dashboard </title>
</head>

<body>
    <div class="wrapper">

        <?php echo $__env->make('admin.body.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('admin.body.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="page-wrapper">

            <?php echo $__env->yieldContent('admin'); ?>

        </div>
        <div class="overlay toggle-icon"></div>

        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>

        <?php echo $__env->make('admin.body.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <script src="<?php echo e(asset('backend/assets/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/plugins/simplebar/js/simplebar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/plugins/metismenu/js/metisMenu.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/plugins/chartjs/js/chart.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/js/index.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/js/app.js')); ?>"></script>
    <script>
        new PerfectScrollbar(".app-container")
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="<?php echo e(asset('backend/assets/js/code.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/js/validate.min.js')); ?>"></script>



    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        <?php if(Session::has('message')): ?>
            var type = "<?php echo e(Session::get('alert-type', 'info')); ?>"
            switch (type) {
                case 'info':
                    toastr.info(" <?php echo e(Session::get('message')); ?> ");
                    break;

                case 'success':
                    toastr.success(" <?php echo e(Session::get('message')); ?> ");
                    break;

                case 'warning':
                    toastr.warning(" <?php echo e(Session::get('message')); ?> ");
                    break;

                case 'error':
                    toastr.error(" <?php echo e(Session::get('message')); ?> ");
                    break;
            }
        <?php endif; ?>
    </script>
    
    

    <script src="<?php echo e(asset('backend/assets/plugins/datatable/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

    

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
            plugins: 'powerpaste advcode table lists checklist',
            toolbar: 'undo redo | blocks| bold italic | bullist numlist checklist | code | table'
        });
    </script>
</body>

</html><?php /**PATH C:\xampp\htdocs\new startup\newstartup\resources\views/admin/admin_dashboard.blade.php ENDPATH**/ ?>