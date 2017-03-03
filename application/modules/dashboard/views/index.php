  <!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse navbar-fixed-top">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="header-inner">
		<!-- BEGIN LOGO -->
				
    <a class="navbar-brand" href="/qdpm/index.php/">Workspace</a>    
		
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">		
    <img src="/qdpm/template/img/menu-toggler.png">		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		
        <!-- BEGIN TOP NAVIGATION MENU -->
		<ul class="nav navbar-nav pull-right">
			<!-- BEGIN USER LOGIN DROPDOWN -->
			<li class="dropdown user">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
				
        <span class="username">admin@localhost.com</span>        
        
				<i class="fa fa-angle-down"></i>
				</a>
                
        
        <ul class="dropdown-menu">
        <li><a href="/qdpm/index.php/login/logoff"><i class="fa "></i> Logoff</a>
        </li>

      </ul>        
  		</li>
  		<!-- END USER LOGIN DROPDOWN -->
  	</ul>
  	<!-- END TOP NAVIGATION MENU -->
      
</div>
<!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
    
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
      <!-- BEGIN SIDEBAR -->

<div class="page-sidebar-wrapper">
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu">
				<li class="sidebar-toggler-wrapper">
        
 
        
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<div class="clearfix">
					</div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				
        <li class="start  active">
        <a href="/qdpm/index.php/users"><i class="fa fa-user"></i> <span class="title">Users</span><span class="arrow open"></span></a>
        <ul class="sub-menu"><li>
        <a onclick="openModalBox('/qdpm/index.php/users/new')" class="cursor-pointer"><span class="title">Add User</span></a>
        </li>
<li class="active">
        <a href="/qdpm/index.php/users"><span class="title">View All</span></a>
        </li>

        </ul>
        </li>
<li>
        <a href="/qdpm/index.php/configuration"><i class="fa fa-gear"></i> <span class="title">Configuration</span><span class="arrow "></span></a>
        <ul class="sub-menu"><li>
        <a href="/qdpm/index.php/configuration"><span class="title">General</span><span class="arrow "></span></a>
        <ul class="sub-menu"><li>
        <a href="/qdpm/index.php/configuration?type=general"><span class="title">General</span></a>
        </li>
<li>
        <a href="/qdpm/index.php/configuration?type=features"><span class="title">Features</span></a>
        </li>
<li>
        <a href="/qdpm/index.php/configuration?type=email_options"><span class="title">Email Options</span></a>
        </li>
<li>
        <a href="/qdpm/index.php/configuration?type=ldap"><span class="title">LDAP</span></a>
        </li>
<li>
        <a href="/qdpm/index.php/configuration?type=login"><span class="title">Login Page</span></a>
        </li>
<li>
        <a href="/qdpm/index.php/configuration?type=user"><span class="title">New User Creation</span></a>
        </li>

        </ul>
        </li>
<li>
        <a href="/qdpm/index.php/usersGroups"><span class="title">Users</span><span class="arrow "></span></a>
        <ul class="sub-menu"><li>
        <a href="/qdpm/index.php/usersGroups"><span class="title">Users Groups</span></a>
        </li>
<li>
        <a href="/qdpm/index.php/projectRoles"><span class="title">Projects Roles</span></a>
        </li>
<li class="divider"></li><li>
        <a href="/qdpm/index.php/extraFields?bind_type=users"><span class="title">Extra Fields</span></a>
        </li>
<li>
        <a href="/qdpm/index.php/extraFields/extraFieldsByGroup/t/UsersGroups"><span class="title">Extra Fields per Group</span></a>
        </li>

        </ul>
        </li>
<li>
        <a href="/qdpm/index.php/projectsStatus"><span class="title">Projects</span><span class="arrow "></span></a>
        <ul class="sub-menu"><li>
        <a href="/qdpm/index.php/projectsStatus"><span class="title">Status</span></a>
        </li>
<li>
        <a href="/qdpm/index.php/projectsTypes"><span class="title">Types</span></a>
        </li>
