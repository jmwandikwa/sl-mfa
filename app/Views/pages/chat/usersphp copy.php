<?php
include_once "config.php";
$outgoing_id = session()->get('user_id');
$sql = "SELECT * FROM users WHERE NOT user_id = {$outgoing_id} ORDER BY user_id DESC";
$query = mysqli_query($conn, $sql);
$output = "";
if (mysqli_num_rows($query) == 0) {
	$output .= "No users are available to chat";
} elseif (mysqli_num_rows($query) > 0) {
	while ($row = mysqli_fetch_assoc($query)) {
		$sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['user_id']}
														OR outgoing_msg_id = {$row['user_id']}) AND (outgoing_msg_id = {$outgoing_id} 
														OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
		$query2 = mysqli_query($conn, $sql2);
		$row2 = mysqli_fetch_assoc($query2);
		(mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result = "No message available";
		(strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
		if (isset($row2['outgoing_msg_id'])) {
			($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
		} else {
			$you = "";
		}/* 
											($row['status'] == "Offline now") ? $offline = "offline" :  */
		$offline = "";
		($outgoing_id == $row['user_id']) ? $hid_me = "hide" : $hid_me = "";

		$output .= '<div class="chat-box-one-side3" onclick="getChat('.$row['user_id'].')">
					<div class="media-list media-list-hover">
				<a a href="#">
					<div class="w-p100 d-flex align-items-center m-1 p-2">
						<img src="../../../images/avatar/avatar-9.png" class="bg-light ms-0 me-2 rounded-circle" height="48" alt="Brandon Smith" />
						<div class="w-p100 overflow-hidden">
							<h5 class="mt-0 mb-0 fs-14 fw-600">
								<span class="float-end text-muted fs-12 fw-400">4:30am</span>
								' . $row['user_name'] . '
							</h5>
							<p class="mt-1 mb-0 text-muted fs-14">
								<span class="w-25 float-end text-end"><span class="badge badge-danger-light">3</span></span>
								<span class="w-75 text-dark">' . $you . $msg . '</span>
							</p>
						</div>
					</div>
				</a>
			</div>
		</div>';
	}
}
echo $output;
