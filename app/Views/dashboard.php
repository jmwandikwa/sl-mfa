<?php $this->extend('/components/portal-frame'); 
    $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <div class="container-full">
      <!-- Main content -->
      <section class="content">
         <!-- 
            <div class="card bg-primary-light">
                         <div class="card-header">
                         <h4 class="card-title">Stats</h4>
                         </div>
                     </div> -->
         <div class="row">
            <div class="col-sm-4 col-12">
               <div class="box box-body bg-primary">
                  <div class="flexbox">
                     <span class="icon-User fs-50"><span class="path1"></span><span class="path2"></span></span>
                     <p id="usercounts" class="fs-40 fw-200"></p>
                  </div>
                  <div class="text-end">Users</div>
               </div>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 col-12">
               <div class="box box-body bg-facebook">
                  <div class="flexbox">
                     <span class="icon-File text-primary fs-50"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                     <p id="articlecount" class="fs-40 fw-200">+26</p>
                  </div>
                  <div class="text-end text-fade">Articles</div>
               </div>
            </div>
            <div class="col-sm-4 col-12">
               <div class="box box-body bg-primary">
                  <div class="flexbox">
                     <span  data-feather="trello" class="text-primary fs-50"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                     <p id="eventcount" class="fs-40 fw-200"></p>
                  </div>
                  <div class="text-end">Events</div>
               </div>
            </div>
            <!-- /.col -->
         </div>
         <div class="card bg-primary-light">
            <div class="card-header">
               <h4 class="card-title">Explore</h4>
            </div>
         </div>
         <div class="row">
            <!-- order-xl-1 order-4 -->
            <div class="col-xl-12 col-12 ">
               <div class="row">
                  <div class="col-lg-4 col-12">
                     <div class="box overflow-h">
                        <div class="box-body" style="height:18rem;">
                           <div class="d-flex justify-content-between align-items-center">
                              <h4 class="me-10 mb-0 fw-600">Events for Me</h4>
                              <img src="../../../images/svg-icon/img-1.png" class="img-fluid max-w-150 image-1" alt="" />
                           </div>
                           <div>
                              <a href="/dashboard/events-discover" class="mt-5 btn btn-primary-light d-flex justify-content-between align-items-center">
                              <span class="text-overflow pe-5"><i class="fa fa-file-text me-10"></i><span class="fw-600">10</span> new events posted</span>
                              <i class="fa fa-arrow-right"></i>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- <div class="col-lg-4 col-12">
                     <div class="box overflow-h">
                     	<div class="box-body" style="height:18rem;">
                     		<div class="d-flex justify-content-between align-items-center">
                     			<h4 class="me-10 mb-0 fw-600">My Learning</h4>
                     			<img src="../../../images/svg-icon/img-2.png" class="img-fluid max-w-150 image-1" alt="" />
                     		</div>
                     		<div>
                     			<a href="/dashboard/blog-dash" class="mt-5 btn btn-primary-light d-flex justify-content-between align-items-center">
                     				<span class="text-overflow pe-5"><i class="fa fa-refresh me-10"></i><span class="fw-600">3</span> essential Service Course Update</span>
                     				<i class="fa fa-arrow-right"></i>
                     			</a>
                     		</div>
                     	</div>
                     </div>
                     </div> -->
                  <div class="col-lg-4 col-12">
                     <div class="box overflow-h">
                        <div class="box-body" style="height:18rem;">
                           <div class="d-flex justify-content-between align-items-center">
                              <h4 class="me-10 mb-0 fw-600">My Social Story</h4>
                              <img src="../../../images/svg-icon/img-3.png" class="img-fluid max-w-150 image-1" alt="" />
                           </div>
                           <div>
                              <a href="/dashboard/discover" class="mt-5 btn btn-primary-light d-flex justify-content-between align-items-center">
                              <span class="text-overflow pe-5"><i class="fa fa-commenting-o me-10"></i><span class="fw-600">4</span> New Blog Posts </span>
                              <i class="fa fa-arrow-right"></i>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- user start -->
                  <div class="col-lg-4 col-12 ">
                     <div class="box" style="height:18rem;">
                        <div class="box-body bb-1" >
                           <div class="d-flex align-items-center justify-content-between">
                              <div class="d-flex align-items-center justify-content-between">
                                 <img src="/profile/<?= session()->get('user_image'); ?>" class="me-10 avatar avatar-lg bg-primary-light" alt="" />
                                 <div>
                                    <h4 class="fw-500 mb-0"><?= session()->get('user_name'); ?></h4>
                                    <a href="/dashboard/profile">View Profile</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="box-body">
                           <p class="fw-500">Your Profile is complete for 50%</p>
                           <div class="progress bg-primary-light">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                           </div>
                        </div>
                        <div class="box-footer py-10">
                           <div class="d-flex align-items-center justify-content-between">
                              <p class="fs-12 mb-0 text-overflow">Next: Add Experience</p>
                              <a href="/dashboard/profile" class="waves-effect waves-light btn-sm btn-primary">Finish Your Profile</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- user end -->
               </div>
            </div>
            <!-- order-xl-2 order-1 -->
         </div>
         <div class="row">
		 	<div class="col-12 ">
				 <div class="row">
									<div class="col-md-6 col-lg-4">
										<div class="flex-grow-1 bg-primary p-30 flex-grow-1 bg-img" style="background-position: calc(100% + 0.5rem) bottom; background-size: auto 100%; background-image: url(../../../images/svg-icon/color-svg/custom-15.svg)">
											<h4 class="fw-500">User Articles</h4>
											<p class="my-10">
												Create posts on general topics and share with your friends.<br>
                                    This could be your experiences or your plans or just <br>
                                     anything you want to share.
											</p>
											<a href="/dashboard/blog-dash" class="btn btn-warning py-2 px-6">Create Article</a>
										</div>
									</div>
							<!-- carouse -->

							<div class="col-md-6 col-lg-4">
								<div class="box box-inverse box-carousel slide bg-success">
								<div class="box-header no-border">
									<span class="fa fa-hand-paper-o fs-30"></span>
									<div class="box-tools pull-right">
										<h5 class="box-title">Did you know!</h5>
									</div>
								</div>
								<div class="carousel slide" data-bs-ride="carousel">
									<div class="carousel-inner">
										<div class="carousel-item active">
											<blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
												<p id="carouselfact">Holisticly benchmark plug imperatives for multifunctional deliverables. Seamlessly incubate cross functional action.</p>
												<div class="flexbox">
													<!-- <time class="text-white" datetime="2017-11-22 20:00">22 November, 2017</time>
													<span><i class="fa fa-heart"></i> 62</span> -->
												</div>
											</blockquote>
										</div>
										<div class="carousel-item">
											<blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
												<p>Uniquely revolutionize leveraged catalysts for change for world-class web services. Efficiently underwhelm competitive.</p>
												<div class="flexbox">
													<!-- <time class="text-white" datetime="2017-11-22 20:00">22 November, 2017</time>
													<span><i class="fa fa-heart"></i> 45</span> -->
												</div>
											</blockquote>
										</div>
										<div class="carousel-item">
											<blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
												<p>Enthusiastically optimize cross-media manufactured products without process-centric web services. Conveniently.</p>
												<div class="flexbox">
													<!-- <time class="text-white" datetime="2017-11-22 20:00">22 November, 2017</time>
													<span><i class="fa fa-heart"></i> 65</span> -->
												</div>
											</blockquote>
										</div>
									</div>
								</div>
								</div>
							</div>
							<!-- end carousel -->
							<div class="col-md-6 col-lg-4">
										<div class="flex-grow-1 bg-warning p-30 flex-grow-1 bg-img" style="background-position: calc(100% + 0.5rem) bottom; background-size: auto 100%; background-image: url(../../../images/svg-icon/color-svg/custom-7.svg)">
											<h4 class="fw-500">Events</h4>
											<p class="my-10">
												Boost Your event participants list by creating<br>
                                    new events.
											</p>
											<a href="/dashboard/events-dash" class="btn btn-primary py-2 px-6">Create event</a>
										</div>
							</div>
        	 </div>
			 <!-- end row -->
         </div>
     </div>


					 <div class="card bg-primary-light">
                         <div class="card-header">
                         <h4 class="card-title">Activities & events</h4>
                         </div>
                     </div> 
         <div class="row">
					<div class="col-lg-4 col-12 ">
						<div class="box">
							<div class="box-header">
								<h4 class="box-title">Event Highlights
									
								</h4>
							</div>
							<div class="box-body">	
								<div class="flex-grow-1 pb-15">	
									<div class="d-flex align-items-center pe-2 mb-30">							
										<span id="date" class="text-fade fw-600 fs-16 flex-grow-1">
											7 Hours Ago
										</span>
										<div class="bg-info-light h-40 w-50 l-h-50 rounded text-center">
											<img src="../../../images/svg-icon/color-svg/001-glass.svg" class="h-30 align-self-center" alt="" >
										</div>							
									</div>
							
									<a id="title" href="" class="text-dark fw-600 hover-primary fs-18">
										
									</a>
									<p id="description" class="fs-16 mt-15 text-fade">
										
									</p>
								</div>	
								<div class="flex-grow-1 pb-15">	
									<span class="flex-grow-1">Participants</span>
								</div>				
								<div class="d-flex flex-column mt-10">
									<div id="users" class="d-flex users">
										
									</div>
								</div>
							</div>					
						</div>
					</div> 
            <div class="col-lg-8 col-12">
               <div class="box">
                  <div class="box-header">
                     <h4 class="box-title">Recent Activities
                        <small class="subtitle">test</small>
                     </h4>
                  </div>
                  <div class="box-body p-0">
                     <div class="table-responsive">
                        <table class="table no-border table-vertical-center">
                           <thead>
                              <tr>
                                 <th class="p-0" style="width: 50px"></th>
                                 <th class="p-0" style="min-width: 150px"></th>
                                 <th class="p-0" style="min-width: 140px"></th>
                                 <th class="p-0" style="min-width: 120px"></th>
                                 <th class="p-0" style="min-width: 40px"></th>
                              </tr>
                           </thead>
                           <tbody>
                              <!-- <tr>
                                 <td>
                                    <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                       <img src="../../../images/svg-icon/color-svg/001-glass.svg" class="h-30" alt="">
                                    </div>
                                 </td>
                                 <td>
                                    <a href="widgets.html#" class="text-dark fw-600 hover-primary fs-16">Vivamus consectetur</a>
                                    <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                 </td>
                                 <td class="text-end">
                                    <span class="text-fade">
                                    Lacus lacinia mollis
                                    </span>
                                 </td>
                                 <td class="text-end">
                                    <span class="text-fade">
                                    Generated 5 paragraphs
                                    </span>There are many variations of passages.<br>
                                    Lorem Ipsum available>
                                 </td>
                                 <td class="text-end">
                                    <a href="" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                 </td>
                              </tr> -->
                             
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>

		 	
		 <div class="col-12">
			  	<div class="box bg-primary-light">
					<div class="box-header no-border">
						<h4 class="box-title text-primary">Recently Joined</h4>
					</div>
				</div>
		</div>
		<!-- users  -->
		<div class="row" id="recent-users">
			  

		  </div>	
		  <!-- users end -->

        </div> 

      </section>
      <!-- /.content -->
   </div>