<li>
        <a href="/qdpm/index.php/projectsGroups"><span class="title">Groups</span></a>
        </li>
<li>
        <a href="/qdpm/index.php/projectsPriority"><span class="title">Priority</span></a>
        </li>
<li>
        <a href="/qdpm/index.php/phases"><span class="title">Default Phases</span></a>
        </li>
<li>
        <a href="/qdpm/index.php/phasesStatus"><span class="title">Phases Status</span></a>
        </li>
<li>
        <a href="/qdpm/index.php/versionsStatus"><span class="title">Versions Status</span></a>
        </li>
<li class="divider"></li><li>
        <a href="/qdpm/index.php/extraFields?bind_type=projects"><span class="title">Extra Fields</span></a>
        </li>
<li>
        <a href="/qdpm/index.php/extraFields/extraFieldsByGroup/t/ProjectsTypes"><span class="title">Extra Fields per Type</span></a>
        </li>

        </ul>
        </li>
<li>
        <a href="/qdpm/index.php/tasksStatus"><span class="title">Tasks</span><span class="arrow "></span></a>
        <ul class="sub-menu"><li>
        <a href="/qdpm/index.php/tasksStatus"><span class="title">Status</span></a>
        </li>
<li>
        <a href="/qdpm/index.php/tasksTypes"><span class="title">Types</span></a>
        </li>
<li>
        <a href="/qdpm/index.php/tasksLabels"><span class="title">Labels</span></a>
        </li>
<li>
        <a href="/qdpm/index.php/tasksPriority"><span class="title">Priority</span></a>
        </li>
<li>
        <a href="/qdpm/index.php/configuration?type=tasks_columns_list"><span class="title">Tasks Listing</span></a>
        </li>
<li class="divider"></li><li>
        <a href="/qdpm/index.php/extraFields?bind_type=tasks"><span class="title">Extra Fields</span></a>
        </li>
<li>
        <a href="/qdpm/index.php/extraFields/extraFieldsByGroup/t/TasksTypes"><span class="title">Extra Fields per Type</span></a>
        </li>

        </ul>
        </li>
<li>
        <a href="/qdpm/index.php/departments"><span class="title">Tickets</span><span class="arrow "></span></a>
        <ul class="sub-menu"><li>
        <a href="/qdpm/index.php/departments"><span class="title">Departments</span></a>
        </li>
<li>
        <a href="/qdpm/index.php/ticketsStatus"><span class="title">Status</span></a>
        </li>
<li>
        <a href="/qdpm/index.php/ticketsTypes"><span class="title">Types</span></a>
        </li>
<li>
        <a href="/qdpm/index.php/ticketsGroups"><span class="title">Groups</span></a>
        </li>
<li>
        <a href="/qdpm/index.php/ticketsPriority"><span class="title">Priority</span></a>
        </li>
<li class="divider"></li><li>
        <a href="/qdpm/index.php/configuration?type=public_tickets"><span class="title">Public Tickets</span></a>
        </li>
<li class="divider"></li><li>
        <a href="/qdpm/index.php/extraFields?bind_type=tickets"><span class="title">Extra Fields</span></a>
        </li>
<li>
        <a href="/qdpm/index.php/extraFields/extraFieldsByGroup/t/TicketsTypes"><span class="title">Extra Fields per Type</span></a>
        </li>

        </ul>
        </li>
<li>
        <a href="/qdpm/index.php/discussionsStatus"><span class="title">Discussions</span><span class="arrow "></span></a>
        <ul class="sub-menu"><li>
        <a href="/qdpm/index.php/discussionsStatus"><span class="title">Status</span></a>
        </li>
<li>
        <a href="/qdpm/index.php/discussionsTypes"><span class="title">Types</span></a>
        </li>
<li>
        <a href="/qdpm/index.php/discussionsGroups"><span class="title">Groups</span></a>
        </li>
<li>
        <a href="/qdpm/index.php/discussionsPriority"><span class="title">Priority</span></a>
        </li>
