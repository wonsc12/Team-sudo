<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . '/helloworld/inc/dbcon.php';

$mid = $_POST['mid'];

if(isset($_SESSION['UID'])){
    $userid = $_SESSION['UID'];
    $ssid = '';
} else {
    $ssid = session_id();
    $userid = '';
}

$sql = "SELECT * FROM members mb JOIN user_coupons uc ON mb.userid = uc.userid JOIN coupons c ON uc.couponid = c.cid WHERE mb.mid = '{$mid}' AND uc.status = 1";

$result = $mysqli -> query($sql);
$row = $result -> fetch_object(); // $row->cnt

if($result){      
  $data = array('result' => $row);
        
} else {
  $data = array('result' => 'fail');
}     





echo json_encode($data);



?>