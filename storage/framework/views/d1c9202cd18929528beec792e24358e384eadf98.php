<?php
$fieldOptions = $field->options();
$checkedValues = (array)$field->value;
?>
<div class="field-checkbox">
    <?php $__empty_1 = true; $__currentLoopData = $fieldOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php
            $checkboxId = 'checkbox_'.$field->getId().'_'.$loop->iteration;
            if (is_string($option)) $option = [$option];
            ?>
            <div
                id="<?php echo e($field->getId()); ?>"
                class="custom-control custom-radio custom-control-inline"
            >
                <input
                    type="checkbox"
                    id="<?php echo e($checkboxId); ?>"
                    class="custom-control-input"
                    name="<?php echo e($field->getName()); ?>[]"
                    value="<?php echo e($value); ?>"
                    <?php echo in_array($value, $checkedValues) ? 'checked="checked"' : ''; ?>

                    <?php echo $this->previewMode ? 'disabled="disabled"' : ''; ?>

                    <?php echo $field->getAttributes(); ?>

                />
                <label
                    class="custom-control-label"
                    for="<?php echo e($checkboxId); ?>"
                ><?php echo e(is_lang_key($option[0]) ? lang($option[0]) : $option[0]); ?></label>
            </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

        <input
            type="hidden"
            name="<?php echo e($field->getName()); ?>"
            value="0"
            <?php echo $this->previewMode ? 'disabled="disabled"' : ''; ?>>

        <div class="custom-control custom-checkbox" tabindex="0">
            <input
                type="checkbox"
                class="custom-control-input"
                id="<?php echo e($field->getId()); ?>"
                name="<?php echo e($field->getName()); ?>"
                value="1"
                <?php echo $this->previewMode ? 'disabled="disabled"' : ''; ?>

                <?php echo $field->value == 1 ? 'checked="checked"' : ''; ?>

                <?php echo $field->getAttributes(); ?>

            />
            <label class="custom-control-label" for="<?php echo e($field->getId()); ?>">
                <?php if($field->placeholder): ?> <?php echo app('translator')->get($field->placeholder); ?> <?php else: ?> &nbsp; <?php endif; ?>
            </label>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /opt/lampp/htdocs/menoo/app/admin/widgets/form/field_checkbox.blade.php ENDPATH**/ ?>