<li class="divider"></li><li>
        <a href="/qdpm/index.php/extraFields?bind_type=discussions"><span class="title">Extra Fields</span></a>
        </li>
<li>
        <a href="/qdpm/index.php/extraFields/extraFieldsByGroup/t/DiscussionsTypes"><span class="title">Extra Fields per Type</span></a>
        </li>

        </ul>
        </li>
<li>
        <a href="/qdpm/index.php/contactsGroups"><span class="title">Contacts</span><span class="arrow "></span></a>
        <ul class="sub-menu"><li>
        <a href="/qdpm/index.php/contactsGroups"><span class="title">Groups</span></a>
        </li>
<li>
        <a href="/qdpm/index.php/extraFields?bind_type=contacts"><span class="title">Extra Fields</span></a>
        </li>

        </ul>
        </li>
<li>
        <a href="/qdpm/index.php/eventsPriority"><span class="title">Events in Scheduler</span><span class="arrow "></span></a>
        <ul class="sub-menu"><li>
        <a href="/qdpm/index.php/eventsPriority"><span class="title">Priority</span></a>
        </li>
<li>
        <a href="/qdpm/index.php/eventsTypes"><span class="title">Types</span></a>
        </li>
<li>
        <a href="/qdpm/index.php/extraFields?bind_type=events"><span class="title">Extra Fields</span></a>
        </li>

        </ul>
        </li>
<li>
        <a><span class="title"></span></a>
        </li>

        </ul>
        </li>
                            
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
</div>
<!-- END SIDEBAR -->
      
      <!-- BEGIN CONTENT -->
      <div class="page-content-wrapper">
      	<div class="page-content-wrapper">
      		<div class="page-content">
           <div id="ajax-modal" class="modal fade" tabindex="-1" data-replace="true" data-keyboard="false" data-backdrop="static" data-focus-on=".autofocus"></div>
                                 
                      <div style="display: none;" id="userAlertContainer" class="alert alert-warning"><strong>Warning:</strong> Please remove 'install' folder</div>

<script type="text/javascript">
  $(function() {
    $("#userAlertContainer").delay(10000).fadeOut();
  });
</script>            
                     
           
<h3 class="page-title">Users</h3>

<div></div>



<table width="100%">
  <tbody><tr>
    <td><button class="btn btn-primary" onclick="openModalBox('http://localhost/qdpm/index.php/users/new')">Add User</button> <input value="Export Selected" class="btn btn-default" onclick="openMultipleActionModalBox('/qdpm/index.php/users/export')" type="button"></td>
    <td align="right"><div style="float: right;"> 

        <div id="search_menu" class="yuimenubar yuimenubarnav yui-module yui-overlay visible" style="display: block; z-index: 0; position: static; visibility: visible;">
          <div class="bd">
            <ul class="first-of-type">

              <li index="0" groupindex="0" id="yui-gen0" class="yuimenubaritem yuimenubaritem-hassubmenu first-of-type"><span class="yuimenubaritemlabel-hassubmenu yuimenubaritemlabel"><i class="fa fa-search"></i> Search</span>
        <div style="z-index: 3; position: absolute; visibility: hidden;" id="search_menu704943880" class="yuimenu yui-module yui-overlay yui-overlay-hidden">
          <div class="bd">
            <ul>

              <li class="yuimenuitem"><span>
    <form action="/qdpm/index.php/users" method="post">
    <table style="margin: 5px 0;" class="contentTable">
      <tbody><tr>
        <td valign="top">Search</td>
        <td><input name="search[keywords]" value="" class="form-control" id="search_keywords" type="text"></td>
        <td valign="top"><input class="btn btn-default" value="Search" type="submit"></td>
      </tr>
      
      <tr>
        <td valign="top">Search In:</td>
        <td>        
        <input name="search_by_extrafields[]" value="60" class="yuimenecheckbox" id="search_by_extrafields_60" type="checkbox"> <label for="search_by_extrafields_60">Phone</label><br><input name="search_by_extrafields[]" value="70" class="yuimenecheckbox" id="search_by_extrafields_70" type="checkbox"> <label for="search_by_extrafields_70">MSN</label><br>
        </td>        
      </tr>  
      
    </tbody></table>
    </form>
  </span></li>

            </ul>
          </div>
        </div></li>

            </ul>
          </div>
        </div> 
    
