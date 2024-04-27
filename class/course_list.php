<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>강의 관리</title>
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

    <link rel="stylesheet" href="/css/jqueryui/jquery-ui.theme.min.css"/>
    <link rel="stylesheet" href="/helloworld/css/common.css"/>
    <link rel="stylesheet" href="/helloworld/css/index.css"/>
    

    <style>
   
      /* 강의관리-최원석 */

      
      p {
        margin-bottom: 0;
      }
      .btn {
        height: 45px;
        white-space: nowrap;
        box-sizing: border-box;
      }
      .btn_g {
        margin-right: 15px;
      }
      .content_wrap {
        background-color: #f8f8f8;
      }
      .course_sort {
        margin-bottom: calc(var(--c-space_updown) * 2);
      }
      .link_btn {
        display: flex;
        justify-content: flex-end;
        gap: calc(var(--c-space_updown) * 0.5);
        margin-bottom: 25px;
      }
      .course_sort .row,
      .course_list .row,
      .category_add .row {
        margin-bottom: var(--c-space_updown);
      }
      input[type='text'],
      select,
      .btn {
        height: 45px;
        font-size: 16px;
      }
      .level_price {
        height: 45px;
        display: flex;
        align-items: center;
      }
      .level_price div {
        align-items: center;
      }
      .level_price label {
        font-size: 16px;
        margin: 0 12px 0 3px;
        line-height: 45px;
        display: inline-block;
        vertical-align: text-bottom;
        margin-left: 8px;
      }
      .level_price h3 {
        margin-right: calc(var(--c-space_updown) * 0.5);
      }
      .level_price h3.b_text01 {
        margin-right: calc(var(--c-space_updown) * 0.5);
        margin-block-start: 0;
        margin-block-end: 0;
        font-weight: bold;
        vertical-align: bottom;
        display: inline-block;
      }
      .price_check {
        margin-left: 10px;
      }
      .course_list img {
        width: 226px;
        height: 162px;
        margin-right: 20px;
      }

      .course_list {
        width: 100%;
        background: #fff;
        border-radius: 12px;
        padding: 27px;
        margin-bottom: 27px;
      }

      .course_list_title {
        margin-bottom: calc(var(--c-space_updown) * 0.5);
      }
      .duration {
        color: #505050;
        font-style: 13px;
      }
      .course_list .ui-selectmenu-button.ui-button {
        width: 134px;
        margin-bottom: 10px;
      }
      .course_list .primary_bg {
        margin-right: 6px;
      }

      .course_list .col-md-4 {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: end;
      }
      .breadcrumb-item {
        font-size: 14px;
      }
      .course_info {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
      }
      .course_list select {
        margin-bottom: 5px;
      }
      .level_price span {
        display: flex;
        align-items: center;
      }
      .status_box {
        position: relative;
        width: 100%;
      }
      .status_box .price {
        position: absolute;
        right: 220px;
        width: 200px;
        text-align: right;
      }
      .course_list .price {
        font-weight: bold;
      }
      .price_btn_wrap {
        flex-wrap: wrap;
      }
      .search_bar {
        flex: 1;
      }
      .search_bar input {
        margin-right: 15px;
      }
      .duration * {
        margin-right: calc(var(--c-space_updown) * 0.5);
      }
      .duration i {
        margin-right: calc(var(--c-space_updown) * 0.2);
      }

      .status_wrap {
        display: flex;
        flex-direction: column;
        gap: calc(var(--c-space_updown) * 0.3);
      }

      .status_wrap select {
        width: 100%;
      }

      a.btn {
        line-height: 32px;
      }
      /*카테고리 최원석*/

      .btn-check:checked + .btn,
      .btn.active,
      .btn.show,
      .btn:first-child:active,
      :not(.btn-check) + .btn:active {
        border-color: #cdcdcd;
      }
      .tt_mb {
        margin-bottom: calc(var(--c-space_updown) * 2);
      }
      .base_mt {
        margin-top: var(--c-space_updown);
      }
      .category_add_btns {
        display: flex;
        gap: calc(var(--c-space_updown) * 0.5);
      }
      .category_add h3.content_tt {
        margin-bottom: var(--c-space_updown);
      }
      .category_list {
        margin-top: calc(var(--c-space_updown) * 1.5);
      }
      .category_list form {
        margin-bottom: calc(var(--c-space_updown) * 1);
      }
      .table_wrap {
        width: 100%;
      }
      .category_list table {
        margin-bottom: calc(var(--c-space_updown) * 3);
        text-align: center;
        border-radius: 10px;
        width: 45%;
      }
      .category_list table tr * {
        padding: 5px;
      }
      .category_list table thead * {
        margin-top: 30px;
        padding: 10px;
        font-size: 20px;
        font-weight: bold;
      }
      .category_list table tbody * {
        padding: 5px;
        font-size: 16px;
      }
      .category_list table td {
        width: 25%;
      }
      .category_list table i {
        font-size: 22px;
      }
      .modal-body label {
        margin-bottom: 10px;
      }
      .category_list .dropdown {
        width: 100%;
      }
      .dropdown ul {
        width: 100%;
        padding-top: 0;
        padding-bottom: 0;
      }
      .dropdown ul li {
        width: 100%;
        height: 45px;
        padding: 0 15px;
        /* border-bottom: 1px solid #c9e5f7; */
      }
      .list-group-item + .list-group-item {
        border-top-width: 0;
        height: 45px;
        box-sizing: border-box;
        padding: 0 15px;
      }
      .dropdown ul li:last-child {
        border-bottom: none;
      }
      .dropdown ul li:hover {
        background-color: #ecf2ff;
      }
      .dropdown i {
        font-size: 20px;
      }
      .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0;
        vertical-align: 0;
        content: '';
        border-top: none;
        border-right: none;
        border-bottom: 0;
        border-left: none;
      }

      /*강의보기*/

      ol,
      ul {
        padding-left: 0;
      }
      .course_view .course_list {
        padding: 120px 100px;
        position: relative;
      }
      .course_list > div {
        position: relative;
      }
      .course_view img {
        width: 390px;
        height: 274px;
        margin-right: var(--c-space_updown);
      }
      .course_view .view_category {
        position: absolute;
        bottom: 100%;
        right: 0;
      }
      .course_status {
        position: relative;
        margin-top: var(--c-space_updown);
      }
      .status_wrap {
        position: absolute;
        bottom: 0;
        right: 10px;
      }
      .course_view .badge {
        font-size: 20px;
        margin-left: 10px;
      }
      .course_view,
      .course_list_wrap,
      .category_add {
        position: relative;
        margin-bottom: 60px;
      }
      .course_view .back_btn,
      .course_list_wrap .all_modify_btn,
      .category_add .back_btn {
        position: absolute;
        right: 0;
      }

      .course_view .course_list_title {
        display: flex;
        align-items: center;
      }

      /* 강의등록/강의수정 */

      h1 {
        font-family: 'jua';
      }

      .c_mt {
        margin-top: calc(var(--c-space_updown) * 1.5);
      }
      .c_mb {
        margin-bottom: calc(var(--c-space_updown));
      }

      select,
      input[type='file']::file-selector-button,
      input {
        height: 45px;
      }

      .price_select,
      .level_select,
      .period,
      .act {
        width: 50%;
      }

      .trash i,
      .trash_icon i {
        font-size: 35px;
        align-items: center;
      }

    

      .add_listBtn {
        text-align: center;
        margin: calc(var(--c-space_updown) * 2) 0 calc(var(--c-space_updown) * 2.5);
      }
      .add_list a {
        color: #6f6f6f;
        padding-top: 2px;
      }

      .btn_complete {
        margin-right: 15px;
      }

      .level_status {
        height: 45px;
        gap: 10px;
      }

      .c_button {
        padding-bottom: calc(var(--c-space_updown) * 2.5);
      }

      .file_input > img {
        width: 150px;
        margin-top: 10px;
        border-radius: 5px;
      }

      .product_options > img {
        width: 150px;
      }

      .you_upload_content p,
      .youtube p,
      .youtube_v p {
        text-align: center;
        margin-top: 13px;
        font-weight: 600;
      }

      .course_info > h3 {
        width: 100%;
      }

      .youtube_thumb {
        position: relative;
      }

      .youtube_link > div {
        text-align: center;
        align-items: center;
      }

      /* 강의수정 */

      .youtubeThumbBox {
        margin: 10px auto;
        width: 100%;
      }

      .youtubeThumbBox img {
        width: 150px;
        border-radius: 5px;
      }

      /* 강의보기 */

      .youtubeNameBox,
      .youtubeUrlBox {
        height: 50px;
        background-color: #f8f8f8;
        border-radius: 6px;
      }

      .youtubeNameBox,
      .youtubeViewcon,
      .youtubeViewname {
        width: 70%;
      }

      .youtubeUrlBox,
      .youtubeViewurl,
      .youtubeViewthumb {
        width: 30%;
      }

      .youtubeNameBox p,
      .youtubeUrlBox p {
        text-align: center;
        margin-top: 12px;
        font-weight: 600;
      }

      .youtube_con {
        width: 100%;
        height: 150px;
        border-bottom: 1px solid #c2c4c7;
      }

      .youtube_con img {
        width: 150px;
        height: 90px;
        object-fit: contain;
        margin-right: 0;
        border: 1px solid var(--c-lightgray);
        border-radius: 6px;
      }

      .youtubeViewcon,
      .youtubeViewcon img {
        align-items: center;
      }
      /* 강의 쿠폰 공통 */

      .main_tt {
        font-family: 'Jua', sans-serif;
        font-size: 32px;
        font-weight: 500;
      }

      .main_stt {
        font-size: 28px;
        font-weight: bold;
      }

      .content_tt {
        font-size: 24px;
        font-weight: bold;
      }

      .content_stt {
        font-size: 20px;
        font-weight: 400;
      }

      .b_text01 {
        font-size: 18px;
        font-weight: 400;
        line-height: 1.4;
      }

      .b_text02 {
        font-size: 16px;
        font-weight: 400;
        line-height: 1.4;
      }
      
      .tt {
        margin: 50px;
      }
      .btn {
        font-size: 16px;
        height: 45px;
        padding-left: 30px;
        padding-right: 30px;
      }
      .mairgin_t { 
        margin-top: 25px;
      }
      .b-text_b { 
        margin-right: 33px; 
        font-weight: bold;
      }
      .price_m { 
        margin-right: 19px;
      }
      .form_check-b { 
        margin-top: .25em;
      }
      /* .form_widi {width: 708px; } */
    </style>
  </head>
  <body>
    <?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/helloworld/inc/header.php';
    ?>
    
            <h2>강의 관리</h2>
          </div>
          <section>
            <div class="link_btn">
              <a href="course_create.php" class="btn btn-dark">신규 강의 등록</a>
              <a href="/helloworld/class/category.php" class="btn btn-dark">카테고리 관리</a>
            </div>
            <form action="#" class="course_sort">
              <div class="row">
                <div class="col-md-4">
                  <select class="form-select form_widi" aria-label="Default select example" id="cate1" name="cate1">
                    <option selected disabled>대분류</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <select class="form-select form_widi" aria-label="Default select example" id="cate2" name="cate2">
                    <option selected disabled>중분류</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <select class="form-select form_widi" aria-label="Default select example" id="cate3" name="cate3">
                    <option selected disabled>소분류</option>
                  </select>
                </div>
              </div>
              <div class="d-flex align-items-center level_price">
                <div class="d-flex flex-row">
                  <h3 class="b_text01 ">난이도</h3>
                  <span>
                    <input type="checkbox" name="level1" id="basic" value="초급" class="form-check-input" />
                    <label for="basic">초급</label>
                  </span>
                  <span>
                    <input type="checkbox" name="level2" id="Intermediate" value="중급" class="form-check-input" />
                    <label for="Intermediate">중급</label>
                  </span>
                  <span>
                    <input type="checkbox" name="level3" id="Advanced" value="고급" class="form-check-input" />
                    <label for="Advanced">고급</label>
                  </span>
                </div>
              </div>
              <div class="d-flex flex-row  mairgin_t">
                <h3 class="b_text01 b-text_b">가격</h3>
                <span class="price_m">
                  <input type="radio" name="price_status" id="pay" value="유료" class="form-check-input " />
                  <label class="form_check-b" for="pay">유료</label>
                </span>
                <span>
                  <input type="radio" name="price_status" id="free" value="무료" class="form-check-input " />
                  <label class="form_check-b" for="free">무료</label>
                </span>
              </div>
              <div class="d-flex search_bar mairgin_t">
                <label for="search" class="hidden"></label>
                <input
                  type="text"
                  name="name"
                  id="search"
                  class="form-control"
                  placeholder="강의명으로 검색하세요"
                  aria-label="Username"
                />
                <button class="btn btn-primary btn_pr">검색</button>
              </div>
            </form>

            <!-- 리스트 -->
            <form action="clist_save.php" method="POST" class="course_list_wrap">
              <ul>
                <li class="course_list row shadow_box">
                  <input type="hidden" name="cid[]" value="" />
                  <div class="col-md-8 d-flex">
                    <img src="" alt="" class="border" />
                    <div class="course_info">
                      <div>
                        <h3 class="course_list_title b_text01">
                          <a href=">"></a>
                          <span class="badge rounded-pill blue_bg b-pd"> </span>
                          <span class="badge level_badge rounded-pill b-pd"> </span>
                        </h3>
                        <p></p>
                      </div>
                      <p class="duration"><i class="ti ti-calendar-event"></i><span>수강기간</span><span> </span></p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <nav
                      style="
                        --bs-breadcrumb-divider: url(
                          &#34;data:image/svg + xml,
                          %3Csvgxmlns='http://www.w3.org/2000/svg'width='8'height='8'%3E%3Cpathd='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z'fill='%236c757d'/%3E%3C/svg%3E&#34;
                        );
                      "
                      aria-label="breadcrumb"
                    >
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"> </a></li>
                        <li class="breadcrumb-item active" aria-current="page"></li>
                        <li class="breadcrumb-item active" aria-current="page"></li>
                      </ol>
                    </nav>

                    <div class="d-flex align-items-end status_box">
                      <span class="price content_stt"> <span class="number"></span><span> 원</span> </span>
                      <span class="d-flex flex-column align-items-end status_wrap">
                        <select name="act[]" id="act[]" class="form-select" aria-label="Default select example">
                          <option disabled>상태</option>
                          <option value="활성">활성</option>
                          <option value="비활성">비활성</option>
                        </select>
                        <span class="price_btn_wrap">
                          <a href="course_update.php" class="btn btn-success btn_g">수정</a>
                          <a href="" class="btn btn-danger">삭제</a>
                        </span>
                      </span>
                    </div>
                  </div>
                </li>
              </ul>
              <button class="btn btn-primary btn_g all_modify_btn">변경 일괄 수정</button>
            </form>

            <nav aria-label="Page navigation example" class="d-flex justify-content-center pager">
              <ul class="pagination coupon_pager"></ul>
            </nav>
          </section>
        </div>
      </section>
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

    <script src="helloworld/js/common.js"></script>
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
