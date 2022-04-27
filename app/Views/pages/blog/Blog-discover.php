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
		<div class="col-xl-4 col-md-6 col-12">
				<div class="blog-post rounded">
					<div class="entry-image clearfix">
							<div class="item">
								<img src="/covers/<?= $post['blog_cover'];?>" alt="">
							</div>
							
					</div>
					<div class="blog-detail">
						<div class="entry-title mb-10">
							<a href=""><?= $post['blog_title'];?></a>
						</div>
						
						<div class="entry-meta mb-10">
							<ul class="list-unstyled">
								<li><a href="widgets_blog.html#" class="text-mute hover-primary"><i class="fa fa-folder-open-o"></i>General</a></li>
								<li><a href="widgets_blog.html#" class="text-mute hover-primary"><i class="fa fa-comment-o"></i> 5</a></li>
								<li><a href="widgets_blog.html#" class="text-mute hover-primary"><i class="fa fa-calendar-o"></i><?= $post['blog_created_at'];?></a></li>
							</ul>
						</div>
						<div class="entry-content">
										<p class="text-gray-600"><?= $post['blog_description'];?></p>
									</div>
						<div class="entry-share d-flex justify-content-between align-items-center">
							<div class="entry-button">
								<a href="#" class="btn btn-primary-light btn-sm">Read more</a>
							</div>
							<div class="social">
								<strong>Share : </strong>
								<ul class="list-unstyled">
									<li>
										<a href="widgets_blog.html#" class="text-mute hover-primary"> <i class="fa fa-facebook"></i> </a>
									</li>
									<li>
										<a href="widgets_blog.html#" class="text-mute hover-primary"> <i class="fa fa-twitter"></i> </a>
									</li>
									<li>
										<a href="widgets_blog.html#" class="text-mute hover-primary"> <i class="fa fa-pinterest-p"></i> </a>
									</li>
									<li>
										<a href="widgets_blog.html#" class="text-mute hover-primary"> <i class="fa fa-dribbble"></i> </a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
          </div>

		</section>
		<!-- /.content -->	  
	  </div>
  </div>
  <!-- /.content-wrapper -->
  <?php $this->endSection(); ?>
