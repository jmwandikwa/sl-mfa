<?php $this->extend('/components/portal-frame'); 
    $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-8 col-12 order-xl-1 order-2">
					<div class="row">
						<div class="col-lg-4 col-12">
							<div class="box overflow-h">
								<div class="box-body" style="height:18rem;">
									<div class="d-flex justify-content-between align-items-center">
										<h4 class="me-10 mb-0 fw-600">Jobs for Me</h4>
										<img src="../../../images/svg-icon/img-1.png" class="img-fluid max-w-150 image-1" alt="" />
									</div>
									<div>
										<a href="jobs.html" class="mt-5 btn btn-primary-light d-flex justify-content-between align-items-center">
											<span class="text-overflow pe-5"><i class="fa fa-file-text me-10"></i><span class="fw-600">10</span> new jobs for you</span>
											<i class="fa fa-arrow-right"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="box overflow-h">
								<div class="box-body" style="height:18rem;">
									<div class="d-flex justify-content-between align-items-center">
										<h4 class="me-10 mb-0 fw-600">My Learning</h4>
										<img src="../../../images/svg-icon/img-2.png" class="img-fluid max-w-150 image-1" alt="" />
									</div>
									<div>
										<a href="jobs.html" class="mt-5 btn btn-primary-light d-flex justify-content-between align-items-center">
											<span class="text-overflow pe-5"><i class="fa fa-refresh me-10"></i><span class="fw-600">3</span> essential courses</span>
											<i class="fa fa-arrow-right"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="box overflow-h">
								<div class="box-body" style="height:18rem;">
									<div class="d-flex justify-content-between align-items-center">
										<h4 class="me-10 mb-0 fw-600">My Social Story</h4>
										<img src="../../../images/svg-icon/img-3.png" class="img-fluid max-w-150 image-1" alt="" />
									</div>
									<div>
										<a href="mailbox.html" class="mt-5 btn btn-primary-light d-flex justify-content-between align-items-center">
											<span class="text-overflow pe-5"><i class="fa fa-commenting-o me-10"></i><span class="fw-600">4</span> New Messages </span>
											<i class="fa fa-arrow-right"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-12 order-xl-2 order-1">
					<div class="box" style="height:18rem;">
						<div class="box-body bb-1" >
							<div class="d-flex align-items-center justify-content-between">								
								<div class="d-flex align-items-center justify-content-between">
									<img src="../../../images/avatar/avatar-15.png" class="me-10 avatar avatar-lg bg-primary-light" alt="" />
									<div>
										<h4 class="fw-500 mb-0">Nil Yeager</h4>
										<a href="extra_profile.html">View Profile</a>
									</div>
								</div>
								
								<div class="d-flex align-items-center justify-content-between">
									<div class="badge badge-lg badge-warning-light me-10"><i class="me-5 fa fa-server"></i> 50</div>
									<div class="badge badge-lg badge-primary-light"><a href="mailbox.html"><i class="fa fa-envelope"></i></a></div>
								</div>
							</div>
						</div>
						<div class="box-body">
							<p class="fw-500">Your Profile is complate for 50%</p>
							<div class="progress bg-primary-light">
								<div class="progress-bar bg-primary" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
							</div>
						</div>
						<div class="box-footer py-10">
							<div class="d-flex align-items-center justify-content-between">
								<p class="fs-12 mb-0 text-overflow">Next: Add your Experience</p>
								<a href="extra_profile.html" class="waves-effect waves-light btn btn-primary">Finish Your Profile</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-8 col-12">
					<div class="row">						
						<div class="col-xl-6 col-12">
							<div class="box">
								<div class="box-header d-flex justify-content-between">
									<h4 class="box-title">Total Employees</h4>
									<h4 class="box-title fw-500">590</h4>
								</div>
								<div class="box-body">
									<div id="donut-chart"></div>
								</div>
								<div class="box-footer no-border">
									<div class="d-flex justify-content-center align-items-center">
										<div class="b-1 rounded text-center p-10 me-10 w-p100"><span class="me-10 badge badge-xl badge-dot badge-primary"></span> Male</div>
										<div class="b-1 rounded text-center p-10 ms-10 w-p100"><span class="me-10 badge badge-xl badge-dot badge-success"></span> FeMale</div>
									</div>
								</div>
							</div>
						</div>				
						<div class="col-xl-6 col-12">
							<div class="box">
								<div class="box-header d-flex justify-content-between">
									<h4 class="box-title">Total Projects</h4>
									<h4 class="box-title fw-500">87</h4>
								</div>
								<div class="box-body ps-0 pb-0">
									<div class="ps-20 d-flex align-items-center justify-content-between">
										<div>	
											<h5 class="mb-0 text-fade">Ongoing <span class="text-primary">24 Projects</span></h5>
										</div>
										<div class="bg-primary-light px-3 py-2 text-primary text-center rounded">
											<script> document.write(new Date().toLocaleDateString()); </script>
										</div>
									</div>

									<div id="project-chart"></div>
								</div>
								<div class="box-footer no-border">
									<div class="d-flex justify-content-center align-items-center">
										<div class="b-1 rounded text-center pb-10 mb-10 w-p100 text-overflow"><span class="badge badge-xl badge-dot badge-primary"></span> Upcoming</div>
										<div class="b-1 rounded text-center pb-10 mb-10 w-p100 text-overflow"><span class="badge badge-xl badge-dot badge-success"></span> In Progress</div>
										<div class="b-1 rounded text-center pb-10 mb-10 w-p100 text-overflow"><span class="badge badge-xl badge-dot badge-light"></span> Complate</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-12">
							<div class="box" style="height: 10rem;">
								<div class="box-bod py-0" >
									<div class="d-flex justify-content-between align-items-center">
										<div style="margin-left: 18px; ">
											<h5 class="text-fade">Applications</h5>
											<h2 class="fw-500 mb-0">132.0K</h2>
										</div>
										<div class="box-1" style="margin-left: -18px;">
											<div id="revenue1" style="padding-top: 3px;"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="box" style="height: 10rem;">
								<div class="box-body py-0 box-2">
									<div class="d-flex justify-content-between align-items-center">
										<div>
											<h5 class="text-fade">Shortlisted</h5>
											<h2 class="fw-500 mb-0">10.9k</h2>
										</div>
										<div>
											<div id="revenue2"  style="padding-top: 3px;"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="box" style="height: 10rem;">
								<div class="box-body py-0 box-3">
									<div class="d-flex justify-content-between align-items-center">
										<div>
											<h5 class="text-fade">On Hold</h5>
											<h2 class="fw-500 mb-0">03.1k</h2>
										</div>
										<div  style="margin-left: 26px;">
											<div id="revenue3"  style="padding-top: 3px;"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-12">
					<div class="box">
						<div class="box-header d-flex justify-content-between">
							<h4 class="box-title">Top Active Jobs</h4>
							<h6 class="box-title text-primary">Last month</h6>
						</div>
						<div class="box-body ps-0 pb-0">
							<div class="ps-20">
								 <div class="chart-switch legend d-flex align-items-center justify-content-start">
									 <div class="d-flex me-15">
										<label class="switch switch-border switch-success">
											<input type="checkbox" checked="" onclick="toggleSeries(this)" value="Applications">
											<span class="switch-indicator"></span>
											<span class="switch-description"></span>
											<span class="ps-5">Applications</span>
										</label>										 
									 </div>
									 <div class="d-flex me-15">
										<label class="switch switch-border switch-info">
											<input type="checkbox" checked="" onclick="toggleSeries(this)" value="Shortlisted">
											<span class="switch-indicator"></span>
											<span class="switch-description"></span>
											<span class="ps-5">Shortlisted</span>
										</label>										 
									 </div>
								  </div>
							</div>
							<div id="active-jobs-chart" class="apex-charts-spark"></div>							  
						</div>
						<div class="box-body">
							<div class="bb-1 d-flex justify-content-between">
								<h5>Job title</h5>
								<h5>Applications</h5>
							</div>
							<div class="d-flex justify-content-between my-15">
								<p class="mb-0 text-fade">Project Manager</p>
								<p class="mb-0"> 
									<strong>325</strong>
									<a href="applications.html" class="waves-effect waves-light btn btn-xs btn-outline btn-primary-light mx-5">
										<i class="fa fa-line-chart"></i>
									</a>
								</p>
							</div>
							<div class="d-flex justify-content-between my-15">
								<p class="mb-0 text-fade">Sales Manager</p>
								<p class="mb-0"> 
									<strong>154</strong>
									<a href="applications.html" class="waves-effect waves-light btn btn-xs btn-outline btn-primary-light mx-5">
										<i class="fa fa-line-chart"></i>
									</a>
								</p>
							</div>
							<div class="d-flex justify-content-between my-15">
								<p class="mb-0 text-fade">Machine Instrument</p>
								<p class="mb-0"> 
									<strong>412</strong>
									<a href="applications.html" class="waves-effect waves-light btn btn-xs btn-outline btn-primary-light mx-5">
										<i class="fa fa-line-chart"></i>
									</a>
								</p>
							</div>
							<div class="d-flex justify-content-between mt-15">
								<p class="mb-0 text-fade">Operation Manager</p>
								<p class="mb-0"> 
									<strong>412</strong>
									<a href="applications.html" class="waves-effect waves-light btn btn-xs btn-outline btn-primary-light mx-5">
										<i class="fa fa-line-chart"></i>
									</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-6 col-12">
					<div class="row">
						<div class="col-xl-6 col-12">
							<div class="box overflow-hidden">
								<div class="box-header no-border">
									<h4 class="box-title text-overflow">
										Total Followers <small class="subtitle">Last  5 days</small>
									</h4>
								</div>
								<div class="box-body p-0">
									<h1 class="mt-0 ps-20 pt-0 fw-500 text-success">215,5K</h1>
									<div id="followers-spark" class="apex-charts-spark"></div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-12">
							<div class="box overflow-hidden">
								<div class="box-header no-border">
									<h4 class="box-title text-overflow">
										Growth of total folower <small class="subtitle">Last  5 days</small>
									</h4>
								</div>
								<div class="box-body p-0">
									<h1 class="mt-0 ps-20 pt-0 fw-500 text-primary">815</h1>
									<div id="growth-spark" class="apex-charts-spark"></div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-12">
							<div class="box overflow-hidden">
								<div class="box-header no-border">
									<h4 class="box-title text-overflow">
										Number of posts <small class="subtitle">Last  5 days</small>
									</h4>
								</div>
								<div class="box-body p-0">
									<h1 class="mt-0 ps-20 pt-0 fw-500 text-info">153</h1>
									<div id="post-spark" class="apex-charts-spark"></div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-12">
							<div class="box overflow-hidden">
								<div class="box-header no-border">
									<h4 class="box-title text-overflow">
										Interactions <small class="subtitle">Last  5 days</small>
									</h4>
								</div>
								<div class="box-body p-0">
									<h1 class="mt-0 ps-20 pt-0 fw-500 text-warning">2154</h1>
									<div id="interactions-spark" class="apex-charts-spark"></div>
								</div>
							</div>
						</div>						
					</div>
				</div>
				<div class="col-xl-3 col-12">
					<div class="box" style="height: 37.2rem;">		
						<div class="box-body px-0" style="min-height: 268px;">	
							<div id="revenue7" class="text-dark"></div>
						</div>
						<div class="box-body pt-0">	
							<h4 class="text-overflow mb-3">Where do my Likes come.</h5>
							<div class="mb-10 bg-lightest p-10 rounded d-flex align-items-center justify-content-between">
								<h5 class="my-0 text-fade">Like (1st Level)  <span class="fw-500 text-primary">(63%)</span></h5>
								<h5 class="my-0 fw-500 text-primary">1,234</h5>
							</div>
							<div class="mb-10 bg-lightest p-10 rounded d-flex align-items-center justify-content-between">
								<h5 class="my-0 text-fade">Like (2ed Level)  <span class="fw-500 text-success">(19%)</span></h5>
								<h5 class="my-0 fw-500 text-success">745</h5>
							</div>
							<div class="bg-lightest p-10 rounded d-flex align-items-center justify-content-between">
								<h5 class="my-0 text-fade">Like (3rd Level)  <span class="fw-500 text-info">(12%)</span></h5>
								<h5 class="my-0 fw-500 text-info">265</h5>
							</div>
						</div>										
					</div>
				</div>
				<div class="col-xl-3 col-12">
					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title">New Applications</h4>
						</div>
						<div class="box-body">
							<div class="application-bx">
								<div class="d-flex align-items-center mb-30">
									<div class="me-15 w-60">
										<img src="../../../images/avatar/avatar-1.png" class="avatar avatar-lg rounded100 bg-primary-light" alt="" />
									</div>
									<div class="d-flex flex-column flex-grow-1 fw-500 text-overflow">
										<a href="extra_profile.html" class="hover-primary mb-1 fs-16">Sophia Doe</a>
										<span class="fs-12 text-overflow"><span class="text-fade">Applied for</span> Advertising Intern</span>
									</div>
									<div class="dropdown">
										<a class="px-10 pt-5" href="index.html#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
										<div class="dropdown-menu">
										  <a class="dropdown-item flexbox" href="mailbox.html">
											<span>Inbox</span>
											<span class="badge badge-pill badge-info">5</span>
										  </a>
										  <a class="dropdown-item" href="mailbox-compose.html">Sent</a>
										  <a class="dropdown-item" href="mailbox-read.html">Spam</a>
										  <div class="dropdown-divider"></div>
										  <a class="dropdown-item flexbox" href="mailbox.html">
											<span>Draft</span>
											<span class="badge badge-pill badge-default">1</span>
										  </a>
										</div>
									</div>
								</div>
								<div class="d-flex align-items-center mb-30">
									<div class="me-15 w-60">
										<img src="../../../images/avatar/avatar-10.png" class="avatar avatar-lg rounded100 bg-primary-light" alt="" />
									</div>
									<div class="d-flex flex-column flex-grow-1 fw-500 text-overflow">
										<a href="extra_profile.html" class="hover-danger mb-1 fs-16">Mason Clark</a>						
										<span class="fs-12 text-overflow"><span class="text-fade">Applied for</span> Project Coordinator</span>
									</div>
									<div class="dropdown">
										<a class="px-10 pt-5" href="index.html#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
										<div class="dropdown-menu">
										  <a class="dropdown-item flexbox" href="mailbox.html">
											<span>Inbox</span>
											<span class="badge badge-pill badge-info">5</span>
										  </a>
										  <a class="dropdown-item" href="mailbox-compose.html">Sent</a>
										  <a class="dropdown-item" href="mailbox-read.html">Spam</a>
										  <div class="dropdown-divider"></div>
										  <a class="dropdown-item flexbox" href="mailbox.html">
											<span>Draft</span>
											<span class="badge badge-pill badge-default">1</span>
										  </a>
										</div>
									</div>
								</div>
								<div class="d-flex align-items-center mb-30">
									<div class="me-15 w-60">
										<img src="../../../images/avatar/avatar-11.png" class="avatar avatar-lg rounded100 bg-primary-light" alt="" />
									</div>
									<div class="d-flex flex-column flex-grow-1 fw-500 text-overflow">
										<a href="extra_profile.html" class="hover-success mb-1 fs-16">Emily Paton</a>						
										<span class="fs-12 text-overflow"><span class="text-fade">Applied for</span> Layout Expert</span>
									</div>
									<div class="dropdown">
										<a class="px-10 pt-5" href="index.html#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
										<div class="dropdown-menu">
										  <a class="dropdown-item flexbox" href="mailbox.html">
											<span>Inbox</span>
											<span class="badge badge-pill badge-info">5</span>
										  </a>
										  <a class="dropdown-item" href="mailbox-compose.html">Sent</a>
										  <a class="dropdown-item" href="mailbox-read.html">Spam</a>
										  <div class="dropdown-divider"></div>
										  <a class="dropdown-item flexbox" href="mailbox.html">
											<span>Draft</span>
											<span class="badge badge-pill badge-default">1</span>
										  </a>
										</div>
									</div>
								</div>
								<div class="d-flex align-items-center mb-30">
									<div class="me-15 w-60">
										<img src="../../../images/avatar/avatar-12.png" class="avatar avatar-lg rounded100 bg-primary-light" alt="" />
									</div>
									<div class="d-flex flex-column flex-grow-1 fw-500 text-overflow">
										<a href="extra_profile.html" class="hover-info mb-1 fs-16">Daniel Breth</a>											
										<span class="fs-12 text-overflow"><span class="text-fade">Applied for</span> Interior Architect</span>
									</div>
									<div class="dropdown">
										<a class="px-10 pt-5" href="index.html#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
										<div class="dropdown-menu">
										  <a class="dropdown-item flexbox" href="mailbox.html">
											<span>Inbox</span>
											<span class="badge badge-pill badge-info">5</span>
										  </a>
										  <a class="dropdown-item" href="mailbox-compose.html">Sent</a>
										  <a class="dropdown-item" href="mailbox-read.html">Spam</a>
										  <div class="dropdown-divider"></div>
										  <a class="dropdown-item flexbox" href="mailbox.html">
											<span>Draft</span>
											<span class="badge badge-pill badge-default">1</span>
										  </a>
										</div>
									</div>
								</div>							
								<div class="d-flex align-items-center mb-30">
									<div class="me-15 w-60">
										<img src="../../../images/avatar/avatar-5.png" class="avatar avatar-lg rounded100 bg-primary-light" alt="" />
									</div>
									<div class="d-flex flex-column flex-grow-1 fw-500 text-overflow">
										<a href="extra_profile.html" class="hover-primary mb-1 fs-16">Theron Trump</a>
										<span class="fs-12 text-overflow"><span class="text-fade">Applied for</span> Advertising Intern</span>
									</div>
									<div class="dropdown">
										<a class="px-10 pt-5" href="index.html#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
										<div class="dropdown-menu">
										  <a class="dropdown-item flexbox" href="mailbox.html">
											<span>Inbox</span>
											<span class="badge badge-pill badge-info">5</span>
										  </a>
										  <a class="dropdown-item" href="mailbox-compose.html">Sent</a>
										  <a class="dropdown-item" href="mailbox-read.html">Spam</a>
										  <div class="dropdown-divider"></div>
										  <a class="dropdown-item flexbox" href="mailbox.html">
											<span>Draft</span>
											<span class="badge badge-pill badge-default">1</span>
										  </a>
										</div>
									</div>
								</div>
								<div class="d-flex align-items-center mb-30">
									<div class="me-15 w-60">
										<img src="../../../images/avatar/avatar-6.png" class="avatar avatar-lg rounded100 bg-primary-light" alt="" />
									</div>
									<div class="d-flex flex-column flex-grow-1 fw-500 text-overflow">
										<a href="extra_profile.html" class="hover-danger mb-1 fs-16">Nil Yeager</a>						
										<span class="fs-12 text-overflow"><span class="text-fade">Applied for</span> Project Coordinator</span>
									</div>
									<div class="dropdown">
										<a class="px-10 pt-5" href="index.html#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
										<div class="dropdown-menu">
										  <a class="dropdown-item flexbox" href="mailbox.html">
											<span>Inbox</span>
											<span class="badge badge-pill badge-info">5</span>
										  </a>
										  <a class="dropdown-item" href="mailbox-compose.html">Sent</a>
										  <a class="dropdown-item" href="mailbox-read.html">Spam</a>
										  <div class="dropdown-divider"></div>
										  <a class="dropdown-item flexbox" href="mailbox.html">
											<span>Draft</span>
											<span class="badge badge-pill badge-default">1</span>
										  </a>
										</div>
									</div>
								</div>
								<div class="d-flex align-items-center">
									<div class="me-15 w-60">
										<img src="../../../images/avatar/avatar-7.png" class="avatar avatar-lg rounded100 bg-primary-light" alt="" />
									</div>
									<div class="d-flex flex-column flex-grow-1 fw-500 text-overflow">
										<a href="extra_profile.html" class="hover-success mb-1 fs-16">Tyler Mark</a>						
										<span class="fs-12 text-overflow"><span class="text-fade">Applied for</span> Layout Expert</span>
									</div>
									<div class="dropdown">
										<a class="px-10 pt-5" href="index.html#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
										<div class="dropdown-menu">
										  <a class="dropdown-item flexbox" href="mailbox.html">
											<span>Inbox</span>
											<span class="badge badge-pill badge-info">5</span>
										  </a>
										  <a class="dropdown-item" href="mailbox-compose.html">Sent</a>
										  <a class="dropdown-item" href="mailbox-read.html">Spam</a>
										  <div class="dropdown-divider"></div>
										  <a class="dropdown-item flexbox" href="mailbox.html">
											<span>Draft</span>
											<span class="badge badge-pill badge-default">1</span>
										  </a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->

  <?php $this->endSection(); ?>
