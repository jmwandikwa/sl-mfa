<?php
    include_once "config.php";
    $outgoing_id = session()->get('user_id');
    $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
    $message = mysqli_real_escape_string($conn, $_POST['sent_msg']);
    if (!empty($message)) {
        $sql = mysqli_query($conn, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg)
                                        VALUES ({$incoming_id}, {$outgoing_id}, '{$message}')") or die();
        $sql2 = mysqli_query($conn, "UPDATE users SET last_seen = '{$time}' WHERE user_id = $outgoing_id");
    }

