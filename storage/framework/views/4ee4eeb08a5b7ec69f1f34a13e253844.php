<div id="local-box">
    <div class="panel local-search">
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-<?php echo e($hideSearch ? '12' : '4'); ?> mb-3 mb-sm-0">
                    <div id="local-timeslot">
                        <?php echo controller()->renderPartial('@timeslot'); ?>
                    </div>
                </div>
                <?php if(!$hideSearch): ?>
                    <div class="col-sm-8">
                        <?php echo controller()->renderPartial('@searchbar'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php if($location->requiresUserPosition()
                AND $location->userPosition()->hasCoordinates()
                AND !$location->checkDeliveryCoverage()): ?>
                <span class="help-block"><?php echo app('translator')->get('igniter.local::default.text_delivery_coverage'); ?></span>
            <?php endif; ?>
        </div>
    </div>

    <?php echo controller()->renderPartial($__SELF__.'::default'); ?>
</div>
