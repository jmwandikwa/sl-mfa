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

            <div class="card bg-primary-light">
                <div class="card-header">
                <h4 class="card-title">Events Dashboard</h4>
                </div>
            </div>

<!-- create post -->
<div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fullWidthModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-full-width">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="fullWidthModalLabel">Create Event</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
			</div>
			<div class="modal-body">
				
<!-- blog form -->
<div class="col-12">
    <div class="box">
    <div id="alert"></div>
      
      <div class="box-body">
         <div class="row cols-row">
            <div class="col-lg-4 col-12">
               <div class="form-group">
                  <label class="form-label">Event Title</label>
                  <input type="text" id="title" class="form-control">
               </div>
            </div>
            
            <div class="col-lg-4 col-12">
               <div class="form-group">
                  <label class="form-label">event Venue</label>
                  <input type="text" id="venue" class="form-control">
               </div>
            </div>
            <div class="col-lg-4 col-12">
               <div class="form-group">
                  <label class="form-label">Event Date</label>
                  <input type="date" id="date" class="form-control">
               </div>
            </div>
            
               <div class="form-group">
                  <label class="form-label">event Description</label>
                    <textarea id="description" rows="5" class="form-control"></textarea>							
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
                <div class="col-xl-6"> 
				<div class="box">
					<div class="box-body d-flex p-0">
						<div class="flex-grow-1 p-30 flex-grow-1 bg-img" style="background-position: left bottom; background-size: auto 80%; background-image: url(../../../images/svg-icon/color-svg/custom-2.svg)">
							<div class="row">
								<div class="col-12 col-xl-7"></div>
								<div class="col-12 col-xl-5">
									<h4 class="text-primary fw-500">Explore and Join upcoming events</h4>

									<p class="text-fade my-10 fs-16">
										Check out open events from your peers and signup to participate in them.
									</p>
									<a href="widgets.html#" class="btn btn-primary-light">Explore</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            <div class="col-xl-3">
				<div class="box">
					<div class="box-body d-flex p-0">
					<div class="flex-grow-1 bg-primary p-30 flex-grow-1 bg-img" style="background-position: calc(100% + 0.5rem) bottom; background-size: auto 100%; background-image: url(../../../images/svg-icon/color-svg/custom-4.svg)">

						<h4 class="fw-500">Events LIke</h4>

						<div class="mt-5">
							<div class="d-flex mb-10 fs-16">
								<span class="icon-Arrow-right mt-5 me-10"><span class="path1"></span><span class="path2"></span></span>
								<span class="text-white-70">Farming</span>
							</div>

							<div class="d-flex mb-10 fs-16">
								<span class="icon-Arrow-right mt-5 me-10"><span class="path1"></span><span class="path2"></span></span>
								<span class="text-white-70">Sporting</span>
							</div>

							<div class="d-flex mb-10 fs-16">
								<span class="icon-Arrow-right mt-5 me-10"><span class="path1"></span><span class="path2"></span></span>
								<span class="text-white-70">Development</span>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
            <div class="col-xl-3">
				<div class="box">
					<div class="box-body d-flex p-0">
						<div class="flex-grow-1 bg-danger p-30 flex-grow-1 bg-img" style="background-position: calc(100% + 0.5rem) bottom; background-size: auto 100%; background-image: url(../../../images/svg-icon/color-svg/custom-3.svg)">

							<h4 class="fw-500">Be The manager</h4>

							<p class="my-10 fs-16 text-white-70">
								Create an event to get signups <br>and participants for your service.
							</p>

							<a data-bs-toggle="modal" data-bs-target="#full-width-modal"class="btn btn-danger-light">Create Event</a>
						</div>
					</div>
				</div>
			</div>
        </div>

            <div class="card bg-primary-light">
                <div class="card-header">
                <h4 class="card-title">My Events</h4>
                </div>
            </div>
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
        <!-- /.content -->
      </div>
</div>

<?php $this->endSection();?>
<?php $this->section("scripts");?>
<script src="/src/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>

<script>
    $(document).ready(function () {
        $("#publish").click(function (e) { 
        e.preventDefault();
        var title = $("#title").val();
        var content = CKEDITOR.instances.description.getData();
        var venue = $("#venue").val();
        var date = $("#date").val();
        
        var formData = new FormData();
        formData.append('title', title);
        formData.append('date',date);
        formData.append('venue',venue);
        formData.append('description',content);
        if(title != '' && content != '' && venue != '' && date!= ''){
            $.ajax({
                type: "POST",
                url: "/dashboard/eventsupload",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                     $('#alert').html('<div class="alert text-center alert-success">event published for Review</div>');
                setTimeout(function() {
            $('#alert').html('');
            $("#title").val('');
            $("#cartegory").val('');
            CKEDITOR.instances.content.setData('');
                
            }, 2000);
                },
                error: function(e){
                    $('#alert').html('<div class="alert text-center alert-danger">Error submiting your event</div>');
        setTimeout(function() {
            $('#alert').html('');
}, 4000);
                }
            });
            

        }else{
            $('#alert').html('<div class="alert text-center alert-danger">Please fill all fields</div>');
        setTimeout(function() {
            $('#alert').html('');
}, 4000);
        }
            
        });
    });
   
</script>


<?php $this->endSection(); ?>