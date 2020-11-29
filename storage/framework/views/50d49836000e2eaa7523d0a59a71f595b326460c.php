<div id="list-items">
    <div class="panel panel-light">
        <?php
            $countItems = count($updates['items']);
            $countIgnored = count($updates['ignoredItems']);
        ?>
        <?php if($countItems): ?>
            <div class="panel-heading">
                <i class="fa fa-cloud-download fa-fw"></i>&nbsp;&nbsp;
                <?php echo e(sprintf(lang('system::lang.updates.text_update_found'), $countItems)); ?>

            </div>

            <div class="panel-body"><?php echo app('translator')->get('system::lang.updates.text_maintenance_mode'); ?></div>

            <?php echo $this->makePartial('updates/list_items', ['items' => $updates['items'], 'ignored' => FALSE]); ?>

        <?php endif; ?>

        <?php if($countIgnored): ?>
            <div class="panel-heading">
                <i class="fa fa-times-circle fa-fw"></i>&nbsp;&nbsp;
                <?php echo e(sprintf(lang('system::lang.updates.text_update_ignored'), $countIgnored)); ?>

            </div>

            <?php echo $this->makePartial('updates/list_items', ['items' => $updates['ignoredItems'], 'ignored' => TRUE]); ?>

        <?php endif; ?>

    </div>
</div>
<?php /**PATH /opt/lampp/htdocs/menoo/app/system/views/updates/list.blade.php ENDPATH**/ ?>