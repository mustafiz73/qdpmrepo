<div class="login-fade-in"></div>
<div class="login-page-logo"> Workspace </div>
<div class="content">
<h3><?php echo lang('forgot_password_heading');?></h3>
<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("index.php/login/forgot_password");?>

      <p>
      	
      	<div class="form-group">
	<div class="input-icon">
		<i class="fa fa-envelope"></i>
		<?php echo form_input($identity,'','placeholder="Email" class="form-control placeholder-no-fix required email"');?>
	</div>
</div>
      	
      </p>
      <div class="form-actions">
      	<button onclick="location.href='<?php echo base_url();?>index.php/login/signin'" class="btn btn-default" id="back-btn" type="button"><i class="fa fa-arrow-circle-left"></i> </button>
      <?php echo form_submit('submit', 'Send New Password','class="btn btn-info pull-right"');?>
</div>
<?php echo form_close();?>
</div>