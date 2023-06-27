<?php
/*
  type: layout
  name: Skin-2
  description: Skin-2
*/
?>


<form class="mw_form" data-form-id="<?php print $form_id ?>" name="<?php print $form_id ?>" method="post">
    <div class="message-sent" id="msg<?php print $form_id ?>" style="display: none">
        <span class="message-sent-icon"></span>
        <p class="text-success"><?php _lang("Your Email was sent successfully", 'template/big'); ?></p>
    </div>

    <module type="custom_fields" for-id="<?php print $params['id'] ?>" data-for="module"
            default-fields="Email[type=email,field_size=12,show_placeholder=true], Country[type=dropdown,field_size=12,show_placeholder=true]" input_class="form-control"/>

    <?php if ($require_terms && $require_terms_when == 'b'): ?>
        <module type="users/terms" data-for="contact_form_default"/>
    <?php endif; ?>

    <module type="btn" button_action="submit" button_style="btn-primary" button_size="btn-block w-100 justify-content-center" button_text="<?php _lang("Send", 'template/big'); ?>"/>
</form>