<script type="text/javascript">
    YAHOO.util.Event.onContentReady("search_menu", function () 
    {
        var oMenuBar = new YAHOO.widget.MenuBar("search_menu", {
                                                autosubmenudisplay: true,
                                                hidedelay: 4000,
                                                submenuhidedelay: 0,
                                                showdelay: 150,
                                                keepopen: true,                                                
                                                lazyload: true });
        oMenuBar.render();
    });
</script></div></td>
  </tr>
</tbody></table>



<div>
<div id="table-users_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row"><div class="col-md-6 col-sm-12"></div><div class="col-md-6 col-sm-12"></div></div><div class="table-scrollable"><table aria-describedby="table-users_info" class="table table-striped table-bordered table-hover dataTable" id="table-users">
  <thead>
    <tr role="row"><th aria-label="" colspan="1" rowspan="1" role="columnheader" class="sorting_disabled" data-bsortable="false" style="width: 21px;"><div id="uniform-multiple_selected_all" class="checker"><span><input name="multiple_selected_all" id="multiple_selected_all" class="group-checkable" data-set="#table-users .checkboxes" type="checkbox"></span></div></th><th aria-label="Action" style="width: 52px;" colspan="1" rowspan="1" role="columnheader" class="sorting_disabled" data-bsortable="false"><div>Action</div></th><th aria-label="Id: activate to sort column ascending" style="width: 14px;" colspan="1" rowspan="1" aria-controls="table-users" tabindex="0" role="columnheader" class="sorting"><div>Id</div></th><th aria-label="Group: activate to sort column ascending" style="width: 53px;" colspan="1" rowspan="1" aria-controls="table-users" tabindex="0" role="columnheader" class="sorting"><div>Group</div></th><th aria-label="Photo: activate to sort column ascending" style="width: 50px;" colspan="1" rowspan="1" aria-controls="table-users" tabindex="0" role="columnheader" class="sorting"><div>Photo</div></th><th aria-label="Name: activate to sort column ascending" style="width: 1133px;" colspan="1" rowspan="1" aria-controls="table-users" tabindex="0" role="columnheader" class="sorting" width="100%"><div>Name</div></th><th aria-label="Email: activate to sort column ascending" style="width: 121px;" colspan="1" rowspan="1" aria-controls="table-users" tabindex="0" role="columnheader" class="sorting"><div>Email</div></th><th aria-label="Url: activate to sort column ascending" style="width: 17px;" colspan="1" rowspan="1" aria-controls="table-users" tabindex="0" role="columnheader" class="sorting"><div>Url</div></th><th aria-label="Active?: activate to sort column ascending" style="width: 44px;" colspan="1" rowspan="1" aria-controls="table-users" tabindex="0" role="columnheader" class="sorting"><div>Active?</div></th></tr>
  </thead>
  
