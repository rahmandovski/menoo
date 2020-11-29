<?php echo form_open($__SELF__->getFormAction(), [
    'id' => 'picker-form',
    'role' => 'form',
    'method' => 'GET',
]); ?>

<input type="hidden" name="picker_step" value="2">
<input type="hidden" name="location" value="<?php echo e(optional($__SELF__->location)->getKey()); ?>">

<input type="hidden" name="picker_form" value="1">

<div class="form-row">
    <div class="col-sm-3 mb-3">
        <label class="sr-only" for="location">
            <?php echo app('translator')->get('igniter.reservation::default.label_location'); ?>
        </label>
        <select
                name="location"
                id="location"
                class="form-control"
        >
            <?php foreach ($__SELF__->getLocations() as $key => $value) { ?>
            <option
                    value="<?php echo e($key); ?>"
                    <?php echo set_select('location', $key); ?>

            ><?php echo e($value); ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="col-sm-2 mb-3">
        <label class="sr-only" for="noOfGuests">
            <?php echo app('translator')->get('igniter.reservation::default.label_guest_num'); ?>
        </label>
        <select
                name="guest"
                id="noOfGuests"
                class="form-control"
        >
            <?php foreach ($__SELF__->getGuestSizeOptions() as $key => $value) { ?>
            <option
                    value="<?php echo e($key); ?>"
                    <?php echo set_select('guest', $key); ?>

            ><?php echo e($value); ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="col-sm-3 mb-3">
        <label class="sr-only" for="date">
            <?php echo app('translator')->get('igniter.reservation::default.label_date'); ?>
        </label>
        <select
                name="date"
                id="date"
                class="form-control"
        >
            <?php foreach ($__SELF__->getDatePickerOptions() as $date) { ?>
            <option
                    value="<?php echo e($date->format('Y-m-d')); ?>"
                    <?php echo set_select('date', $date->format('Y-m-d')); ?>

            ><?php echo e($date->isoFormat($bookingDateFormat)); ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="col-sm-2 mb-3">
        <label class="sr-only" for="time">
            <?php echo app('translator')->get('igniter.reservation::default.label_time'); ?>
        </label>
        <select
                name="time"
                id="time"
                class="form-control"
        >
            <?php foreach ($__SELF__->getTimePickerOptions() as $key => $value) { ?>
            <option
                    value="<?php echo e($key); ?>"
                    <?php echo set_select('time', $key); ?>

            ><?php echo e($value); ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="col-sm-2 mb-3">
        <button
                type="submit"
                class="btn btn-primary btn-block"
        ><?php echo app('translator')->get('igniter.reservation::default.button_find_table'); ?></button>
    </div>
</div>
<div class="form-row">
    <div class="col">
        <?php echo form_error('location', '<span class="help-block text-danger">', '</span>'); ?>

        <?php echo form_error('guest', '<span class="help-block text-danger">', '</span>'); ?>

        <?php echo form_error('date', '<span class="help-block text-danger">', '</span>'); ?>

        <?php echo form_error('time', '<span class="help-block text-danger">', '</span>'); ?>

    </div>
</div>

<?php echo form_close(); ?>

