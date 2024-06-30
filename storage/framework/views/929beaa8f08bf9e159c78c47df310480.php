
<?php $__env->startSection('admin'); ?>
    
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3"> List</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                    </ol>
                </nav>
            </div>
           
        </div>

        <h6 class="mb-0 text-uppercase">Data of All Contact Messages</h6>
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>S No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Adult</th>
                                <th>Child</th>
                                <th>Message</th>
                                <th>Person</th>
                                <th> Pick-up City</th>
                                <th>Date</th>

                                <th>Time</th>
                                <th>Travel Type</th>

                            </tr>

                        </thead>
                        <tbody>
                           
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($key + 1); ?></td>
                                    <td>
                                        <?php echo e($item->name); ?>

                                    </td>
                                    <td><?php echo e($item->email); ?></td>
                                    <td><?php echo e($item->phone); ?></td>
                                  
  
                                    <td><?php echo e($item->adult); ?></td>
                                    <td><?php echo e($item->child); ?></td>
                                    <td><?php echo e($item->message); ?></td>
                                    <td><?php echo e($item->persons); ?></td>
                                    <td><?php echo e($item->pickupcity); ?></td>
                                    <td><?php echo e($item->pickupdate); ?></td>
                                    <td><?php echo e($item->pickuptime); ?></td>
                                    <td><?php echo e($item->traveltype); ?></td>


                                   
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\new startup\newstartup\resources\views/backend/contact/list.blade.php ENDPATH**/ ?>