<tbody aria-relevant="all" aria-live="polite" role="alert"><tr class="odd">
      <td class="  sorting_1"><div id="uniform-multiple_selected_94" class="checker"><span><input name="multiple_selected[]" id="multiple_selected_94" value="94" class="checkboxes" <="" td="" type="checkbox"></span></div>
      </td><td class=" "><a class="btn btn-default btn-xs purple" onclick="if (confirm('Are you sure?')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'post'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', 'sf_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_csrf_token'); m.setAttribute('value', 'ef376941f1f04d43dc683d6f97142205'); f.appendChild(m);f.submit(); };return false;" href="/qdpm/index.php/users/delete/id/94"><i class="fa fa-trash-o"></i></a> <a href="#" class="btn btn-default btn-xs purple" onclick="openModalBox('http://localhost/qdpm/index.php/users/edit/id/94'); return false;"><i class="fa fa-edit"></i></a></td>
      <td class=" ">94</td>
      <td class=" ">Customer</td>
      <td class=" "><img class="user-photo" src="http://localhost/qdpm/uploads/users/480397-FB_IMG_1467264044661.jpg"></td>
      <td class=" "><a href="#" onclick="openModalBox('/qdpm/index.php/users/info/id/94')">shintu</a></td>      
      <td class=" ">shintu@bizdesire.com</td>  
      
      <td class=" "></td>                
      <td class=" ">Yes</td>      
    </tr></tbody></table></div><div class="row"><div class="col-md-5 col-sm-12"><div id="table-users_info" class="dataTables_info">Displaying 1 - 1, Total: 1 </div></div><div class="col-md-7 col-sm-12"><div class="dataTables_paginate paging_bootstrap"><ul style="visibility: visible;" class="pagination"><li class="prev disabled"><a href="#" title="Previous Page"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="#">1</a></li><li class="next disabled"><a href="#" title="Next Page"><i class="fa fa-angle-right"></i></a></li></ul></div></div></div></div>

</div>



<script type="text/javascript">
  $(document).ready(function(){
  
    appHandleUniformCheckboxes()
    
    var columnSort = new Array; 
    $(this).find('#table-users thead tr th').each(function(){
    
        
        sType = 'html';
        
        attr = $(this).attr('data-bsType');
        if (typeof attr !== typeof undefined && attr !== false) {
          sType = attr;          
        } 
    
        if($(this).attr('data-bSortable') == 'false') {
            columnSort.push({ "bSortable": false});
        } else {
            columnSort.push({ "bSortable": true,"sType":sType });
        }
    });
    
    
    jQuery('#table-users tbody tr .checkboxes').change(function(){
         if($(this).attr('checked'))
         {
           selected_items.push($(this).attr('value'));
         }
         else
         {
           selected_items = array_remove(selected_items,$(this).attr('value'))
         }
                          
         
         $(this).parents('tr').toggleClass("active");
    });
  
    var table = $('#table-users').dataTable({
      "iDisplayLength": 50,
      "sPaginationType": "bootstrap",
      "bSort": true,
      "bFilter":false,
      "bLengthChange":false,
      "aoColumns": columnSort,
      "fnInitComplete": function (oSettings, json) { $(this).css('display','') },
      "oLanguage": {                    
                        "oPaginate": {
                            "sPrevious": "Previous Page",
                            "sNext": "Next Page"
                        },
                        "sInfo": "Displaying _START_ - _END_, Total: _TOTAL_ "
                    }
      });
                      
      jQuery('#table-users .group-checkable').change(function () {      
                
                var checked = jQuery(this).is(":checked");
                selected_items.length = 0;
                
                jQuery( "input", table.fnGetNodes() ).each(function(){                  
                     if(checked)
                     {                        
                        selected_items.push($(this).attr('value'));   
                        
                        $(this).attr("checked", true);                    
                        $(this).parents('span').addClass("checked");
                        $(this).parents('tr').addClass("active");                                                                        
                     }
                     else
                     {                                                                                               
                        $(this).attr("checked", false);
                        $(this).parents('span').removeClass("checked");
                        $(this).parents('tr').removeClass("active");
                     }
                })                
      });                         
      
        
  });
    
</script>  
 
          <!-- END PAGE CONTENT-->
      		</div>
      	</div>
      </div>
      <!-- END CONTENT -->
    
    </div>
    <!-- END CONTAINER -->
    
    
<!-- BEGIN FOOTER -->
<div class="footer">
<div class="footer-inner">
	 <small>Powered by <a class="copyright_link" href="http://qdpm-ex.com" target="_blank">qdPM Extended  4.1</a></small>
</div>
<div class="footer-tools">
	<span class="go-top">
		<i class="fa fa-angle-up"></i>
	</span>
</div>
</div>
<!-- END FOOTER -->