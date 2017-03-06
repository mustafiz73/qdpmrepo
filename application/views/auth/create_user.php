<div class="modal-header ui-draggable-handle">
        <button aria-hidden="true" data-dismiss="modal" class="close" type="button"></button>
        <h4 class="modal-title"><?php echo lang('create_user_heading');?></h4>
      </div>



<div id="infoMessage" class="alert alert-danger"><?php echo $message;?></div>

<?php echo form_open("index.php/dashboard/create_user",'id="create_users" class="form-horizontal" enctype="multipart/form-data"');?>
<div class="modal-body">
  <ul class="nav nav-tabs">
  <li class="active">
    <a href="#tab_general" data-toggle="tab">General</a>
  </li>

</ul>
<div class="tab-content" >
  <div class="tab-pane fade active in" id="tab_general"> 
    <div class="form-group">
    <label class="col-md-3 control-label"> Active</label>
  <div class="col-md-9">
      <div class="checkbox-list"><label class="checkbox-inline"><input type="checkbox" checked name="active" value="1"/> </label></div>
    </div>
  </div>
     <div class="form-group">
            <?php echo lang('create_user_fname_label', 'first_name','class="col-md-3 control-label"');?> 
            <div class="col-md-9">
            <?php echo form_input($first_name,'','class="form-control input-large required"');?>
          </div>
      </div>

     <div class="form-group">
            <?php echo lang('create_user_lname_label', 'last_name','class="col-md-3 control-label"');?>
              <div class="col-md-9">
            <?php echo form_input($last_name,'','class="form-control input-large required"');?>
          </div>
      </div>
      
     

     <!-- <div class="form-group">
            <?php //echo lang('create_user_company_label', 'company','class="col-md-3 control-label"');?> 
            <div class="col-md-9">
            <?php //echo form_input($company,'','class="form-control input-large required"');?>
          </div>
      </div> -->

      <div class="form-group">
            <?php echo lang('create_user_email_label', 'email','class="col-md-3 control-label"');?> 
            <div class="col-md-9">
            <?php echo form_input($email,'','class="form-control input-large required"');?>
            <div id="email_error" class="error"></div>
          </div>
      </div>

      <div class="form-group">
            <?php echo lang('create_user_phone_label', 'phone','class="col-md-3 control-label"');?> 
            <div class="col-md-9">
            <?php echo form_input($phone,'','class="form-control input-large required"');?>
          </div>
      </div>

      <div class="form-group">
            <?php echo lang('create_user_password_label', 'password','class="col-md-3 control-label"');?> 
            <div class="col-md-9">
            <?php echo form_input($password,'','class="form-control input-large required"');?>
          </div>
      </div>

      <!-- <div class="form-group">
            <?php //echo lang('create_user_password_confirm_label', 'password_confirm','class="col-md-3 control-label"');?> 
            <div class="col-md-9">
            <?php //echo form_input($password_confirm,'','class="form-control input-large required"');?>
          </div>
      </div> -->
      <div class="form-group">
    <label class="col-md-3 control-label"> <label for="users_photo">Photo</label></label>
    <div class="col-md-9">
      <input type="file" id="users_photo" name="image">      <div></div>
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-3 control-label"> <label for="users_default_home_page">Start Page</label></label>
    <div class="col-md-9">
      <select id="users_default_home_page" name="default_home_page" class="form-control input-medium">
          <option selected="selected" value="">Dashboard</option>
          <option value="projects">Projects</option>
          <option value="tasks">Tasks</option>
          <option value="tickets">Tickets</option>
          <option value="discussions">Discussions</option>
          <option value="public_scheduler">Public Scheduler</option>
          <option value="scheduler">My Scheduler</option>
</select>   </div>
  </div>

</div>
</div>

      <p><?php //echo form_submit('submit', lang('create_user_submit_btn'));?></p>
</div>
<div class="modal-footer">
  <button  id="submit_button" type="submit" class="btn btn-primary" onclick="check_user_form('create_users','<?php echo base_url();?>dashboard/checkUser')"><?php echo 'Save'; ?></button>
  <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo 'Close'; ?></button>
  <div>
  <div id="uniform-users_notify">
    <input type="checkbox" checked name="notify" /> 
    <label for="users_notify">send login details to user</label>
  </div>
  
<div id="loading"></div>
</div>
</div>
<?php echo form_close();?>
<script type="text/javascript">
$(document).ready(function(){  
  $.extend($.validator.messages, {required: '<?php echo "This field is required!"; ?>',email: '<?php echo "Please enter a valid email address."; ?>'});
    $("#create_users").validate({ignore:''});
//   $("#create_users").validate({  submitHandler: function(form) {
//    // $(form).ajaxSubmit();
//    // check_user_form('create_users','<?php echo base_url();?>/dashboard/checkUser');
//   }
// });
});     
   
  $(function() {  
                                
   // set_extra_fields_per_group($('#users_users_group_id').val());
                 
     appHandleUniform()
      
    $("#submit_button").click(function() {
        $("#create_users").valid()                              
    });
              
  });
</script> 
