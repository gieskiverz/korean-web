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
                                <a class="accordion-button collapsed nav-link link-dark" href="frame40.php">
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
                            <div id="collapse5" class="accordion-collapse collapse show" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <a class="nav-link link-dark ml-1 mb-2 active" style="padding: 0rem !important;" href="frame41.php">자사수강생 리스트</a>
                                    <a class="nav-link link-dark ml-1 mb-2" style="padding: 0rem !important;" href="frame42.php">자부담금 관리</a>
                                    <a class="nav-link link-dark ml-1 mb-2" style="padding: 0rem !important;" href="frame43.php">수료 관리</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-10 pl-6 pr-8">
                <p class="col-md-2 fs-4 text-start fw-bold pb-5">자사 수강생 리스트</p>
                <div class="tow mb-5">
                    <span class="text-primary fs-6 border-top border-bottom border-light-blue border-3 p-1 align-middle">2021.04.25 ~ 2021.04.25 개강</span>
                    <button class="btn bg-custom-light-gray rounded float-end">개강전체 엑셀 출력</button>
                </div>
                <div class="row rounded border border-5 p-5">
                    <div class="col-md-6">
                        <div>법정의무교육</div>
                        <div class="fw-bold fs-5">개인정보보호교육</div>
                        <div>환급 <span class="f-blue">0명</span> | 비환급 <span class="f-blue">2명</span></div>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-bordered align-middle text-center">
                            <tr>
                                <td>환급 수료인원</td>
                                <td>비환급 수료인원</td>
                                <td rowspan="2">
                                    <div>
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 8H27" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.001 16H27.0002" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.001 24H27.0002" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M5.5 9.25C6.19036 9.25 6.75 8.69036 6.75 8C6.75 7.30964 6.19036 6.75 5.5 6.75C4.80964 6.75 4.25 7.30964 4.25 8C4.25 8.69036 4.80964 9.25 5.5 9.25Z" fill="black" />
                                            <path d="M5.5 25.25C6.19036 25.25 6.75 24.6904 6.75 24C6.75 23.3096 6.19036 22.75 5.5 22.75C4.80964 22.75 4.25 23.3096 4.25 24C4.25 24.6904 4.80964 25.25 5.5 25.25Z" fill="black" />
                                            <path d="M5.5 17.25C6.19036 17.25 6.75 16.6904 6.75 16C6.75 15.3096 6.19036 14.75 5.5 14.75C4.80964 14.75 4.25 15.3096 4.25 16C4.25 16.6904 4.80964 17.25 5.5 17.25Z" fill="black" />
                                        </svg>
                                    </div>
                                    <div>상세보기</div>
                                </td>
                            </tr>
                            <tr class="fw-bold">
                                <td><span class="text-warning">0명</span> / 0명</td>
                                <td><span class="text-warning">2명</span> / 2명</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <br>
                <div class="row rounded border border-5 p-5">
                    <div class="col-md-6">
                        <div>법정의무교육</div>
                        <div class="fw-bold fs-5">개인정보보호교육</div>
                        <div>환급 <span class="f-blue">0명</span> | 비환급 <span class="f-blue">2명</span></div>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-bordered align-middle text-center">
                            <tr>
                                <td>환급 수료인원</td>
                                <td>비환급 수료인원</td>
                                <td rowspan="2">
                                    <div>
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 8H27" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.001 16H27.0002" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.001 24H27.0002" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M5.5 9.25C6.19036 9.25 6.75 8.69036 6.75 8C6.75 7.30964 6.19036 6.75 5.5 6.75C4.80964 6.75 4.25 7.30964 4.25 8C4.25 8.69036 4.80964 9.25 5.5 9.25Z" fill="black" />
                                            <path d="M5.5 25.25C6.19036 25.25 6.75 24.6904 6.75 24C6.75 23.3096 6.19036 22.75 5.5 22.75C4.80964 22.75 4.25 23.3096 4.25 24C4.25 24.6904 4.80964 25.25 5.5 25.25Z" fill="black" />
                                            <path d="M5.5 17.25C6.19036 17.25 6.75 16.6904 6.75 16C6.75 15.3096 6.19036 14.75 5.5 14.75C4.80964 14.75 4.25 15.3096 4.25 16C4.25 16.6904 4.80964 17.25 5.5 17.25Z" fill="black" />
                                        </svg>
                                    </div>
                                    <div>상세보기</div>
                                </td>
                            </tr>
                            <tr class="fw-bold">
                                <td><span class="text-warning">0명</span> / 0명</td>
                                <td><span class="text-warning">2명</span> / 2명</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- end content -->
        <?php include "footer.php" ?>
        <script src="assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>