</div>
<!-- /.content-wrapper -->


  <?php $this->endSection(); ?>


<?php $this->section('scripts');?>

<script>
	$(document).ready(function () {
		// wallkThrough();
		stats();
		getEvent();
		
	});


function getEvent(){

	$.ajax({
		type: "get",
		url: "/functions/getEv",
		success: function (response) {
			// parse json
			var data = JSON.parse(response);
			var title = data['event']['event_title'];
			var id = data['event']['event_id'];
			let date = data['event']['event_date'];
			let today = '<?= date('Y-m-d H:i:s') ?>'
			$('#title').html(title).attr('href', '/dashboard/event/'+id);
			users(id);
			if(date > today){
				$('#date').html('<span class="badge badge-success">Upcoming event</span');
			}else{
				$('#date').html('<span class="badge badge-danger">Finished event</span>');
			}
			

		},
		error: function(e){
			swal('no','no','error');
		}
	});
}


function users(id){
        $.ajax({
            type: "POST",
            url: "/functions/eventUsers",
            data: {
                'event_id': id
                
            },
            datatype: 'json',
            success: function(r){
                $("#applicant").html('');

                var users = JSON.parse(r);
                $("#usercount").html(users.length);
                // foreach user in users
			if(users.length > 0){
                for(var i = 0; i < 4; i++){
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



                            var html = '<a href="" class="me-15 bg-lightest h-40 w-40 l-h-50 rounded-circle text-center overflow-hidden">'+
										'<img src="/profile/'+user['user_image']+'"" class="h-50 align-self-end" alt="" >'+
										'</a>';
										$("#users").append(html);


                            // append the user to the list
                            // var html = "<div class='d-flex align-items-center mb-30'><div class='me-15 w-60'><img src='/profile/"+user['user_image']+"' class='avatar avatar-lg rounded100 bg-primary-light' alt='' /></div><div class='d-flex flex-column flex-grow-1 fw-500 text-overflow'><a href='' class='hover-primary mb-1 fs-16'>"+user['user_name']+"</a><span class='fs-12 text-overflow'><span class='text-fade'>Applied for</span> Advertising Intern</span></div><div class='dropdown'><a class='px-10 pt-5' href='' data-bs-toggle='dropdown'><i class='ti-more-alt'></i></a><div class='dropdown-menu'><a class='dropdown-item flexbox' href=''><span>Inbox</span><span class='badge badge-pill badge-info'>5</span></a><a class='dropdown-item' href='mailbox-compose.html'>Sent</a><a class='dropdown-item' href=''>Spam</a><div class='dropdown-divider'></div><a class='dropdown-item flexbox' href='mailbox.html'><span>Draft</span><span class='badge badge-pill badge-default'>1</span></a></div></div></div>";
                            
                            


                            // $("#users").append(<li class="list-group-item"><a href="/profile/'+user.user_id+'"></a></li>');
                        },
                        error: function(e){
                            alert("error");
                        }
          });
	

        }	
	}else{
			$("#users").html('no users');
		}

               
                
            },
            error: function(e){
                alert("error");
            },
            
        });
    }

