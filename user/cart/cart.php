
<?php

$title = 'CART';
$cssRoute1 ='<link rel="stylesheet" href="/helloworld/user/css/common.css"/>';
$cssRoute2 ='<link rel="stylesheet" href="/helloworld/user/css/class/cart.css"/>';
include_once $_SERVER['DOCUMENT_ROOT'] . '/helloworld/inc/user_header.php';





if(isset($_SESSION['UID'])){
  $userid = $_SESSION['UID'];
  $ssid = '';
} else {
  $ssid = session_id();
  $userid = '';
}

// $cartSql = "SELECT * FROM cart WHERE ssid = '{$ssid}'";

// $cartSql = "SELECT p.thumbnail,p.name,p.price,p.pid,c.cartid,c.cnt,c.options,c.total
//           FROM products p
//               INNER JOIN cart c
//               ON c.pid = p.pid
//               WHERE c.ssid = '{$ssid}' or c.userid = '{$userid}'
// ";

// $cartResult = $mysqli -> query($cartSql);
// while($row = $cartResult->fetch_object()){
//   $cartArr[] = $row;
// }
//print_r($cartArr);
// $sql = "INSERT INTO cart (cid, userid) VALUES ('{$cid}', '{$uid}')"; // 변수에는 장바구니 테이블에 사용자가 선택한 강의(ID: $cid)와 사용자의 ID(ID: $uid)를 삽입하는 SQL 쿼리가 저장
// $insertResult = $mysqli->query($sql); // 데이터베이스에 새로운 장바구니 항목을 추가

if(isset($_SESSION['UID'])){ // 사용자가 로그인한 경우를 확인  만약 세션 변수 UID가 설정되어 있다면(즉, 사용자가 로그인한 경우), 아래의 코드 블록을 실행
  $userid = $_SESSION['UID'];//유저아이디 저장

  //cart item 조회 사용자의 장바구니에 담긴 강의 정보를 조회
  $sqlct = "SELECT c.*,ct.cartid FROM cart ct    
            JOIN members u ON ct.userid = u.userid
            JOIN courses c ON c.cid = ct.cid
            WHERE u.userid = '{$userid}'
            ORDER BY ct.cartid DESC";
            echo $sqlct;
  // courses 테이블의 모든 열과 cart 테이블의 cartid 열을 선택
  // c.*는 courses 테이블의 모든 열을 선택 ct.cartid는 cart 테이블의 cartid 열을 선택
  // cart 테이블과 courses 테이블을 조인하여 해당 사용자의 장바구니에 담긴 강의들의 정보를 가져옴
  // cart 테이블(ct 별칭), merners 테이블(u 별칭) courses 테이블(c 별칭)을 조인 테이블은 각각 ct, u, c로 별칭이 지정
  // cart 테이블의 userid 열과 members 테이블의 userid 열, 그리고 courses 테이블의 cid 열과 cart 테이블의 cid 열을 기준으로 조인
  //merbers 테이블에서 userid 값이 $userid와 일치하는 행만 선택 현재 로그인한 사용자의 장바구니에 담긴 강의 정보만 가져옴
  // cart 테이블의 cartid 열을 기준으로 내림차순으로 정렬
  $result = $mysqli-> query($sqlct);
  
  while($rs = $result->fetch_object()){
    $rscct[]=$rs;
  }
  print_r($rscct);
  
  // 배열에는 장바구니에 담긴 강의들의 정보가 저장
  //coupon 사용자가 보유한 쿠폰 정보를 조회
  $sqlcp = "SELECT c.* FROM user_coupon uc
            JOIN members u ON uc.userid = u.userid
            JOIN coupons c ON c.cpid = uc.cpid
            WHERE u.userid = '{$userid}' AND (uc.use_max_date > NOW() OR uc.use_max_date IS NULL) AND uc.uc_status = 1
            ORDER BY uc.ucid DESC";
            echo $sqlcp;
  //  쿠폰 테이블(coupons)의 모든 열을 선택
  // 사용자 쿠폰 테이블(user_coupon)을 가리키는 별칭 uc를 사용
  // user_coupon 테이블과 coupons 테이블을 조인하여 해당 사용자가 보유한 쿠폰들의 정보를 가져옴
  // 사용자 쿠폰 테이블 uc와 사용자 테이블 members를 조인 조인은 uc 테이블의 userid 열과 members 테이블의 userid 열을 기준\
  // 쿠폰 테이블 c와 사용자 쿠폰 테이블 uc를 조인
  // 이 조인은 c 테이블의 cpid 열과 uc 테이블의 cpid 열을 기준
  // 조건절로 사용자의 아이디가 $userid와 일치하는 경우에 해당
  // 쿠폰의 사용 만료일(use_max_date)이 현재 날짜 및 시간(NOW())보다 나중인 경우 또는 사용 만료일이 NULL인 경우를 선택
  // 사용자 쿠폰 상태(uc_status)가 1인 경우를 선택 여기서 1은 활성화된 상태
  // 사용자 쿠폰 테이블의 기본 키인 ucid를 내림차순으로 정렬하여 결과를 반환
  
    // $result = $mysqli-> query($sqlcp);
    // while($rs = $result->fetch_object()){
    //   $rsccp[]=$rs;
    // }
    // print_r($rsccp);
}
else{ // 사용자가 로그인한 상태가 아니라면(else 블록), JavaScript 경고창을 띄워 로그인이 필요하다는 메시지를 출력
  echo "<script>
    alert('로그인이 필요합니다.');
    //location.href = '/helloworld/user/index.php';
  </script>";
}
?>


    
    

