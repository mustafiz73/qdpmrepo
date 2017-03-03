
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-migrate-1.2.1.min.js" /></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/jquery-ui-1.11.4/jquery-ui.min.js" /></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js" /></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" /></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/jquery-slimscroll/jquery.slimscroll.min.js" /></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.blockui.min.js" /></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.cokie.min.js" /></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/uniform/jquery.uniform.min.js" /></script>
<!-- END CORE PLUGINS -->

<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-modal/js/bootstrap-modalmanager.js" /></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-modal/js/bootstrap-modal.js" /></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/jquery-validation/dist/jquery.validate.min.js" /></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/jquery-validation/dist/additional-methods.min.js" /></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/jquery-nestable/jquery.nestable.js" /></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-datepicker/js/bootstrap-datepicker.js" /></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js" /></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js" /></script>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/script/app.js?v=1" /></script>

<script>
jQuery(document).ready(function() {    
   App.init();
               
   qdpm_app_init(); 
   
   <?php 
      if($sf_user->getCulture()!='en')
      {
       // include_partial('global/datepicker.js');
      } 
   ?>
        
});
              
</script>

<!-- END JAVASCRIPTS -->    
           
  </body>
</html>