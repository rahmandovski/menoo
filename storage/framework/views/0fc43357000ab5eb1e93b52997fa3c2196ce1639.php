<div class="row-fluid">
    <?php echo form_open(current_url(),
        [
            'id'     => 'edit-form',
            'role'   => 'form',
            'method' => 'POST',
        ]
    ); ?>


    <?php echo $this->renderForm(); ?>


    <?php echo form_close(); ?>

</div>
<?php /**PATH /opt/lampp/htdocs/menoo/app/system/views/currencies/create.blade.php ENDPATH**/ ?>