<div class="cart_container container ">
  <h2 class="jua main_tt">장바구니</h2>
    <div class="cartOpBtns d-flex justify-content-between col-8">
      <div class="form-check all_check d-flex align-items-center">
        <input class="form-check-input" type="checkbox" value="" id="all_check" checked>
        <label class="form-check-label" for="all_check">전체선택</label>
        <span>|<span class="select_count">0</span>개 (총 <span class="all_count">0</span>개)</span>
      </div>  
    </div>
  <div class="cart_boxfull">
    <ul class="cart_item_container d-flex flex-column ">
    <?php
          if(isset($rscct)){
            foreach($rscct as $cart){
          ?>
      <li class="cart_item shadow_box content-box cart_boxfull2" data-cartid="<?= $cart->cartid ?>">
        <input class="form-check-input" type="checkbox" value="" id="cart_item" checked>
        <label class="form-check-label" for="cart_item"></label>
        <img src="<?= $cart->thumbnail ?>" alt="<?= $cart->name ?>" class="radius_5">
        <div class="text_box">
          <div class="title">
            <h3 class="b_text01"><?= $cart->name ?></h3>
            <span class="badge rounded-pill blue_bg b-pd">
            <?php
              if (isset($cart->cate)) {
                $categoryText = $cart->cate;
                $parts = explode('/', $categoryText);
                $lastPart = end($parts);
                echo $lastPart;
              }
            ?>
            </span>
            <span class="badge rounded-pill b-pd
            <?php
              $levelBadge = $cart->level;
              if ($levelBadge === '초급') {
                echo 'yellow_bg';
              } else if ($levelBadge === '중급') {
                echo 'green_bg';
              } else {
                echo 'red_bg';
              }
              ?>
            "><?= $cart->level ?></span>
          </div>
          <div class="descript">
            <p><?= $cart->content ?></p>
          </div>
          <div class="date">
            <i class="ti ti-calendar-event"></i>
            수강기간 <span><?= $cart->due ?></span>
          </div>
        </div>
        <i class="ti ti-x del_btn del_x"></i>
        <?php
          if($cart->price_status != "무료"){
          ?>
            <span class="price content_tt"><span class="number"><?= $cart->price ?></span>원</span>
          <?php
          }else{
          ?>
            <span class="price content_tt">무료</span>
          <?php 
          } 
          ?>
      </li>
      <?php
        }
      }else {
      ?> 
      <li class="no_cart_container">
        <img src="../img/logo_icon.png" alt="" class="no_cart_img">
        <p class="content_stt">장바구니에 담긴 강의가 없습니다.</p>
        <a href="/helloworld/user/class/courer_list.php" class="btn btn-primary dark">강의목록</a>
      </li>
      <?php
      }
      ?>
    </ul>
    <button class="btn btn-primary dark select_del text-bg-danger">선택삭제</button>
    
  </div>
  <div class="form_container ">
    <form action="#" method="POST" class="payment_form radius_12 shadow_box">
      <div class="contpatbpx">
      <div class="contentbox">
          
          <input type="hidden" value="" class="userid">

          <h3 class="content_stt">결제정보</h3>
          <h4 class="demoHeaders style_pd b_text02">쿠폰선택</h4>
          <select class="selectmenu coupon_select">
            <option value="" selected class="default" data-discount="0" data-type="정액" data-limit="-1">보유하고 있는 쿠폰</option>
            
          </select>
        </div>
        
        <hr>
        <div class="paymentbox">
          <h2>CART TOTAl</h2>
          <div class="payment_info d-flex justify-content-between">
            <p>상품 수 :</p><p><span class="cart_count number">0</span>개</p>
          </div>
          <div class="payment_info d-flex justify-content-between">
            <p>상품금액 :</p><p><span class="cart_total_price number">0</span>원</p>
          </div>
          <div class="payment_info d-flex justify-content-between">
            <p>할인가 :</p><p>- <span class="cart_discount number">0</span><span class="discount_unit">원</span></p>
          </div>
          <hr>
          <div class="payment_total d-flex justify-content-between align-items-center">
            <p class="b_text01">총 결제금액</p><p class="content_tt"><span class="cart_pay_price number">0</span>원</p>
          </div>
          <div class="butb">
          <button class="btn btn-primary dark submit_btn greenbtn">구매하기</button>
          </div>
          
        </div>
      </div>
      
    </form>
  </div>
</div>
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/helloworld/inc/user_footer.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha512-0QbL0ph8Tc8g5bLhfVzSqxe9GERORsKhIn1IrpxDAgUsbBGz/V7iSav2zzW325XGd1OMLdL4UiqRJj702IeqnQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="js/cart.js"></script>