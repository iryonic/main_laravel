<?php
    $content = App\Models\Homepage::find(1);
?>
<?php
    $package = App\Models\PackageDetail::latest()->limit(2)->get();
    $days = App\Models\itinerary::latest()->get();
    $content = App\Models\Homepage::find(1);
?>
<section id="pakages">
    <h2 id="pkhead"><?php echo e($content->bestpackheading); ?></h2>
    <p id="pkpara">
        <?php echo e($content->bestpackpara); ?>

    </p>
    <div class="pkwrap">
        <?php $__currentLoopData = $package; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="pakage" id="pakage3">
                <div class="pkimg"><img src="<?php echo e(asset('upload/packageimage/' . $item->image)); ?>" alt="" /></div>
                <div class="pktitle"><?php echo e($item['type']['name']); ?></div>
                <div class="pkdetails">
                    <?php echo e($item->title); ?>

                </div>
                <div class="pkfoot">
                    <div class="pkprice">₹ <?php echo e($item->price); ?></div>
                    <button class="pkmoredetails">
                        <a href="<?php echo e(url('package/details/' . $item->id)); ?>">Details</a>
                    </button>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



    </div>

    <button class="veiwall">
        <a class="btn" href="<?php echo e(route('all.packages')); ?>">View All Packages</a>
    </button>
</section>
<?php /**PATH C:\xampp\htdocs\new startup\newstartup\resources\views/frontend/packages/package.blade.php ENDPATH**/ ?>