function stats(){
	usercount();
	articlecount();
	eventcount();
   carousel()
	
}


function usercount(){
	$.ajax({
		type: "get",
		url: "/functions/users",
		success: function (response) {
			// parse json
			var data = JSON.parse(response);
			console.log(data);

			$("#usercounts").html(data['users'].length);
			// $('#usercount').html('33');

			// now lets insert the users in the user box
				for(var i=0; i<3; i++){
					var user = data['users'][i];
                     console.log(i);
					var html = '<div class="col-lg-4 col-lg-2">'+
					'<div class="box box-body text-center py-30">'+
					'<a href="">'+
					'<img class="avatar avatar-xxl  rounded-circle" src="/profile/'+user['user_image']+'" alt="">'+
					'</a>'+
					'<h5 class="mt-10 mb-1"><a class="hover-primary" href="">'+user['user_name']+'</a></h5>'+
					'<p class="text-fade">Newbie</p>'+
					'</div>'+
					'</div>';
					
					$('#recent-users').append(html);
				}

		},
		error : function(e){
			swal('error','error','error');
		}
	});
}

function articlecount(){
	$.ajax({
		type: "get",
		url: "/functions/articles",
		success: function (response) {
			// parse json
			var data = JSON.parse(response);
			console.log(data);

			$("#articlecount").html(data['articles'].length);
			// $('#usercount').html('33');
		},
		error : function(e){
			swal('error','error','error');
		}
	});

}
function eventcount(){
	$.ajax({
		type: "get",
		url: "/functions/events",
		success: function (response) {
			// parse json
			var data = JSON.parse(response);
			console.log(data);

			$("#eventcount").html(data['events'].length);
			// $('#usercount').html('33');
		},
		error : function(e){
			swal('error','error','error');
		}
	});

}

