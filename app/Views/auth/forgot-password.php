<?php $this->extend('/components/auth-frame'); ?>

<?php $this->section('content'); ?>

<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
			
			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">						
						<div class="bg-gray-800 rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="mb-10 fw-600 text-primary">Forgot Password ?</h2>
								<p class="mb-0 text-fade">Enter your email to reset your password.</p>
							</div>
							<div class="p-40">
								<form action="index.html" method="post">
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text"><i class="text-fade ti-email"></i></span>
											<input type="email" class="form-control ps-15" placeholder="Your Email">
										</div>
									</div>
									  <div class="row">
										<div class="col-12 text-center">
										  <button type="submit" class="btn btn-primary w-p100 mt-10">Reset</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	


<?php $this->endSection(); ?>