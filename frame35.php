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
                        <li class="list-group-item pt-3 pb-3"><a class="nav-link link-dark" style="padding: 0rem !important;" href="frame28.php">FAQ</a></li>
                        <li class="list-group-item pt-3 pb-3"><a class="nav-link link-dark active" style="padding: 0rem !important;" href="frame35.php">자료실</a></li>
                        <li class="list-group-item pt-3 pb-3"><a class="nav-link link-dark" style="padding: 0rem !important;" href="frame29.php">PC 원격지원</a></li>
                        <li class="list-group-item pt-3 pb-3 border-bottom"><a class="nav-link link-dark" style="padding: 0rem !important;" href="frame36.php">교육문의</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-10 pl-6 pr-8">
                <p class="col-md-2 fs-4 text-start fw-bold pb-5">자료실</p>
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