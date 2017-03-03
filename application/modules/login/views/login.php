<div class="login-fade-in"></div>
<div class="login-page-logo"> Welcome </div>
<div class="content">

<div class="alert alert-danger">
	<?php echo validation_errors(); ?>
</div>
<?php echo form_open('index.php/login/signin'); ?>

<h3 class="form-title">Welcome </h3>

<div class="form-group">
  <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
  <label class="control-label visible-ie8 visible-ie9"></label>
  <div class="input-icon">
  	<i class="fa fa-envelope"></i>
  	<input class="form-control placeholder-no-fix required email" type="text" autocomplete="off" placeholder="Email" name="identity"/>
  </div>
</div>

<div class="form-group">
	<label class="control-label visible-ie8 visible-ie9"></label>
	<div class="input-icon">
		<i class="fa fa-lock"></i>
		<input class="form-control placeholder-no-fix required" type="password" autocomplete="off" placeholder="Password" name="password"/>
	</div>
</div>

<div class="form-actions">			
      
     <label class="checkbox"> Remember Me</label>
      
			<button type="submit" class="btn btn-info pull-right">Login </button>
</div>

<div class="forget-password">	
	<p><a href="login/restorePassword">Password forgotten?</a></p>
</div>
</form>