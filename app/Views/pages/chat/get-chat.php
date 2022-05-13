<?php
include_once "config.php";
$outgoing_id = session()->get('user_id');
$incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
$output = "";
$sql = "SELECT * FROM messages LEFT JOIN users ON users.user_id = messages.outgoing_msg_id
                WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
                OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id";
$query = mysqli_query($conn, $sql);
if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        if ($row['outgoing_msg_id'] === $outgoing_id) {
            $output .= '
            
            <div class="card no-border d-inline-block my-20 text-end float-end me-2 no-shadow max-w-p80">										  
            <div class="d-flex flex-row pb-2 align-items-center justify-content-end">
               
            </div>
            <div class="mt-5 card-body p-15 bg-primary-light rounded10 d-inline-block">
                <div class="chat-text-start">
                    <p class="mb-0 text-dark">'. $row['msg'] .'</p>
                </div>
            </div>
                <p class="pe-5 mt-10 mb-0 fs-12 text-mute"><i class="me-5 fa fa-clock-o"></i>09:25</p>
      </div>
      <div class="clearfix"></div>
            ';
            // $output .= '
            // <div class="card no-border d-inline-block my-20 float-end me-2 no-shadow max-w-p80">
            //     <div class="mt-5 card-body p-15 bg-primary  text-end rounded10 d-inline-block">
            //     <div class="chat-text-start">
            //         <p class="mb-0 text-dark">' . $row['msg'] . '</p>
            //     </div>
            // </div>
            //     </div>'.'<div class="clearfix"></div>';
        } else {

            $output.='
            <div class="card no-border d-inline-block my-20 float-start me-2 no-shadow max-w-p80">										  
            
            <div class="mt-5 card-body p-15 bg-info-light rounded10 d-inline-block">
                <div class="chat-text-start">
                    <p class="mb-0 text-dark">'.$row['msg'].'</p>
                </div>
            </div>
                <p class="ps-5 mt-10 mb-0 fs-12 text-mute"><i class="me-5 fa fa-clock-o"></i>09:25</p>
      </div><div class="clearfix"></div>';


            // $output .= '
            // <div class="card no-border d-inline-block my-20 text-end float-start me-2 no-shadow max-w-p80">
            //     <div class="d-flex flex-row pb-2 align-items-center">
            // </div>
            // <div class="mt-5 card-body p-15 bg-info-light rounded10 d-inline-block">
            //     <div class="chat-text-start">
            //         <p class="mb-0 text-dark">' . $row['msg'] . '</p>
            //     </div>
            // </div>
            //     </div>'.'<div class="clearfix"></div>';
        }
    }
} else {
    $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
}
echo $output;
