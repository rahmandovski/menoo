<div class="row-fluid">
    <?php echo form_open([
        'id' => 'edit-form',
        'role' => 'form',
        'method' => 'PATCH',
    ]); ?>


    <?php echo $this->renderForm(); ?>


    <?php echo form_close(); ?>

</div>
<?php /**PATH /opt/lampp/htdocs/menoo/extensions/igniter/api/views/resources/edit.blade.php ENDPATH**/ ?>