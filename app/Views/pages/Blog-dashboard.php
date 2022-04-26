<?php $this->extend('/components/portal-frame'); ?>
<?php $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->	  
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">FAQ</h4>
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
</div>
<section class="content">
<div class="card bg-primary-light">
   <div class="card-header">
      <h4 class="card-title">Blogs Page</h4>
   </div>
</div>

<!-- create post -->
<div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fullWidthModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-full-width">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="fullWidthModalLabel">Create Post</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
			</div>
			<div class="modal-body">
				
<!-- blog form -->
<div class="col-12">
    <div class="box">
    <div id="alert"></div>
      
      <div class="box-body">
         <div class="row">
            <div class="col-lg-4 col-12">
               <div class="form-group">
                  <label class="form-label">Post Title</label>
                  <input type="text" id="title" class="form-control">
               </div>
            </div>
            <div class="col-lg-4 col-12">
               <div class="form-group">
                  <label class="form-label">Post Image</label>
                  <input type="file" name="cover" class="form-control">
               </div>
            </div>
            <div class="col-lg-4 col-12">
               <div class="form-group">
                  <label class="form-label">Post Category</label>
                  <select id="cartegory" class="form-control">
                     <option>Select Category</option>
                     <option>SL</option>
                     <option>SA</option>
                     <option>CAS</option>
                     <option>General</option>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label class="text-success form-label">content</label>
               <div class="form-group-feedback form-group-feedback-right">
                  <textarea id="content" name="content" ></textarea>
                  <div class="form-control-feedback text-success">
                     <i class="fa fa-check"></i>
                  </div>
               </div>
            </div>
            <!-- <button id="publish" class="btn btn-primary">Publish</button> -->
         </div>
      </div>
   </div>
</div>
<!-- blog form -->

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
				<button type="button" id="publish" class="btn btn-primary">publish Post</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- create post -->

<div class="row">
<div class="col-xl-4">				
				<div class="box">
					<div class="card-body d-flex p-0">
						<div class="flex-grow-1 px-30 pt-50 pb-100 flex-grow-1 bg-img min-h-350" style="background-position: calc(100% + 0.5rem) bottom; background-size: 30% auto; background-image: url(../../../images/svg-icon/color-svg/custom-5.svg)">

							<p class="text-primary py-10 fs-24 fw-500">
								Create Posts and<br>
								get Noticed<br>
								from Far
							</p>

							<a  data-bs-toggle="modal" data-bs-target="#full-width-modal" class="btn btn-primary-light">create Post</a>

						</div>
					</div>
				</div>
			</div>

            <div class="col-xl-4">
				<div class="box">
					<div class="box-body d-flex p-0">
						<div class="flex-grow-1 bg-info px-30 pt-50 pb-100 flex-grow-1 bg-img min-h-350" style="background-position: right bottom; background-size: 40% auto; background-image: url(../../../images/svg-icon/color-svg/custom-6.svg)">
							<h3 class="fw-500">Discoveries</h3>
							<p class="py-15 fs-16 text-white-70">
								Discover What your<br>
								Peers Have created<br>
								And shared
							</p>
							<a href="" class="btn btn-info-light">Explore Posts</a>
						</div>
					</div>
				</div>
			</div>
</div>

<div class="card bg-primary-light">
   <div class="card-header">
      <h4 class="card-title">My Post</h4>
   </div>
