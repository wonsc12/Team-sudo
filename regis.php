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
    <link rel="stylesheet" href="css/common.css" />
    <link rel="stylesheet" href="css/lim.css" />
    <style>

        .btn {
            width: 105px;
            height: 48px;
        }
        .notice-btn{
            padding-top: 65px;
            justify-content: space-between;
        }
        .title-box{
          width: 883px;
          height: 40px;
        }
        .con-box{
          width: 1170px; 
          height: 505px;
        }
        .input-group > .form-control{
          position: none;
          flex: none;
          width: 560px;
          height: 40px;
        }
        .title{
          gap: 50px;
          align-items: center;
          padding-left: 60px;
          padding-top: 26px;
        }
        .con{
          gap: 50px;
          padding-left: 60px;
          padding-top: 35px;
        }
        .file{ 
          gap: 20px ;
          align-items: center;
          padding-left: 60px;
          padding-top: 35px;
        }
        .regist{
          /* width: 100%; */
          height: auto;
          background: #fff;
          padding: 20px;
          border: 1px solid #ced4da;
        }
        .btn-primary{
          width: 106px;
          height: 40px;
          border-radius: 0%;
        }
        .right-button{
          padding-left: 250px;
        }
    </style>
  </head>
  <body>
  <?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/helloworld/inc/header.php';
    ?>
            <h2 class="h2">게시글 등록</h2>
            <div class="regist">
              <div class="mb-3 d-flex title">
                <label for="formGroupExampleInput" class="form-label">제목</label>
                <input type="text" class="form-control title-box" id="formGroupExampleInput" placeholder="제목을 입력하시오.">
              </div>
              <div class="mb-3 d-flex con">
                <label for="formGroupExampleInput" class="form-label">내용</label>
                <input type="text" class="form-control con-box" id="formGroupExampleInput" placeholder="내용을 입력하시오. (1200자 제한)">
              </div>
              <div>
                <div class="input-group d-flex file">
                  <label for="formGroupExampleInput" class="form-label">첨부파일</label>
                  <input type="file" class="form-control file-box" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                  <button type="button" class="btn btn-primary">파일 추가</button>
                  <div class="right-button">
                    <button type="button" class="btn btn-success regist-btn">등록</button>
                    <button type="button" class="btn btn-danger cancle-btn">취소</button>
                  </div>
                </div>
              </div>
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

    <!-- summernote modernizr js -->
    <script type="text/javascript"> 
      $(document).ready(function(){
        $('#summernote').summernote();
      });
      </script>

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
