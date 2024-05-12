<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . '/helloworld/inc/dbcon.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/helloworld/user/css/common.css">
    <?=$cssRoute1?>
    <?=$cssRoute2?>
    <title><?=$title?> | Hello World</title>
    
</head>
<body>
<header>
    <div class="header_con d-flex container jcsb aic">
        <div class="left_menu">
            <img src="/helloworld/user/img/logo_text.jpg" alt="Hello World 로고">
          </div>
          <div class="center_menu d-flex aic bold h4 mb-0">
            <a href="#">강의</a>
            <a href="#">공지사항</a>
            <a href="#">Q&amp;A</a>
          </div>
          <div class="right_menu d-flex aic h4 mb-0">
            <div class="icons d-flex">
                <a href="#" class="bi bi-cart"></a>
                <a href="#" class="bi bi-person-circle"></a>
            </div>
            <div class="d-flex bt">
                <button type="button" class="btn btn-primary btn-sm login" href="#" role="button">로그인</button>
                <button type="button" class="btn btn-primary btn-sm member" href="#" role="button">회원가입</button>
            </div>
          </div>
        </div>
    </div>
</header>