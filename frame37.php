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
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    회원정보관리
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                </div>
                            </div>
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
                <p class="col-md-2 fs-4 text-start fw-bold pb-5">찜한 학습자료</p>
                <div class="row">
                    <div class="col-md-3 offset-md-9">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="button-addon2">
                            <button class="btn bg-custom-light-gray" type="button" id="button-addon2"><img src="assets/img/magnify.png" alt=""></button>
                        </div>
                    </div>
                </div>

                <table class="table table-borderless">
                    <thead class="table-secondary border-top border-dark">
                        <tr class="">
                            <th scope="col" class="text-center">번호</th>
                            <th scope="col" class="text-center">제목</th>
                            <th scope="col" class="text-center">파일</th>
                            <th scope="col" class="text-center">등록일</th>
                            <th scope="col" class="text-center">조회</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-bottom">
                            <td class="text-center"><span class="pl-2">1</span></td>
                            <td class="text-center">테스트</td>
                            <td class="text-center"><img src="assets/img/file.png" alt=""></td>
                            <td class="text-center">2021-04-25</td>
                            <td class="text-center">120</td>
                        </tr>
                    </tbody>
                </table>
                <h5 class="text-center m-5"><span class="btn bg-custom-light-gray rounded-circle">1</span></h5>
            </div>
        </div>
        <!-- end content -->
        <?php include "footer.php" ?>
        <script src="assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>