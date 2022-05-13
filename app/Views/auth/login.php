<?php $this->extend('/components/auth-frame'); ?>

<?php $this->section('content'); ?>
<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			
			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-gray-800 rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary fw-600">Let's Get Started</h2>
								
								<div id="alert">
									
								</div>
								
								<p class="mb-0 text-fade">Sign in to continue to Sl-Mfa.</p>							
							</div>
							<div class="p-40">
								<form action="/login/auth" method="post">
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text"><i class="text-fade ti-user"></i></span>
											<input type="email" name="email" class="form-control ps-15 " placeholder="Username">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text"><i class="text-fade ti-lock"></i></span>
											<input type="password" name="password" class="form-control ps-15" placeholder="Password">
										</div>
									</div>
									  <div class="row">
										<div class="col-6">
										  <div class="checkbox">
											<input type="checkbox" id="basic_checkbox_1" >
											<label for="basic_checkbox_1">Remember Me</label>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-6">
										 <div class="fog-pwd text-end">
											<a href="/forgot" class="text-primary fw-500 hover-primary"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-12 text-center">
										  <button type="submit" class="btn btn-primary w-p100 mt-10">SIGN IN</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>	
								<div class="text-center">
									<p class="mt-15 mb-0 text-fade">Don't have an account? <a href="/register" class="text-primary ms-5">Sign Up</a></p>
								</div>
								
								
							</div>						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $this->endSection(); ?>

<?php $this->section('script'); ?>
<script>
	// ajax signin form
	$(document).ready(function(){
		$('form').submit(function(e){
			e.preventDefault();
// check if email is not empty and password is not empty
			if($('input[name="email"]').val() != '' && $('input[name="password"]').val() != ''){
				var form = $(this);
			var url = form.attr('action');
			var data = form.serialize();
			$.ajax({
				type: 'POST',
				url: url,
				data: data,
				success: function(data){
					if(data=="success"){
						$('#alert').html('<div class="alert alert-success">redirecting...</div>');
						setTimeout(function(){
							window.location.href = '/dashboard';
						}, 1000);
					}else{
						$("#alert").addClass("alert alert-danger").html("<strong>Error!</strong>Wrong Credentials");
							setTimeout(function() {
								$('#alert').html('').removeClass('alert alert-danger');
						}, 2000);
					}
				}
			});
				
				
			}else{
				$("#alert").addClass("alert alert-danger").html("<strong>Error!</strong> Please fill all the fields.");
							setTimeout(function() {
								$('#alert').html('').removeClass('alert alert-danger');
						}, 2000);
			}


			
		});
	});

</script>

<?php $this->endSection(); ?>