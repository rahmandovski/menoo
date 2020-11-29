<div class="container-fluid">
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="update-item row pt-3 pb-3 border-top <?php echo e($ignored ? 'text-muted' : ''); ?>">
            <div class="col-sm-1 pt-2 text-center text-muted">
                <span
                    class="extension-icon rounded"
                    style="<?php echo e($item['icon']['styles'] ?? ''); ?>"
                ><i class="<?php echo e($item['icon']['class'] ?? ''); ?>"></i></span>
            </div>
            <div class="col-sm-2 pl-0 text-truncate">
                <b><?php echo e($item['name']); ?></b>
                <p><?php echo e($item['version']); ?></p>
            </div>
            <div class="description col col-sm-7">
                <?php if(isset($item['tags']['data'][0]) AND $tag = $item['tags']['data'][0]): ?>
                    <?php echo $tag['description']; ?>

                <?php endif; ?>
            </div>
            <div class="col col-sm-2 text-right">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <?php if($ignored): ?>
                        <button
                            class="btn btn-light"
                            type="button"
                            data-control="ignore-item"
                            data-item-code="<?php echo e($item['code']); ?>"
                            data-item-type="<?php echo e($item['type']); ?>"
                            data-item-version="<?php echo e($item['version']); ?>"
                            data-item-action="remove"
                        >
                            <span class="text-success"><?php echo app('translator')->get('admin::lang.text_remove'); ?></span>
                        </button>
                    <?php else: ?>
                        <button
                            class="btn btn-light"
                            type="button"
                            data-control="update-item"
                            data-item-code="<?php echo e($item['code']); ?>"
                            data-item-type="<?php echo e($item['type']); ?>"
                            data-item-version="<?php echo e($item['version']); ?>"
                            data-item-action="ignore"
                        >
                            <span class="text-danger"><?php echo app('translator')->get('system::lang.updates.text_ignore'); ?></span>
                        </button>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /opt/lampp/htdocs/menoo/app/system/views/updates/list_items.blade.php ENDPATH**/ ?>