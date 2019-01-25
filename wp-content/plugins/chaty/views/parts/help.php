<div class="chaty-help-form">
    <form action="<?php echo admin_url( 'admin-ajax.php' ) ?>" method="post" id="chaty-help-form">
        <div class="chaty-help-header">
            <b>Gal Dubinski</b> Co-Founder at Premio
        </div>
        <div class="chaty-help-content">
            <p><?php echo __("Hello! Are you experiencing any problems with Chaty? Please let me know :)", CHT_OPT) ?></p>
            <div class="chaty-form-field">
                <input type="text" name="user_email" id="user_email" placeholder="<?php echo __("Email", CHT_OPT) ?>">
            </div>
            <div class="chaty-form-field">
                <textarea type="text" name="textarea_text" id="textarea_text" placeholder="<?php echo __("How can I help you?", CHT_OPT) ?>"></textarea>
            </div>
            <div class="form-button">
                <button type="submit" class="chaty-help-button" ><?php echo __("Chat") ?></button>
                <input type="hidden" name="action" value="wcp_admin_send_message_to_owner"  >
            </div>
        </div>
    </form>
</div>
<div class="chaty-help-btn">
    <a class="chaty-help-tooltip" href="javascript:;"><img src="<?php echo CHT_PLUGIN_URL ?>assets/images/owner.png" alt="<?php echo __("Need help?", CHT_OPT) ?>"  /></a>
    <span class="tooltiptext"><?php echo __("Need help?", CHT_OPT) ?></span>
</div>
<script>
    jQuery(document).ready(function(){
        jQuery("#chaty-help-form").submit(function(){
            jQuery(".chaty-help-button").attr("disabled",true);
            jQuery(".chaty-help-button").text("<?php echo __("Sending Request...") ?>");
            formData = jQuery(this).serialize();
            jQuery.ajax({
                url: "<?php echo admin_url( 'admin-ajax.php' ) ?>",
                data: formData,
                type: "post",
                success: function(responseText){
                    jQuery("#chaty-help-form").find(".error-message").remove();
                    jQuery("#chaty-help-form").find(".input-error").removeClass("input-error");
                    responseText = responseText.slice(0, - 1);
                    responseArray = jQuery.parseJSON(responseText);
                    if(responseArray.error == 1) {
                        jQuery(".chaty-help-button").attr("disabled",false);
                        jQuery(".chaty-help-button").text("<?php echo __("Chat", CHT_OPT) ?>");
                        for(i=0;i<responseArray.errors.length;i++) {
                            jQuery("#"+responseArray.errors[i]['key']).addClass("input-error");
                            jQuery("#"+responseArray.errors[i]['key']).after('<span class="error-message">'+responseArray.errors[i]['message']+'</span>');
                        }
                    } else if(responseArray.status == 1) {
                        jQuery(".chaty-help-button").text("<?php echo __("Done!", CHT_OPT) ?>");
                        setTimeout(function(){
                            jQuery(".chaty-help-header").remove();
                            jQuery(".chaty-help-content").html("<p class='success-p'><?php echo __("Your message is sent successfully.", CHT_OPT) ?></p>");
                        },1000);
                    } else if(responseArray.status == 0) {
                        jQuery(".chaty-help-content").html("<p class='error-p'><?php echo __("There is some problem in sending request. Please send us mail on <a href='mailto:contact@premio.io'>contact@premio.io</a>", CHT_OPT) ?></p>");
                    }
                }
            });
            return false;
        });
        jQuery(".chaty-help-tooltip").click(function(e){
            e.stopPropagation();
            jQuery(".chaty-help-form").toggleClass("active");
        });
        jQuery(".chaty-help-form").click(function(e){
            e.stopPropagation();
        });
        jQuery("body").click(function(){
            jQuery(".chaty-help-form").removeClass("active");
        });
    });
</script>