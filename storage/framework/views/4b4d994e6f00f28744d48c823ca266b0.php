<?php
    $footer = App\Models\Footer::find(1);
?>
<footer>
    <div class="foot">
        <div class="qoute">
            <h2 id="he"><?php echo e($footer->footertitle); ?></h2>
            <p>
                <?php echo e($footer->footerpara); ?>

            </p>
        </div>
        <div class="support">
            <h2 id="he">Support</h2>
            <ul>
                <li><a href="<?php echo e($footer->fb); ?>">Facebook</a></li>
                <li><a href="<?php echo e($footer->ig); ?>">Instagram</a>
                </li>
                <li><a href="<?php echo e($footer->privacy); ?>">Privacy Policy</a></li>
                <li><a href="tel:<?php echo e($footer->phone); ?>">Contact us</a></li>
            </ul>
        </div>
        <div class="address">
            <h2 id="he">Address</h2>
            <p>
                <span id="bold">Address :</span> <?php echo e($footer->address); ?>

            </p>
            <p><span id="bold">Email :</span> <?php echo e($footer->email); ?> </p>
            <p><span id="bold">Phone :</span> <?php echo e($footer->phone); ?></p>
            <p><span id="bold">Alternate Phone :</span> <?php echo e($footer->alphone); ?></p>
        </div>
    </div>
    <div class="copy">
        <p>Copyright © 2024. All right reserved</p>
        <p>Developed by <a href="https://api.whatsapp.com/send?phone=916006801960">Irycodes</a> </p>
    </div>
</footer>
<?php /**PATH C:\xampp\htdocs\new startup\newstartup\resources\views/frontend/body/footer.blade.php ENDPATH**/ ?>