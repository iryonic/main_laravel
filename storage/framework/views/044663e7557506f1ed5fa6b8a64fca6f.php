
<?php $__env->startSection('main'); ?>
    <?php
        $content = App\Models\Homepage::find(1);
    ?>

    <div class="mainbody">
        <img src="<?php echo e(asset($content->homeimage)); ?>" autoplay muted loop preload class="vid"></img>
        <div class="outer">
            <div class="right">
                <h1>
                    <?php echo e($content->headertext); ?>

                </h1>

                <p>
                    <?php echo e($content->headerparagraph); ?>

                </p>
                <br />
                <button class="explore"><a href="#why">Explore</a></button>
                <button class="whatsp">
                    <a href="    <?php echo e($content->whatsappnumber); ?>"><i class="fa-brands fa-whatsapp" target="_blank"></i>
                        &nbsp;Whatsapp</a>
                </button>
            </div>
            <form id="myForm" action="<?php echo e(route('get.data')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="left">

                    <input type="text" id="name" name="name" placeholder="Enter Name" required />

                    <input type="email" id="email" name="email" placeholder="Enter Email" required />

                    <input type="text" id="phone" name="phone" placeholder="Enter Phone no." required />
                    <button id="send" type="submit">Send now</button>
                </div>
            </form>
        </div>
    </div>

    <section id="explore" class="preabout">
        <div class="ot">
            <h1 id="why">Why Choose Us ?</h1>
        </div>

        <div class="outside">
            <div class="inone">
                <p>
                    <?php echo e($content->whychooseusdescription); ?>

                </p>
                <a href="<?php echo e(route('aboutus')); ?>" id="lmore">learn more <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="intwo">
                <img src="<?php echo e(asset($content->whychooseusimage)); ?>" alt="img" />
            </div>
        </div>

        <div class="cards">
            <div class="cardone">
                <div class="iconarea"><i class="ri-price-tag-3-fill"></i></div>
                <div class="cardinfo">
                    <span id="cardhead"> <?php echo e($content->servicetitleone); ?></span><br /> <?php echo e($content->serviceparaone); ?>

                </div>
            </div>
            <div class="cardtwo">
                <div class="iconarea"><i class="fa-solid fa-hotel"></i></div>
                <div class="cardinfo">
                    <span id="cardhead"> <?php echo e($content->servicetitltwo); ?></span><br /> <?php echo e($content->serviceparatwo); ?>

                </div>
            </div>
            <div class="cardthree">
                <div class="iconarea">
                    <i class="ri-service-fill"> </i>
                </div>
                <div class="cardinfo">
                    <span id="cardhead"><?php echo e($content->servicetitlethree); ?></span><br /> <?php echo e($content->serviceparathree); ?>

                </div>
            </div>
        </div>
    </section>

    <hr />
    <!--    DESTINATION SECTION -->
    <section id="destinations">
        <div class="title">
            <?php echo e($content->thirdheading); ?>

        </div>
        <div class="summary">
            <?php echo e($content->thirdparagrapgh); ?>

        </div>
        <div class="corousel">
            <div class="caroitem">
                <img src="<?php echo e(asset('frontend/assets/z2.jpg')); ?>" alt="image" class="caroimg" />
            </div>
            <div class="caroitem">
                <img src="<?php echo e(asset('frontend/assets/z6.jpg')); ?>" alt="image" class="caroimg" />
            </div>
            <div class="caroitem">
                <img src="<?php echo e(asset('frontend/assets/z3.jpg')); ?>" alt="image" class="caroimg" />
            </div>
            <div class="caroitem">
                <img src="<?php echo e(asset('frontend/assets/z7.jpg')); ?>" alt="image" class="caroimg" />
            </div>
        </div>
    </section>

    <!--                 PAKAGES SECTION                   -->

    <?php echo $__env->make('frontend.packages.package', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\new startup\newstartup\resources\views/frontend/index.blade.php ENDPATH**/ ?>