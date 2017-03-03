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
        <li><a href="<?php echo base_url();?>index.php/login/logout"><i class="fa "></i> Logoff</a>
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