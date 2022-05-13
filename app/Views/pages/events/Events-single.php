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
				<div class="col-lg-8 col-12">
					<div class="box">
						<div class="box-body">
							<a href="/dashboard/eventsdiscover" class="mb-15 d-block"><i class="fa fa-angle-left"></i> Back to all jobs</a>
							<div class="d-md-flex justify-content-between align-items-center">
								<div>
									<h4 class="mb-0"><?= $event['event_title'];?></h4>
									<p class="text-fade"><?= $event['event_date'];?> - <?= $event['event_venue'];?></p>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-12">
									<h4>Event Description</h4>
                                    <p class="text-fade"><?= $event['event_description'];?></p>
								</div>
								<div class="col-xl-8 col-12">
									<div id="clicks_jobs"></div>
								</div>
								<div class="col-xl-4 col-12">
									<div>
										<!-- <h5>Click This Week <i class="fa fa-info-circle text-primary"></i></h5> -->
										<p class="text-fade"></p>
                                            <!-- <span class="text-primary">
                                                <i class="fa fa-circle"></i>
                                            </span>
                                            <span class="text-primary">
                                                <i class="fa fa-circle"></i>
                                            </span>
                                            <span class="text-fade">
                                                <i class="fa fa-circle"></i>
                                            </span>
                                            <span class="text-fade">
                                                <i class="fa fa-circle"></i>
                                            </span>
                                            <span class="text-fade">
                                                <i class="fa fa-circle"></i>
                                            </span>
                                            <span class="text-fade">
                                                <i class="fa fa-circle"></i>
                                            </span>
                                            <span class="text-fade">
                                                <i class="fa fa-circle"></i>
                                            </span>
                                            <span class="text-fade">
                                                <i class="fa fa-circle"></i>
                                            </span> -->
									</div>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-12">
									<h4>Candidates</h4>
								</div>
								<div class="col-md-6 col-12">
									<div class="text-center b-1 bg-nav-pills p-30 Awaiting_box mb-2">
										<h6 class="mt-0 text-fade">Joined Participants</h6>
										<h1 class="mb-0 text-fade" id="usercount"></h1>
									</div>
								</div>
								<!-- <div class="col-md-6 col-12">
									<div class="text-center b-1 bg-nav-pills p-30 Awaiting_box mb-2">
										<h6 class="mt-0 text-fade">Total (Excluding Rejected)</h6>
										<h1 class="mb-0 text-fade">51</h1>
									</div>
								</div> -->
								<!-- <div class="col-12 text-end">
									<p class="text-fade mt-15">0 Rejected</p>
								</div> -->
								
							</div>
							<hr>
							
							<hr>
							<div class="row">
								<div class="col-12">
									<h4 class="mb-25">Event Highlight</h4>
									
									<!-- <h4 class="text-fade">You have requested that Indeed ask candidates the following questions:</h4>
									<ul class="text-fade">
										<li>What is the highest level of education you have completed? </li>
								    </ul> -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-12">
					<div class="box">
						<div class="box-body">
							<button id="join" onclick="join(<?= $event['event_id'];?>)" class="waves-effect waves-light btn btn-block w-p100 btn-primary mb-15">Join Event</button>
							<div class="media-list media-list-hover media-list-divided">
								<a class="media media-single rounded-0" href="jobs_details.html#">
								  <span class="title mx-0 text-fade">Create Event </span>
								  <span class="badge badge-pill badge-secondary-light mx-0"><i class="fa fa-arrow-right"></i></span>
								</a>
								<a class="media media-single rounded-0" href="jobs_details.html#">
								  <span class="title mx-0 text-fade">View Cost & Performance </span>
								  <span class="badge badge-pill badge-secondary-light mx-0"><i class="fa fa-arrow-right"></i></span>
								</a>
								
						    </div>
							<!-- <a href="" class="waves-effect waves-light btn btn-block w-p100 btn-outline btn-success my-15">Add Candidate</a> -->
							<div>
								<p class="text-fade"><strong>Views:</strong> 251</p>
								<p class="text-fade"><strong>Candidates:</strong> 251</p>
								<p class="text-fade"><strong>Status:</strong> Open - <span class="badge badge-primary-light">Pause</span></p>
								<p class="text-fade"><strong>Created:</strong> 18-Nov</p>
							</div>
							<a id="exit" onclick="exi(<?= $event['event_id'];?>)" class="waves-effect waves-light btn btn-block w-p100 btn-outline btn-danger my-15" style="display: none;">Quite Event</a>
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

                <div class="col-xl-8 col-12">
					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title">Joined</h4>
							<a onclick="users();"class="mt-md-0 mt-10 waves-effect waves-dark btn btn-primary d-table text-nowrap float-end">Refresh list</a>
						</div>
						
						<div class="box-body">
							<div id="applicant" class="application-box">
								<!-- <div class="d-flex align-items-center mb-30">
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
								</div> -->
								
								
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
<?php $this->section('scripts'); ?>
<script>
    $(document).ready(function () {
        
            // users();
        
        $.ajax({ 
            type: "POST",
            url: "/functions/eventcheck",
            data: {
                'user_id': <?= session()->get('user_id') ?>,
                'event_id': <?= $event['event_id']; ?>,
            },
            success: function (r) {
                
                if(r == 'true'){
                    $('#join').removeClass('btn-primary').addClass('btn-success').text('Joined').removeAttr('onclick');
                    $("#exit").removeAttr('style');

                }else{
                    // $('#join').removeClass('btn-success').addClass('btn-primary').text('Join').attr('onclick', 'joinEvent()');
                }
            },
            error: function(e){
                alert("e")
            }
        });
        users();
    });

    function join(id){
        $.ajax({
            type: "POST",
            url: "/functions/join",
            data: {
                'user_id': <?= session()->get('user_id') ?>,
                'event_id': id
            },
            success: function(r){
                if(r == 'success'){

                    $('#join').removeClass('btn-primary').addClass('btn-success').text('Joined').removeAttr('onclick');
                    $("#exit").removeAttr('style');
                    let count = parseInt($("#usercount").html());
                    $("#usercount").html(count+1);
                }
                    // $("#join").attr("onclick", "leave("+id+")");
                    // $("#join").html("Leave");
                    // $('#join_'+id).html('<i class="fa fa-check"></i> Joined');
                    // $('#join_'+id).attr('onclick', 'unjoin('+id+')');
                
            },
            error: function(e){
                alert("error");
            }
        });
    }

    function exi(id){
        $.ajax({
            type: "POST",
            url: "/functions/exitEvent",
            data: {
                'user_id': <?= session()->get('user_id') ?>,
                'event_id': <?= $event['event_id']; ?>,
            },
            success: function(r){
                if(r == 'success'){
                    $('#join').removeClass('btn-success').addClass('btn-primary').text('Join Event').attr('onClick', 'join(<?= $event['event_id'];?>)');
                    $("#exit").attr('style', 'display: none');
                    let count = $("#usercount").html();
                    $("#usercount").html(count-1);

                }
                    // $("#join").attr("onclick", "leave("+id+")");
                    // $("#join").html("Leave");
                    // $('#join_'+id).html('<i class="fa fa-check"></i> Joined');
                    // $('#join_'+id).attr('onclick', 'unjoin('+id+')');
                
            },
            error: function(e){
                alert("error");
            }
        });
    }
        // $("#exit").removeAttr('style');

    function users(){
        $.ajax({
            type: "POST",
            url: "/functions/eventUsers",
            data: {
                'event_id': <?= $event['event_id']; ?>,
                
            },
            datatype: 'json',
            success: function(r){
                $("#applicant").html('');

                var users = JSON.parse(r);
                $("#usercount").html(users.length);
                // foreach user in users
                for(var i = 0; i < users.length; i++){
                    var user = users[i];
                    var user_id = user['event_user_id'];
                    $.ajax({
                        type: "POST",
                        url: "/functions/getUser",
                        data: {
                            'user_id': user_id,
                        },
                        success: function(r){
                            var user = JSON.parse(r);
                            console.log(r)

                            
                            // append the user to the list
                            var html = "<div class='d-flex align-items-center mb-30'><div class='me-15 w-60'><img src='/profile/"+user['user_image']+"' class='avatar avatar-lg rounded100 bg-primary-light' alt='' /></div><div class='d-flex flex-column flex-grow-1 fw-500 text-overflow'><a href='' class='hover-primary mb-1 fs-16'>"+user['user_name']+"</a><span class='fs-12 text-overflow'><span class='text-fade'>Applied for</span> Advertising Intern</span></div><div class='dropdown'><a class='px-10 pt-5' href='' data-bs-toggle='dropdown'><i class='ti-more-alt'></i></a><div class='dropdown-menu'><a class='dropdown-item flexbox' href=''><span>Inbox</span><span class='badge badge-pill badge-info'>5</span></a><a class='dropdown-item' href='mailbox-compose.html'>Sent</a><a class='dropdown-item' href=''>Spam</a><div class='dropdown-divider'></div><a class='dropdown-item flexbox' href='mailbox.html'><span>Draft</span><span class='badge badge-pill badge-default'>1</span></a></div></div></div>";
                            
                            
                            $("#applicant").append(html);


                            // $("#users").append(<li class="list-group-item"><a href="/profile/'+user.user_id+'"></a></li>');
                        },
                        error: function(e){
                            alert("error");
                        }
          });
                    

                }

               
                
            },
            error: function(e){
                alert("error");
            },
            
        });
    }

</script>

<?php $this->endSection(); ?>cx