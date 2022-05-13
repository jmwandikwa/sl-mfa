<?php
if (isset($_POST['id'])) {
    include_once "config.php";
    $contact_id = $_POST['id'];
    $sql = "SELECT * FROM users WHERE user_id = {$contact_id} ORDER BY user_id DESC";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    $outgoing_id = session()->get('user_id');
    $seen = 'Last Seen 10:30pm ago';
    // echo '<div class="row">
	// 					<div class="box-header">
	// 						<div class="media align-items-top p-0">
	// 							<a class="avatar avatar-lg status-success mx-0" href="#" data-bs-toggle="modal" data-bs-target="#right-modal">
	// 								<img src="../../../images/avatar/avatar-1.png" class="bg-light rounded-circle" alt="...">
	// 							</a>
	// 							<div class="d-lg-flex d-block justify-content-between align-items-center w-p100">
	// 								<div class="media-body mb-lg-0 mb-20">
	// 									<p class="fs-16">
	// 										<a class="hover-primary fw-600" href="#" data-bs-toggle="modal" data-bs-target="#right-modal">' . $row["user_name"] . '</a>
	// 									</p>
	// 									<p class="fs-12 text-fade">' . $seen . '</p>
	// 								</div>
	// 								<div>
	// 									<ul class="list-inline mb-0 fs-18">

	// 										<li class="list-inline-item"><a href="#" class="hover-primary"><i class="fa fa-ellipsis-h"></i></a></li>
	// 									</ul>
	// 								</div>
	// 							</div>
	// 						</div>
	// 					</div>
	// 					<div class="box-body">
	// 						<div class="chat-box-one2 messages">
	// 						</div>
	// 					</div>
	// 					<div class="box-footer no-border">
	// 						<div class="d-md-flex d-block justify-content-between align-items-center bg-white p-5 rounded10 b-1 overflow-hidden">
    //                         <input type="text" class="incoming_id" id="incoming_id" value="'.$row['user_id'].'" hidden>
	// 							<input class="form-control b-0 py-10" type="text" id="msg" placeholder="Say something..." required>
	// 							<div class="d-flex justify-content-between align-items-center mt-md-0 mt-30">
	// 								<button type="submit" id="send" onclick="insertChat()" class="waves-effect waves-circle btn btn-circle btn-primary">
	// 									<i class="mdi mdi-send"></i>
	// 								</button>
	// 							</div>
	// 						</div>
    //                         </div>';


	echo '
	<div class="box-header">
	<div class="media align-items-top p-0">
	  <a class="avatar avatar-lg status-success mx-0" href="contact_app_chat.html#" data-bs-toggle="modal" data-bs-target="#right-modal">
		<img src="/profile/'.$row["user_image"].'" class="bg-light rounded-circle" alt="...">
	  </a>
		<div class="d-lg-flex d-block justify-content-between align-items-center w-p100">
			<div class="media-body mb-lg-0 mb-20">
				<p class="fs-16">
				  <a class="hover-primary fw-600" href="contact_app_chat.html#" data-bs-toggle="modal" data-bs-target="#right-modal">'. $row["user_name"] .'</a>
				</p>
				  <p class="fs-12 text-fade">Last Seen 10:30pm ago</p>
			</div>
			
		</div>				  
	</div>             
  </div>
  <div class="box-body">
	  <div class="chat-box-one2">
	  		<div class="chat-logs messages">	
			  </div>

		  <!-- message here -->

	  </div>
  </div>
  <div class="box-footer no-border">
	 <div class="d-md-flex d-block justify-content-between align-items-center bg-white p-5 rounded10 b-1 overflow-hidden">
	 <input type="text" class="incoming_id" id="incoming_id" value="'.$row['user_id'].'" hidden>
	 <input class="form-control b-0 py-10" type="text" id="msg" placeholder="Say something..." required>
			<div class="d-flex justify-content-between align-items-center mt-md-0 mt-30">
			<button type="submit" id="send" onclick="insertChat()" onchange="insertChat()" class="waves-effect waves-circle btn btn-circle btn-primary">
				<i class="mdi mdi-send"></i>
				</button>
			</div>
		</div>
  </div>
	';
} else {
    echo "An error has occured!";
}
