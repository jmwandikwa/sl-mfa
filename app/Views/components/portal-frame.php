<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/images/favicon.ico">

    <title><?= $title ?></title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="/src/css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="/src/css/style.css">
	<link rel="stylesheet" href="/src/css/skin_color.css">
     
  </head>

<body class="hold-transition light-skin sidebar-mini theme-info sidebar-collapse fixed">
	
<div class="wrapper">
	<div id="loader"></div>
	
  <header class="main-header">
	<div class="d-flex align-items-center logo-box justify-content-start">	
		<!-- Logo -->
		<a href="" class="logo">
		  <!-- logo-->
		  <div class="logo-mini w-60">
			  <span class="light-logo"><img src="/images/logo2.png" alt="logo"></span>
			  <span class="dark-logo"><img src="/images/logo2.png" alt="logo"></span>
		  </div>
		  <div class="logo-lg">
			  <span class="light-logo text-secondary">Service learning</span>
			  <span class="dark-logo">SL</span>
		  </div>
		</a>	
	</div>   
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div class="app-menu">
		<ul class="header-megamenu nav">
			<li class="btn-group nav-item">
				<a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
					<i data-feather="menu"></i>
			    </a>
			</li>
			<li class="btn-group d-lg-inline-flex d-none">
				<div class="app-menu">
					<div class="search-bx mx-5">
						<form>
							<div class="input-group">
							  <input type="search" class="form-control" placeholder="Search">
							  <div class="input-group-append">
								<button class="btn" type="submit" id="button-addon3"><i class="icon-Search"><span class="path1"></span><span class="path2"></span></i></button>
							  </div>
							</div>
						</form>
					</div>
				</div>
			</li>
		</ul> 
	  </div>
		
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">
					<li class="btn-group d-md-inline-flex d-none">
				  <label class="switch">
				  	<span class="waves-effect skin-toggle waves-light">
							<input type="checkbox" data-mainsidebarskin="toggle" id="toggle_left_sidebar_skin">
							<span class="switch-on"><i data-feather="moon"></i></span>
							<span class="switch-off"><i data-feather="sun"></i></span>
						</span>	
					</label>
         </li>
			<li class="dropdown notifications-menu btn-group ">
				<a href="#" class="waves-effect waves-light btn-primary-light svg-bt-icon" data-bs-toggle="dropdown" title="Notifications">
					<i data-feather="bell"></i>
					<div class="pulse-wave"></div>
			    </a>
				<ul class="dropdown-menu animated bounceIn">
				  <li class="header">
					<div class="p-20">
						<div class="flexbox">
							<div>
								<h4 class="mb-0 mt-0">Notifications</h4>
							</div>
							<div>
								<a href="#" class="text-danger">Clear All</a>
							</div>
						</div>
					</div>
				  </li>
				  <li>
					<!-- inner menu: contains the actual data -->
					<ul class="menu sm-scrol">
					  <li>
						<a href="#">
						  <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
						</a>
					  </li>
					  <li>
						<a href="#">
						  <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
						</a>
					  </li>
					  <li>
						<a href="#">
						  <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
						</a>
					  </li>
					  <li>
						<a href="#">
						  <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
						</a>
					  </li>
					  <li>
						<a href="#">
						  <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
						</a>
					  </li>
					  <li>
						<a href="#">
						  <i class="fa fa-user text-primary"></i> Nunc fringilla lorem 
						</a>
					  </li>
					  <li>
						<a href="#">
						  <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
						</a>
					  </li>
					</ul>
				  </li>
				  <li class="footer">
					  <a href="component_notification.html">View all</a>
				  </li>
				</ul>
			</li>
			<li class="btn-group nav-item d-xl-inline-flex d-none">
				<a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="" id="live-chat">
					<i data-feather="message-circle"></i>
			    </a>
			</li>
			
			<li class="btn-group d-xl-inline-flex d-none">
			    <a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon dropdown-toggle" data-bs-toggle="dropdown">
					<img class="rounded" src="../../../images/svg-icon/usa.svg" alt="">
				</a>
			    <div class="dropdown-menu">
					<a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="../../../images/svg-icon/usa.svg" alt=""> English</a>
					<a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="../../../images/svg-icon/spain.svg" alt=""> Spanish</a>
					<a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="../../../images/svg-icon/ger.svg" alt=""> German</a>
					<a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="../../../images/svg-icon/jap.svg" alt=""> Japanese</a>
					<a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="../../../images/svg-icon/fra.svg" alt=""> French</a>
			    </div>
			</li>
			
			<li class="btn-group nav-item d-xl-inline-flex d-none">
				<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="Full Screen">
					<i data-feather="maximize"></i>
			    </a>
			</li>					  
          <!-- Control Sidebar Toggle Button -->
          <li class="btn-group nav-item d-xl-inline-flex d-none">
              <a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon">
			  	<i data-feather="sliders"></i>
			  </a>
          </li>
			
			<!-- User Account-->
			<li class="dropdown user user-menu">
				<a href="#" class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent p-0 no-shadow" title="User" data-bs-toggle="modal" data-bs-target="#quick_user_toggle">
					<img src="../../../images/avatar/avatar-13.png" class="avatar rounded-circle bg-primary-light h-40 w-40" alt="" />
				</a>
			</li>
			
        </ul>
      </div>
    </nav>
  </header>
  
  <aside class="main-sidebar collapsed">
    <!-- sidebar-->
    <section class="sidebar position-fixed"> 
	  	<div class="multinav">
		  <div class="multinav-scroll" style="height: 97%;">	
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree">				
				<li>
				  <a href="/dashboard">
					<i data-feather="home"></i>
					<span>Dashboard</span>
				  </a>
				</li>									
				<li class="treeview">
				  <a href="#">
					<i data-feather="file-plus"></i>
					<span>Blog</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>					
				  <ul class="treeview-menu">					
					<li><a href="/dashboard/blog-dash"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard</a></li>
					<li><a href="/dashboard/discover"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Discover</a></li>	
					<li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Publications</a></li>	
				  </ul>
				</li> 
				<li class="treeview">
				  <a href="#">
					<i data-feather="file-plus"></i>
					<span>Events</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>					
				  <ul class="treeview-menu">					
					<li><a href="/dashboard/events-dash"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>My events</a></li>
					<li><a href="/dashboard/events-discover"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>New Events</a></li>	
					<li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>nothing</a></li>	
				  </ul>
				</li> 
				<li>
				  <a href="#">
					<i data-feather="users"></i>
					<span>Candidates</span>
				  </a>
				</li>   					
				<li>
				  <a href="/dashboard/chat">
					<i data-feather="mail"></i>
					<span>chat</span>
				  </a>
				</li>   					
				<li>
				  <a href="/dashboard/profile">
					<i data-feather="user"></i>
					<span>Profile</span>
				  </a>
				</li>   					
				<li class="treeview">
				  <a href="#">
					<i data-feather="headphones"></i>
					<span>Support</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>					
				  <ul class="treeview-menu">					
					<li><a href="extra_app_ticket.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Support Ticket</a></li>
					<li><a href="contact_app_chat.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chat</a></li>					
				  </ul>
				</li>
				  
					 	     
			  </ul>
			  
			  <div class="sidebar-widgets">
				  <div class="mx-25 mb-30 pb-20 side-bx bg-primary-light rounded20">
					<div class="text-center">
						<img src="../../../images/svg-icon/color-svg/custom-30.svg" class="sideimg p-5" alt="">
						<h4 class="title-bx text-primary">By Team Ignite</h4>
					</div>
				  </div>
			  </div>
		  </div>
		</div>
    </section>
  </aside>

  <?php $this->renderSection('content') ?>
	
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="#" target="_blank">Ignition for recognition</a>
		  </li>
		</ul>
    </div>
	  &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">Team Ignite</a>. All Rights Reserved.
  </footer>
  <!-- Side panel -->   
  <!-- quick_user_toggle -->
  <div class="modal modal-right fade" id="quick_user_toggle" tabindex="-1">
	  <div class="modal-dialog">
		<div class="modal-content slim-scroll3">
		  <div class="modal-body p-30 bg-white">
			<div class="d-flex align-items-center justify-content-between pb-30">
				<h4 class="m-0">User Profile
				<small class="text-fade fs-12 ms-5">12 messages</small></h4>
				<a href="#" class="btn btn-icon btn-danger-light btn-sm no-shadow" data-bs-dismiss="modal">
					<span class="fa fa-close"></span>
				</a>
			</div>
            <div>
                <div class="d-flex flex-row">
                    <div class=""><img src="../../../images/avatar/avatar-13.png" alt="user" class="rounded bg-danger-light w-150" width="100"></div>
                    <div class="ps-20">
                        <h5 class="mb-0"><?= session()->get('user_name'); ?></h5>
                        <p class="my-5 text-fade">Manager</p>
                        <a href="mailto:dummy@gmail.com"><span class="icon-Mail-notification me-5 text-success"><span class="path1"></span><span class="path2"></span></span><?= session()->get("user_email"); ?></a>
                        <a href="/logout"><button class="btn btn-success-light btn-sm mt-5"><i class="fa-lock"></i>Logout</button></a>
                    </div>
                </div>
			</div>
              <div class="dropdown-divider my-30"></div>
              <div>
                <div class="d-flex align-items-center mb-30">
                    <div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
                          <span class="icon-Library fs-24"><span class="path1"></span><span class="path2"></span></span>
                    </div>
                    <div class="d-flex flex-column fw-500">
                        <a href="/dashboard/profile" class="text-dark hover-primary mb-1 fs-16">My Profile</a>
                        <span class="text-fade">Account settings and more</span>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-30">
                    <div class="me-15 bg-danger-light h-50 w-50 l-h-60 rounded text-center">
                        <span class="icon-Write fs-24"><span class="path1"></span><span class="path2"></span></span>
                    </div>
                    <div class="d-flex flex-column fw-500">
                        <a href="mailbox.html" class="text-dark hover-danger mb-1 fs-16">My Messages</a>
                        <span class="text-fade">Inbox and tasks</span>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-30">
                    <div class="me-15 bg-success-light h-50 w-50 l-h-60 rounded text-center">
                        <span class="icon-Group-chat fs-24"><span class="path1"></span><span class="path2"></span></span>
                    </div>
                    <div class="d-flex flex-column fw-500">
                        <a href="setting.html" class="text-dark hover-success mb-1 fs-16">Settings</a>
                        <span class="text-fade">Accout Settings</span>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-30">
                    <div class="me-15 bg-info-light h-50 w-50 l-h-60 rounded text-center">
                        <span class="icon-Attachment1 fs-24"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                    </div>
                    <div class="d-flex flex-column fw-500">
                        <a href="extra_taskboard.html" class="text-dark hover-info mb-1 fs-16">Project</a>
                        <span class="text-fade">latest tasks and projects</span>
                    </div>
                </div>
              </div>
              <div class="dropdown-divider my-30"></div>
              <div>
                <div class="media-list">
                    <a class="media media-single px-0" href="#">
                      <h4 class="w-50 text-gray fw-500">10:10</h4>
                      <div class="media-body ps-15 bs-5 rounded border-primary">
                        <p>Morbi quis ex eu arcu auctor sagittis.</p>
                        <span class="text-fade">by Johne</span>
                      </div>
                    </a>

                    <a class="media media-single px-0" href="#">
                      <h4 class="w-50 text-gray fw-500">08:40</h4>
                      <div class="media-body ps-15 bs-5 rounded border-success">
                        <p>Proin iaculis eros non odio ornare efficitur.</p>
                        <span class="text-fade">by Amla</span>
                      </div>
                    </a>

                    <a class="media media-single px-0" href="#">
                      <h4 class="w-50 text-gray fw-500">07:10</h4>
                      <div class="media-body ps-15 bs-5 rounded border-info">
                        <p>In mattis mi ut posuere consectetur.</p>
                        <span class="text-fade">by Josef</span>
                      </div>
                    </a>

                    <a class="media media-single px-0" href="#">
                      <h4 class="w-50 text-gray fw-500">01:15</h4>
                      <div class="media-body ps-15 bs-5 rounded border-danger">
                        <p>Morbi quis ex eu arcu auctor sagittis.</p>
                        <span class="text-fade">by Rima</span>
                      </div>
                    </a>

                    <a class="media media-single px-0" href="#">
                      <h4 class="w-50 text-gray fw-500">23:12</h4>
                      <div class="media-body ps-15 bs-5 rounded border-warning">
                        <p>Morbi quis ex eu arcu auctor sagittis.</p>
                        <span class="text-fade">by Alaxa</span>
                      </div>
                    </a>
                    <a class="media media-single px-0" href="#">
                      <h4 class="w-50 text-gray fw-500">10:10</h4>
                      <div class="media-body ps-15 bs-5 rounded border-primary">
                        <p>Morbi quis ex eu arcu auctor sagittis.</p>
                        <span class="text-fade">by Johne</span>
                      </div>
                    </a>

                    <a class="media media-single px-0" href="#">
                      <h4 class="w-50 text-gray fw-500">08:40</h4>
                      <div class="media-body ps-15 bs-5 rounded border-success">
                        <p>Proin iaculis eros non odio ornare efficitur.</p>
                        <span class="text-fade">by Amla</span>
                      </div>
                    </a>

                    <a class="media media-single px-0" href="#">
                      <h4 class="w-50 text-gray fw-500">07:10</h4>
                      <div class="media-body ps-15 bs-5 rounded border-info">
                        <p>In mattis mi ut posuere consectetur.</p>
                        <span class="text-fade">by Josef</span>
                      </div>
                    </a>

                    <a class="media media-single px-0" href="#">
                      <h4 class="w-50 text-gray fw-500">01:15</h4>
                      <div class="media-body ps-15 bs-5 rounded border-danger">
                        <p>Morbi quis ex eu arcu auctor sagittis.</p>
                        <span class="text-fade">by Rima</span>
                      </div>
                    </a>

                    <a class="media media-single px-0" href="#">
                      <h4 class="w-50 text-gray fw-500">23:12</h4>
                      <div class="media-body ps-15 bs-5 rounded border-warning">
                        <p>Morbi quis ex eu arcu auctor sagittis.</p>
                        <span class="text-fade">by Alaxa</span>
                      </div>
                    </a>
                  </div>
            </div>
		  </div>
		</div>
	  </div>
  </div>
  <!-- /quick_user_toggle --> 
	
  <!-- Control Sidebar -->
  <aside class="control-sidebar">
	  
	<div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger" data-toggle="control-sidebar"><i class="ion ion-close text-white" ></i></span> </div>  <!-- Create the tabs -->
    <ul class="nav nav-tabs control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-bs-toggle="tab" ><i class="mdi mdi-message-text"></i></a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-bs-toggle="tab"><i class="mdi mdi-playlist-check"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>	
			<p>Users</p>
			<a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
		  </div>
		  <div class="lookup lookup-sm lookup-right d-none d-lg-block">
			<input type="text" name="s" placeholder="Search" class="w-p100">
		  </div>
          <div class="media-list media-list-hover mt-20">
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="../../../images/avatar/1.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="../../../images/avatar/2.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="../../../images/avatar/3.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="../../../images/avatar/4.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>			
			
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="../../../images/avatar/1.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="../../../images/avatar/2.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="../../../images/avatar/3.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="../../../images/avatar/4.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>
			  
		  </div>

      </div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>	
			<p>Todo List</p>
			<a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
		  </div>
        <ul class="todo-list mt-20">
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_1" class="filled-in">
			  <label for="basic_checkbox_1" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_2" class="filled-in">
			  <label for="basic_checkbox_2" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_3" class="filled-in">
			  <label for="basic_checkbox_3" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_4" class="filled-in">
			  <label for="basic_checkbox_4" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_5" class="filled-in">
			  <label for="basic_checkbox_5" class="mb-0 h-15"></label>
			  <span class="text-line">Maecenas scelerisque</span>
			  <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_6" class="filled-in">
			  <label for="basic_checkbox_6" class="mb-0 h-15"></label>
			  <span class="text-line">Vivamus nec orci</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_7" class="filled-in">
			  <label for="basic_checkbox_7" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_8" class="filled-in">
			  <label for="basic_checkbox_8" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_9" class="filled-in">
			  <label for="basic_checkbox_9" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_10" class="filled-in">
			  <label for="basic_checkbox_10" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
		  </ul>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div> 
  
