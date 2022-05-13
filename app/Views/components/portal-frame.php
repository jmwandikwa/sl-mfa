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
	<?php $this->renderSection("styles"); ?>
	<!-- Style-->  
	<link rel="stylesheet" href="/src/css/style.css">
	<link rel="stylesheet" href="/src/css/intro.css">
	<link rel="stylesheet" href="/src/css/skin_color.css">
     
  </head>

<body class="hold-transition light-skin sidebar-mini theme-primary sidebar-collapse fixed">
	
<div class="wrapper">
	<div id="loader">
		
	</div>
	
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
			  <span class="light-logo fw-500 text-white">Service Masters</span>
			  <span class="dark-logo fw-500 text-white">Service Masters</span>
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
			<!-- <li class="btn-group d-lg-inline-flex d-none">
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
			</li> -->
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
					  <!-- <li>
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
					  </li> -->
					</ul>
				  </li>
				  <li class="footer">
					  <a href="">View all</a>
				  </li>
				</ul>
			</li>
			<li class="btn-group nav-item d-xl-inline-flex d-none">
				<a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="" id="live-chat">
					<i data-feather="message-circle"></i>
			    </a>
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
					<img src="/profile/<?= session()->get("user_image");?>" class="avatar rounded-circle bg-primary-light h-40 w-40" alt="" />
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
					<i data-feather="edit"></i>
					<span>Blog</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>					
				  <ul class="treeview-menu">					
					<li><a href="/dashboard/blog-dash"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard</a></li>
					<li><a href="/dashboard/discover"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Discover</a></li>	
				  </ul>
				</li> 
				<li class="treeview">
				  <a href="#">
					<i data-feather="trello"></i>
					<span>Events</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>					
				  <ul class="treeview-menu">					
					<li><a href="/dashboard/events-dash"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>My events</a></li>
					<li><a href="/dashboard/events-discover"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>New Events</a></li>	
				  </ul>
				</li> 
				<li>
				  <a href="/dashboard/docs">
					<i data-feather="file-text"></i>
					<span>Docs</span>
				  </a>
				</li> 
				<li>
				  <a href="/faq">
					<i data-feather="help-circle"></i>
					<span>Faq</span>
				  </a>
				</li>   					
				<li>
				  <a href="/dashboard/chat">
					<i data-feather="message-circle"></i>
					<span>chat</span>
				  </a>
				</li>   					
				<li>
				  <a href="/dashboard/profile">
					<i data-feather="user"></i>
					<span>Profile</span>
				  </a>
				</li>   								
				<li>
				  <a href="/dashboard/team">
					<i data-feather="users"></i>
					<span>Team</span>
				  </a>
				</li>   					
				<!-- <li class="treeview">
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
				</li> -->
				  
					 	     
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
				
				<a href="#" class="btn btn-icon btn-danger-light btn-sm no-shadow" data-bs-dismiss="modal">
					<span class="fa fa-close"></span>
				</a>
			</div>
            <div>
                <div class="d-flex flex-row">
                    <div class=""><img src="/profile/<?= session()->get("user_image");?>" alt="user" class="rounded bg-danger-light w-150" width="100"></div>
                    <div class="ps-20">
                        <h5 class="mb-0"><?= session()->get('user_name'); ?></h5>
                        
                        <a><span class="icon-Mail-notification me-5 text-success"><span class="path1"></span><span class="path2"></span></span><?= session()->get("user_email"); ?></a>
                        <a href="/logout"><button class="btn btn-success-light btn-sm mt-5"><i data-feather="log-out"></i>Logout</button></a>
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
					<div class="me-15 bg-success-light h-50 w-50 l-h-60 rounded text-center">
							<span class="icon-Group-chat fs-24"><span class="path1"></span><span class="path2"></span></span>
					</div>
						
                    <div class="d-flex flex-column fw-500">
                        <a href="/dashboard/chat" class="text-dark hover-danger mb-1 fs-16">My Messages</a>
                        <span class="text-fade">Inbox</span>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-30">
					<div class="me-15 bg-danger-light h-50 w-50 l-h-60 rounded text-center">
                        <span class="icon-Write fs-24"><span class="path1"></span><span class="path2"></span></span>
                    </div>
                    <div class="d-flex flex-column fw-500">
                        <a href="/dashboard/blog-dash" class="text-dark hover-success mb-1 fs-16">Blogs</a>
                        <span class="text-fade">My Blogs</span>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-30">
                    <div class="me-15 bg-info-light h-50 w-50 l-h-60 rounded text-center">
                        <span class="icon-Attachment1 fs-24"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                    </div>
                    <div class="d-flex flex-column fw-500">
                        <a href="/dashboard/events-dash" class="text-dark hover-info mb-1 fs-16">Events</a>
                        <span class="text-fade">latest Events and progress</span>
                    </div>
                </div>
              </div>
              <div class="dropdown-divider my-30"></div>
              <div>
                <div class="media-list">
                    <a class="media media-single px-0" href="">
                      <h4 class="w-50 text-gray fw-500">10:10</h4>
                      <div class="media-body ps-15 bs-5 rounded border-primary">
                        <p>Blog Post Created</p>
                        <!-- <span class="text-fade">by Johne</span> -->
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
               
                    <input type="text" id="chat-input" onchange="chat();" placeholder="Send a message..."/>
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

		let timerInterval
	Swal.fire({
  icon: 'info',
  title: 'Inactivity!',
  html: 'You will be logged out in <b></b> seconds.',
  timer: 20000,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector('b')
    timerInterval = setInterval(() => {
      b.textContent = Math.round(Swal.getTimerLeft()/1000)
    }, 1000)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
	location.href = '/screen';
  }else{
	  <?php session()->set('screen',0); ?>
  }
})
// 		swal("This modal will disappear soon!", {
//   buttons: false,
//   timer: 3000,
// });
		//
		// location.reload();
        //location.href = 'logout.html'
    }

    function resetTimer() {
        clearTimeout(time);
        time = setTimeout(logout,120000)
        // 1000 milliseconds = 1 second
    }
};

	</script>
	<!-- App JS -->
	<script>
		$(document).ajaxStart(function() { Pace.restart(); });
			$('#chat-send').click(function(){
				chat();
			});
			
		
			function chat(){
				var msg = $('#chat-input').val();
				if(msg == ''){
				}
				else{
				// $("chat-logs").append("<div class='chat-msg self'><div class='d-flex align-items-center justify-content-end'><div class='mx-10'><a href='#' class='text-dark hover-primary fw-bold'>You</a><p class='text-muted fs-12 mb-0'>3 minutes</p></div><span class='msg-avatar'><img src='../../../images/avatar/3.jpg' class='avatar avatar-lg' alt=''></span></div><div class='cm-msg-text'>"+m+"</div></div>");
				$('#chat-input').val('');
				$("#log").append("<div class='chat-msg self'><div class='d-flex align-items-center justify-content-end'><div class='mx-10'><a href='#' class='text-dark hover-primary fw-bold'><?= session()->get("user_name");?></a></div><span class='msg-avatar'><img src='<?= "/profile/" . session()->get('user_image'); ?>' class='avatar avatar-lg' alt=''></span></div><div class='cm-msg-text'>"+msg+"</div></div>");
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
			}
		}
	</script>

	<script src="/src/js/pages/chat-popup.js"></script>
    <script src="/assets/icons/feather-icons/feather.min.js"></script>
	<script src="/assets/vendor_components/raphael/raphael.min.js"></script>
	<script src="/assets/vendor_components/morris.js/morris.min.js"></script>
	<script src="/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>	
	<!-- screen -->
	<script src="https://unpkg.com/intro.js@5.1.0/minified/intro.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="/assets/vendor_components/PACE/pace.min.js"></script>

	<!-- EmployX App -->
	<script src="/src/js/intro.js"></script>
	<script src="/src/js/demo.js"></script>
	<script src="/src/js/template.js"></script>
	<script src="/src/js/pages/dashboard.js"></script>
	
</body>
</html>
