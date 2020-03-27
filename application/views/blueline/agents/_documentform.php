<link rel="stylesheet" href="<?=base_url()?>assets/blueline/css/plugins/upload/upload.css" />
<script src="<?=base_url()?>assets/blueline/js/plugins/upload/upload.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/blueline/js/plugins/upload/core.js" type="text/javascript"></script>
<?php
$attributes = [ 'class' => '', 'id' => 'document_form' ];
echo form_open_multipart( $form_action, $attributes );
?>

<div class="form-group">
    <label for="username"><?= $this->lang->line( 'application_document_name' ); ?>
        *</label>
    <input id="document_name" type="text" name="document_name"
           class="required form-control"
           value="" required/>
</div>

<div class="upload"></div>
<div class="modal-footer">
    <input type="submit" name="send" class="btn btn-primary"
           value="<?= $this->lang->line( 'application_save' ); ?>"/>
    <a class="btn"
       data-dismiss="modal"><?= $this->lang->line( 'application_close' ); ?></a>
</div>

