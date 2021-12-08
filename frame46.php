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
                            <div id="collapse3" class="accordion-collapse collapse show" aria-labelledby="heading3" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <a class="nav-link link-dark ml-1 mb-2 active" style="padding: 0rem !important;" href="frame37.php">찜한 학습자료</a>
                                    <a class="nav-link link-dark ml-1 mb-2" style="padding: 0rem !important;" href="frame38.php">1:1 상담 리스트</a>
                                    <a class="nav-link link-dark ml-1 mb-2" style="padding: 0rem !important;" href="frame39.php">학습상담리스트</a>
                                </div>
                            </div>
                        </li>

                        <li class="accordion-item list-group">
                            <h2 class="accordion-header" id="heading4">
                                <a class="accordion-button collapsed nav-link" href="frame40.php">
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
                <p class="col-md-2 fs-4 text-start fw-bold pb-5">학습진행과정</p>
                <div class="container-fluid border border-3 border-light-gray rounded-top pt-3 pb-3">
                    <div class="row">
                        <div class="col-md-3"><img src="assets/img/keluargaaneh.png" alt=""></div>
                        <div class="col-md-6">
                            <p class="fs-5 fw-bold">NCS기반 어린이집 영유아지원 V1. <img src="assets/img/media.png" alt=""></p>
                            <p class="fs-6">수강기간 <span class="f-sky-blue">2021.07.15 ~ 2021.07.17</span></p>
                            <p>내용전문가: 신창길</p>
                        </div>
                        <div class="col-md-3">
                            <div class="row border border-2 border-light-gray rounded">
                                <div class="col-md-4 border border-1 text-center small p-2">남은 수강일</div>
                                <div class="col-md-4 border border-1 text-center small p-2">강의진도</div>
                                <div class="col-md-4 border border-1 text-center small p-2">진도율</div>
                                <div class="col-md-4 border border-1 text-center p-3 fw-bold"><span class="text-warning">43</span>일</div>
                                <div class="col-md-4 border border-1 text-center p-3 fw-bold"><span class="text-warning">0</span>/21</div>
                                <div class="col-md-4 border border-1 text-center p-3 fw-bold"><span class="text-warning">100%</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header text-center" id="headingThree">
                            <button class="collapsed btn bg-custom-light-gray mx-auto d-block w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <img src="assets/img/sangsakerta.png" alt="">
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body pb-5" style="background-color: #F3F8FA;">
                                <p class="fw-bold fs-5">학습과정 ❯</p>
                                <div class="container bg-white rounded">
                                    <img class="mx-auto d-block" src="assets/img/lobapc.png" alt="">
                                </div>
                                <p class="fw-bold fs-5 mt-5">과정차시 ❯</p>
                                <div class="container bg-white rounded">
                                    <div class="row">
                                        <div class="col-md-3 fw-bold fs-5">1차시</div>
                                        <div class="col-md-3">
                                            <div class="fw-bold fs-5">문제해결의 전체상의 이해</div>
                                            <div class="fs-7 text-black-50">최종수강시간: 2021.07.15 15:23:15</div>
                                            <div class="fs-7 text-black-50">접속 아이피: 59.11.17.119</div>
                                        </div>
                                        <div class="col-md-3 fw-bold fs-5">100%</div>
                                        <div class="col-md-3">
                                            <button class="btn border border-blue rounded f-blue bg-white">이어보기</button>
                                            <button class="btn btn-primary">수강하기</button>
                                        </div>
                                    </div>
                                    <hr class="w-100">
                                    <div class="row">
                                        <div class="col-md-3 fw-bold fs-5">2차시</div>
                                        <div class="col-md-3">
                                            <div class="fw-bold fs-5">문제해결의 전체상의 이해</div>
                                            <div class="fs-7 text-black-50">최종수강시간: 2021.07.15 15:23:15</div>
                                            <div class="fs-7 text-black-50">접속 아이피: 59.11.17.119</div>
                                        </div>
                                        <div class="col-md-3 fw-bold fs-5">100%</div>
                                        <div class="col-md-3">
                                            <button class="btn border border-blue rounded f-blue bg-white">이어보기</button>
                                            <button class="btn btn-primary">수강하기</button>
                                        </div>
                                    </div>
                                    <hr class="w-100">
                                    <div class="row">
                                        <div class="text-center">
                                            <li class="p-2"></li>
                                            <li class="p-2"></li>
                                            <li class="p-2"></li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end content -->
        <?php include "footer.php" ?>
        <script src="assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>