function carousel(){
   const settings = {
	"async": true,
	"crossDomain": true,
	"url": "https://random-facts2.p.rapidapi.com/getfact",
	"method": "GET",
	"headers": {
		"X-RapidAPI-Host": "random-facts2.p.rapidapi.com",
		"X-RapidAPI-Key": "756e86e552msh8f06bfde000729dp13f5fcjsn7dfc423afbcd"
	}
};

$.ajax(settings).done(function (response) {
	console.log(response['Fact']);

   $("#carouselfact").html(response['Fact']);
});
}

function wallkThrough(){
	const tour = new Shepherd.Tour({
  defaultStepOptions: {
    cancelIcon: {
      enabled: true
    },
    classes: 'class-1 class-2',
    scrollTo: { behavior: 'smooth', block: 'center' }
  }
});

tour.addStep({
  title: 'Creating a Shepherd Tour',
  text: `Creating a Shepherd tour is easy. too!\
  Just create a \`Tour\` instance, and add as many steps as you want.`,
  attachTo: {
    element: '.hero-example',
    on: 'bottom'
  },
  buttons: [
    {
      action() {
        return this.back();
      },
      classes: 'shepherd-button-secondary',
      text: 'Back'
    },
    {
      action() {
        return this.next();
      },
      text: 'Next'
    }
  ],
  id: 'creating'
});

tour.start();
}

</script>
<?php $this->endSection();?>


<!-- bgin of user event -->
				<!-- order-xl-2 order-2 -->
				<!-- <div class="col-lg-4 col-12 ">
				<div class="box">
					<div class="box-body">	
						<div class="flex-grow-1 pb-15">	
							<div class="d-flex align-items-center pe-2 mb-30">							
								<span id="date" class="text-fade fw-600 fs-16 flex-grow-1">
									7 Hours Ago
								</span>
								<div class="bg-info-light h-40 w-50 l-h-50 rounded text-center">
									<img src="../../../images/svg-icon/color-svg/001-glass.svg" class="h-30 align-self-center" alt="" >
								</div>							
							</div>
							<a id="title" href="" class="text-dark fw-600 hover-primary fs-18">
								
							</a>
							<p id="description" class="fs-16 mt-15 text-fade">
								
							</p>
						</div>							
						<div class="d-flex flex-column mt-10">
							<div id="users" class="d-flex users">
								
							</div>
						</div>
					</div>					
				</div>
			</div> -->
			<!-- end of user event -->