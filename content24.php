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
                        <li class="list-group-item fw-bold" style="border-bottom: 3px solid !important;">개인정보취급방침</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-10 p-5">
                <p class="fw-bold">개인정보보호 규정</p>

                <p class="pt-5 pb-5">HRD에셋 교육원(이하 '교육원 '이라 한다)는 개인정보보호법 제30조에 따라 훈련생 및 임직원의 개인정보를 보호하고 이와 관련한 고충을 신속하고 원활하게 처리할 수 있도록 하기 위하여 개인정보보호규정을 시행한다.</p>

                <p>제1조(목적) 이 규정은 HRD에셋 교육원(이하 "교육원"이라 한다)의 개인정보호호에 관한 사항을 규정함을 목적으로 한다.</p>
                <p class="pb-3">제2조(처리하는 개인정보 항목) 교육원은 훈련생과 임직원에 대해 다음의 개인정보를 처리한다.</p>
                <table class="table table-borderless">
                    <thead class="table-secondary border-top border-dark">
                        <tr>
                            <th scope="col" class="text-center">구분</th>
                            <th scope="col" class="text-center">처리항목</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-bottom">
                            <th scope="row" rowspan="2" class="align-middle text-center border-end">훈련생</th>
                            <td><span class="pl-5">성명, 주민등록번호, 주소, 전화번호, 이메일 주소</span></td>
                        </tr>
                        <tr class="border-bottom">
                            <td><span class="pl-5">훈련과정 이수 및 평가에 관한 사항</span></td>
                        </tr>
                        <tr class="border-bottom">
                            <th scope="row" rowspan="2" class="align-middle text-center border-end">훈련전담 인력</th>
                            <td><span class="pl-5">교육원 소정양식의 이력서상의 개인정보, 인사기록카드</span></td>
                        </tr>
                        <tr class="border-bottom">
                            <td><span class="pl-5">훈련승인업무를 위한 학력증명, 자격, 경력사항, 통장사본, 주민등록증 사본 등</span></td>
                        </tr>
                    </tbody>
                </table>

                <p class="pt-3 pb-3">제3조(동의서) 교육원은 훈련생과 임직원에 대해 개인정보처리를 위해 다음의 동의서를 징수한다.</p>

                <table class="table table-borderless">
                    <thead class="table-secondary border-top border-dark">
                        <tr>
                            <th scope="col" class="text-center">구분</th>
                            <th scope="col" class="text-center">개인정보 처리주체</th>
                            <th scope="col" class="text-center">처리항목</th>
                            <th scope="col" class="text-center">비고</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-bottom text-center">
                            <td>훈련생</td>
                            <td>교육원</td>
                            <td>개인정보수집, 이용동의서</td>
                            <td>별지1호 서식</td>
                        </tr>
                        <tr class="border-bottom text-center">
                            <td>산업체담당</td>
                            <td>교육원</td>
                            <td>개인정보수집, 이용동의서</td>
                            <td>별지2호 서식</td>
                        </tr>
                        <tr class="border-bottom text-center">
                            <td>임직원</td>
                            <td>교육원</td>
                            <td>개인정보수집활용 및 제3자 제공동의서</td>
                            <td>별지3호 서식</td>
                        </tr>
                    </tbody>
                </table>
                <p>[주요 내용]</p>
                <p>-훈련을 위해 필요한 최소한의 개인정보만을 동의를 받아 수집</p>
                <p>-주민등록번호는 원칙적으로 수집 금지</p>
                <p>-동의하지 않을 수 있다는 사실과 불이익을 명시하여 동의</p>
                <p>-훈련을 위한 목적 외로 개인정보를 이용할 수 없으며, 제3자에게 개인정보를 제공하지 않도록 주의</p>
                <li class="text-center p-2"></li>
                <li class="text-center p-2"></li>
                <li class="text-center p-2"></li>
            </div>
        </div>
        <!-- end content -->
        <?php include "footer.php" ?>
        <script src="assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>