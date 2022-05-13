<!--  extend portal-frame view and section content -->
<?php $this->extend('/components/portal-frame');?>
<?php $this->section("content");?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->	  
		<!-- <div class="content-header">
			<div class="d-md-flex align-items-center justify-content-between">
				<div>
					<a href="jobs_details.html" class="waves-effect waves-light btn active btn-outline btn-primary">Jobs</a>
					<a href="candidates.html" class="waves-effect waves-light btn btn-outline btn-primary mx-lg-10">Candidates</a>
					<a href="mailbox.html" class="waves-effect waves-light btn btn-outline btn-primary">Messages</a>
				</div>
				<a href="jobs_details.html#" class="waves-effect waves-light btn btn-danger mt-10 mt-md-0">Post A Jobs</a>
				
			</div>
		</div> -->
		<!-- Main content -->
		<section class="content">
			<div class="row">
			<div class="col-12">
				<div class="box card-inverse bg-img" style="background-image: url(/covers/<?= $blog['blog_cover']?>); background-size:cover; background-repeat:no-repeat; padding-bottom: 275px;">
				  <div class="flexbox align-items-center px-20" data-overlay="4">
					<div class="flexbox align-items-center me-auto">
					  <a href="widgets_social.html#">
						<img class="avatar avatar-xl avatar-bordered" src="../../../images/avatar/4.jpg" alt="">
					  </a>
					  <div class="ps-10 d-none d-md-block">
						<h5 class="mb-0"><a class="hover-primary text-white" href="widgets_social.html#">Roben Clark</a></h5>
						<span>Manager</span>
					  </div>
					</div>

					<ul class="flexbox flex-justified text-center py-20">
					  
					  <li class="ps-10">
						<span class="opacity-60">Posts</span><br>
						<span class="fs-20">2</span>
					  </li>
					</ul>
				  </div>

				</div>
			  </div>
				<div class="col-lg-8 col-12">
					<div class="box">
						<div class="box-body">
						
							
							<div class="row">
								<div class="col-12">
									<h4 class="text-center pb-4"><?= $blog['blog_title'] ?></h4>
                                    <p class="text-fade "><?= $blog['blog_content']?></p>
								</div>
								<div class="col-xl-8 col-12">
									<div id="clicks_jobs"></div>
								</div>
							
							</div>
							
							
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-12">
					<div class="box">
						<div class="box-body">
							
							
                            <div class="col-12">
									<div class="bg-primary-light p-15">
										<div class="d-md-flex justify-content-between align-items-center">
											<div>												
												<i class="fa fa-info fs-24 mb-6"></i>
												<h4 class="text-primary">Discover your top applicants faster</h4>
												<p>There are many variations of passages of Lorem Ipsum available, by injected humour. </p>
												<a href="#" class="mt-md-0 mt-10 waves-effect waves-light btn btn-primary d-table text-nowrap">Learn About</a>
											</div>
																					
										</div>
									</div>
								</div>
                                <br>
							<a href="jobs_details.html#" class="p-5 bg-facebook text-white d-inline-block mb-10 rounded"><i class="fa fa-facebook-f"></i> Share 0</a>
							<a href="jobs_details.html#" class="p-5 bg-twitter text-white d-inline-block mb-10 rounded"><i class="fa fa-twitter"></i> Tweet</a>
							<a href="jobs_details.html#" class="p-5 bg-linkedin text-white d-inline-block mb-10 rounded"><i class="fa fa-linkedin-square"></i> Share</a>
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
<?php $this->section('scripts'); ?>


<?php $this->endSection(); ?>