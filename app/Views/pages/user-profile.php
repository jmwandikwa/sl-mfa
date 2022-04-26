<?php $this->extend('/components/portal-frame'); ?>

<?php $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Profile</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="extra_profile.html#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Extra</li>
								<li class="breadcrumb-item active" aria-current="page">Profile</li>
							</ol>
						</nav>
					</div>
				</div>

			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-4 col-lg-5">
					<div class="card text-center">
						<div class="card-body">
							<img src="<?= "/images/avatar/" . $user_image ?>" class="bg-light w-100 h-100 rounded-circle avatar-lg img-thumbnail" alt="profile-image">


							<h4 class="mb-0 mt-2"><?= $user_name ?></h4>
							<p class="text-muted fs-14">Tester</p>

							<!-- <button type="button" class="btn btn-primary btn-sm mb-2">Follow</button>
							<button type="button" class="btn btn-light btn-sm mb-2">Message</button>
 -->
							<div class="text-start mt-3">
								<p class="header-title text-info mb-2"><strong>About Me :</strong></p>
								<p class="text-muted  mb-3">
									<?= $user_bio ?>
								</p>
								<p class="text-muted mb-2 "><strong class="text-info">Full Name :</strong> <span class="ms-2"><?= $user_name ?></span></p>

								<p class="text-muted mb-2 "><strong class="text-info">Mobile :</strong><span class="ms-2">(123)123 1234</span></p>

								<p class="text-muted mb-2 "><strong class="text-info">Email :</strong> <span class="ms-2 "><?= session()->get('user_email') ?></span></p>

								<p class="text-muted mb-1 "><strong class="text-info">Course :</strong> <span class="ms-2">SL</span></p>
							</div>


						</div> <!-- end card-body -->
					</div> <!-- end card -->

					<!-- Messages-->


				</div> <!-- end col-->

				<div class="col-xl-8 col-lg-7">
					<div class="card">
						<div class="card-body">
							<ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
								<li class="nav-item">
									<a href="extra_profile.html#aboutme" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
										About
									</a>
								</li>
								<li class="nav-item">
									<a href="extra_profile.html#timelinest" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0 active">
										Timeline
									</a>
								</li>
								<li class="nav-item">
									<a href="extra_profile.html#settings" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
										Settings
									</a>
								</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane" id="aboutme">

									<h5 class="text-uppercase"><i class="mdi mdi-briefcase me-1"></i>
										Experience</h5>

									<div class="timeline-alt pb-0">
										<div class="timeline-item">
											<i class="mdi mdi-circle bg-info-light text-info timeline-icon"></i>
											<div class="timeline-item-info">
												<h5 class="fs-14 mt-0 mb-1">Php Developer</h5>
												<p>Dummy.com <span class="ms-2 fs-12">Year: 2015 - 18</span></p>
												<p class="text-muted mt-2 mb-0 pb-3">Everyone realizes why a new common language
													would be desirable: one could refuse to pay expensive translators.
													To achieve this, it would be necessary to have uniform grammar,
													pronunciation and more common words.</p>
											</div>
										</div>

										<div class="timeline-item">
											<i class="mdi mdi-circle bg-primary-light text-primary timeline-icon"></i>
											<div class="timeline-item-info">
												<h5 class="fs-14 mt-0 mb-1">Web Graphic Designer</h5>
												<p>Dummy Inc. <span class="ms-2 fs-12">Year: 2012 - 15</span></p>
												<p class="text-muted mt-2 mb-0 pb-3">If several languages coalesce, the grammar
													of the resulting language is more simple and regular than that of
													the individual languages. The new common language will be more
													simple and regular than the existing European languages.</p>

											</div>
										</div>

										<div class="timeline-item">
											<i class="mdi mdi-circle bg-info-light text-info timeline-icon"></i>
											<div class="timeline-item-info">
												<h5 class="fs-14 mt-0 mb-1">Content create</h5>
												<p>Dummy pllc <span class="ms-2 fs-12">Year: 2010 - 12</span></p>
												<p class="text-muted mt-2 mb-0 pb-2">The European languages are members of
													the same family. Their separate existence is a myth. For science
													music sport etc, Europe uses the same vocabulary. The languages
													only differ in their grammar their pronunciation.</p>
											</div>
										</div>

									</div>
									<!-- end timeline -->

									<h5 class="mb-3 mt-4 text-uppercase"><i class="mdi mdi-cards-variant me-1"></i>
										Projects</h5>
									<div class="table-responsive">
										<table class="table text-fade table-borderless table-nowrap mb-0">
											<thead class="table-light">
												<tr>
													<th>#</th>
													<th>Clients</th>
													<th>Project Name</th>
													<th>Start Date</th>
													<th>Due Date</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Nil Yeager</td>
													<td>App design</td>
													<td>01/01/2015</td>
													<td>10/15/2018</td>
													<td><span class="badge badge-info-light">Work in Progress</span></td>
												</tr>
												<tr>
													<td>2</td>
													<td>Mical </td>
													<td>Coffee detail page</td>
													<td>21/07/2016</td>
													<td>12/05/2018</td>
													<td><span class="badge badge-danger-light">Pending</span></td>
												</tr>
												<tr>
													<td>3</td>
													<td>Lucy </td>
													<td>Poster design</td>
													<td>18/03/2018</td>
													<td>28/09/2018</td>
													<td><span class="badge badge-success-light">Done</span></td>
												</tr>
												<tr>
													<td>4</td>
													<td>ToodDoe</td>
													<td>bottle graphics</td>
													<td>02/10/2017</td>
													<td>07/05/2018</td>
													<td><span class="badge badge-info-light">Work in Progress</span></td>
												</tr>
												<tr>
													<td>5</td>
													<td>Mical</td>
													<td>Landing page</td>
													<td>17/01/2017</td>
													<td>25/05/2021</td>
													<td><span class="badge badge-warning-light">Coming soon</span></td>
												</tr>

											</tbody>
										</table>
									</div>

								</div> <!-- end tab-pane -->
								<!-- end about me section content -->

								<div class="tab-pane show active" id="timelinest">
								</div>
								<!-- end timeline content-->

								<div class="tab-pane" id="settings">
									<form>
										<h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Personal Info</h5>
										<div class="row">
											<div class="col-md-6">
												<div class="mb-3">
													<label for="firstname" class="form-label">First Name</label>
													<input type="text" id="fname" class="form-control" id="firstname">
												</div>
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label for="lastname" class="form-label">Last Name</label>
													<input type=" text" id="lname" class="form-control" id="lastname">
												</div>
											</div> <!-- end col -->
										</div> <!-- end row -->

										<div class="row">
											<div class="col-12">
												<div class="mb-3">
													<label for="bio" class="form-label">Bio</label>
													<textarea class="form-control" id="bio" rows="4"><?= $user_bio ?></textarea>
												</div>
											</div> <!-- end col -->
										</div> <!-- end row -->

										<div class="row">
											<div class="col-md-6">
												<div class="mb-3">
													<label for="pass" class="form-label">New Password</label>
													<input type="password" class="form-control" id="pass">
												</div>
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label for="vpass" class="form-label">Confirm Password</label>
													<input type="password" class="form-control" id="vpass">
												</div>
											</div> <!-- end col -->
										</div> <!-- end row -->
										<div class="text-end">
											<button type="submit" id="submit" class="btn btn-primary mt-2"><i class="mdi mdi-content-save"></i> Save</button>
										</div>
									</form>
								</div>
								<!-- end settings content-->

							</div> <!-- end tab-content -->
						</div> <!-- end card body -->
					</div> <!-- end card -->
				</div> <!-- end col -->
			</div>
			<!-- end row-->

		</section>
		<!-- /.content -->
	</div>
</div>
<!-- /.content-wrapper -->
<?php $this->endSection(); ?>
<?php $this->section('scripts'); ?>
<script>
	let text = "<?= $user_name ?>"
	const myArray = text.split(" ");
	const fname = myArray[0],
		lname = myArray[1];
	$("#fname").val(fname);
	$("#lname").val(lname);
	$("#submit").click(function(e) {
		formData = {
			pass: $("#pass").val(),
			vpass: $("#vpass").val(),
			fname: $("#fname").val(),
			lname: $("#lname").val(),
			bio: $("#bio").val(),
		}
		$.ajax({
			type: "post",
			url: "/dashboard/profilesave",
			data: formData,

			success: function(response) {
				if (response === "saved") {
					alert("Changes Saved");
					location.reload();
				} else {
					alert(response);
				}
			},
			error: function(response) {
				alert("An error has occured!");
			}
		});
		e.preventDefault();
	});
</script>


<?php $this->endSection(); ?>