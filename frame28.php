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
                    <ul class="list-group list-group-flush ml-3 mr-2">
                        <li class="list-group-item fw-bold" style="border-bottom: 3px solid !important;">학습지원센터</li>
                        <li class="list-group-item pt-3 pb-3"><a class="nav-link link-dark" style="padding: 0rem !important;" href="frame27.php">공지사항</a></a></li>
                        <li class="list-group-item pt-3 pb-3"><a class="nav-link link-dark active" style="padding: 0rem !important;" href="frame28.php">FAQ</a></li>
                        <li class="list-group-item pt-3 pb-3"><a class="nav-link link-dark" style="padding: 0rem !important;" href="frame29.php">자료실</a></li>
                        <li class="list-group-item pt-3 pb-3"><a class="nav-link link-dark" style="padding: 0rem !important;" href="frame30.php">PC 원격지원</a></li>
                        <li class="list-group-item pt-3 pb-3 border-bottom"><a class="nav-link link-dark" style="padding: 0rem !important;" href="frame31.php">교육문의</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-10 pl-6 pr-8">
                <p class="col-md-2 fs-4 text-start fw-bold pb-5">FAQ</p>
                <div class="row">
                    <div class="col-md-9">
                        <button class="btn bg-custom-light-gray" type="button">전체</button>
                        <button class="btn bg-custom-light-gray" type="button">회원가입</button>
                        <button class="btn bg-custom-light-gray" type="button">학습</button>
                        <button class="btn bg-custom-light-gray" type="button">평가</button>
                        <button class="btn bg-custom-light-gray" type="button">과제</button>
                        <button class="btn bg-custom-light-gray" type="button">회원탈퇴</button>
                        <button class="btn bg-custom-light-gray" type="button">기타</button>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="button-addon2">
                            <button class="btn bg-custom-light-gray" type="button" id="button-addon2"><img src="assets/img/magnify.png" alt=""></button>
                        </div>
                    </div>
                </div>

                <div class="bd-example">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <span class="col-md-2 fw-bold">회원가입</span> <span class="col-md-6">회원가입은 어떻게 하나요?</span>
                                </button>
                            </h4>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body p-5 bg-custom-light-gray">
                                    <div class="col-md-6 offset-md-2">
                                        <p>> HRD에셋 입니다.</p>
                                        <p>1. 사업주 단체훈련의 경우 별도의 회원가입없이 안내받은 ID/PW로 로그인 후 학습진행 가능합니다.</p>
                                        <p>2. 내일배움카드 또는 비환급훈련 개인가입훈련생 등의 경우 회원가입에서 아이핀 또는 휴대폰 본인인증 진행후 가능합니다.</p>
                                        <p>감사합니다.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="col-md-2 fw-bold">학습</span> <span class="col-md-6">수료기준이 궁금합니다.</span>
                                </button>
                            </h4>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span class="col-md-2 fw-bold">평가</span> <span class="col-md-6">평가는 언제 진행할 수 있나요?</span>
                                </button>
                            </h4>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container p-5">
                    <li class="text-center"></li>
                    <li class="text-center"></li>
                    <li class="text-center"></li>
                    <h5 class="text-center p-5"><span class="btn bg-custom-light-gray rounded-circle">1</span></h5>
                </div>
            </div>
        </div>
        <!-- end content -->
        <?php include "footer.php" ?>
        <script src="assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>