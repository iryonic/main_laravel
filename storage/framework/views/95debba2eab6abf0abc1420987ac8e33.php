
<?php $__env->startSection('main'); ?>
    <?php
        $days = App\Models\itinerary::latest()->get();
        $daynumber = 0;
        $content = App\Models\Homepage::find(1);
    ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords"
        content="zubi tours, zubi tours and travels , zubi tours and holiday kashmir , 
  tour and travel company , zubi travel, zubitours.com" />

    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/pkdetstyle.css')); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css"
        integrity="sha512-OQDNdI5rpnZ0BRhhJc+btbbtnxaj+LdQFeh0V9/igiEPDiWE2fG+ZsXl0JEH+bjXKPJ3zcXqNyP4/F/NegVdZg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <section class="info">
        <img src="<?php echo e(url('/upload/packageimage/' . $packageDetail->image)); ?>" alt="img" id="bgimg" />

        <div class="packouter">
            <div class="pkname"></div>
            <?php echo e($packageDetail->title); ?>

            <?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($day->packagetype_id == $packageDetail->id): ?>
                    <?php
                        $daynumber++;
                    ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="pkduration"> <?php echo e($daynumber - 1); ?> Nights / <?php echo e($daynumber); ?> Days</div>
            <h5 style="text-align: center">₹ <?php echo e($packageDetail->price); ?></h5>
        </div>
    </section>

    <div class="pkinfo" id="Summary">
        <div class="head">Summary</div>
        <div class="content">
            <?php echo e($packageDetail->short_desc); ?>

        </div>
    </div>
    <?php $__currentLoopData = $itinerary; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="pkinfo" id="day1">
            <div class="head"><?php echo e($item->title); ?></div>
            <h4> <?php echo e($item->from_destination); ?> | <?php echo e($item->to_destination); ?></h4>
            <div class="content">
                <?php echo e($item->description); ?>

            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="inclusions">
        <h2>Inclusions:-</h2>
        <ul>
            <p><?php echo str_replace(',', '<br>', $packageDetail->inclusions); ?></p>

        </ul>
    </div>

    <div class="exclusions">
        <h2>Exclusions:-</h2>
        <ul>
            <p><?php echo str_replace(',', '<br>', $packageDetail->exclusions); ?></p>


        </ul>
    </div>
    <div class="button">
        <button id="bookbtn">
            <a href="<?php echo e(route('contact.us')); ?>" target="_blank">
                Book now <i class="ri-bookmark-line"></i></a>
        </button>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\new startup\newstartup\resources\views/frontend/package/package_detail.blade.php ENDPATH**/ ?>