<?php $this->extend('/components/portal-frame'); ?>
<?php $this->section('content'); ?>

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

		  <?php foreach($posts as $post): ?>
            
								<div class="col-md-12 col-lg-4">
								<div class="card">
							<div class="card-header d-flex justify-content-between">
								<span><i class="fa fa-user me-2"></i> <a href="box_cards.html#"><?= session()->get('user_name'); ?></a></span>
								<span class="text-success"><?= $post['blog_status'] ?></span>
							</div>
							<img class="card-img-top bter-0 btsr-0" src="/images/gallery/landscape9.jpg" alt="Card image cap">
							<div class="card-body">
							<h4 class="card-title fw-600"><?= $post['blog_title']; ?></h4>
							<p class="card-text text-gray-600" style="text-overflow: ellipsis;"><?= substr($post['blog_content'],0,200); ?></p>
							</div>
							<div class="card-footer justify-content-between d-flex">
							<ul class="list-inlin                                                                                                                                                                                                                                                                                           e mb-0 me-2">
								<li class="list-inline-item">
									<a href="box_cards.html#"><i class="fa fa-heart-o"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="box_cards.html#"><i class="fa fa-comment-o"></i></a>
								</li>
							</ul>

							<ul class="list-inline mb-0">
								<li><a href="box_cards.html#">Edit</a></li>
								<li><a href="box_cards.html#">Delete</a></li>
							</ul>
							</div>
							</div>
							</div>
							
							<!-- /.col -->
            <?php endforeach; ?>
          </div>

		</section>
		<!-- /.content -->	  
	  </div>
  </div>
  <!-- /.content-wrapper -->
  <?php $this->endSection(); ?>
