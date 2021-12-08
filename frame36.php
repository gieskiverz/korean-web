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
                        <li class="list-group-item pt-3 pb-3"><a class="nav-link link-dark" style="padding: 0rem !important;" href="frame35.php">자료실</a></li>
                        <li class="list-group-item pt-3 pb-3"><a class="nav-link link-dark" style="padding: 0rem !important;" href="frame29.php">PC 원격지원</a></li>
                        <li class="list-group-item pt-3 pb-3 border-bottom"><a class="nav-link link-dark active" style="padding: 0rem !important;" href="frame36.php">교육문의</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-10 pl-6 pr-8">
                <p class="col-md-2 fs-4 text-start fw-bold pb-5">교육문의</p>

                <table class="table table-bordered border-gray">
                    <tbody>
                        <tr>
                            <th class="text-center bg-custom-light-gray">이름</th>
                            <td>로그인후에 이용하세요.</td>
                        </tr>
                        <tr>
                            <th class="text-center bg-custom-light-gray">문의종류</th>
                            <td>
                                <select class="form-select w-25" id="floatingSelect" aria-label="Floating label select example">
                                    <option selected>선택하세요</option>
                                    <option value="1">선택하세요</option>
                                    <option value="2">선택하세요</option>
                                    <option value="3">선택하세요</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-center bg-custom-light-gray">이름</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="text-center bg-custom-light-gray">이름</th>
                            <td><span class="text-warning fw-bold fs-5">23405</span> <input type="text" class="ml-2 mr-2"> 왼쪽의 보안코드를 입력하세요.</td>
                        </tr>
                        <tr>
                            <td colspan=2>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </td>
                        </tr>
                        <tr class="border-end border-start border-bottom">
                            <td colspan=2 class="text-center"><button class="btn bg-custom-gray text-white fw-bold">확 인</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- end content -->
        <?php include "footer.php" ?>
        <script src="assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>