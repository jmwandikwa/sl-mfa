<?php $this->extend('/components/auth-frame'); ?>

<?php $this->section('content'); ?>
<div class="container h-p100">

		<div class="row align-items-center justify-content-md-center h-p100">
			
			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-gray-800 rounded10 shadow-lg">
							<div class="content-top-agile px-20 pt-40 pb-0">
								<img src="../../../images/avatar/avatar-1.png" alt="User Image" class="bg-light rounded-circle">
								<h2 class="text-primary fw-600">Maical Doe</h2>
								<p class="mb-5 text-fade">Enter your password to retrieve your session</p>	
							</div>
							<div class="px-40 pb-40 pt-20">
								<form action="index.html" method="post">
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text"><i class="text-fade ti-lock"></i></span>
											<input type="password" class="form-control ps-15" placeholder="Password">
										</div>
									</div>
									  <div class="row">
										<div class="col-12 text-center">
										  <button type="submit" class="btn btn-primary w-p100 mt-10">UNLOCK</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>		

								<div class="text-center">
									<p class="mt-15 mb-0 text-fade">Or <a href="auth_login.html" class="text-primary">Sign In</a> as a Different User</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
						
		</div>
	</div>	
<?php $this->endSection(); ?>