<?php
// 데이터베이스 연결 설정 파일을 포함합니다.
include_once $_SERVER['DOCUMENT_ROOT'].'/helloworld/admin/inc/dbcon.php';

// 여기에 필요한 PHP 코드를 작성합니다.
// 필요에 따라 POST나 GET 데이터를 읽어오고, 데이터베이스에서 데이터를 가져오는 등의 작업을 할 수 있습니다.
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
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css"
    />

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
      
      tr{
        line-height: 34px;
      }
      .edit{
        gap: 30px;
        align-items: center;
      }
      .block-top{
        gap: 20px;
      }
      .container-fluid{
        padding: 0;
      }
      .form-control{
        width: 750px;
        height: 50px;
      }
      .form-select-lg{
        width: 250px;
        height: 50px;
        margin-top: 7px;
      }
      .bar-top{
        justify-content: space-between;
        width: 100%;
      }
      .pagination{
        margin-top: 20px;
        justify-content: center;
      }
      .c_button {
        position: absolute;
        right: 200px;
        bottom: 15px;
      }
    </style>
  </head>
  <body>
    <section class="d-flex">
      <header>
        <section class="headerContainer">
          <div class="d-flex justify-content-center" id="logo">
            <h1>logo</h1>
            <img src="./img/Group 50.png" alt="logo.jpg" />
          </div>
          <div class="gnb">
            <ul class="d-flex flex-column">
              <li>
                <a href="index.html">
                  <span class="material-symbols-outlined"> dashboard </span>
                  <span>대시 보드</span>
                </a>
              </li>
              <li>
                <a href="/announce.html">
                  <span class="material-symbols-outlined"> assignment </span>
                  <span>공지 사항</span>
                </a>
              </li>
              <li>
                <a href="/class/course_list.html">
                  <span class="material-symbols-outlined"> live_tv </span>
                  <span>강의 관리</span>
                </a>
              </li>
              <li>
                <a href="/member_mg.html">
                  <span class="material-symbols-outlined"> face </span>
                  <span>회원 관리</span>
                </a>
              </li>
              <li>
                <a href="/coupon/coupon_list.html">
                  <span class="material-symbols-outlined"> local_atm </span>
                  <span>쿠폰 관리</span>
                </a>
              </li>
              <li>
                <a href="/performance.html">
                  <span class="material-symbols-outlined"> bar_chart </span>
                  <span>성과 분석</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="material-symbols-outlined"> help </span>
                  <span>질의 응답</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="material-symbols-outlined"> logout </span>
                  <span>Logout</span>
                </a>
              </li>
            </ul>
          </div>
        </section>
      </header>
      <section class="content_wrapper">
        <div class="top_section d-flex justify-content-end">
          <div class="profile d-flex align-items-center">
            <span class="material-symbols-outlined">account_circle</span>
            <div class="d-flex flex-column">
              <span>관리자</span>
              <span>코딩좋아</span>
            </div>
            <span class="material-symbols-outlined">notifications</span>
            <!-- <span>jsdafjo@naver.com</span> -->
          </div>
        </div>
        <div class="main">
          <div class="main_container">
            <h2 class="h2">공지 사항</h2>
            <div class="bar-top d-flex">
              <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                  <form class="block-top d-flex">
                    <input class="form-control me-2" type="search" placeholder="제목을 입력하시오." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
                </div>
              </nav>
              <select class="form-select form-select-lg mb-3" aria-label="Large select example">
                <option selected>조회수</option>
                <option value="1">가장 많음</option>
                <option value="2">가장 적음</option>
              </select>
              <select class="form-select form-select-lg mb-3" aria-label="Large select example">
                <option selected>작성일</option>
                <option value="1">최신순</option>
                <option value="2">한달 이내</option>
                <option value="3">일년 이내</option>
              </select>
            </div>
            <table class="table table-hover table-striped">
              <thead class="table-dark">
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">제목</th>
                  <th scope="col">작성자</th>
                  <th scope="col">조회수</th>
                  <th scope="col">작성일</th>
                  <th scope="col">수정 / 삭제</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td><a href="#">안녕하세요! 반갑습니다!</a></td>
                  <td>운영자</td>
                  <td>1024</td>
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
                  <th scope="row">2</th>
                  <td><a href="#">안녕하세요! 반갑습니다!</a></td>
                  <td>운영자</td>
                  <td>1024</td>
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
                  <th scope="row">3</th>
                  <td><a href="#">안녕하세요! 반갑습니다!</a></td>
                  <td>운영자</td>
                  <td>127</td>
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
                <th scope="row">4</th>
                <td><a href="#">안녕하세요! 반갑습니다!</a></td>
                <td>운영자</td>
                <td>564</td>
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
                <th scope="row">5</th>
                <td><a href="#">안녕하세요! 반갑습니다!</a></td>
                <td>운영자</td>
                <td>455</td>
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
                <th scope="row">6</th>
                <td><a href="#">안녕하세요! 반갑습니다!</a></td>
                <td>운영자</td>
                <td>767</td>
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
                <th scope="row">7</th>
                <td><a href="#">안녕하세요! 반갑습니다!</a></td>
                <td>운영자</td>
                <td>843</td>
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
                <th scope="row">8</th>
                <td><a href="#">안녕하세요! 반갑습니다!</a></td>
                <td>운영자</td>
                <td>908</td>
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
                <th scope="row">9</th>
                <td><a href="#">안녕하세요! 반갑습니다!</a></td>
                <td>운영자</td>
                <td>523</td>
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
                <th scope="row">10</th>
                <td><a href="#">안녕하세요! 반갑습니다!</a></td>
                <td>운영자</td>
                <td>231</td>
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
              </tbody>
            </table>
          </div>
          <nav aria-label="...">
            <ul class="pagination d-flex">
              <li class="page-item disabled">
                <span class="page-link">이전</span>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item">
                <a class="page-link" href="#">다음</a>
              </li>
            </ul>
            <div class="c_button">
              <button class="btn_complete btn btn-success regist-btn">게시글 등록</button>
            </div>
          </nav>

        </div>
      </section>
    </section>
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
    document.querySelector("header").style.height = documentHeight + "px";
  </script>
</html>
