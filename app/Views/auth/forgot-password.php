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
							<p id="error" class="mb-0 text-fade">Enter your email to reset your password.</p>

						</div>
						<div class="p-40">
							<form id="form" action="#" method="post">
								<div class="form-group">
									<div class="input-group mb-3">
										<span class="input-group-text"><i class="text-fade ti-email"></i></span>
										<input type="email" id="email" class="form-control ps-15" placeholder="Your Email">
									</div>
									<div class="input-group mb-3" id="vcode" style="display: none">
										<span class="input-group-text"><i class="text-fade ti-eye"></i></span>
										<input type="email" id="code" class="form-control ps-15" placeholder="Enter Your Code">
									</div>
								</div>
								<div class="row">
									<div class="col-12 text-center">
										<button type="submit" id="submit" class="btn btn-primary w-p100 mt-10">Reset</button>
									</div>
									<!-- /.col -->
								</div>
							</form>
							<form id="vform" action="#" method="post" style="display: none">
								<div class="form-group">
									<div class="input-group mb-3">
										<span class="input-group-text"><i class="text-fade ti-eye"></i></span>
										<input type="password" id="pass" class="form-control ps-15" placeholder="Enter New Password">
									</div>
									<div class="input-group mb-3">
										<span class="input-group-text"><i class="text-fade ti-eye"></i></span>
										<input type="password" id="vpass" class="form-control ps-15" placeholder="Confirm Password">
									</div>
								</div>
								<div class="row">
									<div class="col-12 text-center">
										<button type="submit" id="vsubmit" class="btn btn-primary w-p100 mt-10">Change</button>
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

<?php $this->section('script'); ?>

<script>
	$("#submit").click(function(e) {
		formData = {
			email: $("#email").val(),
			code: $("#code").val(),
		}
		$.ajax({
			type: "post",
			url: "/forgot/getkey",
			data: formData,

			success: function(response) {

				if (response === "success") {
					var handle = setInterval(() => {
						if ($('#error').html() === 'Code sent to email') {
							if ($("#email").val() !== formData['email']) {
								$("#vcode").css("display", "none");
								$("#submit").html("Reset");
							} else {
								$("#vcode").css("display", "");
								$("#submit").html("Verify");

							}

						} else {
							$("#vcode").css("display", "none");
						}
					}, 50);
					$("#error").html("Code sent to email").removeClass("text-primary").removeClass("text-danger").addClass("text-success");
				} else {
					if (response === 'verified') {
						clearInterval(handle)
						$("#error").html('Enter Your New Password').removeClass("text-primary").addClass("text-danger");
						$("#form").css("display", "none");
						$("#vform").css("display", "");
					}
				}
			},
			error: function(response) {
				$("#error").html("An error has occured!").removeClass("text-primary").addClass("text-danger");
			}
		});
		e.preventDefault();

	});
	$("#vsubmit").click(function(e) {
		formData = {
			pass: $("#pass").val(),
			vpass: $("#vpass").val(),
		}
		$.ajax({
			type: "post",
			url: "/forgot/newpass",
			data: formData,

			success: function(response) {
				if (response === "success") {
					location.href = '/login';
				}
				$("#error").html(response).removeClass("text-primary").removeClass("text-danger").addClass("text-success");
			},
			error: function(response) {
				$("#error").html("An error has occured!").removeClass("text-primary").addClass("text-danger");
			}
		});
		e.preventDefault();
	});
</script>
<?php $this->endSection() ?>