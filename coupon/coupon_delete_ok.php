<?php
  include_once $_SERVER['DOCUMENT_ROOT'].'/helloworld/inc/dbcon.php';
  $cpid = $_GET['cpid'];
  
  $sql = "DELETE from coupons where cpid=$cpid";
  $result = $mysqli -> query($sql);

  if(isset($result)){
    echo "<script>
      alert('삭제되었습니다.');
      location.href = '/helloworld/coupon/coupon_list.php';
    </script>";
  } else{
    echo "<script>alert('삭제실패');</script>";
  }

?>