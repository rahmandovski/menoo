
<div class="container">
    <div class="row py-4">
        <div class="col col-sm-6 m-auto">
            <div class="cart-buttons">
                <a
                    class="btn btn-link btn-block btn-md"
                    href="<?php echo e(restaurant_url('local/menus')); ?>"
                >Add more items</a>
            </div>

            <?php echo controller()->renderPartial('cartBox::container'); ?>
        </div>
    </div>
</div>
