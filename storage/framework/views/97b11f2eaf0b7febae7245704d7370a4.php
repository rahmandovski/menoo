<?php $__currentLoopData = $optionValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $optionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div
        class="custom-control custom-checkbox"
    >
        <input
            type="checkbox"
            class="custom-control-input"
            id="menuOptionCheck<?php echo e($menuOptionValueId = $optionValue->menu_option_value_id); ?>"
            name="menu_options[<?php echo e($index); ?>][option_values][]"
            value="<?php echo e($optionValue->menu_option_value_id); ?>"
            data-option-price="<?php echo e($optionValue->price); ?>"
            <?php if(($cartItem AND $cartItem->hasOptionValue($menuOptionValueId)) OR $optionValue->isDefault()): ?>
            checked="checked"
            <?php endif; ?>
        >
        <label
            class="custom-control-label w-100"
            for="menuOptionCheck<?php echo e($menuOptionValueId); ?>"
        >
            <?php echo $optionValue->name; ?>

            <?php if($optionValue->price > 0 || !$hideZeroOptionPrices): ?>
                <span class="pull-right"><?php echo app('translator')->get('main::lang.text_plus'); ?><?php echo e(currency_format($optionValue->price)); ?></span>
            <?php endif; ?>
        </label>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