</div>
<!-- ./wrapper -->
	
	
		
	<div id="chat-box-body">
		<div id="chat-circle" class="waves-effect waves-circle btn btn-circle btn-sm btn-warning l-h-50">
            <div id="chat-overlay"></div>
            <span class="icon-Group-chat fs-18"><span class="path1"></span><span class="path2"></span></span>
		</div>

		<div class="chat-box">
            <div class="chat-box-header p-15 d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button class="waves-effect waves-circle btn btn-circle btn-primary-light h-40 w-40 rounded-circle l-h-50" type="button" data-bs-toggle="dropdown">
                      <span class="icon-Add-user fs-22"><span class="path1"></span><span class="path2"></span></span>
                  </button>
                  <div class="dropdown-menu min-w-200">
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Color me-15"></span>
                        New Group</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Clipboard me-15"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                        Contacts</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Group me-15"><span class="path1"></span><span class="path2"></span></span>
                        Groups</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Active-call me-15"><span class="path1"></span><span class="path2"></span></span>
                        Calls</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Settings1 me-15"><span class="path1"></span><span class="path2"></span></span>
                        Settings</a>
                    <div class="dropdown-divider"></div>
					<a class="dropdown-item fs-16" href="#">
                        <span class="icon-Question-circle me-15"><span class="path1"></span><span class="path2"></span></span>
                        Help</a>
					<a class="dropdown-item fs-16" href="#">
                        <span class="icon-Notifications me-15"><span class="path1"></span><span class="path2"></span></span> 
                        Privacy</a>
                  </div>
                </div>
                <div class="text-center flex-grow-1">
                    <div class="text-dark fs-18">Bot Ignite</div>
                    <div>
                        <span class="badge badge-sm badge-dot badge-primary"></span>
                        <span class="text-muted fs-12">Active</span>
                    </div>
                </div>
                <div class="chat-box-toggle">
                    <button id="chat-box-toggle" class="waves-effect waves-circle btn btn-circle btn-danger-light h-40 w-40 rounded-circle l-h-50" type="button">
                      <span class="icon-Close fs-22"><span class="path1"></span><span class="path2"></span></span>
                    </button>                    
                </div>
            </div>
            <div class="chat-box-body">
                <div class="chat-box-overlay">   
                </div>
                <div id="log" class="chat-logs">
				
            </div>
            <div class="chat-input">      
               
                    <input type="text" id="chat-input" placeholder="Send a message..."/>
                    <button type="submit" class="chat-submit" id="chat-send">
                        <span class="icon-Send fs-22"></span>
                    </button>
                     
            </div>
		</div>
	</div>
	
	<!-- Page Content overlay -->
	
	
	<!-- Vendor JS -->

	<script src="/src/js/vendors.min.js"></script>
	<?php $this->renderSection('scripts'); ?>

	<script>
		window.onload = function() {
  inactivityTime();
}
	var inactivityTime = function () {
    var time;
    // DOM Events
    document.onload = resetTimer;
	document.onmousemove = resetTimer;
	document.onmousedown = resetTimer; // touchscreen presses
	document.ontouchstart = resetTimer;
	document.onclick = resetTimer;     // touchpad clicks
	document.onkeydown = resetTimer;   // onkeypress is deprectaed
	document.addEventListener('scroll', resetTimer, true); // improved; see comments

    function logout() {
		//
		// location.reload();
        //location.href = 'logout.html'
    }

    function resetTimer() {
        clearTimeout(time);
        time = setTimeout(logout, 10000)
        // 1000 milliseconds = 1 second
    }
};

	</script>
	<!-- App JS -->
	<script>
		
			$('#chat-send').click(function(){
				var msg = $('#chat-input').val();
				// $("chat-logs").append("<div class='chat-msg self'><div class='d-flex align-items-center justify-content-end'><div class='mx-10'><a href='#' class='text-dark hover-primary fw-bold'>You</a><p class='text-muted fs-12 mb-0'>3 minutes</p></div><span class='msg-avatar'><img src='../../../images/avatar/3.jpg' class='avatar avatar-lg' alt=''></span></div><div class='cm-msg-text'>"+m+"</div></div>");
				$('#chat-input').val('');
				$("#log").append("<div class='chat-msg self'><div class='d-flex align-items-center justify-content-end'><div class='mx-10'><a href='#' class='text-dark hover-primary fw-bold'><?= session()->get("user_name");?></a></div><span class='msg-avatar'><img src='../../../images/avatar/3.jpg' class='avatar avatar-lg' alt=''></span></div><div class='cm-msg-text'>"+msg+"</div></div>");
				$('#log').scrollTop($('#log')[0].scrollHeight);

                formData = {
				question: msg,
				query: msg,
				};
				$.ajax({
					type: "post",
					url: "/bot/message",
					data: formData,
					success: function (response) {
						setTimeout(function() {				
			$("#log").append("<div class='chat-msg user'><div class='d-flex align-items-center'><span class='msg-avatar'><img src='../../../images/avatar/2.jpg' class='avatar avatar-lg' alt='></span><div class='mx-10'><a href='#' class='text-dark hover-primary fw-bold'>Ignite</a></div></div><div class='cm-msg-text'>"+response+"</div></div>");
			$('#log').scrollTop($('#log')[0].scrollHeight);
			}, 1000);
						
					}
				});
			});
			
		
	</script>

	<script src="/src/js/pages/chat-popup.js"></script>
    <script src="/assets/icons/feather-icons/feather.min.js"></script>
	<script src="/assets/vendor_components/raphael/raphael.min.js"></script>
	<script src="/assets/vendor_components/morris.js/morris.min.js"></script>
	<script src="/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>	
	<!-- screen -->
	
	
	<!-- EmployX App -->
	<script src="/src/js/demo.js"></script>
	<script src="/src/js/template.js"></script>
	<script src="/src/js/pages/dashboard.js"></script>
	
</body>
</html>
