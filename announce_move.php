<?php
session_start();
// include_once $_SERVER['DOCUMENT_ROOT'] . '/helloworld/inc/dbcon.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/helloworld/admin/inc/admin_check.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HelloWorld</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0"
    />
    <!-- normalize css -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
      integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!--bootstrap css -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css"
      integrity="sha512-Z/def5z5u2aR89OuzYcxmDJ0Bnd5V1cKqBEbvLOiUNWdg9PQeXVvXLI90SE4QOHGlfLqUnDNVAYyZi8UwUTmWQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- tabler-icons  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" />

    <!-- jquery ui css -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/black-tie/jquery-ui.min.css"
      integrity="sha512-+Z63RrG0zPf5kR9rHp9NlTMM29nxf02r1tkbfwTRGaHir2Bsh4u8A79PiUKkJq5V5QdugkL+KPfISvl67adC+Q=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- 스포카 -->
    <!-- <link
      href="//spoqa.github.io/spoqa-han-sans/css/SpoqaHanSansNeo.css"
      rel="stylesheet"
      type="text/css"
    /> -->

    <link rel="stylesheet" href="/css/jqueryui/jquery-ui.theme.min.css" />
    <link rel="stylesheet" href="/helloworld/css/common.css" />
    <link rel="stylesheet" href="/helloworld/css/index.css" />
    <style>
        .contents-box{
            width: 100%;
            height: auto;
        }
        .btn {
            width: 105px;
            height: 48px;
        }
        .notice-btn{
            padding-top: 65px;
            justify-content: space-between;
        }


    </style>
  </head>
  <body>
  <?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/helloworld/inc/header.php';
    ?>
            <h2 class="h2">공지 사항</h2>
            <table class="table contents-box d-flex">
                <tbody>
                  <tr>
                    <th scope="row d-flex"></th>
                    <td><a href="#">제목</a></td>
                    <td>안녕하세요! 공지드리겠습니다!</td>
                    <td>홍길동</td>
                    <td>1094</td>
                    <td>2024.04.24</td>
                    <td class="edit d-flex">
                      <a href="#">
                        <span class="material-symbols-outlined">
                          border_color
                        </span>
                      </a>
                      <a href="#">
                        <span class="material-symbols-outlined">
                          delete
                          </span>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td><a href="#">내용</a></td>
                    <td class="con">안녕하세요 회원 여러분! 앞으로의 모든 중요 사항들은 공지사항 페이지에 공지하도록 하겠습니다! 다들 열심히 공부하시고, 원하시는 결과 얻으시길 바랍니다!</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td><a href="#">첨부파일</a></td>
                    <td>20240418.png</td>
                  </tr>
                 
                </tbody>
              </table>
          </div>
          <div class="notice-btn d-flex">
            <div class="left-button">   
                <button type="button" class="btn btn-primary">이전</button>
                <button type="button" class="btn btn-primary">다음</button>
            </div>
            <div class="right-button">
                <button type="button" class="btn btn-success edit-btn">수정</button>
                <button type="button" class="btn btn-danger cancle-btn">삭제</button>
            </div>
          </div>
          
          <?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/helloworld/inc/footer.php';
?>
    <!-- jquery -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
      integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <!-- jqueryui js -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"
      integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <!-- bootstrap js -->

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js"
      integrity="sha512-ToL6UYWePxjhDQKNioSi4AyJ5KkRxY+F1+Fi7Jgh0Hp5Kk2/s8FD7zusJDdonfe5B00Qw+B8taXxF6CFLnqNCw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <!-- modernizr js -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"
      referrerpolicy="no-referrer"
    ></script>

    <script src="js/common.js"></script>
  </body>
  <script>
    let documentHeight = Math.max(
      document.body.scrollHeight,
      document.body.offsetHeight,
      document.documentElement.clientHeight,
      document.documentElement.scrollHeight,
      document.documentElement.offsetHeight
    );
    document.querySelector('header').style.height = documentHeight + 'px';
  </script>
</html>
