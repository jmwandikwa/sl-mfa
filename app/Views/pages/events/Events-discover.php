<!--  extend portal-frame view and section content -->
<?php $this->extend('/components/portal-frame');?>
<?php $this->section("content");?>
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->	  
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Discover Page</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="sample_faq.html#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Sample Page</li>
								<li class="breadcrumb-item active" aria-current="page">FAQ</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
        <div class="row">
        <?php foreach($events as $event): ?>
				<div class="col-lg-4 col-12">
					<div class="box">
						<div class="box-body">	
							<div class="d-flex flex-wrap align-items-center">							
								<div class="me-25 bg-danger-light h-60 w-60 rounded text-center b-1">
									  <img src="" class="align-self-center" alt="">
								</div>

								<div class="d-flex flex-column flex-grow-1 my-lg-0 my-10 pe-15">
                                    <a href="" class="text-info fw-600 hover-danger fs-18">
                                        <?= session()->get("user_name"); ?>
                                    </a>
									<span class="text-fade fw-600 fs-16">
										<?= $event['event_venue']; ?>
									</span>
									<span class="text-fade fw-600 fs-16">
										<?= $event['event_date']; ?>
									</span>
								</div>
							</div>
							<div class="mt-20">
								<h4 class="text-primary mb-20"><?= $event['event_title']; ?></h4>
								<p class="text-fade"><?=substr($event['event_description'],0,200); ?></p>

								<div class="d-flex flex-column w-p100 mt-30">
									<span class="text-fade me-10 fs-16 fw-600 pb-15">
										applicants (15/20)
									</span>

									<div class="progress progress-xs w-p100">
										<div class="progress-bar bg-danger" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="mt-10 d-flex justify-content-between align-items-center">
									<a href="jobs_details.html" class="waves-effect waves-light btn btn-primary mb-5">Join Event</a>
									<p class="mb-0 text-fade"><i class="fa fa-map-marker"></i><?= $event['event_venue']; ?></p>
								</div>
							</div>
						</div>					
					</div>
				</div>
            <?php endforeach; ?>
        </div>
        </section>  

    </div>
</div>
<?php $this->endSection();?>