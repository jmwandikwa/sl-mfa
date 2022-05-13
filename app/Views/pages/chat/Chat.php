<?php $this->extend('/components/portal-frame'); ?>
<?php $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="max-height: 686.5px;">
	<div class="container-full">
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-lg-4 col-12">
					<div class="box">
						<div class="box-header no-border p-0">
							<ul class="nav nav-tabs nav-bordered" role="tablist">
								<li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#messages" role="tab">Chat </a> </li>
							</ul>
						</div>
						<div class="box-body">
							<!-- Tab panes -->
							<div class="tab-content">
								<div class="tab-pane active" id="messages" role="tabpanel">
									<!-- start search box -->
									<div class="app-search">
										<form>
											<div class="mb-15 position-relative">
												<input type="text" id="search" class="form-control" placeholder="People, groups & messages..." />
												<span class="mdi mdi-magnify search-icon"></span>
											</div>
										</form>
									</div>
									<!-- end search box -->
								</div>
								<div class="users-list overflow-hidden">
								<div class="chat-logs application-bx" id="user-list">

								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<div class="col-lg-8 col-12">
					<div class="box getchat">
					<!-- box here -->
<div class="box-header" style = "display:none">
	<div class="media align-items-top p-0">
	  <a class="avatar avatar-lg status-success mx-0" href="contact_app_chat.html#" data-bs-toggle="modal" data-bs-target="#right-modal">
		<img src="../../../images/avatar/avatar-1.png" class="bg-light rounded-circle" alt="...">
	  </a>
		<div class="d-lg-flex d-block justify-content-between align-items-center w-p100">
			<div class="media-body mb-lg-0 mb-20">
				<p class="fs-16">
				  <a class="hover-primary fw-600" href="contact_app_chat.html#" data-bs-toggle="modal" data-bs-target="#right-modal">Sarah Kortney</a>
				</p>
				  <p class="fs-12 text-fade">Last Seen 10:30pm ago</p>
			</div>
			
		</div>				  
	</div>             
  </div>
  <div class="box-body">
	  <div class="chat-box-one2 messages">

		  <!-- message here -->
		  <div class="text-center">
			  Select Chat to Continue 
		  </div>

	  </div>
  </div>
  <div style = "display:none" class="box-footer no-border">
	 <div class="d-md-flex d-block justify-content-between align-items-center bg-white p-5 rounded10 b-1 overflow-hidden">
			<input class="form-control b-0 py-10" type="text" placeholder="Say something...">
			<div class="d-flex justify-content-between align-items-center mt-md-0 mt-30">
				<button type="button" class="waves-effect waves-circle btn btn-circle btn-primary">
					<i class="mdi mdi-send"></i>
				</button>
			</div>
		</div>
  </div>
  <!-- end box -->
					</div>
					<div id="right-modal" class="modal modal-right fade" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-sm">
							<div class="modal-content">
								<div class="modal-header no-border">
									<div class="dropdown d-block">
										<a href="contact_app_chat.html#" class="dropdown-toggle no-caret" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="fs-18 mdi mdi-dots-horizontal"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-start">
											<!-- item-->
											<a href="javascript:void(0);" class="dropdown-item">View full</a>
											<!-- item-->
											<a href="javascript:void(0);" class="dropdown-item">Edit Contact Info</a>
											<!-- item-->
											<a href="javascript:void(0);" class="dropdown-item">Remove</a>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
	function getChat(id) {
		var idData = new FormData();
		idData.append('id', id);
		$.ajax({
			type: "post",
			url: "<?= base_url() ?>/getchat",
			data: idData,
			contentType: false,
			processData: false,
			success: function(response) {
				$('.getchat').html(response)
			}
		});
	}
	setInterval(() => {
		if ($('#incoming_id').val() !== undefined) {
			var getData = new FormData();
			getData.append('incoming_id', $('#incoming_id').val());
			$.ajax({
				type: "post",
				url: "<?= base_url() ?>/loadchat",
				data: getData,
				contentType: false,
				processData: false,
				success: function(response) {
					$('.messages').html(response)
				},
				error: function(e){
				}
			})
		}
	}, 1000);

	function insertChat() {
		if ($('#msg').val() !== undefined) {
			var chatData = new FormData();
			chatData.append('incoming_id', $('#incoming_id').val());
			chatData.append('sent_msg', $('#msg').val());
			$.ajax({
				type: "post",
				url: "<?= base_url() ?>/insertchat",
				data: chatData,
				contentType: false,
				processData: false,
				success: function(response) {
					$('.chat-logs').scrollTop($('.chat-logs')[0].scrollHeight);
					$('#msg').val('');
				},
				error: function(response) {
					$('#msg').val('');

				}
			})
		}
	}
</script>
<script>
setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "<?= base_url() ?>/usersphp", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                $('#user-list').html(data)
            }
        }
    }
    xhr.send();
}, 500);



</script>
<script src="/src/js/chat.js"></script>
<?php $this->endSection(); ?>