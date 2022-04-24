<?php $this->extend('/components/auth-frame'); ?>

<?php $this->section('content'); ?>
<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
			
			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-gray-800 rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary fw-600">Get started with Us</h2>
								<?php if(isset($validation)):?>
								<div class="alert alert-danger">
									<?= $validation->listErrors() ?>
								</div>
								<?php endif;?>
								<p class="mb-0 text-fade">Register a new membership</p>	
                                
							</div>
							<div class="p-40">
								<form action="/register/save" method="post">
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text"><i class="text-fade ti-user"></i></span>
											<input type="text" name="name" class="form-control ps-15" placeholder="Full Name">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text"><i class="text-fade ti-email"></i></span>
											<input type="email" name="email" class="form-control ps-15" placeholder="Email">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text"><i class="text-fade ti-lock"></i></span>
											<input type="password" name="password" class="form-control ps-15" placeholder="Password">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text"><i class="text-fade ti-lock"></i></span>
											<input type="password" name="confpassword" class="form-control ps-15" placeholder="Retype Password">
										</div>
									</div>
									  <div class="row">
										<div class="col-12">
										  <div class="checkbox">
											<input type="checkbox" id="basic_checkbox_1" >
											<label for="basic_checkbox_1">I agree to the <a href="auth_register_dark.html#" class="text-primary">Terms</a></label>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-12 text-center">
											<button type="submit" class="btn btn-primary w-p100 mt-10">REGISTER</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>				
								<div class="text-center">
									<p class="mt-15 mb-0 text-fade">Already have an account?<a href="/login" class="text-primary ms-5">Sign In</a></p>
								</div>
							
							</div>
						</div>	
					</div>
				</div>
			</div>			
		</div>
	</div>
    <?php $this->endSection(); ?>