</div>
<div class="row">

			<div class="col-12">
			  <div class="box">
				<div class="box-body">
					<!-- Nav tabs -->
					<ul class="nav nav-pills bg-nav-pills nav-justified">
						<li class="nav-item"> <a href="#navpills-1" class="nav-link active" data-bs-toggle="tab" aria-expanded="false">All</a> </li>
						<li class="nav-item"> <a href="#navpills-2" class="nav-link" data-bs-toggle="tab" aria-expanded="false">Approved</a></li>
						<li class="nav-item"> <a href="#navpills-3" class="nav-link" data-bs-toggle="tab" aria-expanded="true">Pending</a></li>
						<li class="nav-item"> <a href="#navpills-4" class="nav-link" data-bs-toggle="tab" aria-expanded="true">Declined</a></li>
					</ul>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			  <div class="box">
				<div class="box-body">
					<!-- Tab panes -->
					<div class="tab-content faq-bx">
						<div id="navpills-1" class="tab-pane active">						
							
						<div class="row">
							<?php foreach($blogs as $blog): ?>
							

								<div class="col-md-12 col-lg-4">
								<div class="card">
							<div class="card-header d-flex justify-content-between">
								<span><i class="fa fa-user me-2"></i> <a href="box_cards.html#"><?= session()->get('user_name'); ?></a></span>
								<span class="text-success"><?= $blog['blog_status'] ?></span>
							</div>
							<img class="card-img-top bter-0 btsr-0" src="/images/gallery/landscape9.jpg" alt="Card image cap">
							<div class="card-body">
							<h4 class="card-title fw-600"><?= $blog['blog_title']; ?></h4>
							<p class="card-text text-gray-600" style="text-overflow: ellipsis;"><?= substr($blog['blog_content'],0,200); ?></p>
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

						</div>
						<div id="navpills-2" class="tab-pane">
							<!-- Categroy 2 -->
							<div class="row">
							<?php foreach($blogs as $blog): ?>
							<?php if($blog['blog_status'] == 'approved'): ?>

							<div class="col-md-12 col-lg-4">
								<div class="card">
							<div class="card-header d-flex justify-content-between">
								<span><i class="fa fa-user me-2"></i> <a href="box_cards.html#"><?= session()->get('user_name'); ?></a></span>
								<span class="text-success"><?= $blog['blog_status'] ?></span>
							</div>
							<img class="card-img-top bter-0 btsr-0" src="/images/gallery/landscape9.jpg" alt="Card image cap">
							<div class="card-body">
							<h4 class="card-title fw-600"><?= $blog['blog_title']; ?></h4>
							<p class="card-text text-gray-600" style="text-overflow: ellipsis;"><?= substr($blog['blog_content'],0,200); ?></p>
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
							<?php endif; ?>
							<!-- /.col -->
							<?php endforeach; ?> 
							</div>

							<!-- End Categroy 2 -->						
						</div>
						<div id="navpills-3" class="tab-pane">
							<!-- Categroy 3 -->
							<div class="row">
							<?php foreach($blogs as $blog): ?>
							<?php if($blog['blog_status'] == 'pending'): ?>

							<div class="col-md-12 col-lg-4">
								<div class="card">
							<div class="card-header d-flex justify-content-between">
								<span><i class="fa fa-user me-2"></i> <a href="box_cards.html#"><?= session()->get('user_name'); ?></a></span>
								<span class="text-success"><?= $blog['blog_status'] ?></span>
							</div>
							<img class="card-img-top bter-0 btsr-0" src="/images/gallery/landscape9.jpg" alt="Card image cap">
							<div class="card-body">
							<h4 class="card-title fw-600"><?= $blog['blog_title']; ?></h4>
							<p class="card-text text-gray-600" style="text-overflow: ellipsis;"><?= substr($blog['blog_content'],0,200); ?></p>
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
							<?php endif; ?>
							<!-- /.col -->
							<?php endforeach; ?> 
							</div>
							<!-- End Categroy 3 -->						
						</div>
						<div id="navpills-4" class="tab-pane">
							<!-- Categroy 4 -->
							<div class="row">
							<?php foreach($blogs as $blog): ?>
							<?php if($blog['blog_status'] == 'declined'): ?>

							<div class="col-md-12 col-lg-4">
								<div class="card">
							<div class="card-header d-flex justify-content-between">
								<span><i class="fa fa-user me-2"></i> <a href="box_cards.html#"><?= session()->get('user_name'); ?></a></span>
								<span class="text-success"><?= $blog['blog_status'] ?></span>
							</div>
							<img class="card-img-top bter-0 btsr-0" src="/images/gallery/landscape9.jpg" alt="Card image cap">
							<div class="card-body">
							<h4 class="card-title fw-600"><?= $blog['blog_title']; ?></h4>
							<p class="card-text text-gray-600" style="text-overflow: ellipsis;"><?= substr($blog['blog_content'],0,200); ?></p>
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
							<?php endif; ?>
							<!-- /.col -->
							<?php endforeach; ?>
							</div>
							<!-- End Categroy 4 -->						
						</div>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>  
		  </div>




</section>
</div>
<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
<script>
    $("#publish").click(function (e) { 
        e.preventDefault();
        var title = $("#title").val();
        var content = CKEDITOR.instances.content.getData();
        var cartegory = $("#cartegory").val();
        var formData = new FormData();
        formData.append('title', title);
        formData.append('content', content);
        formData.append('cartegory', cartegory);
        formData.append('cover', $("input[name='cover']")[0].files[0]);
        if(content!='' && title !=''){
        $.ajax({
            url: '<?=base_url()?>/dashboard/blogCreate',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (data) {
                $('#alert').html('<div class="alert text-center alert-success">Post published</div>');
                setTimeout(function() {
            $('#alert').html('');
            $("#title").val('');
            $("#cartegory").val('');
            CKEDITOR.instances.content.setData('');
                
            }, 2000);
            }
        });
    }else{
        $('#alert').html('<div class="alert text-center alert-danger">Please fill all fields</div>');
        setTimeout(function() {
            $('#alert').html('');
}, 4000);
        
    }
        
        
    });
</script>
<script src="/src/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');
</script>
<?php $this->endSection(); ?>