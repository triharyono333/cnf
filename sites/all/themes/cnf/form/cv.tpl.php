<div class="row">
	<div class=" col-sms-6 col-sm-6">
		<div class="form-group">
			<label>Your Name:</label>
			<?php print render($form['name']); ?>
		</div>
		<div class="form-group">
			<label>Your E-mail:</label>
			<?php print render($form['email_address']); ?>
		</div>
		<div class="form-group">
			<label>Position:</label>
			<?php print render($form['position']); ?>
		</div>
		<div class="form-group">
				<?php print render($form['captcha']); ?>
		</div>
	</div>
	<div class=" col-sms-6 col-sm-6">
		<div class="form-group">
			<label for="exampleInputFile">CV:</label>
			<?php print render($form['cv']); ?>
		</div>
		<div class="form-group">
			<label for="exampleInputFile">Cover Letter</label>
			<?php print render($form['cover_letter']); ?>
		</div>	
		<div class="form-group">
				<?php print render($form['submit']); ?>
		</div>
	</div>
</div>

<!-- Render any remaining elements, such as hidden inputs. -->
<?php print drupal_render_children($form); ?>

<script>
    jQuery("input[type=text]").attr('class', 'input-text full-width');
    jQuery("#edit-submit").attr('class', 'btn btn-md style1');
    jQuery("#edit-cv-upload-button").hide();
    jQuery("#edit-cover-letter-upload-button").hide();
    jQuery('#cv-form').submit(function(){
        return validateForm();   
    });

	function validateForm(){

    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    var error_msg = "";

    var fnames = jQuery('#edit-name').val();
    var email = jQuery('#edit-email-address').val();

    if (fnames == null || fnames == "") {
        error_msg += 'Please input name';
    }
    if (email == null || email == "") {
        error_msg += '\nPlease input email';
    }
    if(!emailReg.test(email)) {
        error_msg += '\nPlease input valid email address';
    }
    
    if (error_msg == null || error_msg == "") return true;
    else {
        alert(error_msg);
        return false;
    }  
	}   

</script>
