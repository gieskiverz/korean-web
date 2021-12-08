<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Carousel Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">



    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <link href="headers.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>

<body>
    <?php include "header.php" ?>
    <!-- content -->
    <div class="container-fluid">
        <div class="row mb-5 mt-5">
            <div class="col-md-2">
                <div class="bd-example">
                    <ul class="accordion accordion-flush list-group list-group-flush ml-3 mr-2" id="accordionExample">
                        <li class="list-group-item fw-bold" style="border-bottom: 3px solid !important;">나의 강의실</li>
                        <li class="list-group-item pt-3 pb-3"><a class="nav-link link-dark" style="padding: 0rem !important;" href="frame46.php">학습진행과정</a></a></li>
                        <li class="list-group-item pt-3 pb-3"><a class="nav-link link-dark" style="padding: 0rem !important;" href="#">학습종료과정</a></li>
                        <li class="list-group-item pt-3 pb-3"><a class="nav-link link-dark" style="padding: 0rem !important;" href="#">수강신청</a></li>
                        <li class="list-group-item pt-3 pb-3"><a class="nav-link link-dark" style="padding: 0rem !important;" href="#">결재관리</a></li>
                        <li class="list-group-item pt-3 pb-3"><a class="nav-link link-dark" style="padding: 0rem !important;" href="#">1:1 상담</a></li>
                        <li class="list-group-item pt-3 pb-3"><a class="nav-link link-dark" style="padding: 0rem !important;" href="#">학습상담실</a></li>
                        <li class="list-group-item pt-3 pb-3 border-bottom"><a class="nav-link link-dark" style="padding: 0rem !important;" href="#">회원정보</a></li>

                        <li class="accordion-item list-group">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    수강관리
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                </div>
                            </div>
                        </li>

                        <li class="accordion-item list-group">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    수강신청 | 결제관리
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                </div>
                            </div>
                        </li>

                        <li class="accordion-item list-group">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    자료 | 상담관리
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <a class="nav-link link-dark ml-1 mb-2" style="padding: 0rem !important;" href="frame37.php">찜한 학습자료</a>
                                    <a class="nav-link link-dark ml-1 mb-2" style="padding: 0rem !important;" href="frame38.php">1:1 상담 리스트</a>
                                    <a class="nav-link link-dark ml-1 mb-2" style="padding: 0rem !important;" href="frame39.php">학습상담리스트</a>
                                </div>
                            </div>
                        </li>

                        <li class="accordion-item list-group">
                            <h2 class="accordion-header" id="heading4">
                                <a class="accordion-button collapsed nav-link link-dark active" href="frame40.php">
                                    회원정보관리
                                </a>
                            </h2>
                        </li>

                        <li class="accordion-item list-group">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    교육담당자
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-10 pl-6 pr-8">
                <p class="col-md-2 fs-4 text-start fw-bold pb-5">회원정보관리</p>
                <div class="f-blue fs-5 fw-bold mb-3">필수정보</div>
                <div class="row fw-bold border-top border-bottom border-1 pt-3 pb-3">
                    <div class="col-md-2 pl-2">
                        아이디
                    </div>
                    <div class="col-md-10">hrd2</div>
                </div>
                <div class="row fw-bold border-bottom border-1 pt-3 pb-3">
                    <div class="col-md-2 pl-2">
                        비밀번호
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control d-inline w-25" name="" id="">
                        <span class="text-primary ml-3">※ 숫자와 영문자, 특수문자 조합으로 6~15자리를 사용해야 합니다.</span>
                    </div>
                </div>
                <div class="row fw-bold border-bottom border-1 pt-3 pb-3">
                    <div class="col-md-2 pl-2">
                        비밀번호 확인
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control d-inline w-25" name="" id="">
                        <span class="text-primary ml-3">※ 정확한 확인을 위해 비밀번호를 한번 더 입력해 주세요.</span>
                    </div>
                </div>
                <div class="row fw-bold border-bottom border-1 pt-3 pb-3">
                    <div class="col-md-2 pl-2">
                        이름
                    </div>
                    <div class="col-md-10">노현정</div>
                </div>
                <div class="row fw-bold border-bottom border-1 pt-3 pb-3">
                    <div class="col-md-2 pl-2">
                        휴대폰
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control d-inline w-25" name="" id=""> -
                        <input type="text" class="form-control d-inline w-25" name="" id=""> -
                        <input type="text" class="form-control d-inline w-25" name="" id="">
                    </div>
                </div>
                <div class="row fw-bold border-bottom border-1 pt-3 pb-3">
                    <div class="col-md-2 pl-2">
                        이메일
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control d-inline w-50" name="" id="">
                    </div>
                </div>

                <!-- section 2 -->
                <div class="f-blue fs-5 fw-bold mb-3 mt-5">추가정보</div>
                <div class="row fw-bold border-top border-bottom border-1 pt-3 pb-3">
                    <div class="col-md-2 pl-2">
                        주소
                    </div>
                    <div class="col-md-10">
                        <div><button class="btn bg-custom-light-gray">마케팅</button> <input type="text" name="" id="" class="form-control d-inline w-25"></div>
                        <div class="mt-2 mb-2"><input type="text" name="" id="" class="form-control d-inline w-50"></div>
                        <div><input type="text" name="" id="" class="form-control d-inline w-50"><span class="text-primary"> ※ 나머지 주소를 입력하세요.</span></div>
                    </div>
                </div>
                <div class="row fw-bold border-bottom border-1 pt-3 pb-3">
                    <div class="col-md-2 pl-2">
                        회사명
                    </div>
                    <div class="col-md-10">
                        <div><input type="text" name="" id="" class="form-control d-inline w-25" value="HRD에셋"> <button class="btn bg-custom-light-gray">사업주정보 매칭하기</button></div>
                    </div>
                </div>
                <div class="row fw-bold border-bottom border-1 pt-3 pb-3">
                    <div class="col-md-2 pl-2">
                        부서
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control d-inline w-25" name="" id="" value="기획">
                    </div>
                </div>
                <div class="row fw-bold border-bottom border-1 pt-3 pb-3">
                    <div class="col-md-2 pl-2">
                        직위
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control d-inline w-25" name="" id="" placeholder="직위입력">
                    </div>
                </div>
                <div class="row fw-bold border-bottom border-1 pt-3 pb-3">
                    <div class="col-md-2 pl-2">
                        메일/SMS/알림톡
                    </div>
                    <div class="col-md-10">
                        <input type="checkbox" checked name="" id=""> 메일/SMS/알림톡 수신에 동의합니다.
                    </div>
                </div>
                <div class="row fw-bold border-bottom border-1 pt-3 pb-3">
                    <div class="col-md-2 pl-2">
                        마케팅
                    </div>
                    <div class="col-md-10">
                        <input type="checkbox" name="" id=""> 마케팅 수신에 동의합니다.
                    </div>
                </div>
            </div>
            <div class="row justify-content-center"><button class="btn btn-lg bg-custom-blue text-white rounded-pill col-md-2 mt-5">회원정보 변경하기</button></div>
        </div>
        <!-- end content -->
        <?php include "footer.php" ?>
        <script src="assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>